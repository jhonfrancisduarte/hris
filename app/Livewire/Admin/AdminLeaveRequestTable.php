<?php

namespace App\Livewire\Admin;

use App\Models\LeaveCredits;
use App\Models\LeaveCreditsCalculation;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\LeaveApplication;
use App\Models\VacationLeaveDetails;
use App\Models\SickLeaveDetails;

class AdminLeaveRequestTable extends Component
{
    use WithPagination;

    public $showApproveModal = false;
    public $showDisapproveModal = false;
    public $selectedApplication;
    public $status;
    public $otherReason;
    public $days;
    public $disapproveReason;
    public $balance;
    public $approvedStartDate;
    public $approvedEndDate;

    protected $rules = [
        'status' => 'required_if:showApproveModal,true',
        'otherReason' => 'required_if:status,Other|string',
        'days' => 'required_if:status,With Pay,Without Pay|numeric|min:1',
        'approvedStartDate' => 'required_if:status,With Pay|date',
        'approvedEndDate' => 'required_if:status,With Pay|date|after_or_equal:approvedStartDate',
        'disapproveReason' => 'required_if:showDisapproveModal,true'
    ];

    public function openApproveModal($applicationId)
    {
        $this->selectedApplication = LeaveApplication::find($applicationId);
        $this->reset(['status', 'otherReason', 'days', 'approvedStartDate', 'approvedEndDate']);
        $this->showApproveModal = true;
    }

    public function openDisapproveModal($applicationId)
    {
        $this->selectedApplication = LeaveApplication::find($applicationId);
        $this->reset(['disapproveReason']);
        $this->showDisapproveModal = true;
    }

    public function closeApproveModal()
    {
        $this->showApproveModal = false;
        $this->resetVariables();
    }

    public function closeDisapproveModal()
    {
        $this->showDisapproveModal = false;
        $this->resetVariables();
    }

    public function updateStatus()
    {
        if ($this->status === 'With Pay') {
            $this->validate([
                'status' => 'required',
                'days' => 'required|numeric|min:1',
                'approvedStartDate' => 'required|date',
                'approvedEndDate' => 'required|date|after_or_equal:approvedStartDate',
            ]);

            // Validate leave balance
            if (!$this->validateLeaveBalance($this->days)) {
                // Stop further processing if validation fails
                return;
            }
        } else {
            $this->validate([
                'status' => 'required',
                'days' => 'required|numeric|min:1',
            ]);
        }

        if ($this->selectedApplication) {
            if ($this->status === 'Other') {
                $this->validate([
                    'status' => 'required',
                    'otherReason' => 'required',
                ]);
                $this->selectedApplication->status = "Other";
                $this->selectedApplication->remarks = $this->otherReason;
            } else {
                $this->selectedApplication->status = $this->status === 'With Pay' ? 'Approved' : 'Approved';
                $this->selectedApplication->approved_days = $this->days;
                $this->selectedApplication->approved_start_date = $this->approvedStartDate;
                $this->selectedApplication->approved_end_date = $this->approvedEndDate;
                $this->selectedApplication->remarks = $this->status === 'With Pay' ? 'With Pay' : 'Without Pay';
                $this->updateLeaveDetails($this->days, $this->status);
            }

            $this->selectedApplication->save();

            // $this->dispatch('notify', [
            //     'message' => "Leave application {$this->status} successfully!",
            //     'type' => 'success'
            // ]);

            $this->dispatch('swal', [
                'title' => "Leave application {$this->status} successfully!",
                'icon' => 'success'
            ]);

            $this->closeApproveModal();
        }
    }

    public function disapproveLeave()
    {
        $this->validate([
            'disapproveReason' => 'required'
        ]);

        if ($this->selectedApplication) {
            $this->selectedApplication->status = "Disapproved";
            $this->selectedApplication->remarks = $this->disapproveReason;
            $this->selectedApplication->approved_days = 0;
            $this->selectedApplication->save();

            // $this->dispatch('notify', [
            //     'message' => "Leave application disapproved for reason: {$this->disapproveReason}!",
            //     'type' => 'error'
            // ]);

            $this->dispatch('swal', [
                'title' => "Leave application disapproved for reason: {$this->disapproveReason}!",
                'icon' => 'success'
            ]);

            $this->closeDisapproveModal();
        }
    }

    public function render()
    {
        $leaveApplications = LeaveApplication::orderBy('created_at', 'desc')
            ->select('id', 'name', 'date_of_filing', 'type_of_leave', 'details_of_leave', 'number_of_days', 'start_date', 'end_date', 'file_name', 'file_path', 'status', 'remarks', 'approved_days')
            ->paginate(10);

        $vacationLeaveDetails = VacationLeaveDetails::orderBy('created_at', 'desc')->paginate(10);

        $sickLeaveDetails = SickLeaveDetails::orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.admin.admin-leave-request-table', [
            'leaveApplications' => $leaveApplications,
            'vacationLeaveDetails' => $vacationLeaveDetails,
            'sickLeaveDetails' => $sickLeaveDetails,
        ]);
    }

    public function resetVariables()
    {
        $this->status = null;
        $this->otherReason = null;
        $this->days = null;
        $this->approvedStartDate = null;
        $this->approvedEndDate = null;
        $this->disapproveReason = null;
    }

    public function validateLeaveBalance($days)
    {
        // Fetch total_credits from LeaveCredits
        $leaveCredits = LeaveCredits::where('user_id', $this->selectedApplication->user_id)->first();
        $totalCredits = $leaveCredits ? $leaveCredits->total_credits : 0;

        $this->balance = $totalCredits;

        // Check if total_credits is sufficient and not less than 1
        if ($this->status === 'With Pay' && ($totalCredits < $days || $totalCredits < 1)) {
            $this->addError('days', "Insufficient leave credits. Total available credits: {$totalCredits}");
            return false;
        }

        return true;
    }

    protected function updateLeaveDetails($days, $status)
    {
        if ($status === 'With Pay') {
            // Update total_credits in leave_credits
            $user_id = $this->selectedApplication->user_id;
            $leaveCredits = LeaveCredits::where('user_id', $user_id)->first();
            if ($leaveCredits) {
                $leaveCredits->total_credits -= $days;
                $leaveCredits->save();
            }

            // Update leave_credits_earned in LeaveCreditsCalculation
            $month = date('m', strtotime($this->selectedApplication->start_date));
            $year = date('Y', strtotime($this->selectedApplication->start_date));

            $leaveCreditsCalculation = LeaveCreditsCalculation::where('user_id', $user_id)
                ->where('month', $month)
                ->where('year', $year)
                ->first();

            if ($leaveCreditsCalculation) {
                $leaveCreditsCalculation->leave_credits_earned -= $days;
                $leaveCreditsCalculation->save();
            }
        }

        // Update status in VacationLeaveDetails and SickLeaveDetails
        if (in_array('Vacation Leave', explode(',', $this->selectedApplication->type_of_leave))) {
            $vacationLeaveDetails = VacationLeaveDetails::where('application_id', $this->selectedApplication->id)->first();
            if ($vacationLeaveDetails) {
                $vacationLeaveDetails->less_this_application = $status === 'Pending' ? 1 : 0;
                $vacationLeaveDetails->status = $status === 'Pending' ? 'Pending' : 'Approved';
                $vacationLeaveDetails->save();
            }
        }

        if (in_array('Sick Leave', explode(',', $this->selectedApplication->type_of_leave))) {
            $sickLeaveDetails = SickLeaveDetails::where('application_id', $this->selectedApplication->id)->first();
            if ($sickLeaveDetails) {
                $sickLeaveDetails->less_this_application = $status === 'Pending' ? 1 : 0;
                $sickLeaveDetails->status = $status === 'Pending' ? 'Pending' : 'Approved';
                $sickLeaveDetails->save();
            }
        }
    }
}


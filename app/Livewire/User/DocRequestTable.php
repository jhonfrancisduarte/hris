<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\DocRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocRequestTable extends Component
{
    public $documentType;
    public $availableDocumentTypes = [
        'employment' => 'Certificate of Employment',
        'employmentCompensation' => 'Certificate of Employment with Compensation',
        'leaveCredits' => 'Certificate of Leave Credits',
        'ipcrRatings' => 'Certificate of IPCR Ratings',
    ];

    public function requestDocument()
    {
        $this->validate([
            'documentType' => 'required',
        ]);

        DocRequest::create([
            'user_id' => Auth::id(),
            'document_type' => $this->documentType,
            'date_requested' => now(),
            'status' => 'pending',
        ]);

        session()->flash('message', 'Document request submitted successfully.');
        $this->documentType = null;
    }

    public function downloadDocument($id)
    {
        $request = DocRequest::find($id);

        if (!$request || !$request->file_path) {
            session()->flash('error', 'Document not found.');
            return;
        }

        if (Storage::disk('public')->exists($request->file_path)) {
            return response()->download(Storage::disk('public')->path($request->file_path), $request->filename);
        } else {
            session()->flash('error', 'File not found on the server.');
        }
    }

    public function getRequestsProperty()
    {
        return DocRequest::where('user_id', Auth::id())->orderBy('date_requested', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.user.doc-request-table', [
            'requests' => $this->requests,
        ]);
    }
}

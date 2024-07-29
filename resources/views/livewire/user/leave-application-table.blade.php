<div x-data="{ open: false }" class="w-full">
    <button wire:click="openLeaveForm"
        class="btn bg-emerald-200 dark:bg-emerald-500 hover:bg-emerald-600 text-gray-800 dark:text-white whitespace-nowrap mx-2 mb-2">
        Apply for Leave
    </button>

    {{-- <button wire:click="openLeaveForm"
        class="btn bg-emerald-200 dark:bg-emerald-500 hover:bg-emerald-600 text-gray-800 dark:text-white whitespace-nowrap mx-2 mb-2">
        See Status of Application
    </button> --}}

    {{-- Leave Application Table --}}
    <div class="w-full flex justify-center">
        <div class="w-full bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-md">
            <h1 class="text-lg font-bold text-center text-black dark:text-white mb-6">Leave Application</h1>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-gray-800 overflow-hidden">
                    <thead class="bg-gray-200 dark:bg-gray-700 rounded-xl">
                        <tr class="whitespace-nowrap">
                            <th scope="col" class="px-4 py-2 text-center">Date of Filing</th>
                            <th scope="col" class="px-4 py-2 text-center">Type of Leave</th>
                            <th scope="col" class="px-4 py-2 text-center">Details of Leave</th>
                            <th scope="col" class="px-4 py-2 text-center">Number of days</th>
                            <th scope="col" class="px-4 py-2 text-center">Start Date</th>
                            <th scope="col" class="px-4 py-2 text-center">End Date</th>
                            <th class="px-4 py-2 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leaveApplications as $leaveApplication)
                        <tr class="whitespace-nowrap">
                            <td class="px-4 py-2 text-center">{{ $leaveApplication->date_of_filing }}</td>
                            <td class="px-4 py-2 text-center">{{ $leaveApplication->type_of_leave }}</td>
                            <td class="px-4 py-2 text-center">{{ $leaveApplication->details_of_leave }}</td>
                            <td class="px-4 py-2 text-center">{{ $leaveApplication->number_of_days }}</td>
                            <td class="px-4 py-2 text-center">{{ $leaveApplication->start_date }}</td>
                            <td class="px-4 py-2 text-center">{{ $leaveApplication->end_date }}</td>
                            <td class="px-4 py-2 text-center">
                                <span
                                    class="inline-block px-3 py-1 text-sm font-semibold 
                                {{ str_starts_with($leaveApplication->status, 'Approved') ? 'text-green-800 bg-green-200' : 
                                (str_starts_with($leaveApplication->status, 'Disapproved') ? 'text-red-800 bg-red-200' : 'text-yellow-800 bg-yellow-200') }} rounded-full">
                                    {{ $leaveApplication->status }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-5 border-t border-neutral-500 dark:border-neutral-200">
                {{ $leaveApplications->links() }}
            </div>

        </div>
    </div>

    <div class="w-full flex justify-center mt-4 grid grid-cols-2 gap-2">
        <div class="w-full bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-md">
            <h1 class="text-lg font-bold text-center text-black dark:text-white mb-6">Details of Action on Application
                (Vacation Leave)
            </h1>

            {{-- <div class="mb-4">
                <label for="month-selector" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Select
                    Month:</label>
                <select id="month-selector" wire:model.live="selectedMonth"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach(range(1, 12) as $month)
                    <option value="{{ str_pad($month, 2, '0', STR_PAD_LEFT) }}" {{ str_pad($month, 2, '0' ,
                        STR_PAD_LEFT)==($selectedMonth ?? now()->format('m')) ? 'selected' : '' }}>
                        {{ \DateTime::createFromFormat('!m', $month)->format('F') }}
                    </option>
                    @endforeach
                </select>
            </div> --}}

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-gray-800 overflow-hidden">
                    <thead class="bg-gray-200 dark:bg-gray-700 rounded-xl">
                        <tr class="whitespace-nowrap">
                            {{-- <th scope="col" class="px-4 py-2 text-center">Date</th> --}}
                            <th scope="col" class="px-4 py-2 text-center">Total Earned</th>
                            <th scope="col" class="px-4 py-2 text-center">Less this Application</th>
                            <th scope="col" class="px-4 py-2 text-center">Balance</th>
                            <th scope="col" class="px-4 py-2 text-center">Month</th>
                            <th scope="col" class="px-4 py-2 text-center">Total Late</th>
                            <th scope="col" class="px-4 py-2 text-center">Earned Credits</th>
                            <th scope="col" class="px-4 py-2 text-center">Total Earned Credits</th>
                            <th scope="col" class="px-4 py-2 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leaveApplications as $leaveApplication)
                        @foreach($leaveApplication->vacationLeaveDetails as $details)
                        <tr class="whitespace-nowrap">
                            {{-- <td class="px-4 py-2 text-center">{{ $details->created_at->format('F j, Y') }}</td>
                            --}}
                            <td class="px-4 py-2 text-center">{{ $details->total_earned }}</td>
                            <td class="px-4 py-2 text-center">{{ $details->less_this_application }}</td>
                            <td class="px-4 py-2 text-center">{{ $details->balance }}</td>
                            <td class="px-4 py-2 text-center">{{ $details->month }}</td>
                            <td class="px-4 py-2 text-center">{{ $leaveApplication->totalLateHours }}</td>
                            <td class="px-4 py-2 text-center"></td>
                            <td class="px-4 py-2 text-center"></td>
                            <td class="px-4 py-2 text-center">
                                <span
                                    class="inline-block px-3 py-1 text-sm font-semibold 
                                {{ str_starts_with($leaveApplication->status, 'Approved') ? 'text-green-800 bg-green-200' : 
                                (str_starts_with($leaveApplication->status, 'Disapproved') ? 'text-red-800 bg-red-200' : 'text-yellow-800 bg-yellow-200') }} rounded-full">
                                    {{ $leaveApplication->status }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-full bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-md">
            <h1 class="text-lg font-bold text-center text-black dark:text-white mb-6">Details of Action on Application
                (Sick Leave)
            </h1>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-gray-800 overflow-hidden">
                    <thead class="bg-gray-200 dark:bg-gray-700 rounded-xl">
                        <tr class="whitespace-nowrap">
                            <th scope="col" class="px-4 py-2 text-center">Total Earned</th>
                            <th scope="col" class="px-4 py-2 text-center">Less this Application</th>
                            <th scope="col" class="px-4 py-2 text-center">Balance</th>
                            {{-- <th scope="col" class="px-4 py-2 text-center">Recommendation</th> --}}
                            <th scope="col" class="px-4 py-2 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leaveApplications as $leaveApplication)
                        @foreach($leaveApplication->sickLeaveDetails as $details)
                        <tr class="whitespace-nowrap">
                            <td class="px-4 py-2 text-center">{{ $details->total_earned }}</td>
                            <td class="px-4 py-2 text-center">{{ $details->less_this_application }}</td>
                            <td class="px-4 py-2 text-center">{{ $details->balance }}</td>
                            {{-- <td class="px-4 py-2 text-center">{{ $details->recommendation }}</td> --}}
                            <td class="px-4 py-2 text-center">
                                <span
                                    class="inline-block px-3 py-1 text-sm font-semibold 
                                {{ str_starts_with($leaveApplication->status, 'Approved') ? 'text-green-800 bg-green-200' : 
                                (str_starts_with($leaveApplication->status, 'Disapproved') ? 'text-red-800 bg-red-200' : 'text-yellow-800 bg-yellow-200') }} rounded-full">
                                    {{ $leaveApplication->status }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="w-full flex justify-center mt-4 grid grid-cols-2 gap-2">
        <div class="w-full bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-md">
            <h1 class="text-lg font-bold text-center text-black dark:text-white mb-6">Leave Credits
            </h1>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-gray-800 overflow-hidden">
                    <thead class="bg-gray-200 dark:bg-gray-700 rounded-xl">
                        <tr class="whitespace-nowrap">
                            {{-- <th scope="col" class="px-4 py-2 text-center">Date</th> --}}
                            <th scope="col" class="px-4 py-2 text-center">Total Earned</th>
                            <th scope="col" class="px-4 py-2 text-center">Total Leave Credits</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="whitespace-nowrap">
                            <td class="px-4 py-2 text-center">{{ $vacationLeaveDetails->leave_credits_earned ?? 'N/A' }}
                            </td>
                            <td class="px-4 py-2 text-center">{{ $vacationLeaveDetails->balance ?? 'N/A' }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- Leave Application Form --}}
    <x-modal id="applyForLeave" maxWidth="5xl" wire:model="applyForLeave">
        <div class="p-4">
            <div class="bg-slate-800 rounded-t-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                Basic Information
            </div>

            <div class="border p-4">
                <form>
                    <div class="gap-4">
                        <div class="gap-2 columns-1 w-full">
                            <label for="surname"
                                class="block text-sm font-medium text-gray-700 dark:text-slate-100">Fullname</label>
                            <input type="text" id="surname" wire:model='name' disabled
                                class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700">
                        </div>

                        <div class="gap-2 lg:columns-2 sm:columns-1 mt-2">
                            <label for="office_or_department"
                                class="block text-sm font-medium text-gray-700 dark:text-slate-100">Office/Department</label>
                            <input type="text" id="office_or_department" wire:model="office_or_department"
                                class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700">
                            @error('office_or_department') <span class="text-red-500 text-sm">This field is
                                required!</span>
                            @enderror

                            <label for="date_of_filing"
                                class="block text-sm font-medium text-gray-700 dark:text-slate-100">Date of
                                Filing</label>
                            <input type="date" id="date_of_filing" wire:model="date_of_filing" disabled
                                class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:bg-gray-100">
                        </div>

                        <div class="gap-2 lg:columns-2 sm:columns-1 mt-2">
                            <label for="position"
                                class="block text-sm font-medium text-gray-700 dark:text-slate-100">Position</label>
                            <input type="text" id="position" wire:model="position"
                                class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700">
                            @error('position') <span class="text-red-500 text-sm">This field is required!</span>
                            @enderror

                            <label for="salary"
                                class="block text-sm font-medium text-gray-700 dark:text-slate-100">Salary</label>
                            <input type="number" id="salary" wire:model="salary"
                                class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700">
                            @error('salary') <span class="text-red-500 text-sm">This field is required!</span>
                            @enderror
                        </div>

                    </div>
                </form>
            </div>

            {{-- Form fields --}}
            <div class="bg-gray-800 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                Details of Application
            </div>

            <div class="border p-4 grid grid-cols-2 gap-4">

                {{-- A. --}}
                <div class="col-span-2 sm:col-span-1">
                    {{-- A. --}}
                    <fieldset class="border border-gray-300 p-4 rounded-lg overflow-hidden w-full">
                        <legend class="text-gray-700 dark:text-slate-100">A. Type of Leave to be availed of</legend>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Vacation Leave" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Vacation Leave</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Mandatory/Forced Leave" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Mandatory/Forced Leave</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Sick Leave" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Sick Leave</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Maternity Leave" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Maternity Leave</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Paternity Leave" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Paternity Leave</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Special Privilege Leave" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Special Privilege Leave</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Solo Parent Leave" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Solo Parent Leave</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Study Leave" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Study Leave</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="10-Day VAWC Leave" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">10-Day VAWC Leave</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Rehabilitation Privilege" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Rehabilitation Privilege</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Special Leave Benefits for Women" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Special Leave Benefits for
                                Women</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Special Emergency (Calamity) Leave"
                                wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Special Emergency (Calamity)
                                Leave</label>
                        </div>
                        <div class="gap-2 columns-1">
                            <input type="checkbox" value="Adoption Leave" wire:model="type_of_leave">
                            <label class="text-md text-gray-700 dark:text-slate-100">Adoption Leave</label>
                        </div>
                        @error('type_of_leave') <span class="text-red-500 text-sm">Please choose one!</span>
                        @enderror
                    </fieldset>

                    {{-- C. --}}
                    <fieldset class="border border-gray-300 p-4 rounded-lg overflow-hidden w-full mt-2">
                        <legend class="text-gray-700 dark:text-slate-100">C. Number of Working Days Applied for</legend>
                        <div class="w-full p-3 bg-slate-100 rounded-lg shadow-sm dark:bg-gray-700">
                            <div class="gap-2 columns-1">
                                <label class="text-sm text-gray-700 dark:text-slate-100">Days</label>
                                <input type="number" id="number_of_days" wire:model="number_of_days"
                                    class="mt-1 p-2 block w-1/2 shadow-sm text-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700 w-full">
                                @error('number_of_days') <span class="text-red-500 text-sm">This field is
                                    required!</span>
                                @enderror
                            </div>
                            <div class="gap-2 columns-1 mt-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-slate-100">Start
                                    date</label>
                                <input type="date" id="start_date" wire:model="start_date"
                                    class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:bg-gray-100">
                                @error('start_date') <span class="text-red-500 text-sm">Please set a start date!</span>
                                @enderror
                                <label class="block text-sm font-medium text-gray-700 dark:text-slate-100 mt-2">End
                                    date</label>
                                <input type="date" id="end_date" wire:model="end_date"
                                    class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:bg-gray-100">
                                @error('end_date') <span class="text-red-500 text-sm">Please set an end date!</span>
                                @enderror
                            </div>
                        </div>
                    </fieldset>

                    {{-- D. --}}
                    <fieldset class="border border-gray-300 p-4 rounded-lg overflow-hidden w-full mt-2">
                        <legend class="text-gray-700 dark:text-slate-100">D. Commutation</legend>
                        <div class="flex items-center">
                            <input type="radio" id="not_requested" value="Not Requested" wire:model="commutation">
                            <label for="not_requested" class="ml-2 text-md text-gray-700 dark:text-slate-100">Not
                                Requested</label>
                        </div>
                        <div class="flex items-center mt-2">
                            <input type="radio" id="requested" value="Requested" wire:model="commutation">
                            <label for="requested"
                                class="ml-2 text-md text-gray-700 dark:text-slate-100">Requested</label>
                        </div>
                        @error('commutation') <span class="text-red-500 text-sm">Please choose one!</span>
                        @enderror
                    </fieldset>
                </div>

                {{-- B. --}}
                <div class="col-span-2 sm:col-span-1">
                    <fieldset class="border border-gray-300 p-4 rounded-lg overflow-hidden w-full">
                        <legend class="text-gray-700 dark:text-slate-100">B. Details of Leave</legend>
                        <label class="text-md text-gray-700 dark:text-slate-100">(Note: Please fill up the
                            corresponding
                            fields.)</label>
                        <div
                            class="w-full p-3 bg-slate-100 rounded-lg shadow-sm dark:bg-gray-700 max-h-60 overflow-y-auto mt-2">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white italic bg-red-400 pl-1">
                                In case
                                of
                                Vacation/Special Privilege Leave:</h6>
                            <div class="grid grid-cols-1 gap-4">
                                <div class="gap-2 columns-1">
                                    <input type="checkbox" class="ml-1" value="Within the Philippines"
                                        wire:model="details_of_leave">
                                    <label class="text-md text-gray-700 dark:text-slate-100">Within the
                                        Philippines</label>
                                    <input type="text" id="within_the_ph" wire:model="philippines"
                                        class="mt-2 p-2 block w-1/2 shadow-sm text-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700 w-full">
                                </div>
                                <div class="gap-2 columns-1">
                                    <input type="checkbox" class="ml-1" value="Abroad" wire:model="details_of_leave">
                                    <label class="text-md text-gray-700 dark:text-slate-100">Abroad
                                        (Specify)</label>
                                    <input type="text" id="abroad_value" wire:model="abroad"
                                        class="mt-2 p-2 block w-1/2 shadow-sm text-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700 w-full">
                                </div>
                            </div>
                        </div>

                        <div
                            class="w-full p-3 bg-slate-100 rounded-lg shadow-sm dark:bg-gray-700 max-h-60 overflow-y-auto mt-4">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white italic bg-red-400 pl-1">In
                                case
                                of
                                Sick Leave:</h6>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="gap-2 columns-1">
                                    <input type="checkbox" class="ml-1" value="In Hospital"
                                        wire:model="details_of_leave">
                                    <label class="text-md text-gray-700 dark:text-slate-100">In Hospital (Special
                                        Illness)</label>
                                    <input type="text" id="in_hospital" wire:model="inHospital"
                                        class="mt-2 p-2 block w-1/2 shadow-sm text-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700 w-full">
                                </div>
                                <div class="gap-2 columns-1">
                                    <input type="checkbox" class="ml-1" value="Out Patient"
                                        wire:model="details_of_leave">
                                    <label class="text-md text-gray-700 dark:text-slate-100">Out Patient (Special
                                        Illness)</label>
                                    <input type="text" id="out_patient" wire:model="outPatient"
                                        class="mt-2 p-2 block w-1/2 shadow-sm text-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700 w-full">
                                </div>
                            </div>
                        </div>

                        <div
                            class="w-full p-3 bg-slate-100 rounded-lg shadow-sm dark:bg-gray-700 max-h-60 overflow-y-auto mt-4">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white italic bg-red-400 pl-1">In
                                case
                                of
                                Special
                                Leave Benefits for Women:</h6>
                            <div class="gap-2 columns-1">
                                <input type="checkbox" class="ml-1" value="Women Special Illness"
                                    wire:model="details_of_leave">
                                <label class="text-md text-gray-700 dark:text-slate-100">(Special
                                    Illness)</label>
                                <input type="text" id="women_leave" wire:model="specialIllnessForWomen"
                                    class="mt-2 p-2 block w-1/2 shadow-sm text-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700">
                            </div>
                        </div>

                        <div
                            class="w-full p-3 bg-slate-100 rounded-lg shadow-sm dark:bg-gray-700 max-h-60 overflow-y-auto mt-4">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white italic bg-red-400 pl-1">In
                                case
                                of
                                Study Leave:</h6>
                            <div class="gap-2 columns-1">
                                <input type="checkbox" class="ml-1" value="Completion of Masters Degree"
                                    wire:model="details_of_leave">
                                <label class="text-md text-gray-700 dark:text-slate-100">Completion of Master's
                                    Degree</label>
                            </div>
                            <div class="gap-2 columns-1 mt-4">
                                <input type="checkbox" class="ml-1" value="BAR/Board Examination Review"
                                    wire:model="details_of_leave">
                                <label class="text-md text-gray-700 dark:text-slate-100">BAR/Board Examination
                                    Review</label>
                            </div>
                        </div>

                        <div
                            class="w-full p-3 bg-slate-100 rounded-lg shadow-sm dark:bg-gray-700 max-h-60 overflow-y-auto mt-4">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white italic bg-red-400 pl-1">
                                Other
                                purpose:
                            </h6>
                            <div class="gap-2 columns-1">
                                <input type="checkbox" class="ml-1" value="Monetization of Leave Credits"
                                    wire:model="details_of_leave">
                                <label class="text-md text-gray-700 dark:text-slate-100">Monetization of Leave
                                    Credits</label>
                            </div>
                            <div class="gap-2 columns-1 mt-4">
                                <input type="checkbox" class="ml-1" value="Terminal Leave"
                                    wire:model="details_of_leave">
                                <label class="text-md text-gray-700 dark:text-slate-100">Terminal Leave</label>
                            </div>
                        </div>
                        @error('details_of_leave') <span class="text-red-500 text-sm">This field is required!</span>
                        @enderror
                    </fieldset>
                </div>

                {{-- C. --}}
                {{-- <div class="col-span-2 sm:col-span-1">

                </div> --}}

                {{-- D. --}}
                {{-- <div class="col-span-2 sm:col-span-1">

                </div> --}}

                <!-- File upload section -->
                <div class="flex flex-col items-center justify-center w-full col-span-2">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <i class="bi bi-cloud-arrow-up" style="font-size: 2rem;"></i>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                    to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF</p>
                        </div>
                        <input id="dropzone-file" type="file" wire:model="files" multiple class="hidden" />
                    </label>

                    <!-- Display selected files -->
                    @if ($files)
                    <div class="mt-4">
                        <ul class="list-disc list-inside">
                            @foreach ($files as $file)
                            <li class="text-sm text-gray-700 dark:text-gray-300">
                                {{ $file->getClientOriginalName() }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @error('files.*') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>


            </div>

            <div class="bg-gray-800 dark:bg-gray-200 p-2 text-white flex justify-center rounded-b-lg border">
                <button wire:click="submitLeaveApplication" role="status"
                    class="btn bg-emerald-200 dark:bg-emerald-500 hover:bg-emerald-600 text-gray-800 dark:text-white whitespace-nowrap mx-2">
                    Submit
                </button>
                <button wire:click="closeLeaveForm" class="mr-2 bg-gray-500 text-white px-4 py-2 rounded mx-2">
                    Close
                </button>
            </div>
        </div>
    </x-modal>


</div>
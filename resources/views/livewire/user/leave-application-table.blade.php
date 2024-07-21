<div x-data="{ open: false }" class="w-full">
    <button wire:click="openLeaveForm"
        class="btn bg-emerald-200 dark:bg-emerald-500 hover:bg-emerald-600 text-gray-800 dark:text-white whitespace-nowrap mx-2">
        Apply for Leave
    </button>

    {{-- Form --}}
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
                                <label class="text-md text-gray-700 dark:text-slate-100">Days</label>
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
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white italic">In case of
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
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white italic">In case of
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
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white italic">In case of
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
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white italic">In case of
                                Study Leave:</h6>
                            <div class="gap-2 columns-1">
                                <input type="checkbox" class="ml-1" value="Completion of Master's Degree"
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
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white italic">Other purpose:
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

            </div>

            <div class="bg-gray-800 dark:bg-gray-200 p-2 text-white flex justify-center rounded-b-lg border">
                <button wire:click="submitLeaveApplication" role="status"
                    class="btn bg-emerald-200 dark:bg-emerald-500 hover:bg-emerald-600 text-gray-800 dark:text-white whitespace-nowrap mx-2">
                    Submit
                </button>
                <button wire:click="closeLeaveForm"
                    class="btn bg-emerald-200 dark:bg-emerald-500 hover:bg-emerald-600 text-gray-800 dark:text-white whitespace-nowrap mx-2">
                    Close
                </button>
            </div>
        </div>
    </x-modal>
</div>
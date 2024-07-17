<div class="p-10 flex justify-center w-full">
    <div class="w-full">
        <div class="flex items-center justify-end">
            <!-- Filter Dropdown -->
            <div class="relative inline-block text-left">
                <button wire:click="toggleDropdown"
                    class="mr-4 inline-flex items-center justify-center px-4 py-2 mb-4 text-sm font-medium tracking-wide text-neutral-800 dark:text-neutral-200 transition-colors duration-200 border rounded-lg border-neutral-500 dark:border-neutral-200 hover:bg-slate-900 dark:hover:bg-slate-100 hover:text-slate-100 dark:hover:text-slate-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none"
                    type="button">
                    Filter by category
                    <i class="bi bi-chevron-down w-4 h-4 ml-2"></i>
                </button>
                @if($dropdownOpen)
                <div class="absolute z-20 w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Category</h6>
                    <ul class="space-y-2 text-sm">
                        {{-- <li class="flex items-center">
                            <input id="name" type="checkbox" wire:model="filters.name" class="h-4 w-4">
                            <label for="name" class="ml-2 text-gray-900 dark:text-gray-300">Name</label>
                        </li> --}}
                        <li class="flex items-center">
                            <input id="date_of_birth" type="checkbox" wire:model.live="filters.date_of_birth"
                                class="h-4 w-4">
                            <label for="date_of_birth" class="ml-2 text-gray-900 dark:text-gray-300">Birth Date</label>
                        </li>
                        <li class="flex items-center">
                            <input id="place_of_birth" type="checkbox" wire:model.live="filters.place_of_birth"
                                class="h-4 w-4">
                            <label for="place_of_birth" class="ml-2 text-gray-900 dark:text-gray-300">Birth
                                Place</label>
                        </li>
                        <li class="flex items-center">
                            <input id="sex" type="checkbox" wire:model.live="filters.sex" class="h-4 w-4">
                            <label for="sex" class="ml-2 text-gray-900 dark:text-gray-300">Sex</label>
                        </li>
                        <li class="flex items-center">
                            <input id="citizenship" type="checkbox" wire:model.live="filters.citizenship"
                                class="h-4 w-4">
                            <label for="citizenship" class="ml-2 text-gray-900 dark:text-gray-300">Citizenship</label>
                        </li>
                        <li class="flex items-center">
                            <input id="civil_status" type="checkbox" wire:model.live="filters.civil_status"
                                class="h-4 w-4">
                            <label for="civil_status" class="ml-2 text-gray-900 dark:text-gray-300">Civil Status</label>
                        </li>
                        <li class="flex items-center">
                            <input id="height" type="checkbox" wire:model.live="filters.height" class="h-4 w-4">
                            <label for="height" class="ml-2 text-gray-900 dark:text-gray-300">Height</label>
                        </li>
                        <li class="flex items-center">
                            <input id="weight" type="checkbox" wire:model.live="filters.weight" class="h-4 w-4">
                            <label for="weight" class="ml-2 text-gray-900 dark:text-gray-300">Weight</label>
                        </li>
                        <li class="flex items-center">
                            <input id="blood_type" type="checkbox" wire:model.live="filters.blood_type" class="h-4 w-4">
                            <label for="blood_type" class="ml-2 text-gray-900 dark:text-gray-300">Blood Type</label>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
            <button wire:click="exportUsers"
                class="inline-flex items-center justify-center px-4 py-2 mb-4 text-sm font-medium tracking-wide text-neutral-800 dark:text-neutral-200 transition-colors duration-200 border rounded-lg border-neutral-500 dark:border-neutral-200 hover:bg-slate-900 dark:hover:bg-slate-100 hover:text-slate-100 dark:hover:text-slate-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none"
                type="button">
                Generate
            </button>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block w-full py-2 align-middle">
                    <div class="overflow-hidden border rounded-lg border-neutral-500 dark:border-neutral-200">
                        <div class="overflow-x-auto">
                            <table class="divide-y divide-neutral-500 dark:divide-neutral-200 w-full min-w-full">
                                <thead class="text-neutral-500 dark:text-neutral-200 bg-slate-900 dark:bg-slate-100">
                                    <tr class="text-neutral-200 dark:text-neutral-800">
                                        <th scope="col" class="px-5 py-3 text-sm font-medium text-left uppercase">Name
                                        </th>
                                        @if($filters['date_of_birth'])
                                        <th scope="col" class="px-5 py-3 text-sm font-medium text-left uppercase">Birth
                                            Date</th>
                                        @endif
                                        @if($filters['place_of_birth'])
                                        <th scope="col" class="px-5 py-3 text-sm font-medium text-left uppercase">Birth
                                            Place</th>
                                        @endif
                                        @if($filters['sex'])
                                        <th scope="col" class="px-5 py-3 text-sm font-medium text-left uppercase">Sex
                                        </th>
                                        @endif
                                        @if($filters['citizenship'])
                                        <th scope="col" class="px-5 py-3 text-sm font-medium text-left uppercase">
                                            Citizenship</th>
                                        @endif
                                        @if($filters['civil_status'])
                                        <th scope="col" class="px-5 py-3 text-sm font-medium text-left uppercase">Civil
                                            Status</th>
                                        @endif
                                        @if($filters['height'])
                                        <th scope="col" class="px-5 py-3 text-sm font-medium text-left uppercase">Height
                                        </th>
                                        @endif
                                        @if($filters['weight'])
                                        <th scope="col" class="px-5 py-3 text-sm font-medium text-left uppercase">Weight
                                        </th>
                                        @endif
                                        @if($filters['blood_type'])
                                        <th scope="col" class="px-5 py-3 text-sm font-medium text-left uppercase">Blood
                                            Type</th>
                                        @endif
                                        <th
                                            class="px-5 py-3 text-sm font-medium text-right uppercase sticky right-0 z-10">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-neutral-200 dark:divide-neutral-500">
                                    @foreach($users as $user)
                                    <tr class="text-neutral-800 dark:text-neutral-200">
                                        <td class="px-5 py-4 text-sm font-medium whitespace-nowrap">{{ $user->name }}
                                        </td>
                                        @if($filters['date_of_birth'])
                                        <td class="px-5 py-4 text-sm font-medium whitespace-nowrap">{{
                                            $user->date_of_birth }}</td>
                                        @endif
                                        @if($filters['place_of_birth'])
                                        <td class="px-5 py-4 text-sm font-medium whitespace-nowrap">{{
                                            $user->place_of_birth }}</td>
                                        @endif
                                        @if($filters['sex'])
                                        <td class="px-5 py-4 text-sm font-medium whitespace-nowrap">{{ $user->sex }}
                                        </td>
                                        @endif
                                        @if($filters['citizenship'])
                                        <td class="px-5 py-4 text-sm font-medium whitespace-nowrap">{{
                                            $user->citizenship }}</td>
                                        @endif
                                        @if($filters['civil_status'])
                                        <td class="px-5 py-4 text-sm font-medium whitespace-nowrap">{{
                                            $user->civil_status }}</td>
                                        @endif
                                        @if($filters['height'])
                                        <td class="px-5 py-4 text-sm font-medium whitespace-nowrap">{{ $user->height }}
                                        </td>
                                        @endif
                                        @if($filters['weight'])
                                        <td class="px-5 py-4 text-sm font-medium whitespace-nowrap">{{ $user->weight }}
                                        </td>
                                        @endif
                                        @if($filters['blood_type'])
                                        <td class="px-5 py-4 text-sm font-medium whitespace-nowrap">{{ $user->blood_type
                                            }}</td>
                                        @endif
                                        <td
                                            class="px-5 py-4 text-sm font-medium text-right whitespace-nowrap sticky right-0 z-10">
                                            <button wire:click="showUser({{ $user->id }})"
                                                class="inline-flex items-center justify-center px-4 py-2 -m-5 -mr-2 text-sm font-medium tracking-wide text-neutral-800 dark:text-neutral-200 transition-colors duration-200 border rounded-lg border-neutral-500 dark:border-neutral-200 hover:bg-slate-900 dark:hover:bg-slate-100 hover:text-slate-100 dark:hover:text-slate-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">Show</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="p-5 border-t border-neutral-500 dark:border-neutral-200">
                            {{ $users->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @if($selectedUser)
        <!-- Modal Popup -->
        <div class="fixed z-50 inset-0 overflow-y-auto" x-show="showModal" x-cloak>
            <div class="flex items-end justify-center pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <!-- Background overlay -->
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- Modal panel -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:w-4/5">
                    <!-- Modal content -->
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            {{ $selectedUserData->surname }}'s Profile
                        </h3>
                    </div>
                    <div class="border-t border-gray-200 px-4 sm:p-0">
                        <dl class="sm:divide-y sm:divide-gray-200">
                            <div class="grid grid-cols-2 divide-x">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Full name
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUser->name }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Birth Date
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->date_of_birth }}
                                    </dd>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 divide-x">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Sex at Birth
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->sex }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Citizenship
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->citizenship }}
                                    </dd>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 divide-x">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Email address
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUser->email }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Phone number
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->mobile_number }}
                                    </dd>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 divide-x">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Civil Status
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->civil_status }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Blood Type
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->blood_type }}
                                    </dd>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 divide-x">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Height
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->height }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Weight
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->weight }}
                                    </dd>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 divide-x">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        GSIS ID No.
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->gsis }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        PAGIBIG ID No.
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->pagibig }}
                                    </dd>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 divide-x">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        PhilHealth ID No.
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->philhealth }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        SSS No.
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->sss }}
                                    </dd>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 divide-x">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        TIN No.
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->tin }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Agency Employee No.
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->agency_employee_no }}
                                    </dd>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 divide-x">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Spouse Name
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->spouse_name }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Spouse Birth Date
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->spouse_birth_date }}
                                    </dd>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 divide-x">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Children's Names
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $childrenNames ?? 'No children recorded' }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Children's Birth Dates
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $childrenBirthDates ?? 'No birth dates recorded' }}
                                    </dd>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 divide-x">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Fathers Name
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->fathers_name }}
                                    </dd>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Mothers Maiden Name
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $selectedUserData->mothers_maiden_name }}
                                    </dd>
                                </div>
                            </div>

                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Permanent Address
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $p_full_address }}
                                </dd>
                            </div>

                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Residential Address
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $r_full_address }}
                                </dd>
                            </div>
                        </dl>
                    </div>

                    <div class="w-full text-black text-center border-t border-gray-200">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Educational Background
                            </h3>
                        </div>
                        <div class="border-t border-gray-200 px-4 sm:p-0">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="grid grid-cols-2 divide-x">
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Name of School
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $selectedUserData->name_of_school }}
                                        </dd>
                                    </div>
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-xs font-medium text-gray-500">
                                            Highest Educational Attainment
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $selectedUserData->educ_background }}
                                        </dd>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 divide-x">
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Degree
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $selectedUserData->degree }}
                                        </dd>
                                    </div>
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Year Graduated
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $selectedUserData->year_graduated }}
                                        </dd>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 divide-x">
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Period of Attendance (Start)
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $selectedUserData->period_start_date }}
                                        </dd>
                                    </div>
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Period of Attendance (End)
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{ $selectedUserData->period_end_date }}
                                        </dd>
                                    </div>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <div class="px-4 py-3 sm:px-6">
                        <button wire:click="closeUserProfile" class="text-blue-600 hover:text-blue-700">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
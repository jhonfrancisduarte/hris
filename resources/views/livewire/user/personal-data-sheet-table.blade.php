<div class="w-full">

    {{-- Main Display --}}
    <div class="flex justify-center w-full">
        <div class="overflow-x-auto w-full sm:w-4/5 bg-white rounded-2xl p-3 shadow dark:bg-gray-800">

            <div class="pt-4 pb-4">
                <h1 class="text-3xl font-bold text-center text-slate-800 dark:text-white">PERSONAL DATA SHEET</h1>
            </div>

            <style>
                @media (max-width: 1024px){
                    .custom-d{
                        display: block;
                    }
                }

                @media (max-width: 768px){
                    .m-scrollable{
                        width: 100%;
                        overflow-x: scroll;
                    }
                }

                @media (min-width:1024px){
                    .custom-p{
                        padding-bottom: 14px !important;
                    }
                }

                @-webkit-keyframes spinner-border {
                    to {
                        transform: rotate(360deg);
                    }
                }

                @keyframes spinner-border {
                    to {
                        transform: rotate(360deg);
                    }
                }

                .spinner-border {
                    display: inline-block;
                    width: 1rem;
                    height: 1rem;
                    vertical-align: text-bottom;
                    border: 2px solid currentColor;
                    border-right-color: transparent;
                    border-radius: 50%;
                    -webkit-animation: spinner-border .75s linear infinite;
                    animation: spinner-border .75s linear infinite;
                    color: white;
                }
            </style>

            <div class="overflow-hidden text-sm pb-3">

                {{-- Employee's Data --}}
                <div class="bg-gray-400 dark:bg-slate-300 p-2 text-gray-50 dark:text-slate-900 font-bold rounded-t-lg">I. PERSONAL INFORMATION
                    <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right pt-1 cursor-pointer" wire:click="toggleEditPersonalInfo"></i>
                </div>
                <div>

                    <div class="custom-d flex w-full">

                        <div class="w-full sm:w-2/4 block">
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Surname</p>
                                <p class="border border-gray-200 dark:border-slate-600 w-full p-1 dark:text-gray-200">{{ $userData->surname }}</p>
                            </div>
                    
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Firstname</p>
                                <p class="border border-gray-200 dark:border-slate-600 w-full p-1 dark:text-gray-200">{{ $userData->first_name }}</p>
                            </div>
                        </div>

                        <div class="w-full sm:w-2/4 block">
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 dark:bg-slate-700 bg-gray-50">Middlename</p>
                                <p class="border border-gray-200 dark:border-slate-600 w-full p-1 dark:text-gray-200">{{ $userData->middle_name }}</p>
                            </div>
                    
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Name Extension</p>
                                <p class="border border-gray-200 dark:border-slate-600 w-full p-1 dark:text-gray-200">{{ $userData->name_extension }}</p>
                            </div>
                        </div>

                    </div>
                    
                    <div class="custom-d flex w-full">

                        <div class="w-full sm:w-2/4 block">
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Date of Birth</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ \Carbon\Carbon::parse($userData->date_of_birth)->format('F d, Y') }}
                                </p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Place of Birth</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->place_of_birth }}</p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Sex at Birth</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->sex }}</p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Civil Status</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->civil_status }}</p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Citizenship</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->citizenship }}</p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Height</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->height }}m</p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Weight</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->weight }}kg</p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Bloodtype</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->blood_type }}</p>
                            </div>
                        </div>

                        <div class="w-full sm:w-2/4 block">
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 px-1 w-3/6 bg-gray-50 dark:bg-slate-700  py-2.5">Permanent Address</p>
                                <p class="custom-p w-full border border-gray-200 dark:border-slate-600 px-1 py-2.5 dark:text-gray-200">
                                    {{ $userData->p_house_street }} <br>
                                    {{ $userData->permanent_selectedBarangay }} {{ $userData->permanent_selectedCity }} <br>
                                    {{ $userData->permanent_selectedProvince }}, Philippines <br>
                                    {{ $userData->permanent_selectedZipcode }}
                                </p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 px-1 w-3/6 bg-gray-50 dark:bg-slate-700  py-2.5">Residential Address</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 px-1 py-2.5 dark:text-gray-200">
                                    {{ $userData->r_house_street }} <br>
                                    {{ $userData->residential_selectedBarangay }} {{ $userData->residential_selectedCity }} <br>
                                    {{ $userData->residential_selectedProvince }}, Philippines <br>
                                    {{ $userData->residential_selectedZipcode }}
                                </p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Tel No.</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->tel_number }}</p>
                            </div>
                        </div>

                    </div>

                    <div class="custom-d flex w-full">

                        <div class="w-full sm:w-2/4 block">
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Mobile No.</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->mobile_number }}</p>
                            </div>
                        </div>

                        <div class="w-full sm:w-2/4 block">
                             <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Email</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="custom-d flex w-full">

                        <div class="w-full sm:w-2/4 block">
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">GSIS ID No.</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->gsis }}</p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Pag-Ibig ID No.</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->pagibig }}</p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">PhilHealth ID No.</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->philhealth }}</p>
                            </div>
                        </div>

                        <div class="w-full sm:w-2/4 block">
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">SSS No.</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->sss }}</p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">TIN No.</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->tin }}</p>
                            </div>
                            <div class="flex w-full sm:w-auto">
                                <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Agency Employee No.</p>
                                <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userData->agency_employee_no }}</p>
                            </div>
                        </div>

                    </div>

                </div>

                {{-- Family Background --}}
                <div class="bg-gray-400 dark:bg-slate-300 p-2 text-gray-50 dark:text-slate-900 font-bold">II. FAMILY BACKGROUND
                </div>
                <div>
                    {{-- Spouse --}}
                    <div class="flex w-full sm:w-auto bg-gray-50 dark:bg-slate-700 border border-gray-200 dark:border-slate-600">
                        <p class="p-1 w-full font-bold dark:text-gray-200">Spouse</p>
                        <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right mt-2  mr-2 cursor-pointer {{ $userSpouse ? '' : 'hidden' }}" wire:click="toggleEditSpouse"></i>
                        <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-2  mr-2 cursor-pointer {{ $userSpouse ? '' : 'hidden' }}" wire:click="toggleDelete('spouse', '')"></i>
                        <i class="fas fa-plus text-green-500 hover:text-green-700 float-right mt-2  mr-2 cursor-pointer {{ $userSpouse ? 'hidden' : '' }}" wire:click="toggleAddSpouse"></i>
                    </div>

                    @if($userSpouse)
                        <div class="custom-d flex w-full">
                            <div class="w-full sm:w-2/4 block">
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Surname</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userSpouse->surname }}</p>
                                </div>
                        
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Firstname</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userSpouse->first_name }}</p>
                                </div>
                            </div>

                            <div class="w-full sm:w-2/4 block">
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Middlename</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userSpouse->middle_name }}</p>
                                </div>
                        
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Name Extension</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userSpouse->name_extension }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="custom-d flex w-full">
                            <div class="w-full sm:w-2/4 block">
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Date of Birth</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ \Carbon\Carbon::parse($userSpouse->birth_date)->format('F d, Y') }}</p>
                                </div>
                        
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Occupation</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userSpouse->occupation }}</p>
                                </div>
                            </div>

                            <div class="w-full sm:w-2/4 block">
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Employer</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userSpouse->employer }}</p>
                                </div>
                        
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Tel. No.</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userSpouse->tel_number }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="custom-d flex w-full">
                            <div class="w-full sm:w-4/4 block">
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 sm:w-1/5 bg-gray-50 dark:bg-slate-700">Business Address</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userSpouse->business_address }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Father --}}
                    <div class="flex w-full sm:w-auto bg-gray-50 dark:bg-slate-700 border border-gray-200 dark:border-slate-600">
                        <p class="p-1 w-full font-bold dark:text-gray-200">Father</p>
                        <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right mt-2  mr-2 cursor-pointer {{ $userFather ? '' : 'hidden' }}" wire:click="toggleEditFather"></i>
                        <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-2  mr-2 cursor-pointer {{ $userFather ? '' : 'hidden' }}" wire:click="toggleDelete('father', '')"></i>
                        <i class="fas fa-plus text-green-500 hover:text-green-700 float-right mt-2  mr-2 cursor-pointer {{ $userFather ? 'hidden' : '' }}" wire:click="toggleAddFather"></i>
                    </div>

                    @if($userFather)
                        <div class="custom-d flex w-full">

                                <div class="w-full sm:w-2/4 block">
                                    <div class="flex w-full sm:w-auto">
                                        <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Surname</p>
                                        <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userFather->surname }}</p>
                                    </div>
                            
                                    <div class="flex w-full sm:w-auto">
                                        <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Firstname</p>
                                        <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userFather->first_name }}</p>
                                    </div>
                                </div>

                                <div class="w-full sm:w-2/4 block">
                                    <div class="flex w-full sm:w-auto">
                                        <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Middlename</p>
                                        <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userFather->middle_name }}</p>
                                    </div>
                            
                                    <div class="flex w-full sm:w-auto">
                                        <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Name Extension</p>
                                        <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userFather->name_extension }}</p>
                                    </div>
                                </div>

                        </div>
                    @endif

                    {{-- Mother's Maiden Name --}}
                    <div class="flex w-full sm:w-auto bg-gray-50 dark:bg-slate-700 border border-gray-200 dark:border-slate-600">
                        <p class="p-1 w-full font-bold dark:text-gray-200">Mother's Maiden Name</p>
                        <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right mt-2  mr-2 cursor-pointer {{ $userMother ? '' : 'hidden' }}" wire:click="toggleEditMother"></i>
                        <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-2  mr-2 cursor-pointer {{ $userMother ? '' : 'hidden' }}" wire:click="toggleDelete('mother', '')"></i>
                        <i class="fas fa-plus text-green-500 hover:text-green-700 float-right mt-2  mr-2 cursor-pointer {{ $userMother ? 'hidden' : '' }}" wire:click="toggleAddMother"></i>
                    </div>

                    @if($userMother)
                        <div class="custom-d flex w-full">

                                <div class="w-full sm:w-2/4 block">
                                    <div class="flex w-full sm:w-auto">
                                        <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Surname</p>
                                        <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userMother->surname }}</p>
                                    </div>
                            
                                    <div class="flex w-full sm:w-auto">
                                        <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Firstname</p>
                                        <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userMother->first_name }}</p>
                                    </div>
                                </div>

                                <div class="w-full sm:w-2/4 block">
                                    <div class="flex w-full sm:w-auto">
                                        <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Middlename</p>
                                        <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userMother->middle_name }}</p>
                                    </div>
                            
                                    <div class="flex w-full sm:w-auto">
                                        <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Name Extension</p>
                                        <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $userMother->name_extension }}</p>
                                    </div>
                                </div>

                        </div>
                    @endif

                    {{-- Children --}}
                    <div class="flex w-full sm:w-auto bg-gray-50 dark:bg-slate-700 border border-gray-200 dark:border-slate-600">
                        <p class="p-1 w-full font-bold dark:text-gray-200">Children</p>
                        @if ($userChildren && $userChildren->isNotEmpty())
                            <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right mt-2 mr-2 cursor-pointer" wire:click="toggleEditChildren"></i>
                        @endif
                        <i class="fas fa-plus text-green-500 hover:text-green-700 float-right mt-2  mr-2 cursor-pointer" wire:click="toggleAddChildren"></i>
                    </div>

                    @if($userChildren)
                        @foreach ($userChildren as $child)
                            <div class="custom-d flex w-full">

                                <div class="w-full sm:w-2/4 block">
                                    <div class="flex w-full sm:w-auto">
                                        <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Fullname</p>
                                        <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $child->childs_name }}</p>
                                    </div>
                                </div>

                                <div class="w-full sm:w-2/4 block">
                                    <div class="flex w-full sm:w-auto">
                                        <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Date of Birth</p>
                                        <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ \Carbon\Carbon::parse($child->childs_birth_date)->format('F d, Y') }}
                                            <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-1  mr-1 cursor-pointer" wire:click="toggleDelete('child', {{ $child->id }})"></i>
                                        </p>
                                    </div>
                                </div>
                                                    
                            </div>
                        @endforeach
                    @endif

                </div>

                {{-- Educational Background --}}
                <div class="bg-gray-400 dark:bg-slate-300 p-2 text-gray-50 dark:text-slate-900 font-bold {{ $educBackground && $educBackground->isNotEmpty() ? '' : 'border-b-2 border-gray-200 dark:border-slate-600' }}">III. EDUCATIONAL BACKGROUND
                    <i class="fas fa-plus text-green-300 dark:text-green-600 hover:text-green-700 float-right pt-1 cursor-pointer" wire:click="toggleAddEducBackground"></i>
                    @if ($educBackground && $educBackground->isNotEmpty())
                        <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right pt-1 mr-2 cursor-pointer" wire:click="toggleEditEducBackground"></i>
                    @endif
                </div>
                <div>
                    @foreach ($educBackground as $educ)
                        <div class="flex w-full sm:w-auto">
                            <p class="border border-gray-200 dark:border-slate-600 p-1 w-1/7 bg-gray-200 font-bold dark:bg-slate-700 dark:text-gray-200">Level</p>
                            <p class="w-full border border-gray-200 dark:border-slate-600 p-1 font-bold uppercase dark:text-gray-200">{{ $educ->level }}
                                <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-1  mr-1 cursor-pointer" wire:click="toggleDelete('educ', {{ $educ->id }})"></i>
                            </p>
                        </div>
                        <div class="custom-d flex w-full">

                            <div class="w-full sm:w-2/4 block">
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Name of School</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $educ->name_of_school }}</p>
                                </div>
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Period of Attendance</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">
                                        From: {{ $educ->from }} <br>
                                        To: {{ $educ->to }}
                                    </p>
                                </div>
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Scholarship/Academic Honors Received</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $educ->award }}</p>
                                </div>
                            </div>

                            <div class="w-full sm:w-2/4 block">
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Basic Education/<br>Degree/Course</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $educ->basic_educ_degree_course }}</p>
                                </div>
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Highest Level/<br>Units Earned</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $educ->highest_level_unit_earned }}</p>
                                </div>
                                <div class="flex w-full sm:w-auto">
                                    <p class="border border-gray-200 dark:border-slate-600 p-1 w-3/6 bg-gray-50 dark:bg-slate-700">Year Graduated</p>
                                    <p class="w-full border border-gray-200 dark:border-slate-600 p-1 dark:text-gray-200">{{ $educ->year_graduated }}</p>
                                </div>
                            </div>
                                                
                        </div>
                    @endforeach
                </div>

                {{-- Civil Service Eligibility --}}
                <div class="bg-gray-400 dark:bg-slate-300 p-2 text-gray-50 dark:text-slate-900 font-bold {{ $eligibility && $eligibility->isNotEmpty() ? '' : 'border-b-2 border-gray-200 dark:border-slate-600' }}">IV. CIVIL SERVICE ELIGIBILITY
                    <i class="fas fa-plus text-green-300 dark:text-green-600 hover:text-green-700 float-right pt-1 cursor-pointer" wire:click="toggleAddEligibility"></i>
                    @if ($eligibility && $eligibility->isNotEmpty())
                        <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right pt-1 mr-2 cursor-pointer" wire:click="toggleEditEligibility"></i>
                    @endif
                </div>

                @if ($eligibility && $eligibility->isNotEmpty())
                    <div class="m-scrollable">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-slate-700">
                                    <th class="p-1 font-medium text-left uppercase border-2 border-gray-200 dark:border-slate-600">Eligibility</th>
                                    <th class="p-1 font-medium text-left uppercase border-2 border-gray-200 dark:border-slate-600">Rating</th>
                                    <th class="p-1 font-medium text-left uppercase border-2 border-gray-200 dark:border-slate-600">Date of Examination/Confernment</th>
                                    <th class="p-1 font-medium text-left uppercase border-2 border-gray-200 dark:border-slate-600">Place of Examination/Confernment</th>
                                    <th class="p-1 font-medium text-left uppercase border-2 border-gray-200 dark:border-slate-600">License Number</th>
                                    <th width="20%" class="p-1 font-medium text-left uppercase border-2 border-gray-200 dark:border-slate-600">Date of Validity</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach($eligibility as $elig)
                                    <tr class="dark:text-gray-200">
                                        <td class="p-1 border-2 border border-gray-200 dark:border-slate-600 text-left">{{ $elig->eligibility }}</td>
                                        <td class="p-1 border-2 border border-gray-200 dark:border-slate-600 text-left">{{ $elig->rating }}%</td>
                                        <td class="p-1 border-2 border border-gray-200 dark:border-slate-600 text-left">{{ \Carbon\Carbon::parse($elig->date)->format('F d, Y') }}</td>
                                        <td class="p-1 border-2 border border-gray-200 dark:border-slate-600 text-left">{{ $elig->place_of_exam }}</td>
                                        <td class="p-1 border-2 border border-gray-200 dark:border-slate-600 text-left">{{ $elig->license }}</td>
                                        <td class="p-1 border-2 border border-gray-200 dark:border-slate-600 text-left">{{ \Carbon\Carbon::parse($elig->date_of_validity)->format('F d, Y') }}
                                            <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-1  mr-1 cursor-pointer" wire:click="toggleDelete('elig', {{ $elig->id }})"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

                {{-- Work Experience --}}
                <div class="bg-gray-400 dark:bg-slate-300 p-2 text-gray-50 dark:text-slate-900 font-bold {{ $workExperience && $workExperience->isNotEmpty() ? '' : 'border-b-2 border-gray-200 dark:border-slate-600' }}">V. WORK EXPERIENCE
                    <i class="fas fa-plus text-green-300 dark:text-green-600 hover:text-green-700 float-right pt-1 cursor-pointer" wire:click="toggleAddWorkExp"></i>
                    @if ($workExperience && $workExperience->isNotEmpty())
                        <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right pt-1 mr-2 cursor-pointer" wire:click="toggleEditWorkExp"></i>
                    @endif
                </div>

                @if ($workExperience && $workExperience->isNotEmpty())
                    <div class="m-scrollable">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-slate-700">
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase w-1/5"  width="20%">
                                        <div class="block w-full">
                                            <div class=" flex justify-center w-full">
                                                INCLUSIVE DATES
                                            </div>
                                            <div class="flex w-full">
                                                <div class="flex justify-center border border-gray-200 dark:border-slate-600 p-1 w-2/4">
                                                    From
                                                </div>
                                                <div class="flex justify-center border border-gray-200 dark:border-slate-600 p-1 w-2/4">
                                                    To
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase">Position Title</th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase">Department/Agency/Office/Company</th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase">Monthly Salary</th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase">Status of Appointment</th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase">GOV'T SERVICE</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach($workExperience as $exp)
                                    <tr class="text-neutral-800 dark:text-neutral-200">
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left w-1/5">
                                            <div class="flex w-full">
                                                <div class="flex justify-center border-r border-r-gray-300 p-1 w-2/4">
                                                    {{ $exp->start_date }}
                                                </div>
                                                <div class="flex justify-center border-l border-l-gray-300 p-1 w-2/4">
                                                    {{ $exp->end_date }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left">{{ $exp->position }}</td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left">{{ $exp->department }}</td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left">{{ '₱ ' . number_format($exp->monthly_salary, 2) }}</td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left">{{ $exp->status_of_appointment }}</td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left">{{ $exp->gov_service ? 'Yes' : 'No' }}
                                            <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-1  mr-1 cursor-pointer" wire:click="toggleDelete('exp', {{ $exp->id }})"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

                {{-- Voluntary Work --}}
                <div class="bg-gray-400 dark:bg-slate-300 p-2 text-gray-50 dark:text-slate-900 font-bold {{ $voluntaryWorks && $voluntaryWorks->isNotEmpty() ? '' : 'border-b-2 border-gray-200 dark:border-slate-600' }}">VI. VOLUNTARY WORK
                    <i class="fas fa-plus text-green-300 dark:text-green-600 hover:text-green-700 float-right pt-1 cursor-pointer" wire:click="toggleAddVoluntaryWorks"></i>
                    @if ($voluntaryWorks && $voluntaryWorks->isNotEmpty())
                        <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right pt-1 mr-2 cursor-pointer" wire:click="toggleEditVoluntaryWorks"></i>
                    @endif
                </div>

                @if ($voluntaryWorks && $voluntaryWorks->isNotEmpty())
                    <div class="m-scrollable">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-slate-700">
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase"  width="20%">Name of Organization</th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase">Address of Organization</th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase w-1/5">
                                        <div class="block w-full">
                                            <div class=" flex justify-center w-full">
                                                INCLUSIVE DATES
                                            </div>
                                            <div class="flex w-full">
                                                <div class="flex justify-center border border-gray-200 dark:border-slate-600 p-1 w-2/4">
                                                    From
                                                </div>
                                                <div class="flex justify-center border border-gray-200 dark:border-slate-600 p-1 w-2/4">
                                                    To
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase">Number of Hours</th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase"  width="20%">Position/Nature of Work</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach($voluntaryWorks as $voluntary)
                                    <tr>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left">{{ $voluntary->org_name }}</td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left">{{ $voluntary->org_address }}</td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left w-1/5">
                                            <div class="flex w-full">
                                                <div class="flex justify-center border-r border-r-gray-300 p-1 w-2/4">
                                                    {{ $voluntary->start_date }}
                                                </div>
                                                <div class="flex justify-center border-l border-l-gray-300 p-1 w-2/4">
                                                    {{ $voluntary->end_date }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-sm text-left">{{ $voluntary->no_of_hours }}</td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-sm text-left">{{ $voluntary->position_nature }}
                                            <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-1  mr-1 cursor-pointer" wire:click="toggleDelete('voluntary', {{ $voluntary->id }})"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

                {{-- Learning and Development --}}
                <div class="bg-gray-400 dark:bg-slate-300 p-2 text-gray-50 dark:text-slate-900 font-bold {{ $lds && $lds->isNotEmpty() ? '' : 'border-b-2 border-gray-200 dark:border-slate-600' }}">VII. LEARNING AND DEVELOPMENT
                    <i class="fas fa-plus text-green-300 dark:text-green-600 hover:text-green-700 float-right pt-1 cursor-pointer" wire:click="toggleAddLearnAndDev"></i>
                    @if ($lds && $lds->isNotEmpty())
                        <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right pt-1 mr-2 cursor-pointer" wire:click="toggleEditLearnAndDev"></i> 
                    @endif
                </div>

                @if ($lds && $lds->isNotEmpty())
                    <div class="m-scrollable">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-slate-700">
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:bg-slate-700 font-medium text-left uppercase"  width="20%">Title of Training</th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:bg-slate-700 font-medium text-left uppercase w-1/5">
                                        <div class="block w-full">
                                            <div class=" flex justify-center w-full">
                                                INCLUSIVE DATES
                                            </div>
                                            <div class="flex w-full">
                                                <div class="flex justify-center border border-gray-200 dark:border-slate-600 p-1 w-2/4">
                                                    From
                                                </div>
                                                <div class="flex justify-center border border-gray-200 dark:border-slate-600 p-1 w-2/4">
                                                    To
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:bg-slate-700 font-medium text-left uppercase">Number of Hours</th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:bg-slate-700 font-medium text-left uppercase">Type of LD</th>
                                    <th class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:bg-slate-700 font-medium text-left uppercase"  width="20%">Conducted/Sponsored By</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach($lds as $ld)
                                    <tr class="text-neutral-800 dark:text-neutral-200">
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left">{{ $ld->title }}</td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left w-1/5">
                                            <div class="flex w-full">
                                                <div class="flex justify-center border-r border-r-gray-300 p-1 w-2/4">
                                                    {{ $ld->start_date }}
                                                </div>
                                                <div class="flex justify-center border-l border-l-gray-300 p-1 w-2/4">
                                                    {{ $ld->end_date }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left">{{ $ld->no_of_hours }}</td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left">{{ $ld->type_of_ld }}</td>
                                        <td class="p-1 border-2 border-gray-200 dark:border-slate-600 dark:text-gray-200 text-left">{{ $ld->conducted_by }}
                                            <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-1  mr-1 cursor-pointer" wire:click="toggleDelete('ld', {{ $ld->id }})"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

                {{-- Other Information --}}
                <div class="bg-gray-400 dark:bg-slate-300 p-2 text-gray-50 dark:text-slate-900 font-bold">VIII. OTHER INFORMATION</div>
                
                <div class="m-scrollable">

                    {{-- SKILLS --}}
                    <div class="flex w-full sm:w-auto border-2 border-gray-200 dark:border-slate-600 bg-gray-100 dark:bg-slate-700">
                        <p class="p-1 w-full font-bold">SKILLS</p>
                        @if ($skills && $skills->isNotEmpty())
                            <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right pt-2 pr-1.5 cursor-pointer" wire:click="toggleEditSkills"></i>
                        @endif
                        <i class="fas fa-plus text-green-500 hover:text-green-700 float-right mt-2  mr-2 cursor-pointer" wire:click="toggleAddSkills"></i>
                    </div>

                    <div class="custom-d flex w-full border-r-2 border-l-2 border-gray-200 dark:border-slate-600">
                        <div class="flex w-full sm:w-auto dark:text-gray-200">
                            @foreach ($skills as $skill)
                                <p class="p-1"> • {{ $skill->skill }} </p>
                            @endforeach
                        </div>
                    </div>

                    {{-- Hobbies --}}
                    <div class="flex w-full sm:w-auto border-2 border-gray-200 dark:border-slate-600 bg-gray-100 dark:bg-slate-700">
                        <p class="p-1 w-full font-bold">HOBBIES</p>
                        @if ($hobbies && $hobbies->isNotEmpty())
                            <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right pt-2 pr-1.5 cursor-pointer" wire:click="toggleEditHobbies"></i>
                        @endif
                        <i class="fas fa-plus text-green-500 hover:text-green-700 float-right mt-2  mr-2 cursor-pointer" wire:click="toggleAddHobbies"></i>
                    </div>

                    <div class="custom-d flex w-full border-r-2 border-l-2 border-gray-200 dark:border-slate-600">
                        <div class="flex w-full sm:w-auto dark:text-gray-200">
                            @foreach ($hobbies as $hobby)
                                <p class="p-1"> • {{ $hobby->hobby }} </p>
                            @endforeach
                        </div>
                    </div>

                    {{-- NON-ACADEMIC DISTINCTIONS / RECOGNITION --}}
                    <div class="flex w-full sm:w-auto border-2 border-gray-200 dark:border-slate-600 bg-gray-100 dark:bg-slate-700">
                        <p class="p-1 w-full font-bold">NON-ACADEMIC DISTINCTIONS / RECOGNITION</p>
                        @if ($non_acads_distinctions && $non_acads_distinctions->isNotEmpty())
                            <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right pt-2 pr-1.5 cursor-pointer" wire:click="toggleEditNonAcads"></i>
                        @endif
                        <i class="fas fa-plus text-green-500 hover:text-green-700 float-right mt-2  mr-2 cursor-pointer" wire:click="toggleAddNonAcads"></i>
                    </div>

                    @if ($non_acads_distinctions && $non_acads_distinctions->isNotEmpty())
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-slate-700">
                                    <th class="p-1 border-r-2 border-l-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase" width="20%">Award</th>
                                    <th class="p-1 border-r-2 border-l-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase">Association/ Organization Name</th>
                                    <th class="p-1 border-r-2 border-l-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase"  width="20%">Date Received</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach($non_acads_distinctions as $non_acads_distinction)
                                    <tr class="dark:text-gray-200">
                                        <td class="p-1 border-r-2 border-l-2 border-t-2 border-gray-200 dark:border-slate-600 text-left">{{ $non_acads_distinction->award }}</td>
                                        <td class="p-1 border-r-2 border-l-2 border-t-2 border-gray-200 dark:border-slate-600 text-left">{{ $non_acads_distinction->ass_org_name }}</td>
                                        <td class="p-1 border-r-2 border-l-2 border-t-2 border-gray-200 dark:border-slate-600 text-left">{{ \Carbon\Carbon::parse($non_acads_distinction->date_received)->format('F d, Y') }}
                                            <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-1  mr-1 cursor-pointer" wire:click="toggleDelete('nonacad', {{ $non_acads_distinction->id }})"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                    {{-- MEMBERSHIP IN ASSOCIATION/ORGANIZATION --}}
                    <div class="flex w-full sm:w-auto border-2 border-gray-200 dark:border-slate-600 bg-gray-100 dark:bg-slate-700">
                        <p class="p-1 w-full font-bold">MEMBERSHIP IN ASSOCIATION/ORGANIZATION</p>
                        @if ($assOrgMemberships && $assOrgMemberships->isNotEmpty())
                            <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right pt-2 pr-1.5 cursor-pointer" wire:click="toggleEditMemberships"></i>
                        @endif
                        <i class="fas fa-plus text-green-500 hover:text-green-700 float-right mt-2  mr-2 cursor-pointer" wire:click="toggleAddMemberships"></i>
                    </div>

                    @if ($assOrgMemberships && $assOrgMemberships->isNotEmpty())
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-slate-700">
                                    <th class="p-1 border-r-2 border-l-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase">Association/Organization Name</th>
                                    <th class="p-1 border-r-2 border-l-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase"  width="20%">Position</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach($assOrgMemberships as $assOrgMembership)
                                    <tr class="dark:text-gray-200">
                                        <td class="p-1 border-r-2 border-l-2 border-t-2 border-gray-200 dark:border-slate-600 text-left">{{ $assOrgMembership->ass_org_name }}</td>
                                        <td class="p-1 border-r-2 border-l-2 border-t-2 border-gray-200 dark:border-slate-600 text-left">{{ $assOrgMembership->position }}
                                            <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-1  mr-1 cursor-pointer" wire:click="toggleDelete('membership', {{ $assOrgMembership->id }})"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                    {{-- Character References --}}
                    <div class="flex w-full sm:w-auto border-2 border-gray-200 dark:border-slate-600 bg-gray-100 dark:bg-slate-700">
                        <p class="p-1 w-full font-bold">CHARACTER REFERENCES</p>
                        @if ($references && $references->isNotEmpty())
                            <i class="fas fa-edit text-blue-500 hover:text-blue-700 float-right pt-2 pr-1.5 cursor-pointer" wire:click="toggleEditReferences"></i>
                        @endif
                        <i class="fas fa-plus text-green-500 hover:text-green-700 float-right mt-2  mr-2 cursor-pointer" wire:click="toggleAddReferences"></i>
                    </div>

                    @if ($references && $references->isNotEmpty())
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-slate-700">
                                    <th class="p-1 border-r-2 border-l-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase"  width="20%">Fullname</th>
                                    <th class="p-1 border-r-2 border-l-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase">Address</th>
                                    <th class="p-1 border-r-2 border-l-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase">Tel Number</th>
                                    <th class="p-1 border-r-2 border-l-2 border-gray-200 dark:border-slate-600 font-medium text-left uppercase"  width="20%">Mobile Number</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach($references as $reference)
                                    <tr class="dark:text-gray-200">
                                        <td class="p-1 border-r-2 border-l-2 border-t-2 border-gray-200 dark:border-slate-600 text-left">{{ $reference->firstname }} {{ $reference->middle_initial ? $reference->middle_initial . '.' : '' }} {{ $reference->surname }}</td>
                                        <td class="p-1 border-r-2 border-l-2 border-t-2 border-gray-200 dark:border-slate-600 text-left">{{ $reference->address }}</td>
                                        <td class="p-1 border-r-2 border-l-2 border-t-2 border-gray-200 dark:border-slate-600 text-left">{{ $reference->tel_number }}</td>
                                        <td class="p-1 border-r-2 border-l-2 border-t-2 border-gray-200 dark:border-slate-600 text-left">{{ $reference->mobile_number }}
                                            <i class="fas fa-trash text-red-500 hover:text-red-700 float-right mt-1  mr-1 cursor-pointer" wire:click="toggleDelete('refs', {{ $reference->id }})"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                </div>

                {{-- Footer --}}
                <div class="bg-gray-400 dark:bg-slate-700 p-2 text-white flex justify-center rounded-b-lg">
                    <button class="btn bg-emerald-400 dark:bg-emerald-500 hover:bg-emerald-600 text-white whitespace-nowrap" wire:click='exportPDS' wire:loading.attr='disabled'>
                        <div wire:loading wire:target="exportPDS" style="margin-right: 5px">
                            <div class="spinner-border small text-primary" role="status">
                            </div>
                        </div>
                        <i class="bi bi-file-earmark-arrow-down"></i>&nbsp&nbspExport
                    </button>
                </div>

            </div>

        </div>
    </div>

    {{-- Personal Info Add and Edit Modal --}}
    <x-modal id="personalInfoModal" maxWidth="2xl" wire:model="personalInfo">
        <div class="p-4">
            <div class="bg-slate-800 rounded-t-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                Edit Personal Information
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='savePersonalInfo'>
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="surname" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Surname</label>
                        <input type="text" id="surname" wire:model='surname' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700">
                        @error('surname') 
                            <span class="text-red-500 text-sm">The surname is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Firstname</label>
                        <input type="text" id="first_name" wire:model='first_name' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('first_name') 
                            <span class="text-red-500 text-sm">The firstname is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="middle_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Middlename</label>
                        <input type="text" id="middle_name" wire:model='middle_name' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('middle_name') 
                            <span class="text-red-500 text-sm">The middlename is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="name_extension" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Name Extension</label>
                        <input type="text" id="name_extension" wire:model='name_extension' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('name_extension') 
                            <span class="text-red-500 text-sm">The name extension is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="date_of_birth" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Date of Birth</label>
                        <input type="date" id="date_of_birth" wire:model='date_of_birth' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('date_of_birth') 
                            <span class="text-red-500 text-sm">The date of birth is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="place_of_birth" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Place of Birth</label>
                        <input type="text" id="place_of_birth" wire:model='place_of_birth' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('place_of_birth') 
                            <span class="text-red-500 text-sm">The place of birth is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="sex" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Sex at Birth</label>
                        <input type="text" id="sex" wire:model='sex' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('sex') 
                            <span class="text-red-500 text-sm">The sex is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="civil_status" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Civil Status</label>
                        <select wire:model='civil_status' class="mt-1 px-2 pt-2 pb-2.5 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                            <option value=""></option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('civil_status') 
                            <span class="text-red-500 text-sm">The civil status is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="citizenship" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Citizenship</label>
                        <input type="text" id="citizenship" wire:model='citizenship' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('citizenship') 
                            <span class="text-red-500 text-sm">The citizenship is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="height" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Height</label>
                        <input type="number" step="0.01" id="height" wire:model='height' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('height') 
                            <span class="text-red-500 text-sm">The height is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="weight" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Weight</label>
                        <input type="number" step="0.01" id="weight" wire:model='weight' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('weight') 
                            <span class="text-red-500 text-sm">The weight is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="blood_type" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Bloodtype</label>
                        <input type="text" id="blood_type" wire:model='blood_type' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('blood_type') 
                            <span class="text-red-500 text-sm">The bloodtype is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tel_number" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Tel Number</label>
                        <input type="text" id="tel_number" wire:model='tel_number' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('tel_number') 
                            <span class="text-red-500 text-sm">The telephone number is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="mobile_number" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Mobile Number</label>
                        <input type="text" id="mobile_number" wire:model='mobile_number' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('mobile_number') 
                            <span class="text-red-500 text-sm">The mobile number is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Email</label>
                        <input type="email" id="email" wire:model='email' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('email') 
                            <span class="text-red-500 text-sm">The email is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="gsis" class="block text-sm font-medium text-gray-700 dark:text-slate-400">GSIS ID No.</label>
                        <input type="text" id="gsis" wire:model='gsis' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('gsis') 
                            <span class="text-red-500 text-sm">The GSIS ID No. is required!</span> 
                        @enderror
                    </div>                    

                    <div class="col-span-2 sm:col-span-1">
                        <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">SSS ID No.</label>
                        <input type="text" id="first_name" wire:model='sss' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('sss')
                            <span class="text-red-500 text-sm">The SSS ID No. is required!</span>
                        @enderror
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Pag-Ibig ID No.</label>
                        <input type="text" id="first_name" wire:model='pagibig' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('pagibig') 
                            <span class="text-red-500 text-sm">The Pag-IBIG ID No. is required!</span> 
                        @enderror
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">PhilHealth ID No.</label>
                        <input type="text" id="first_name" wire:model='philhealth' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('philhealth') 
                            <span class="text-red-500 text-sm">The Philhealth No. is required!</span> 
                        @enderror
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">TIN ID No.</label>
                        <input type="text" id="tin" wire:model='tin' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('tin') 
                            <span class="text-red-500 text-sm">The TIN ID No. is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-2">
                        <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Agency Employee No.</label>
                        <input type="text" id="agency_employee_no" wire:model='agency_employee_no' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('agency_employee_no') 
                            <span class="text-red-500 text-sm">The Agency Employee No. is required!</span> 
                        @enderror
                    </div>
                    
                    <fieldset class="col-span-2 sm:col-span-2 border border-gray-300 p-4 rounded-lg overflow-hidden w-full">
                        <legend class="px-2"> Permanent Address </legend>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="p_province" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Province</label>
                                <select class="mt-1 px-2 pt-2 pb-2.5 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700"
                                        wire:model='p_province' id="p_province" name="p_province" required>
                                    @if ($pprovinces)
                                        <option value="{{ $p_province }}" style="opacity: .6;">{{ $p_province }}</option>
                                        @foreach ($pprovinces->sortBy('province_description') as $province)
                                            <option value="{{ $province->province_description }}">
                                                {{ $province->province_description }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option value="">Select a region</option>
                                    @endif
                                </select>
                                @error('p_province') 
                                    <span class="text-red-500 text-sm">The province is required!</span> 
                                @enderror
                            </div>
                    
                            <div class="col-span-2 sm:col-span-1">
                                <label for="p_city" class="block text-sm font-medium text-gray-700 dark:text-slate-400">City</label>
                                <select class="mt-1 px-2 pt-2 pb-2.5 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700"
                                        wire:model='p_city' id="p_city" name="p_city" required>
                                    @if ($pcities)
                                        <option value="{{ $p_city }}" style="opacity: .6;">{{ $p_city }}</option>
                                        @foreach ($pcities->sortBy('city_municipality_description') as $city_municipality)
                                            <option value="{{ $city_municipality->city_municipality_description }}">
                                                {{ $city_municipality->city_municipality_description }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option value="">Select a city/municipality</option>
                                    @endif
                                </select>
                                @error('p_city') 
                                    <span class="text-red-500 text-sm">The city is required!</span> 
                                @enderror
                            </div>
                    
                            <div class="col-span-2 sm:col-span-1">
                                <label for="p_barangay" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Barangay</label>
                                <select class="mt-1 px-2 pt-2 pb-2.5 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700"
                                        wire:model='p_barangay' id="p_barangay" name="p_barangay" required>
                                    @if ($pbarangays)
                                        <option value="{{ $p_barangay }}" style="opacity: .6;">{{ $p_barangay }}</option>
                                        @foreach ($pbarangays->sortBy('barangay_description') as $barangay)
                                            <option value="{{ $barangay->barangay_description }}">
                                                {{ $barangay->barangay_description }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option value="">Select a barangay</option>
                                    @endif
                                </select>
                                @error('p_barangay') 
                                    <span class="text-red-500 text-sm">The barangay is required!</span> 
                                @enderror
                            </div>
                    
                            <div class="col-span-2 sm:col-span-1">
                                <label for="p_zipcode" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Zip Code</label>
                                <input type="number" id="p_zipcode" wire:model='p_zipcode' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                @error('p_zipcode') 
                                    <span class="text-red-500 text-sm">The Zip Code is required!</span> 
                                @enderror
                            </div>
                    
                            <div class="col-span-2 sm:col-span-2">
                                <label for="p_house_street" class="block text-sm font-medium text-gray-700 dark:text-slate-400">House | Street | Subdivision</label>
                                <input type="text" id="p_house_street" wire:model='p_house_street' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                @error('p_house_street') 
                                    <span class="text-red-500 text-sm">The House/Street/Subdivision is required!</span> 
                                @enderror
                            </div>
                    
                        </div>
                    </fieldset>

                    <fieldset class="col-span-2 sm:col-span-2 border border-slate-400 p-4 rounded-lg overflow-hidden w-full">
                        <legend class="px-2"> Residential Address </legend>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="surname" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Province</label>
                                <select
                                    class="mt-1 px-2 pt-2 pb-2.5 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700"
                                    wire:model.live="r_province" id="r_province"
                                    name="r_province" required>
                                    @if ($pprovinces)
                                        <option value="{{ $r_province }}" style="opacity: .6;">{{ $r_province }}</option>
                                        @foreach ($pprovinces->sortBy('province_description') as $province)
                                            <option value="{{ $province->province_description }}">
                                                {{ $province->province_description }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option value="">Select a region</option>
                                    @endif
                                </select>
                                @error('r_province') 
                                    <span class="text-red-500 text-sm">The province is required!</span> 
                                @enderror
                            </div>
        
                            <div class="col-span-2 sm:col-span-1">
                                <label for="surname" class="block text-sm font-medium text-gray-700 dark:text-slate-400">City</label>
                                <select
                                    class="mt-1 px-2 pt-2 pb-2.5 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700"
                                    wire:model.live="r_city" id="r_city"
                                    name="r_city" required>
                                    @if ($rcities)
                                        <option value="{{ $r_city }}" style="opacity: .6;">{{ $r_city }}</option>
                                        @foreach ($rcities->sortBy('city_municipality_description') as $city_municipality)
                                            <option value="{{ $city_municipality->city_municipality_description }}">
                                                {{ $city_municipality->city_municipality_description }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option value="">Select a city/municipality</option>
                                    @endif
                                </select>
                                @error('r_city') 
                                    <span class="text-red-500 text-sm">The city is required!</span> 
                                @enderror
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="surname" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Barangay</label>
                                <select
                                    class="mt-1 px-2 pt-2 pb-2.5 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700"
                                    wire:model.live="r_barangay" id="r_barangay"
                                    name="r_barangay" required>
                                    @if ($rbarangays)
                                        <option value="{{ $r_barangay }}" style="opacity: .6;">{{ $r_barangay }}</option>
                                        @foreach ($rbarangays->sortBy('barangay_description') as $barangay)
                                            <option value="{{ $barangay->barangay_description }}">
                                                {{ $barangay->barangay_description }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option value="">Select a barangay</option>
                                    @endif
                                </select>
                                @error('r_barangay') 
                                    <span class="text-red-500 text-sm">The barangay is required</span>
                                @enderror
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Zip Code</label>
                                <input type="number" id="first_name" wire:model='r_zipcode' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                @error('r_zipcode') 
                                    <span class="text-red-500 text-sm">The Zip Code is required!</span> 
                                @enderror
                            </div>
        
                            <div class="col-span-2 sm:col-span-2">
                                <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">House | Street | Subdivision</label>
                                <input type="text" id="first_name" wire:model='r_house_street' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                @error('r_house_street') 
                                    <span class="text-red-500 text-sm">The House/Street/Subdivision is required!</span> 
                                @enderror
                            </div>
                        </div>
                    </fieldset>

                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-2 sm:col-span-2">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="savePersonalInfo" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Spouse's Info Add and Edit Modal --}}
    <x-modal id="spouseModal" maxWidth="2xl" wire:model="editSpouse">
        <div class="p-4">
            <div class="bg-slate-800 rounded-t-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addSpouse ? 'Add' : 'Edit' }} Spouse's Information
                <button @click="show = false" class="float-right focus:outline-none" wire:click='resetVariables'>
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveSpouse'>
                <div class="grid grid-cols-2 gap-4">
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="spouse_surname" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Surname</label>
                        <input type="text" id="spouse_surname" wire:model='spouse_surname' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('spouse_surname') 
                            <span class="text-red-500 text-sm">The surname is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="spouse_first_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Firstname</label>
                        <input type="text" id="spouse_first_name" wire:model='spouse_first_name' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('spouse_first_name')             
                            <span class="text-red-500 text-sm">The firstname is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="spouse_middle_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Middlename</label>
                        <input type="text" id="spouse_middle_name" wire:model='spouse_middle_name' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('spouse_middle_name')
                            <span class="text-red-500 text-sm">The middlename is required!</span>
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="spouse_name_extension" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Name Extension</label>
                        <input type="text" id="spouse_name_extension" wire:model='spouse_name_extension' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('spouse_name_extension') 
                            <span class="text-red-500 text-sm">The name extension is required!</span>
                        @enderror
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="spouse_date_of_birth" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Date</label>
                        <input type="date" id="spouse_date_of_birth" wire:model='spouse_date_of_birth' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('spouse_date_of_birth') 
                            <span class="text-red-500 text-sm">The date is required!</span>
                        @enderror
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="spouse_occupation" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Occupation</label>
                        <input type="text" id="spouse_occupation" wire:model='spouse_occupation' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('spouse_occupation') 
                            <span class="text-red-500 text-sm">The occupation is required!</span>
                        @enderror
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="spouse_employer" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Employer</label>
                        <input type="text" id="spouse_employer" wire:model='spouse_employer' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('spouse_employer') 
                            <span class="text-red-500 text-sm">The employer is required!</span>
                        @enderror
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="spouse_emp_tel_num" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Tel Number</label>
                        <input type="text" id="spouse_emp_tel_num" wire:model='spouse_emp_tel_num' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('spouse_emp_tel_num') 
                            <span class="text-red-500 text-sm">The telephone number is required!</span>
                        @enderror
                    </div>

                    <div class="col-span-2 sm:col-span-2">
                        <label for="spouse_emp_business_address" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Business Address</label>
                        <input type="text" id="spouse_emp_business_address" wire:model='spouse_emp_business_address' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('spouse_emp_business_address') 
                            <span class="text-red-500 text-sm">The business address is required!</span>
                        @enderror
                    </div>
                    
                    
                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-2 sm:col-span-2">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveSpouse" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer" wire:click='resetVariables'>
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Father's Name Add and Edit Modal --}}
    <x-modal id="fatherModal" maxWidth="2xl" wire:model="editFather">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addFather ? 'Add' : 'Edit' }} Father's Name
                <button @click="show = false" class="float-right focus:outline-none" wire:click='resetVariables'>
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveFather'>
                <div class="grid grid-cols-2 gap-4">
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="father_surname" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Surname</label>
                        <input type="text" id="father_surname" wire:model='father_surname' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('father_surname') 
                            <span class="text-red-500 text-sm">The surname is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="father_first_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Firstname</label>
                        <input type="text" id="father_first_name" wire:model='father_first_name' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('father_first_name')             
                            <span class="text-red-500 text-sm">The firstname is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="father_middle_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Middlename</label>
                        <input type="text" id="father_middle_name" wire:model='father_middle_name' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('father_middle_name')
                            <span class="text-red-500 text-sm">The middlename is required!</span>
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="father_name_extension" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Name Extension</label>
                        <input type="text" id="father_name_extension" wire:model='father_name_extension' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('father_name_extension') 
                            <span class="text-red-500 text-sm">The name extension is required!</span>
                        @enderror
                    </div>
                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-2 sm:col-span-2">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveFather" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer" wire:click='resetVariables'>
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Mother's Maiden Name Add and Edit Modal --}}
    <x-modal id="motherModal" maxWidth="2xl" wire:model="editMother">
        <div class="p-4">
            <div class="bg-slate-800 rounded-t-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addMother ? 'Add' : 'Edit' }} Mother's Mainden Name
                <button @click="show = false" class="float-right focus:outline-none" wire:click='resetVariables'>
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveMother'>
                <div class="grid grid-cols-2 gap-4">
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="mother_surname" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Surname</label>
                        <input type="text" id="mother_surname" wire:model='mother_surname' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('mother_surname') 
                            <span class="text-red-500 text-sm">The surname is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="mother_first_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Firstname</label>
                        <input type="text" id="mother_first_name" wire:model='mother_first_name' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('mother_first_name')             
                            <span class="text-red-500 text-sm">The firstname is required!</span> 
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="mother_middle_name" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Middlename</label>
                        <input type="text" id="mother_middle_name" wire:model='mother_middle_name' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('mother_middle_name')
                            <span class="text-red-500 text-sm">The middlename is required!</span>
                        @enderror
                    </div>
                    
                    <div class="col-span-2 sm:col-span-1">
                        <label for="mother_name_extension" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Name Extension</label>
                        <input type="text" id="mother_name_extension" wire:model='mother_name_extension' class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                        @error('mother_name_extension') 
                            <span class="text-red-500 text-sm">The name extension is required!</span>
                        @enderror
                    </div>
                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-2 sm:col-span-2">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveMother" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer" wire:click='resetVariables'>
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Children's Info Add and Edit Modal --}}
    <x-modal id="childrenModal" maxWidth="2xl" wire:model="editChildren">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addChildren ? 'Add' : 'Edit' }} Children's Information
                <button @click="show = false" class="float-right focus:outline-none" wire:click='resetVariables'>
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveChildren'>
                <div class="grid grid-cols-1">
                    
                    @if($addChildren != true)
                        @foreach ($children as $index => $child)
                            <div class="grid grid-cols-2 gap-4 mb-4  mb-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg">
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="childs_name_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Fullname</label>
                                    <input type="text" id="childs_name_{{ $index }}" wire:model="children.{{ $index }}.childs_name" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('children.' . $index . '.childs_name')
                                        <span class="text-red-500 text-sm">The fullname is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="childs_birth_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Date of Birth</label>
                                    <input type="date" id="childs_birth_date_{{ $index }}" wire:model="children.{{ $index }}.childs_birth_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('children.' . $index . '.childs_birth_date')
                                        <span class="text-red-500 text-sm">The date of birth is required!</span>
                                    @enderror
                                </div>
                            </div>
                        @endforeach
                    @else
                        @foreach ($newChildren as $index => $child)
                            <div class="grid grid-cols-2 gap-4 mb-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg">
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="new_childs_name_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Fullname
                                        <i class="fas fa-times flex sm:hidden cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewChild({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="new_childs_name_{{ $index }}" wire:model="newChildren.{{ $index }}.childs_name" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newChildren.' . $index . '.childs_name')
                                        <span class="text-red-500 text-sm">The fullname is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="new_childs_birth_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Date of Birth
                                        <i class="fas fa-times hidden sm:flex cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewChild({{ $index }})"></i>
                                    </label>
                                    <input type="date" id="new_childs_birth_date_{{ $index }}" wire:model="newChildren.{{ $index }}.childs_birth_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newChildren.' . $index . '.childs_birth_date')
                                        <span class="text-red-500 text-sm">The date of birth is required!</span>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <button type="button" wire:click="addNewChild" class="bg-blue-500 hover:bg-blue-700 hover:text-white text-slate-700 dark:text-gray-300 font-bold py-2 px-4 rounded mb-4">
                            Add Child
                        </button>
                    @endif
                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveChildren" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer" wire:click='resetVariables'>
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Educational Background Add and Edit Modal --}}
    <x-modal id="educBackgroundModal" maxWidth="2xl" wire:model="editEducBackground">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addEducBackground ? 'Add' : 'Edit' }} Educational Background 
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveEducationBackground'>
                <div class="grid grid-cols-1">
                    
                    @if($addEducBackground != true)
                        @foreach ($education as $index => $educ)
                            <div class="grid grid-cols-2 gap-4 mb-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg">
                                
                                <div class="col-span-2 sm:col-span-2 mt-3 pt-2 border-b">
                                    <label for="education_level_{{ $index }}" class="block font-bold text-sm text-gray-700 dark:text-slate-300 uppercase">{{ $educ['level'] }}</label>
                                </div>

                                <div class="col-span-2 sm:col-span-2">
                                    <label for="name_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Name of School</label>
                                    <input type="text" id="name_{{ $index }}" wire:model="education.{{ $index }}.name_of_school" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('education.' . $index . '.name_of_school')
                                        <span class="text-red-500 text-sm">The name of school is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="from_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">From</label>
                                    <input type="number" id="from_{{ $index }}" wire:model="education.{{ $index }}.from" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('education.' . $index . '.from')
                                        <span class="text-red-500 text-sm">The start period of attendance is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="to_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">To</label>
                                    <input type="number" id="to_{{ $index }}" wire:model="education.{{ $index }}.to" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('education.' . $index . '.to')
                                        <span class="text-red-500 text-sm">The end period of attendance is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="educ_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Basic Education/Degree/Course</label>
                                    <input type="text" id="educ_{{ $index }}" wire:model="education.{{ $index }}.basic_educ_degree_course" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('education.' . $index . '.basic_educ_degree_course')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="award_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Scholarship/Academic Honors Received</label>
                                    <input type="text" id="award_{{ $index }}" wire:model="education.{{ $index }}.award" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="earned_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Highest Level/Units Earned</label>
                                    <input type="text" id="earned_{{ $index }}" wire:model="education.{{ $index }}.highest_level_unit_earned" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="yearGrad_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Year Graduated</label>
                                    <input type="number" id="yearGrad_{{ $index }}" wire:model="education.{{ $index }}.year_graduated" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('education.' . $index . '.year_graduated')
                                        <span class="text-red-500 text-sm">The year graduated is required!</span>
                                    @enderror
                                </div>
                                
                            </div>
                        @endforeach
                    @else
                        @foreach ($newEducation as $index => $educ)
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg pb-5 mb-3">

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="level_code_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Level
                                        <i class="fas fa-times flex sm:hidden cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewEducation({{ $index }})"></i>
                                    </label>
                                    <select id="level_code_{{ $index }}" wire:model="newEducation.{{ $index }}.level_code" class="mt-1 px-2 pt-2 pb-2.5 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                        <option value=""></option>
                                        <option value="1">Elementary</option>
                                        <option value="2">Secondary</option>
                                        <option value="3">Vocational/Trade Course</option>
                                        <option value="4">College</option>
                                        <option value="5">Graduate Studies</option>
                                    </select>
                                    @error('newEducation.' . $index . '.level_code') 
                                        <span class="text-red-500 text-sm">The level is required!</span> 
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="name_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Name of School
                                        <i class="fas fa-times hidden sm:flex cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewEducation({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="name_{{ $index }}" wire:model="newEducation.{{ $index }}.name_of_school" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newEducation.' . $index . '.name_of_school')
                                        <span class="text-red-500 text-sm">The name of school is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="from_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">From</label>
                                    <input type="number" id="from_{{ $index }}" wire:model="newEducation.{{ $index }}.from" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newEducation.' . $index . '.from')
                                        <span class="text-red-500 text-sm">The start period of attendance is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="to_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">To</label>
                                    <input type="number" id="to_{{ $index }}" wire:model="newEducation.{{ $index }}.to" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newEducation.' . $index . '.to')
                                        <span class="text-red-500 text-sm">The end period of attendance is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="educ_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Basic Education/Degree/Course</label>
                                    <input type="text" id="educ_{{ $index }}" wire:model="newEducation.{{ $index }}.basic_educ_degree_course" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newEducation.' . $index . '.basic_educ_degree_course')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="award_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Scholarship/Academic Honors Received</label>
                                    <input type="text" id="award_{{ $index }}" wire:model="newEducation.{{ $index }}.award" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="earned_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Highest Level/Units Earned</label>
                                    <input type="text" id="earned_{{ $index }}" wire:model="newEducation.{{ $index }}.highest_level_unit_earned" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="yearGrad_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Year Graduated</label>
                                    <input type="number" id="yearGrad_{{ $index }}" wire:model="newEducation.{{ $index }}.year_graduated" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newEducation.' . $index . '.year_graduated')
                                        <span class="text-red-500 text-sm">The year graduated is required!</span>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <button type="button" wire:click="addNewEducation" class="bg-blue-500 hover:bg-blue-700 text-slate-700 hover:text-white dark:text-gray-300 font-bold py-2 px-4 rounded mb-4">
                            Add Education
                        </button>
                    @endif

                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveEducationBackground" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Eligibility Add and Edit Modal --}}
    <x-modal id="eligibilityModal" maxWidth="2xl" wire:model="editEligibility">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addEligibility ? 'Add' : 'Edit' }} Civil Service Eligibility 
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveEligibility'>
                <div class="grid grid-cols-1">
                    
                    @if($addEligibility != true)
                        @foreach ($eligibilities as $index => $elig)
                            <div class="grid grid-cols-2 gap-4 mb-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg">

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="eligibility_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Eligibility</label>
                                    <input type="text" id="eligibility_{{ $index }}" wire:model="eligibilities.{{ $index }}.eligibility" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('eligibilities.' . $index . '.eligibility')
                                        <span class="text-red-500 text-sm">The eligibility is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="rating_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Rating</label>
                                    <input type="number" id="rating_{{ $index }}" wire:model="eligibilities.{{ $index }}.rating" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('eligibilities.' . $index . '.rating')
                                        <span class="text-red-500 text-sm">The rating is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Date of Examination/Confernment</label>
                                    <input type="date" id="date_{{ $index }}" wire:model="eligibilities.{{ $index }}.date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('eligibilities.' . $index . '.date')
                                        <span class="text-red-500 text-sm">The date of exam/confernment is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="place_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Place of Examination/Confernment</label>
                                    <input type="text" id="place_{{ $index }}" wire:model="eligibilities.{{ $index }}.place_of_exam" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('eligibilities.' . $index . '.place_of_exam')
                                        <span class="text-red-500 text-sm">The place of exam/confernment is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="license_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">License Number</label>
                                    <input type="text" id="license_{{ $index }}" wire:model="eligibilities.{{ $index }}.license" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="date_of_validity_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Date of Validity</label>
                                    <input type="date" id="date_of_validity_{{ $index }}" wire:model="eligibilities.{{ $index }}.date_of_validity" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>
                                
                            </div>
                        @endforeach
                    @else
                        @foreach ($newEligibilities as $index => $elig)
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg pb-5 mb-3">

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="eligibility_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Eligibility
                                        <i class="fas fa-times flex sm:hidden cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewEligibility({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="eligibility_{{ $index }}" wire:model="newEligibilities.{{ $index }}.eligibility" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newEligibilities.' . $index . '.eligibility')
                                        <span class="text-red-500 text-sm">The eligibility is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="rating_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Rating
                                        <i class="fas fa-times hidden sm:flex cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewEligibility({{ $index }})"></i>
                                    </label>
                                    <input type="number" id="rating_{{ $index }}" wire:model="newEligibilities.{{ $index }}.rating" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newEligibilities.' . $index . '.rating')
                                        <span class="text-red-500 text-sm">The rating is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Date of Examination/Confernment</label>
                                    <input type="date" id="date_{{ $index }}" wire:model="newEligibilities.{{ $index }}.date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newEligibilities.' . $index . '.date')
                                        <span class="text-red-500 text-sm">The date of exam/confernment is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="place_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Place of Examination/Confernment</label>
                                    <input type="text" id="place_{{ $index }}" wire:model="newEligibilities.{{ $index }}.place_of_exam" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newEligibilities.' . $index . '.place_of_exam')
                                        <span class="text-red-500 text-sm">The place of exam/confernment is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="license_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">License Number</label>
                                    <input type="text" id="license_{{ $index }}" wire:model="newEligibilities.{{ $index }}.license" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="date_of_validity_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Date of Validity</label>
                                    <input type="date" id="date_of_validity_{{ $index }}" wire:model="newEligibilities.{{ $index }}.date_of_validity" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>
                            </div>
                        @endforeach

                        <button type="button" wire:click="addNewEligibility" class="bg-blue-500 hover:bg-blue-700 hover:text-white text-slate-700 dark:text-gray-300 font-bold py-2 px-4 rounded mb-4">
                            Add Eligibility
                        </button>
                    @endif

                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveEligibility" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Work Experience Add and Edit Modal --}}
    <x-modal id="workExpModal" maxWidth="2xl" wire:model="editWorkExp">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addWorkExp ? 'Add' : 'Edit' }} Work Experience 
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveWorkExp'>
                <div class="grid grid-cols-1">
                    
                    @if($addWorkExp != true)
                        @foreach ($workExperiences as $index => $exp)
                            <div class="grid grid-cols-2 gap-4 mb-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg">
    
                                <div class="col-span-2 sm:col-span-2">
                                    <label for="comp_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Department/Agency/Office/Company</label>
                                    <input type="text" id="comp_{{ $index }}" wire:model="workExperiences.{{ $index }}.department" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('workExperiences.' . $index . '.department')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>
    
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="start_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Start Date</label>
                                    <input type="date" id="start_date_{{ $index }}" wire:model="workExperiences.{{ $index }}.start_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('workExperiences.' . $index . '.start_date')
                                        <span class="text-red-500 text-sm">The start date is required!</span>
                                    @enderror
                                </div>
    
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="end_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">End Date</label>
                                    <input type="date" id="end_date_{{ $index }}" wire:model="workExperiences.{{ $index }}.end_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('workExperiences.' . $index . '.end_date')
                                        <span class="text-red-500 text-sm">The end date is required!</span>
                                    @enderror
                                </div>
    
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="position_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Position</label>
                                    <input type="text" id="position_{{ $index }}" wire:model="workExperiences.{{ $index }}.position" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('workExperiences.' . $index . '.position')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>
    
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="status_of_appointment_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Status of Appointment</label>
                                    <input type="text" id="status_of_appointment_{{ $index }}" wire:model="workExperiences.{{ $index }}.status_of_appointment" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>
    
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="monthly_salary_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Monthly Salary</label>
                                    <input type="number" id="monthly_salary_{{ $index }}" wire:model="workExperiences.{{ $index }}.monthly_salary" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>
    
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="gov_service_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Gov't Service</label>
                                    <div class="mt-1 p-2 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700">
                                        <label class="inline-flex items-center">
                                            <input type="radio" id="gov_service_yes_{{ $index }}" wire:model="workExperiences.{{ $index }}.gov_service" value="1" class="form-radio text-green-600">
                                            <span class="ml-2">Yes</span>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" id="gov_service_no_{{ $index }}" wire:model="workExperiences.{{ $index }}.gov_service" value="0" class="form-radio text-green-600">
                                            <span class="ml-2">No</span>
                                        </label>
                                    </div>
                                    @error('workExperiences.' . $index . '.gov_service')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>                            
                                
                            </div>
                        @endforeach
                    @else
                        @foreach ($newWorkExperiences as $index => $exp)
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg pb-5 mb-3">

                                <div class="col-span-2 sm:col-span-2">
                                    <label for="comp_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Department/Agency/Office/Company
                                        <i class="fas fa-times cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewWorkExp({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="comp_{{ $index }}" wire:model="newWorkExperiences.{{ $index }}.department" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newWorkExperiences.' . $index . '.department')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="start_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Start Date</label>
                                    <input type="date" id="start_date_{{ $index }}" wire:model="newWorkExperiences.{{ $index }}.start_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newWorkExperiences.' . $index . '.start_date')
                                        <span class="text-red-500 text-sm">The start date is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="end_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">End Date</label>
                                    <input type="date" id="end_date_{{ $index }}" wire:model="newWorkExperiences.{{ $index }}.end_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newWorkExperiences.' . $index . '.end_date')
                                        <span class="text-red-500 text-sm">The end date is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="position_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Position</label>
                                    <input type="text" id="position_{{ $index }}" wire:model="newWorkExperiences.{{ $index }}.position" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newWorkExperiences.' . $index . '.position')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="status_of_appointment_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Status of Appointment</label>
                                    <input type="text" id="status_of_appointment_{{ $index }}" wire:model="newWorkExperiences.{{ $index }}.status_of_appointment" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="monthly_salary_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Monthly Salary</label>
                                    <input type="number" id="monthly_salary_{{ $index }}" wire:model="newWorkExperiences.{{ $index }}.monthly_salary" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="gov_service_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Gov't Service</label>
                                    <div class="mt-1 p-2 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700">
                                        <label class="inline-flex items-center">
                                            <input type="radio" id="gov_service_yes_{{ $index }}" wire:model="newWorkExperiences.{{ $index }}.gov_service" value="1" class="form-radio text-green-600">
                                            <span class="ml-2">Yes</span>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" id="gov_service_no_{{ $index }}" wire:model="newWorkExperiences.{{ $index }}.gov_service" value="0" class="form-radio text-green-600">
                                            <span class="ml-2">No</span>
                                        </label>
                                    </div>
                                    @error('newWorkExperiences.' . $index . '.gov_service')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>                            

                            </div>
                        @endforeach

                        <button type="button" wire:click="addNewWorkExp" class="bg-blue-500 hover:bg-blue-700 hover:text-white text-slate-700 dark:text-gray-300 font-bold py-2 px-4 rounded mb-4">
                            Add Work Experience
                        </button>
                    @endif
                    

                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveWorkExp" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Voluntary Work Add and Edit Modal --}}
    <x-modal id="voluntaryWorkModal" maxWidth="2xl" wire:model="editVoluntaryWorks">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addVoluntaryWorks ? 'Add' : 'Edit' }} Voluntary Work 
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveVoluntaryWork'>
                <div class="grid grid-cols-1">
                    
                    @if($addVoluntaryWorks != true)
                        @foreach ($voluntaryWork as $index => $work)
                            <div class="grid grid-cols-2 gap-4 mb-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg">

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="name_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Name of Organization</label>
                                    <input type="text" id="name_{{ $index }}" wire:model="voluntaryWork.{{ $index }}.org_name" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('voluntaryWork.' . $index . '.org_name')
                                        <span class="text-red-500 text-sm">The name of organization is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="comp_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Place of Organization</label>
                                    <input type="text" id="comp_{{ $index }}" wire:model="voluntaryWork.{{ $index }}.org_address" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('voluntaryWork.' . $index . '.org_address')
                                        <span class="text-red-500 text-sm">The place of organization is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="start_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Start Date</label>
                                    <input type="date" id="start_date_{{ $index }}" wire:model="voluntaryWork.{{ $index }}.start_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('voluntaryWork.' . $index . '.start_date')
                                        <span class="text-red-500 text-sm">The start date is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="end_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">End Date</label>
                                    <input type="date" id="end_date_{{ $index }}" wire:model="voluntaryWork.{{ $index }}.end_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('voluntaryWork.' . $index . '.end_date')
                                        <span class="text-red-500 text-sm">The end date is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="hours_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Number of Hours</label>
                                    <input type="number" id="hours_{{ $index }}" wire:model="voluntaryWork.{{ $index }}.no_of_hours" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('voluntaryWork.' . $index . '.no_of_hours')
                                        <span class="text-red-500 text-sm">The number of hours is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="position_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Position/Nature of Work</label>
                                    <input type="text" id="position_{{ $index }}" wire:model="voluntaryWork.{{ $index }}.position_nature" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('voluntaryWork.' . $index . '.position_nature')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>            
                                
                            </div>
                        @endforeach
                    @else
                        @foreach ($newVoluntaryWorks as $index => $work)
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg pb-5 mb-3">

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="name_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Name of Organization
                                        <i class="fas fa-times flex sm:hidden cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewVoluntaryWork({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="name_{{ $index }}" wire:model="newVoluntaryWorks.{{ $index }}.org_name" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newVoluntaryWorks.' . $index . '.org_name')
                                        <span class="text-red-500 text-sm">The name of organization is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="comp_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Place of Organization
                                        <i class="fas fa-times hidden sm:flex cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewVoluntaryWork({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="comp_{{ $index }}" wire:model="newVoluntaryWorks.{{ $index }}.org_address" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newVoluntaryWorks.' . $index . '.org_address')
                                        <span class="text-red-500 text-sm">The place of organization is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="start_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Start Date</label>
                                    <input type="date" id="start_date_{{ $index }}" wire:model="newVoluntaryWorks.{{ $index }}.start_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newVoluntaryWorks.' . $index . '.start_date')
                                        <span class="text-red-500 text-sm">The start date is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="end_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">End Date</label>
                                    <input type="date" id="end_date_{{ $index }}" wire:model="newVoluntaryWorks.{{ $index }}.end_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newVoluntaryWorks.' . $index . '.end_date')
                                        <span class="text-red-500 text-sm">The end date is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="hours_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Number of Hours</label>
                                    <input type="number" id="hours_{{ $index }}" wire:model="newVoluntaryWorks.{{ $index }}.no_of_hours" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newVoluntaryWorks.' . $index . '.no_of_hours')
                                        <span class="text-red-500 text-sm">The number of hours is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="position_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Position/Nature of Work</label>
                                    <input type="text" id="position_{{ $index }}" wire:model="newVoluntaryWorks.{{ $index }}.position_nature" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newVoluntaryWorks.' . $index . '.position_nature')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>            
                                
                            </div>
                        @endforeach

                        <button type="button" wire:click="addNewVoluntaryWork" class="bg-blue-500 hover:text-white hover:bg-blue-700 text-slate-700 dark:text-gray-300 font-bold py-2 px-4 rounded mb-4">
                            Add Voluntary Work
                        </button>
                    @endif

                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveVoluntaryWork" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Learning and Development Add and Edit Modal --}}
    <x-modal id="learnDevModal" maxWidth="2xl" wire:model="editLearnDev">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addLearnDev ? 'Add' : 'Edit' }} Learning and Development
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveLearnAndDev'>
                <div class="grid grid-cols-1">
                    
                    @if($addLearnDev != true)
                        @foreach ($learnAndDevs as $index => $learnAndDev)
                            <div class="grid grid-cols-2 gap-4  mb-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg">

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="title_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Title of Training</label>
                                    <input type="text" id="title_{{ $index }}" wire:model="learnAndDevs.{{ $index }}.title" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('learnAndDevs.' . $index . '.title')
                                        <span class="text-red-500 text-sm">The title of training is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="type_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Type of LD</label>
                                    <input type="text" id="type_{{ $index }}" wire:model="learnAndDevs.{{ $index }}.type_of_ld" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('learnAndDevs.' . $index . '.type_of_ld')
                                        <span class="text-red-500 text-sm">The type of ld is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="start_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Start Date</label>
                                    <input type="date" id="start_date_{{ $index }}" wire:model="learnAndDevs.{{ $index }}.start_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('learnAndDevs.' . $index . '.start_date')
                                        <span class="text-red-500 text-sm">The start date is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="end_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">End Date</label>
                                    <input type="date" id="end_date_{{ $index }}" wire:model="learnAndDevs.{{ $index }}.end_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('learnAndDevs.' . $index . '.end_date')
                                        <span class="text-red-500 text-sm">The end date is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="hours_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Number of Hours</label>
                                    <input type="number" id="hours_{{ $index }}" wire:model="learnAndDevs.{{ $index }}.no_of_hours" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('learnAndDevs.' . $index . '.no_of_hours')
                                        <span class="text-red-500 text-sm">The number of hours is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="conducted_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Conducted/Sponsored By</label>
                                    <input type="text" id="conducted_{{ $index }}" wire:model="learnAndDevs.{{ $index }}.conducted_by" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('learnAndDevs.' . $index . '.conducted_by')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>            
                                
                            </div>
                        @endforeach
                    @else
                        @foreach ($newLearnAndDevs as $index => $learnAndDev)
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg pb-5 mb-3">

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="title_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Title of Training
                                        <i class="fas fa-times flex sm:hidden cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewLearnAndDev({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="title_{{ $index }}" wire:model="newLearnAndDevs.{{ $index }}.title" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newLearnAndDevs.' . $index . '.title')
                                        <span class="text-red-500 text-sm">The title of training is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="type_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Type of LD
                                        <i class="fas fa-times hidden sm:flex cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewLearnAndDev({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="type_{{ $index }}" wire:model="newLearnAndDevs.{{ $index }}.type_of_ld" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newLearnAndDevs.' . $index . '.type_of_ld')
                                        <span class="text-red-500 text-sm">The type of ld is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="start_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Start Date</label>
                                    <input type="date" id="start_date_{{ $index }}" wire:model="newLearnAndDevs.{{ $index }}.start_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newLearnAndDevs.' . $index . '.start_date')
                                        <span class="text-red-500 text-sm">The start date is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="end_date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">End Date</label>
                                    <input type="date" id="end_date_{{ $index }}" wire:model="newLearnAndDevs.{{ $index }}.end_date" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newLearnAndDevs.' . $index . '.end_date')
                                        <span class="text-red-500 text-sm">The end date is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="hours_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Number of Hours</label>
                                    <input type="number" id="hours_{{ $index }}" wire:model="newLearnAndDevs.{{ $index }}.no_of_hours" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newLearnAndDevs.' . $index . '.no_of_hours')
                                        <span class="text-red-500 text-sm">The number of hours is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="conducted_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Conducted/Sponsored By</label>
                                    <input type="text" id="conducted_{{ $index }}" wire:model="newLearnAndDevs.{{ $index }}.conducted_by" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newLearnAndDevs.' . $index . '.conducted_by')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>            
                                
                            </div>
                        @endforeach

                        <button type="button" wire:click="addNewLearnAndDev" class="bg-blue-500 hover:text-white hover:bg-blue-700 text-slate-700 dark:text-gray-300 font-bold py-2 px-4 rounded mb-4">
                            Add Training
                        </button>
                    @endif

                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveLearnAndDev" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Skills Add and Edit Modal --}}
    <x-modal id="skillsModal" maxWidth="md" wire:model="editSkills">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addSkills ? 'Add' : 'Edit' }} Skills
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveSkills'>
                <div class="grid grid-cols-1">
                    
                    @if($addSkills != true)
                        @foreach ($mySkills as $index => $skill)
                            <div class="grid grid-cols-1 gap-4">
                                <div class="col-span-1 sm:col-span-1 mb-3">
                                    <label for="skill_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Skill</label>
                                    <input type="text" id="skill_{{ $index }}" wire:model="mySkills.{{ $index }}.skill" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700">
                                    <i class="fas fa-trash cursor-pointer text-red-500 hover:text-red-700 float-right mr-3" wire:click="deleteSkill({{ $skill['id'] }}, {{ $index }})" style="margin-top: -30px"></i>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @foreach ($myNewSkills as $index => $skll)
                            <div class="grid grid-cols-1 gap-4">

                                <div class="col-span-1 sm:col-span-1 mb-3">
                                    <label for="skill_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400"></label>
                                    <input type="text" id="skill_{{ $index }}" wire:model="myNewSkills.{{ $index }}.skill" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    <i class="fas fa-times cursor-pointer text-red-500 hover:text-red-700 float-right mr-3" wire:click="removeNewSkill({{ $index }})" style="margin-top: -30px"></i>
                                </div>
                                
                            </div>
                        @endforeach

                        <button type="button" wire:click="addNewSkill" class="bg-blue-500 hover:text-white hover:bg-blue-700 text-slate-700 dark:text-gray-300 font-bold py-2 px-4 rounded mb-4">
                            Add Skill
                        </button>
                    @endif

                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveSkills" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Hobbies Add and Edit Modal --}}
    <x-modal id="hobbiesModal" maxWidth="md" wire:model="editHobbies">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addHobbies ? 'Add' : 'Edit' }} Hobbies
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveHobbies'>
                <div class="grid grid-cols-1">
                    
                    @if($addHobbies != true)
                        @foreach ($myHobbies as $index => $hbby)
                            <div class="grid grid-cols-1 gap-4">

                                <div class="col-span-1 sm:col-span-1 mb-3">
                                    <label for="hobby_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400"></label>
                                    <input type="text" id="hobby_{{ $index }}" wire:model="myHobbies.{{ $index }}.hobby" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    <i class="fas fa-trash cursor-pointer text-red-500 hover:text-red-700 float-right mr-3" wire:click="deleteHobby({{ $hbby['id'] }}, {{ $index }})" style="margin-top: -30px"></i>
                                </div>
                                
                            </div>
                        @endforeach
                    @else
                        @foreach ($myNewHobbies as $index => $hbby)
                            <div class="grid grid-cols-1 gap-4">

                                <div class="col-span-1 sm:col-span-1 mb-3">
                                    <label for="hobby_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400"></label>
                                    <input type="text" id="hobby_{{ $index }}" wire:model="myNewHobbies.{{ $index }}.hobby" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    <i class="fas fa-times cursor-pointer text-red-500 hover:text-red-700 float-right mr-3" wire:click="removeNewHobby({{ $index }})" style="margin-top: -30px"></i>
                                </div>

                            </div>
                        @endforeach

                        <button type="button" wire:click="addNewHobby" class="bg-blue-500 hover:text-white hover:bg-blue-700 text-slate-700 dark:text-gray-300 font-bold py-2 px-4 rounded mb-4">
                            Add Hobby
                        </button>
                    @endif

                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveHobbies" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Non-Academic Distinction/Recognition Add and Edit Modal --}}
    <x-modal id="nonAcadModal" maxWidth="2xl" wire:model="editNonAcad">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addNonAcad ? 'Add' : 'Edit' }} Non-Academic Distinction/Recognition
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveNonAcad'>
                <div class="grid grid-cols-1">
                    
                    @if($addNonAcad != true)
                        @foreach ($nonAcads as $index => $nonAcad)
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg pb-5 mb-3">

                                <div class="col-span-2 sm:col-span-2">
                                    <label for="award_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Award</label>
                                    <input type="text" id="award_{{ $index }}" wire:model="nonAcads.{{ $index }}.award" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('nonAcads.' . $index . '.award')
                                        <span class="text-red-500 text-sm">The award is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="org_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Association/Organization Name</label>
                                    <input type="text" id="org_{{ $index }}" wire:model="nonAcads.{{ $index }}.ass_org_name" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('nonAcads.' . $index . '.ass_org_name')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Date Received</label>
                                    <input type="date" id="date_{{ $index }}" wire:model="nonAcads.{{ $index }}.date_received" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('nonAcads.' . $index . '.date_received')
                                        <span class="text-red-500 text-sm">The date received is required!</span>
                                    @enderror
                                </div>  
                                
                            </div>
                        @endforeach
                    @else
                        @foreach ($newNonAcads as $index => $nonAcad)
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg pb-5 mb-3">

                                <div class="col-span-2 sm:col-span-2">
                                    <label for="award_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Award
                                        <i class="fas fa-times cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewNonAcad({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="award_{{ $index }}" wire:model="newNonAcads.{{ $index }}.award" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newNonAcads.' . $index . '.award')
                                        <span class="text-red-500 text-sm">The award is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="org_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Association/Organization Name</label>
                                    <input type="text" id="org_{{ $index }}" wire:model="newNonAcads.{{ $index }}.ass_org_name" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newNonAcads.' . $index . '.ass_org_name')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="date_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Date Received</label>
                                    <input type="date" id="date_{{ $index }}" wire:model="newNonAcads.{{ $index }}.date_received" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newNonAcads.' . $index . '.date_received')
                                        <span class="text-red-500 text-sm">The date received is required!</span>
                                    @enderror
                                </div>  
                                
                            </div>
                        @endforeach
                        
                        <button type="button" wire:click="addNewNonAcad" class="bg-blue-500 hover:text-white hover:bg-blue-700 text-slate-700 dark:text-gray-300 font-bold py-2 px-4 rounded mb-4">
                            Add Non-Academic Distinction/Recognition
                        </button>
                    @endif

                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveNonAcad" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Membership in Association/Organization Add and Edit Modal --}}
    <x-modal id="membershipsModal" maxWidth="2xl" wire:model="editMemberships">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addMemberships ? 'Add' : 'Edit' }} Membership in Association/Organization
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveMemberships'>
                <div class="grid grid-cols-1">
                    
                    @if($addMemberships != true)
                        @foreach ($memberships as $index => $member)
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg pb-5 mb-3">

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="ass_org_name_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Association/Organization Name</label>
                                    <input type="text" id="ass_org_name_{{ $index }}" wire:model="memberships.{{ $index }}.ass_org_name" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('memberships.' . $index . '.ass_org_name')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="position_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Position</label>
                                    <input type="text" id="position_{{ $index }}" wire:model="memberships.{{ $index }}.position" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('memberships.' . $index . '.position')
                                        <span class="text-red-500 text-sm">This position is required!</span>
                                    @enderror
                                </div>
                                
                            </div>
                        @endforeach
                    @else
                        @foreach ($newMemberships as $index => $member)
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg pb-5 mb-3">

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="ass_org_name_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Association/Organization Name
                                        <i class="fas fa-times flex sm:hidden cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewMembership({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="ass_org_name_{{ $index }}" wire:model="newMemberships.{{ $index }}.ass_org_name" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newMemberships.' . $index . '.ass_org_name')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="position_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Position
                                        <i class="fas fa-times hidden sm:flex cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewMembership({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="position_{{ $index }}" wire:model="newMemberships.{{ $index }}.position" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('newMemberships.' . $index . '.position')
                                        <span class="text-red-500 text-sm">This position is required!</span>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <button type="button" wire:click="addNewMembership" class="bg-blue-500 hover:text-white hover:bg-blue-700 text-slate-700 dark:text-gray-300 font-bold py-2 px-4 rounded mb-4">
                            Add Membership
                        </button>
                    @endif

                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveMemberships" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Character Reference Add and Edit Modal --}}
    <x-modal id="referenceModal" maxWidth="2xl" wire:model="editReferences">
        <div class="p-4">
            <div class="bg-slate-800 rounded-lg mb-4 dark:bg-gray-200 p-4 text-gray-50 dark:text-slate-900 font-bold">
                {{ $addReferences ? 'Add' : 'Edit' }} Character Reference
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            {{-- Form fields --}}
            <form wire:submit.prevent='saveReferences'>
                <div class="grid grid-cols-1">
                    
                    @if($addReferences != true)
                        @foreach ($myReferences as $index => $refs)
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg pb-5 mb-3">

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="firstname_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Firstname</label>
                                    <input type="text" id="firstname_{{ $index }}" wire:model="myReferences.{{ $index }}.firstname" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myReferences.' . $index . '.firstname')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="middle_initial_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Middle Initial</label>
                                    <input type="text" id="middle_initial_{{ $index }}" wire:model="myReferences.{{ $index }}.middle_initial" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myReferences.' . $index . '.middle_initial')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="surname_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Surname</label>
                                    <input type="text" id="surname_{{ $index }}" wire:model="myReferences.{{ $index }}.surname" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myReferences.' . $index . '.surname')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="address_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Address</label>
                                    <input type="text" id="address_{{ $index }}" wire:model="myReferences.{{ $index }}.address" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myReferences.' . $index . '.address')
                                        <span class="text-red-500 text-sm">This position is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="tel_number_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Tel Number</label>
                                    <input type="text" id="tel_number_{{ $index }}" wire:model="myReferences.{{ $index }}.tel_number" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myReferences.' . $index . '.tel_number')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="mobile_number_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Mobile Number</label>
                                    <input type="number" id="mobile_number_{{ $index }}" wire:model="myReferences.{{ $index }}.mobile_number" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myReferences.' . $index . '.mobile_number')
                                        <span class="text-red-500 text-sm">This position is required!</span>
                                    @enderror
                                </div>
                                
                            </div>
                        @endforeach
                    @else
                        @foreach ($myNewReferences as $index => $refs)
                            <div class="grid grid-cols-2 gap-4 p-2 bg-gray-100 dark:bg-slate-700 rounded-lg pb-5 mb-3">

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="firstname_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Firstname
                                        <i class="fas fa-times flex sm:hidden cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewReference({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="firstname_{{ $index }}" wire:model="myNewReferences.{{ $index }}.firstname" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myNewReferences.' . $index . '.firstname')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="middle_initial_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Middle Initial
                                        <i class="fas fa-times hidden sm:flex cursor-pointer text-red-500 hover:text-red-700 float-right mr-1" wire:click="removeNewReference({{ $index }})"></i>
                                    </label>
                                    <input type="text" id="middle_initial_{{ $index }}" wire:model="myNewReferences.{{ $index }}.middle_initial" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myNewReferences.' . $index . '.middle_initial')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="surname_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Surname</label>
                                    <input type="text" id="surname_{{ $index }}" wire:model="myNewReferences.{{ $index }}.surname" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myNewReferences.' . $index . '.surname')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="address_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Address</label>
                                    <input type="text" id="address_{{ $index }}" wire:model="myNewReferences.{{ $index }}.address" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myNewReferences.' . $index . '.address')
                                        <span class="text-red-500 text-sm">This position is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="tel_number_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Tel Number</label>
                                    <input type="text" id="tel_number_{{ $index }}" wire:model="myNewReferences.{{ $index }}.tel_number" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myNewReferences.' . $index . '.tel_number')
                                        <span class="text-red-500 text-sm">This field is required!</span>
                                    @enderror
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="mobile_number_{{ $index }}" class="block text-sm font-medium text-gray-700 dark:text-slate-400">Mobile Number</label>
                                    <input type="number" id="mobile_number_{{ $index }}" wire:model="myNewReferences.{{ $index }}.mobile_number" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md  dark:text-gray-300 dark:bg-gray-700">
                                    @error('myNewReferences.' . $index . '.mobile_number')
                                        <span class="text-red-500 text-sm">This position is required!</span>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <button type="button" wire:click="addNewReference" class="bg-blue-500 hover:text-white hover:bg-blue-700 text-slate-700 dark:text-gray-300 font-bold py-2 px-4 rounded mb-4">
                            Add Reference
                        </button>
                    @endif

                    
                    {{-- Save and Cancel buttons --}}
                    <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                        <button class="mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            <div wire:loading wire:target="saveReferences" style="margin-bottom: 5px;">
                                <div class="spinner-border small text-primary" role="status">
                                </div>
                            </div>
                            Save
                        </button>
                        <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Cancel
                        </p>
                    </div>

                </div>
            </form>

        </div>
    </x-modal>

    {{-- Delete Modal --}}
    <x-modal id="deleteModal" maxWidth="md" wire:model="delete" centered>
        <div class="p-4">
            <div class="mb-4 text-slate-900 dark:text-gray-100 font-bold">
                Confirm Deletion
                <button @click="show = false" class="float-right focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <label class="block text-sm font-medium text-gray-700 dark:text-slate-300">
                Are you sure you want to delete this {{ $deleteMessage }}?
            </label>
            <form wire:submit.prevent='deleteData'>
                <div class="mt-4 flex justify-end col-span-1 sm:col-span-1">
                    <button class="mr-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        <div wire:loading wire:target="deleteData" style="margin-bottom: 5px;">
                            <div class="spinner-border small text-primary" role="status">
                            </div>
                        </div>
                        Delete
                    </button>
                    <p @click="show = false" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded cursor-pointer">
                        Cancel
                    </p>
                </div>
            </form>

        </div>
    </x-modal>
    
</div>
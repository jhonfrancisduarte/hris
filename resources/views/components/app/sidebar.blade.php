<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div
        class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'"
        aria-hidden="true"
        x-cloak
    ></div>

    <!-- Sidebar -->
    <div
        id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'"
        @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false"
        x-cloak="lg"
    >

        <!-- Sidebar header -->
        <div class="flex justify-between mb-10 pr-3 sm:px-2">
            <!-- Close button -->
            <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button>
            <!-- Logo -->
            <a class="flex items-center" href="{{ route('dashboard') }}" style="margin-left: -5px !important;">
                <img class="size-10 mx-auto" src="/images/hris-logo.png" alt="hris logo">
                <span class="text-white font-bold lg:opacity-0 lg:sidebar-expanded:opacity-100" style="margin-left: 10px">
                    NYC - HRIS
                </span>
            </a>
        </div>

        <!-- Links -->
        <div class="space-y-8">
            <!-- Pages group -->
            <div>
                <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6" aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Pages</span>
                </h3>
                <ul class="mt-3">
                    <!-- Dashboard -->
                    @if(Auth::user()->user_role === 'sa')
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['dashboard'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['dashboard']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['dashboard'])){{ 'hover:text-slate-200' }}@endif" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current @if(in_array(Request::segment(1), ['dashboard'])){{ 'text-indigo-500' }}@else{{ 'text-slate-400' }}@endif" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['dashboard'])){{ 'text-indigo-600' }}@else{{ 'text-slate-600' }}@endif" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['dashboard'])){{ 'text-indigo-200' }}@else{{ 'text-slate-400' }}@endif" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                        </svg>
                                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(1), ['dashboard'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['dashboard'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('dashboard')){{ '!text-indigo-500' }}@endif" href="{{ route('dashboard') }}">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Main</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('analytics')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Analytics</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('fintech')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Fintech</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif

                    <!-- Employees Tabs -->
                    @if(Auth::user()->user_role === 'emp')
                        <!-- Home -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['home'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['home']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['home'])){{ 'hover:text-slate-200' }}@endif" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <i class="bi bi-house-fill"></i>                                    
                                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Home</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <!-- My Records -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['ecommerce'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['ecommerce']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['ecommerce'])){{ 'hover:text-slate-200' }}@endif" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <i class="bi bi-journal-check"></i>
                                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My Records</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(1), ['ecommerce'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['ecommerce'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('customers')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Personal Data Sheet</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('orders')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My Documents</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('invoices')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Eligibility</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('shop')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Work Experience</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- DTR -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['community'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['community']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['community'])){{ 'hover:text-slate-200' }}@endif" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <i class="bi bi-clock"></i>
                                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Daily Time Record</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(1), ['community'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['community'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('users-tabs')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Attendance</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('users-tiles')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Summary</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <!-- Filing and Approval -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['finance'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['finance']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['finance'])){{ 'hover:text-slate-200' }}@endif" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <i class="bi bi-card-checklist"></i>
                                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Filing and Approval</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(1), ['finance'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['finance'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('credit-cards')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Overtime</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('transactions')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Leave</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('transaction-details')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Leave Monetization</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif

                    @if(Auth::user()->user_role === 'sa')
                        <!-- Job Board -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['job'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['job']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['job'])){{ 'hover:text-slate-200' }}@endif" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current @if(in_array(Request::segment(1), ['job'])){{ 'text-indigo-600' }}@else{{ 'text-slate-700' }}@endif" d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['job'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['job'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z" />
                                        </svg>
                                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Job Board</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(1), ['job'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['job'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('job-listing')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Listing</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('job-post')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Job Post</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('company-profile')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Company Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Tasks -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['tasks'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['tasks']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['tasks'])){{ 'hover:text-slate-200' }}@endif" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current @if(in_array(Request::segment(1), ['tasks'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['tasks'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 1h22v23H1z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['tasks'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z" />
                                        </svg>
                                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tasks</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(1), ['tasks'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['tasks'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('tasks-kanban')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Kanban</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('tasks-list')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">List</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Messages -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['messages'])){{ 'bg-slate-900' }}@endif">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['messages'])){{ 'hover:text-slate-200' }}@endif" href="#0">
                                <div class="flex items-center justify-between">
                                    <div class="grow flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current @if(in_array(Request::segment(1), ['messages'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['messages'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z" />
                                        </svg>
                                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Messages</span>
                                    </div>
                                    <!-- Badge -->
                                    <div class="flex flex-shrink-0 ml-2">
                                        <span class="inline-flex items-center justify-center h-5 text-xs font-medium text-white bg-indigo-500 px-2 rounded">4</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Inbox -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['inbox'])){{ 'bg-slate-900' }}@endif">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['inbox'])){{ 'hover:text-slate-200' }}@endif" href="#0">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current @if(in_array(Request::segment(1), ['inbox'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                        <path class="fill-current @if(in_array(Request::segment(1), ['inbox'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                                    </svg>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Inbox</span>
                                </div>
                            </a>
                        </li>
                        <!-- Calendar -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['calendar'])){{ 'bg-slate-900' }}@endif">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['calendar'])){{ 'hover:text-slate-200' }}@endif" href="#0">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M1 3h22v20H1z" />
                                        <path class="fill-current @if(in_array(Request::segment(1), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                                    </svg>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Calendar</span>
                                </div>
                            </a>
                        </li>
                        <!-- Campaigns -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['campaigns'])){{ 'bg-slate-900' }}@endif">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['campaigns'])){{ 'hover:text-slate-200' }}@endif" href="#0">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current @if(in_array(Request::segment(1), ['campaigns'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z" />
                                        <path class="fill-current @if(in_array(Request::segment(1), ['campaigns'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                                    </svg>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Campaigns</span>
                                </div>
                            </a>
                        </li>
                        <!-- Settings -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['settings'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['settings']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['settings'])){{ 'hover:text-slate-200' }}@endif" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path class="fill-current @if(in_array(Request::segment(1), ['settings'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['settings'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['settings'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z" />
                                            <path class="fill-current @if(in_array(Request::segment(1), ['settings'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z" />
                                        </svg>
                                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Settings</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(1), ['settings'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['settings'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('account')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My Account</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('notifications')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My Notifications</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('apps')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Connected Apps</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('plans')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Plans</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('billing')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Billing & Invoices</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('feedback')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Give Feedback</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Utility -->
                        <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['utility'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['utility']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['utility'])){{ 'hover:text-slate-200' }}@endif" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <circle class="fill-current @if(in_array(Request::segment(1), ['utility'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" cx="18.5" cy="5.5" r="4.5" />
                                            <circle class="fill-current @if(in_array(Request::segment(1), ['utility'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" cx="5.5" cy="5.5" r="4.5" />
                                            <circle class="fill-current @if(in_array(Request::segment(1), ['utility'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" cx="18.5" cy="18.5" r="4.5" />
                                            <circle class="fill-current @if(in_array(Request::segment(1), ['utility'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" cx="5.5" cy="18.5" r="4.5" />
                                        </svg>
                                        <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Utility</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(1), ['utility'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['utility'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('changelog')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Changelog</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('roadmap')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Roadmap</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('faqs')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">FAQs</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('empty-state')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Empty State</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('404')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">404</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('knowledge-base')){{ '!text-indigo-500' }}@endif" href="#0">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Knowledge Base</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
            
        </div>

        <!-- Expand / collapse button -->
        <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
            <div class="px-3 py-2">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="sr-only">Expand / collapse sidebar</span>
                    <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                        <path class="text-slate-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                        <path class="text-slate-600" d="M3 23H1V1h2z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>
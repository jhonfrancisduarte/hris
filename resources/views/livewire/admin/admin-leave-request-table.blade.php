<div class="w-full">
    {{-- Table --}}
    <div class="w-full flex justify-center">
        <div class="flex justify-center w-full">
            <div class="w-full bg-white rounded-2xl p3 sm:p-8 shadow dark:bg-gray-800 overflow-x-visible">
                <div class="pb-4 pt-4 sm:pt-1">
                    <h1 class="text-lg font-bold text-center text-slate-800 dark:text-white">Leave Records</h1>
                </div>
                <div class="flex flex-col p-3">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block w-full py-2 align-middle">
                            <div class="overflow-hidden border dark:border-gray-700 rounded-lg">
                                <div class="overflow-x-auto">
                                    <table class="w-full min-w-full">
                                        <thead class="bg-gray-200 dark:bg-gray-700 rounded-xl">
                                            <tr class="whitespace-nowrap">
                                                <th scope="col"
                                                    class="px-5 py-3 text-sm font-medium text-left uppercase text-center">
                                                    Name</th>
                                                <th scope="col"
                                                    class="px-5 py-3 text-sm font-medium text-left uppercase text-center">
                                                    Date of Filing</th>
                                                <th scope="col"
                                                    class="px-5 py-3 text-sm font-medium text-left uppercase text-center">
                                                    Type of Leave</th>
                                                <th scope="col"
                                                    class="px-5 py-3 text-sm font-medium text-left uppercase text-center">
                                                    Details of Leave</th>
                                                <th scope="col"
                                                    class="px-5 py-3 text-sm font-medium text-left uppercase text-center">
                                                    Number of days</th>
                                                <th scope="col"
                                                    class="px-5 py-3 text-sm font-medium text-left uppercase text-center">
                                                    Start Date</th>
                                                <th scope="col"
                                                    class="px-5 py-3 text-sm font-medium text-left uppercase text-center">
                                                    End Date</th>
                                                <th scope="col"
                                                    class="px-5 py-3 text-sm font-medium text-left uppercase text-center">
                                                    Uploaded File</th>
                                                <th scope="col"
                                                    class="px-5 py-3 text-sm font-medium text-left uppercase text-center">
                                                    Remarks</th>
                                                <th scope="col"
                                                    class="px-5 py-3 text-sm font-medium text-left uppercase text-center">
                                                    Approved Days</th>
                                                <th scope="col"
                                                    class="px-5 py-3 text-sm font-medium text-left uppercase text-center">
                                                    Status</th>
                                                <th scope="col"
                                                    class="px-5 py-3 text-gray-100 text-sm font-medium text-right sticky right-0 z-10 bg-gray-600 dark:bg-gray-600">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($leaveApplications as $leaveApplication)
                                            <tr class="whitespace-nowrap">
                                                <td class="px-4 py-2 text-center">{{ $leaveApplication->name }}</td>
                                                <td class="px-4 py-2 text-center">{{ $leaveApplication->date_of_filing
                                                    }}</td>
                                                <td class="px-4 py-2 text-center">{{ $leaveApplication->type_of_leave }}
                                                </td>
                                                <td class="px-4 py-2 text-center">{{ $leaveApplication->details_of_leave
                                                    }}</td>
                                                <td class="px-4 py-2 text-center">{{ $leaveApplication->number_of_days
                                                    }}</td>
                                                <td class="px-4 py-2 text-center">{{ $leaveApplication->start_date }}
                                                </td>
                                                <td class="px-4 py-2 text-center">{{ $leaveApplication->end_date }}</td>
                                                <td class="px-4 py-2 text-center">
                                                    @if ($leaveApplication->file_name)
                                                    @php
                                                    $fileNames = explode(',', $leaveApplication->file_name);
                                                    $filePaths = explode(',', $leaveApplication->file_path);
                                                    @endphp

                                                    @foreach ($fileNames as $index => $fileName)
                                                    @if (isset($filePaths[$index]))
                                                    <div class="mb-1">
                                                        <a href="{{ Storage::url($filePaths[$index]) }}" download
                                                            class="text-blue-500 hover:underline">
                                                            {{ strlen($fileName) > 10 ? substr($fileName, 0, 10) . '...'
                                                            : $fileName }}
                                                        </a>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                    @else
                                                    No file
                                                    @endif
                                                </td>
                                                <td class="px-4 py-2 text-center">{{ $leaveApplication->remarks }}</td>
                                                <td class="px-4 py-2 text-center">{{ $leaveApplication->approved_days }}
                                                </td>
                                                <td class="px-4 py-2 text-center">
                                                    <span class="inline-block px-3 py-1 text-sm font-semibold
                                                        {{
                                                            $leaveApplication->status === 'Approved' ? 'text-green-800 bg-green-200' :
                                                            ($leaveApplication->status === 'Disapproved' ? 'text-red-800 bg-red-200' :
                                                            ($leaveApplication->status === 'Pending' ? 'text-yellow-800 bg-yellow-200' : ''))
                                                        }} rounded-lg">
                                                        {{ $leaveApplication->status }}
                                                    </span>
                                                </td>
                                                <td
                                                    class="px-5 py-4 text-sm font-medium text-right whitespace-nowrap sticky right-0 z-10 bg-white dark:bg-gray-800">
                                                    <button @click="$wire.openApproveModal({{ $leaveApplication->id }})"
                                                        class="text-blue-500 {{ $leaveApplication->status && $leaveApplication->status !== 'Pending' ? 'opacity-50 cursor-not-allowed' : '' }}"
                                                        :disabled="{{ $leaveApplication->status && $leaveApplication->status !== 'Pending' ? 'true' : 'false' }}">
                                                        <i class="bi bi-check-lg"></i>
                                                    </button>
                                                    <button
                                                        @click="$wire.openDisapproveModal({{ $leaveApplication->id }})"
                                                        class="text-red-500 {{ $leaveApplication->status && $leaveApplication->status !== 'Pending' ? 'opacity-50 cursor-not-allowed' : '' }}"
                                                        :disabled="{{ $leaveApplication->status && $leaveApplication->status !== 'Pending' ? 'true' : 'false' }}">
                                                        <i class="bi bi-x"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                                <div class="p-5 text-neutral-500 dark:text-neutral-200 bg-gray-200 dark:bg-gray-700">
                                    {{ $leaveApplications->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modal id="approveLeave" maxWidth="md" wire:model="showApproveModal">
        <div class="p-4">
            <form wire:submit.prevent="updateStatus">
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 dark:text-gray-300">Status</label>
                    <select wire:model.live="status" id="status"
                        class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:bg-gray-100">
                        <option value="">Select Status</option>
                        <option value="With Pay">With Pay</option>
                        <option value="Without Pay">Without Pay</option>
                        <option value="Other">Other</option>
                    </select>
                    @error('status') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                @if ($status === 'Other')
                <div class="mb-4">
                    <label for="otherReason" class="block text-gray-700 dark:text-gray-300">Please specify</label>
                    <input type="text" wire:model="otherReason" id="otherReason" class="form-input mt-1 block w-full">
                    @error('otherReason') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                @endif

                @if ($status === 'With Pay' || $status === 'Without Pay')
                <div class="mb-4">
                    <label for="days"
                        class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:bg-gray-100">Number
                        of Days</label>
                    <input type="number" wire:model="days" id="days" class="form-input mt-1 block w-full" min="1">
                    @error('days') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                @endif

                <div class="flex justify-end">
                    <button type="button" @click="$wire.closeApproveModal()"
                        class="mr-2 bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
                </div>
            </form>
        </div>
    </x-modal>

    <x-modal id="disapproveLeave" maxWidth="md" wire:model="showDisapproveModal">
        <div class="p-4">
            <form wire:submit.prevent="disapproveLeave">
                <div class="mb-4">
                    <label for="disapproveReason" class="block text-gray-700 dark:text-gray-300">Reason for
                        Disapproval</label>
                    <input type="text" wire:model="disapproveReason" id="disapproveReason"
                        class="form-input mt-1 block w-full">
                    @error('disapproveReason') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div class="flex justify-end">
                    <button type="button" @click="$wire.closeDisapproveModal()"
                        class="mr-2 bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Disapprove</button>
                </div>
            </form>
        </div>
    </x-modal>
</div>
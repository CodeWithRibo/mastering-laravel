<div>
    <x-nav-link href="{{route('task.create',  auth()->user()->id)}}">
        <x-secondary-button class="cursor-pointer">Add Task</x-secondary-button>
    </x-nav-link>
    <div class="flex justify-center items-center ">
        <div class="overflow-x-auto w-full bg-white shadow-lg rounded-lg p-6">
            <table class="table-auto w-full text-sm text-left text-gray-700">
                <!-- head -->
                <thead class=" uppercase text-gray-600">
                <tr>
                    <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">{{__('User ID')}}</th>
                    <th class="px-4 py-3">{{__('Title')}}</th>
                    <th class="px-4 py-3">{{__('Description')}}</th>
                    <th class="px-4 py-3">{{__('Due Date')}}</th>
                    <th class="px-4 py-3">{{__('Status')}}</th>
                    <th class="px-4 py-3">{{__('Action')}}</th>
                </tr>
                </thead>
                <tbody class="">
                @forelse($tasks as $task)
                    <tr class="border-t border-gray-200 hover:bg-gray-50">
                        <td class="px-4 py-3">{{$task->id}}</td>
                        <td class="px-4 py-3">{{$task->user_id}}</td>
                        <td class="px-4 py-3">{{$task->title}}</td>
                        <td class="px-4 py-3">{{$task->description}}</td>
                        <td class="px-4 py-3">{{$task->due_date}}</td>
                        <td class="px-4 py-3">
                            @switch($task->status)
                                @case('In Progress')
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">
                                     {{$task->status}}
                                      </span>
                                    @break
                                @case('Pending')
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-semibold text-white bg-yellow-500 rounded-full">
                                    {{$task->status}}
                                     </span>
                                    @break

                                @case('Completed')
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">
                                    {{$task->status}}
                                     </span>
                                    @break

                            @endswitch
                        </td>
                        <td class="px-4 py-3 flex items-center gap-4">
{{--                        <x-danger-button>Delete</x-danger-button>--}}
                        <x-nav-link href="{{route('task.show', $task->id)}}">
                            <button class="btn btn-info text-white rounded-sm px-5">View</button>
                        </x-nav-link>
                        </td>
                        @empty
                            <td colspan="10">NO TASK LIST</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            {{ $tasks->links() }}
        </div>
    </div>
</div>

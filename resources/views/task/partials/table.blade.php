<div class="flex justify-center items-center ">
    <div class="overflow-x-auto w-full bg-white shadow-lg rounded-lg p-6">
        <table class="table-auto w-full text-sm text-left text-gray-700">
            <!-- head -->
            <thead class=" uppercase text-gray-600">
            <tr>
                <th class="px-4 py-3">#</th>
                <th class="px-4 py-3">{{__('Title')}}</th>
                <th class="px-4 py-3">{{__('Description')}}</th>
                <th class="px-4 py-3">{{__('Due Date')}}</th>
                <th class="px-4 py-3">{{__('Status')}}</th>

            </tr>
            </thead>
            <tbody class="">
            <tr class="border-t border-gray-200 hover:bg-gray-50">
                @forelse($tasks as $task)
                    <td class="px-4 py-3">{{$task->id}}</td>
                    <td class="px-4 py-3">{{$task->title}}</td>
                    <td class="px-4 py-3">{{$task->description}}</td>
                    <td class="px-4 py-3">{{$task->due_date}}</td>
                    <td class="px-4 py-3">
                        <span class="inline-block px-2 py-1 text-xs font-semibold text-white bg-yellow-500 rounded-full">
                            {{$task->status}}
                        </span>
                    </td>
                @empty
                    <p>Testing</p>
                @endforelse
            </tr>
            </tbody>
        </table>
    </div>
</div>

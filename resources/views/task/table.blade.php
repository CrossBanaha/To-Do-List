<div class="grid grid-cols-3 gap-4 w-[90%] m-auto">
    @foreach ($tasks as $task)
    <div class="p-[10px]">
        <div class="p-4 rounded-lg shadow flex flex-col border-solid border-[3px] border-white text-white">
            <div class="font-bold text-[1em] text-center">{{$task->task}}</div>
            <div class="text-[0.8em] mt-[5px] mb-[5px] text-center">{{$task->description}}</div>
            <div class="flex justify-center">
                <button id="edit-{{ $task->id }}" class="editButton" onclick="openModal({{ $task->id }})">
                    &#10000;
                </button>
                <form action="{{ route('task.toggleStatus', $task->id) }}" method="post" class="inline">
                    @csrf
                    @method('PATCH')
                    <button class="checkButton {{ $task->status ? 'bg-customCyan' : 'bg-customPurple ' }}">
                        {!! $task->status ? '&#10003;' : '&#10008;' !!}
                    </button>
                </form>
                <form action="{{ route('task.destroy', $task->id) }}" method="post" class="inline">
                    @csrf
                    @method('DELETE')
                    <button id="delete" class="deleteButton">
                        &#8861;
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
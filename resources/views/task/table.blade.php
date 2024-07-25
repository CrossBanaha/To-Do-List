<table class="TaskList">
    @foreach ($tasks as $task)
    <tr>
        <td class="text-white">
            {{$task->task}}
        </td>
        <td class="text-white text-xs"><h4>{{$task->description}}</h4></td>
        <td class="actions">
        <form action="{{route('task.update', $task->id)}}" method="post" class="inline">
            @csrf
            @method('PUT')
            <div class="box">
                <input type="text" name="task" value="{{ old('task', $task->task) }}">
                @error('task')
                    <div class="text-red-500 border-red-600">{{ $message }}</div>
                @enderror
                <input type="text" name="description" value="{{ old('description', $task->description) }}">
                @error('description')
                    <div class="text-red-500 border-red-600">{{ $message }}</div>
                @enderror
                <button id="edit" class="editButton">
                    &#10000;
                </button>
            </div>
        </form>
        <form action="{{route('task.toggleStatus', $task->id)}}" method="post" class="inline">
            @csrf
            @method('PATCH')
            <button class="checkButton {{$task->status ? 'bg-green-600' : 'bg-red-600'}}">
                {!! $task->status ? '&#10004;' : '&#10008;' !!}
            </button>
        </form>
        <form action="{{route('task.destroy', $task->id)}}" method="post" class="inline">
            @csrf
            @method('DELETE')
            <button id="delete" class="deleteButton">
                &#10006;
            </button>
        </form>
    </td>
    </tr>
    @endforeach
</table>
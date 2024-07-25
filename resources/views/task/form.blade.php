<div class="container">
    <form action="{{route('task.create')}}" method="post">
        @csrf
        <input type="text" placeholder="Enter Task" name="task" id="task" value="{{ old('task') }}" autofocus>
        @error('task')
            <div class="text-red-500 border-red-600">{{ $message }}</div>
        @enderror
        <input type="text" placeholder="Enter Description" name="description" id="description" value="{{ old('description') }}" autofocus>
        @error('description')
            <div class="text-red-500 border-red-600">{{ $message }}</div>
        @enderror
        <button id="add" class="addButton">
            ADD
            <nav></nav>
            <nav></nav>
        </button>
    </form>
</div>
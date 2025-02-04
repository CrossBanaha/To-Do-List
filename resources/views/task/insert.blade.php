<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center {{ $errors->any() ? '' : 'hidden' }}">
    <div class="bg-gradient-to-t from-black to-customBlue my-48 mx-auto w-[500px] rounded-[10px] p-5 modal-content border-solid border-[3px] border-white text-white">
        <form id="editForm" method="post" action="{{ old('task_id') ? route('tasks.update', old('task_id')) : route('tasks.store') }}">
            @csrf
            @method(old('task_id') ? 'PUT' : 'POST')
            <div>
                <label for="editTask">Task</label>
                <input type="text" placeholder="Enter Task" name="task" id="editTask" value="{{ old('task') }}" class="font-sans p-[5px] rounded-[10px] w-[125px]" autofocus>
                @error('task')
                    <div class="text-red-500 border-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="editDescription">Description</label>
                <textarea name="description" id="editDescription" placeholder="Enter Description" class="descriptionText" rows="4">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-red-500 border-red-600">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="saveButton">
                Save
            </button>
            <button type="button" onclick="closeModal()" class="cancelButton">
                Cancel
            </button>
        </form>
    </div>
</div>

<script>
    const tasks = @json($tasks->items());
    function openModal(id = null) {
        const editForm = document.getElementById('editForm');
        if (id) {
            const task = tasks.find(task => task.id === id);
            document.getElementById('editTask').value = task.task;
            document.getElementById('editDescription').value = task.description;
            editForm.action = `/tasks/${id}`;
            document.getElementById('editModal').classList.remove('hidden');
            editForm.method = 'POST';
            editForm._method.value = 'PUT';
        } else {
            document.getElementById('editTask').value = '';
            document.getElementById('editDescription').value = '';
            editForm.action = '{{ route('tasks.store') }}';
            document.getElementById('editModal').classList.remove('hidden');
            editForm.method = 'POST';
            if (!editForm._method) {
                const hiddenMethod = document.createElement('input');
                hiddenMethod.type = 'hidden';
                hiddenMethod.name = '_method';
                hiddenMethod.value = 'POST';
                editForm.appendChild(hiddenMethod);
            } else {
                editForm._method.value = 'POST';
            }
        }
    }

    function closeModal() {
        document.getElementById('editModal').classList.add('hidden');
    }
</script>

<?php
namespace App\Http\Controllers;
use App\Models\task;
use Illuminate\Http\Request;
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::paginate(6);
        return view('task.index', compact('tasks'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'task' => 'required|string|max:10',
            'description' => 'required|string|min:10',
        ]);
        $validatedData['status'] = false;
        Task::create($validatedData);
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }
    public function show(Task $task)
    {
        //
    }
    public function edit(Task $task)
    {
        //
    }
    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'task' => 'required|string|max:10',
            'description' => 'required|string|min:10',
        ]);
        $task->update($validatedData);
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }
    public function toggleStatus(Task $task)
    {
        $task->status = !$task->status;
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'Task status updated successfully!');
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
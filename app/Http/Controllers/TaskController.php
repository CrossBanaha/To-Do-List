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
        $validatedData['status'] = false; // Set the status to false when creating a new task
        Task::create($validatedData);
        return redirect('/')->with('success', 'Task created successfully!');
    }
    public function show(Task $task)
    {
        //
    }
    public function edit(Task $task)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'task' => 'required|string|max:10',
            'description' => 'required|string|min:10',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validatedData);
        return redirect('/')->with('success', 'Task updated successfully!');
    }
    public function toggleStatus($id){
        $task = Task::findOrFail($id);
        $task->status = !$task->status;
        $task->save();
        return redirect('/')->with('success', 'Task status updated successfully!');
    }
    public function destroy($id)
    {
        $task= Task::findOrFail($id);
        $task->delete();
        return redirect('/')->with('success', 'Task deleted successfully!');
    }
}
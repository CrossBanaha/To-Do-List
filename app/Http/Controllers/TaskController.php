<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $validatedData = $request->validate([
            'task' => 'required|string|max:10',
            'description' => 'required|string|min:10',
        ]);
        $validatedData['status'] = false; // Set the status to false when creating a new task
        Task::create($validatedData);
        return redirect('/')->with('success', 'Task created successfully!');
        /*
        $task= $request->only('task','description');
        $task['status']= false;
        Task::create($task);
        return redirect('/');
        */
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $id){
        $validatedData = $request->validate([
            'task' => 'required|string|max:10',
            'description' => 'required|string|min:10',
        ]);
        $task = Task::findOrFail($id);
        $task->update($validatedData);
        return redirect('/')->with('success', 'Task updated successfully!');
        /*
        $task= Task::findOrFail($id);
        $task->task = $request->task;
        $task->save();
        return redirect('/');
        */
    }
    public function toggleStatus($id){
        $task = Task::findOrFail($id);
        $task->status = !$task->status;
        $task->save();
        return redirect('/')->with('success', 'Task status updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task= Task::findOrFail($id);
        $task->delete();
        return redirect('/')->with('success', 'Task deleted successfully!');
    }
}
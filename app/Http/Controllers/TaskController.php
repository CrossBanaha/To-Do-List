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
    public function store(Request $request)
    {
        $task= $request->only('task','description');
        $task['status']= false;
        Task::create($task);
        return redirect('/');
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
        $task= Task::findOrFail($id);
        $task->task = $request->task;
        $task->save();
        return redirect('/');
    }
    public function toggleStatus(Task $id){
        $task= Task::findOrFail($id);
        $task->status = !$task->status;
        $task->save();
        return redirect('/');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task= Task::findOrFail($id);
        $task->delete();
        return redirect('/');
    }
}
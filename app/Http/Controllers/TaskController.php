<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $tasks = Task::orderBy('id', 'DESC')
        ->get();
        
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Task::create([
            'name'=> $request->input('name'),
            'complet'=> false
        ]);
        return redirect('/tasks')->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tasks = Task.find($id);
        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
        $task = Task::where('name' ,$request->name)->first();
        //dd($request);
        return view('tasks.edite', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
       $task = Task::where('id', $id)->first();
        $task->complet = true;
        $task->save();
       return redirect('/tasks')->with('success', 'Task upload successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
        $task = Task::where('id' , $id)->first();
        $task->delete();
        return redirect('/tasks');
    }
}

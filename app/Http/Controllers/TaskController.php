<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
class TaskController extends Controller
{
    
    public function index()
    {
      $id = auth()->user()->id;
      $tasks = auth()->user()->tasks;
      //dd($tasks);
      return view('tasks.index',compact('tasks'));
        
    }

   
    public function create()
    {
      return view('tasks.create');
    }

    
    public function store(Request $request)
    {
      // dd(auth()->user()->id);
      Task::create(['name' => $request->name,
      'user_id'=>auth()->user()->id]);
      return redirect()-> route('tasks.index');
    }

   
    public function show(string $id)
    {
        $task=Task::findOrFail($id)->load('students');
        return view('tasks.show',compact('tasks'));
    }


    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));
    }

    public function update(Request $request, Task $task)

    {
        $task->name=$request->name;
        // dd($task);
        $task->save();
        return redirect()->route('tasks.index');
    }                       

    
    public function destroy(Task $task)
    {
      $task->delete();
      return redirect()->route('tasks.index'); 
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::get();
        return view('dashboard', compact('tasks'));
    }

    public function insert(){
        return view('tasks.create');
    }

    public function store(Request $request) {
        request()->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);

        $task = new Task;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->user_id = Auth::user()->id;
        $task->save();
    }

    public function edit($id) {
        $task = Task::findOrFail($id);
        if(Auth::user()->id == $task->user_id){
            return view('tasks.edit', compact('task'));
        }

        return redirect()->back()->with('error', 'You cannot do this action');
    }

    public function update(Request $request, $id){
        request()->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);
        $task = Task::findOrFail($id);
        if(Auth::user()->id == $task->user_id){
            $task->name = $request->name;
            $task->description = $request->description;
            $task->save();        

            return redirect('tasks.index')->with('success', "Task Successfully Added");
        }

        return redirect()->back()->with('error', 'You cannot do this action');
    }

    public function delete($id) {
        $task = Task::findOrFail($id);
        if(Auth::user()->id == $task->user_id){
            $task->delete();

            return redirect('tasks/index')->with('success', 'Task Successfully Deleted');
        }

        return redirect('tasks/index')->with('error', 'You cannot do this action');
        
    }
}

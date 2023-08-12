<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    
    public function index() {
        $tasks = Task::with('user')->get();
        
        return view('dashboard', compact('tasks'));
    }

    
    public function create(){
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
        $task->status = $request->status;
        $task->user_id = Auth::user()->id;
        $task->save();

        return redirect('dashboard')->with('success', 'Task Created Successfully');
    }

    
    public function edit($id) {
        $task = Task::findOrFail($id);
        if(Auth::user()->id == $task->user_id || Auth::user()->user_type == 1){
            $creatorName = User::find($task->user_id)->name;
            return view('tasks.edit', compact('task', 'creatorName'));
        }

        return redirect()->back()->with('error', 'You cannot do this action');
    }

    
    public function update(Request $request, $id){
        request()->validate([
            'name' => 'required|max:255',
            'description' => 'required'
        ]);
        $task = Task::findOrFail($id);
        if(Auth::user()->id == $task->user_id || Auth::user()->user_type == 1){
            $task->name = $request->name;
            $task->description = $request->description;
            $task->status = $request->status;
            $task->save();        

            return redirect('dashboard')->with('success', "Task Successfully Updated");
        }

        return redirect()->back()->with('error', 'You cannot do this action');
    }

    
    public function delete($id) {
        $task = Task::findOrFail($id);
        if(Auth::user()->id == $task->user_id  || Auth::user()->user_type == 1){
            $task->delete();

            return redirect('dashboard')->with('success', 'Task Successfully Deleted');
        }

        return redirect('dashboard')->with('error', 'You cannot do this action');
        
    }
}

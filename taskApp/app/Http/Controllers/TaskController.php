<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function store(Request $request){
        
        $task = new Task;

        $this->validate($request,[
            'task'=>'required|max:100|min:5',
        ]);

        $task->task=$request->task;
        $task->save();
        $data=Task::all();
        return view('task')->with('tasks',$data);
    }
}

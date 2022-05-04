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
        return redirect('/task');
    }

    public function updateTaskAsCompleted($id){
        $task1=Task::find($id);
        $task1->iscompleted=1;
        $task1->save();
        return redirect()->back();
    }

    public function updateTaskAsNotCompleted($id){
        $task1=Task::find($id);
        $task1->iscompleted=0;
        $task1->save();
        return redirect()->back();
    }

    public function deleteTask($id){
        $task1=Task::find($id);
        $task1->delete();
        return redirect()->back();
    }

    public function editTaskView($id){
        $task1=Task::find($id);
        
        return view('editTask')->with('taskdata',$task1);
    }

    public function updateTask(Request $request){
       $id = $request->id;
       $task = $request->task;
       $data = Task::find($id);
       $data->task = $task;
       $data->save();
       return redirect('/task');
    }
}

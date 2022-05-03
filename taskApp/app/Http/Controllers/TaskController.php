<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function store(Request $request){
        // dd($request->all());
        $task = new Task;

        $task->task=$request->task;
        $task->save();
        return redirect()->back();
    }
}

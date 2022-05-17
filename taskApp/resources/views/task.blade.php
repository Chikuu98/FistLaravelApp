<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My To Do List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body class="bg-dark">
    <div class="container">
        <div class="text-center">
            <br><br>
            <h1 class="text-light"><b>My Tasks</b></h1><br><a href="/" class="btn btn-light">add new</a>

            <div class="row">
                <div class="col-md-12">

                    <table class="table table-dark mt-5">
                        <th>Task</th>
                        <th>Completed</th>
                        <th>Action</th>
                        @foreach($tasks as $task)
                            <tr>  
                                <td>{{$task->task}}</td>
                                @if($task->iscompleted)
                                <td><button class="btn btn-success">Yes</button></td>
                                @else
                                <td><button class="btn btn-warning">not yet</button></td>
                                @endif
                                <td>
                                @if(!$task->iscompleted)
                                    <a href="/markasCompleted/{{$task->id}}" class="btn btn-primary">Done</a>
                                @else
                                    <a href="/markasnotCompleted/{{$task->id}}" class="btn btn-danger">Sorry</a>
                                @endif
                                    <a href="/deleteTask/{{$task->id}}" class="btn btn-danger">delete</a>
                                    <a href="/editTask/{{$task->id}}" class="btn btn-danger">edit</a>    
                                </td>
                            </tr>
                        @endforeach    
                    </table>
                    
                </div>
                
            </div>
        </div>
    </div>
    </body>
</html>
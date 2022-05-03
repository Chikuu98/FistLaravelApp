<!DOCTYPE html>
<html lang="en">
    <head>
        <title>page title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="text-center">
            <h1>Daily Tasks</h1>

            <div class="row">
                <div class="col-md-12">

                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
                    <form method="post" action="/saveTask">
                        {{csrf_field()}}
                        <input type="text" class="form-control" name="task" placeholder="Enter your task here">
                        <br>
                        <input type="submit" class="btn btn-primary" value="SAVE">
                        <input type="button" class="btn btn-warning" value="CLEAR">
                    </form>
                 
                    <table class="table table-dark mt-5">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->task}}</td>
                                <td>{{$task->iscompleted}}</td>
                            </tr>
                        @endforeach    
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
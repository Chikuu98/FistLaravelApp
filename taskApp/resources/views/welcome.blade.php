<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TasksApp</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    </head>
    <body class="antialiased bg-dark">
    <div class="container">
        <div class="text-center">
            <br><br><br><br><br><br><br>
            <h1 class="text-light"><b>Add a Task</b></h1>
            <br>
            <br>
            <br>
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
                        &nbsp; &nbsp;
                        <input type="button" class="btn btn-warning" value="CLEAR">
                    </form>
                    <br>
            <a href="/task" class="btn btn-light">View Tasks</a>

        </div>
    </div>
    </body>
</html>

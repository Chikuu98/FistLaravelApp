<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br>
            <div class="text-center mt-5">
                <form action="/updateTask" method="post">
                {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$taskdata->id}}" />
                    <input type="text" class="form-control mb-5 text-secondary" name="task" value="{{$taskdata->task}}"/>
                    <input type="submit" class="btn btn-primary" value="update" />&nbsp; &nbsp;
                    <input type="button" class="btn btn-danger" value="cancel" />
                </form>
            </div>    
        </div>
    
    </body>
</html>
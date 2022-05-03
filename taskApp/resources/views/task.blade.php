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
                    <input type="text" class="form-control" name="task" placeholder="Enter your task here">
                    <br>
                    <input type="button" class="btn btn-primary" value="SAVE">
                    <input type="button" class="btn btn-warning" value="CLEAR">
                 
                    <table class="table table-dark mt-5">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        <tr>
                            <td>1</td>
                            <td>learn laravel</td>
                            <td>not yet</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>
<body>
    <div class="container">
<div class=text-center>
    <h1>To do Task</h1>

<div class="row">
    <div class="col-md-12">
        <form action="/saveTask" method="post">
            {{csrf_field()}}
            <input  type="text" class="form-control" name="task" placeholder="Enter your Task Here">
            <br/>
            <input type="submit" class="btn btn-primary" value="SAVE"/>
            <input type="button" class="btn btn-warning" value="Clear"/>
            <br/>
        </form>

        <table class="table table-dark">
            <th>ID</th>
            <th>Task</th>
            <th>Completed</th>
            <tr>
                <td>1</td>
                <td>Work Hard</td>
                <td>Not Completed</td>
            </tr>
        </table>
    </div>
</div>
</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        .table {
            text-align: center;
            margin: 30px auto;
            width: 70%;

        }

        .title {
            text-align: center;
            margin: 50px auto;
            width: 90%;

        }

        .btn {
            text-align: center;
            margin: 50px auto;
            width: 40%;
            height: 40%;
            text-decoration: none;
            text-decoration: white;
        }
        a{
            text-decoration: none;
            text-align: center;
            color: white;
            font-size:20px;
        }
    </style>
</head>
<body>
<div class="out">
    <div class="title">
        <h1> INDEX TABLE </h1>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">State</th>
            <th scope="col">Active</th>
            <th scope="col">Group</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>

        </tr>

        </thead>
        <tbody>
        @foreach($data as $val)
            <tr>
                <td>{{$val->id}}</td>
                <td>{{$val->name}}</td>
                <td>{{$val->email}}</td>
                <td>{{$val->state}}</td>
                <td>{{$val->active}}</td>
                <td>{{$val->group}}</td>
                <td> <button type="button" class="bt btn-secondary"><a href="/ed/{{$val->id}}">EDIT</a></button></td>
                <td> <button type="button" class="bt btn-secondary"><a href="/de/{{$val->id}}">DELETE</a></button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="title">

        <button type="button" class="btn btn-secondary"><a href="/cr">Add new</a></button>
    </div>
</div>

</body>
</html>

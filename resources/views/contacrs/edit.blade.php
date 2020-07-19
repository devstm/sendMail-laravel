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


        .title {
            background-color: #d7d7d7;
            height: 100px;
            text-align: center;
            margin: 50px auto;
            width: 70%;
            padding-top: 18px;

        }

        .out {


            text-align: center;
            margin: 0 auto;
            width: 60%;


        }

        .input-group {
            padding-top: 15px;
        }

        button {
            text-align: center;
            margin: 50px auto;
            width: 40%;
            height: 60px;
            padding-top: 20px;
        }


    </style>
</head>
<body>
<div class="out">
    <div class="title">
        <h1> Edit VIEW </h1>
    </div>
    <div class="out">
        <form action="/edit/{{ $model->id }}" method="post">
            {{ csrf_field() }}

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Name:</span>
                </div>
                <input type="text" value="{{$model->name}}" class="form-control" name="name1" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-lg">
            </div>

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Email:</span>
                </div>
                <input type="text" value="{{$model->email}}" class="form-control" name="email1" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-lg">
            </div>

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">group</span>
                </div>
                <input type="text" value="{{$model->group}}" class="form-control" name="group1" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-lg">
            </div>

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">state</span>
                </div>
                <input type="text" value="{{$model->state}}" class="form-control" name="state1" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-lg">
            </div>

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Active</span>
                </div>
                <input type="text" class="form-control" value="{{$model->active}}" name="active1" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-lg">
            </div>

            <div class="button">

                <input type="submit" class="btn btn-secondary" name="submit" value="save">
            </div>
        </form>
    </div>




</div>
</body>
</html>

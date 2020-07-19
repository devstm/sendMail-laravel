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
            padding-top:18px;

        }

        .out{


            text-align: center;
            margin: 0 auto;
            width: 60%;


        }
        .input-group{
            padding-top: 15px;
        }
        button {
            text-align: center;
            margin: 50px auto;
            width: 40%;
            height: 60px;
            padding-top:20px;
        }



    </style>
</head>
<body>
<div class="out">
    <div class="title">
        <h1> USERS VIEW </h1>
    </div>
    <div class="out">
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">NAME:</span>
            </div>
            <lable type="text" class="form-control" aria-label="Sizing example input"></lable>
        </div>

        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">EMAIL:</span>
            </div>
            <label type="text" class="form-control" aria-label="Sizing example input"
                   aria-describedby="inputGroup-sizing-lg"></label>
        </div>

        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">GROUP</span>
            </div>
            <lable type="text" class="form-control" aria-label="Sizing example input"
                   aria-describedby="inputGroup-sizing-lg"></lable>
        </div>

        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">STATE</span>
            </div>
            <lable type="text" class="form-control" aria-label="Sizing example input"
                   aria-describedby="inputGroup-sizing-lg"></lable>
        </div>

        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">ACTIVE</span>
            </div>
            <lable type="text" class="form-control" aria-label="Sizing example input"
                   aria-describedby="inputGroup-sizing-lg"></lable>
        </div>
    </div>
    <div class="button">
        <button type="button" class="btn btn-secondary">Edit</button>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ripasso</title>
    <!-- STYLE -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    </style>
</head>

<body>
    @include('Layouts.header')
    @include('Layouts.Main')
    @include('Layouts.Footer')
</body>

</html>
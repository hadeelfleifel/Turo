@extends('layouts.app')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>City</title>
</head>
<body>
@foreach($Cars as $value)
<h1>Car {{$value['car_model']}}</h1>
<br>
    <div>
    </div>
    @endforeach

</body>
</html>
@endsection





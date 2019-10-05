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
    @foreach($City as $name)
    <h1>City {{$name['city_name']}}</h1>
    @endforeach
    <br>
    @foreach($Cars as $value)
        <a href="{{ url('/car') }}/{{$value['id']}}">{{$value['car_model']}}</a>
        <br>
    @endforeach
    </body>
    </html>
@endsection

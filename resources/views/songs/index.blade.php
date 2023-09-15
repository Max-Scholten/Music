<!DOCTYPE html>
<html lang="en">

<head class="bg-yellow-600">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="bg-yellow-600">
    <h1>Song-list:</h1>
    @extends('layouts.app') {{-- If you have a layout, you can extend it --}}

    @section('content')
        <div class="container">
            <h1>Song List</h1>
            <ul>
                @foreach ($songs as $index => $song)
                    <li><a href="{{ route('songs.show', ['index' => $index]) }}">{{ $song }}</a></li>
                @endforeach
            </ul>
        </div>
    @endsection



</body>

</html>

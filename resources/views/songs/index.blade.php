<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="grid grid-cols-5 grid-rows-5 h-screen">
        <!-- Header -->
        <header class="col-span-5 bg-darkgreen p-4">
            <!-- Header Content -->
            <h1 class="text-white text-center">Header</h1>
        </header>

        <!-- Main Content (Body) -->
        <main class="col-span-5 row-span-4 bg-matte-black p-4">
            <!-- Body Content -->
            <h1 class="text-white text-center">Song-list:</h1>
            @extends('layouts.app') {{-- If you have a layout, you can extend it --}}

            @section('content')
            <div class="container">
                <h1 class="text-white">Song List</h1>
                <ul>
                    @foreach ($songs as $index => $song)
                    <li><a href="{{ route('songs.show', ['index' => $index]) }}">{{ $song }}</a>
                    </li>
                @endforeach
                </ul>
            </div>
            @endsection
        </main>

        <!-- Footer -->
        <footer class="col-span-5 bg-light-black p-4">
            <!-- Footer Content -->
            <h1 class="text-white text-center">Footer</h1>
        </footer>
    </div>
</body>

</html>



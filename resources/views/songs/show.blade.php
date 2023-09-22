<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songs</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />


</head>

<body class="bg-gray-800 text-white relative grid grid-rows-5 grid-cols-3">

    <header class="fixed bg-purple-500 top-0 left-0 right-0 z-0 grid grid-rows-1 grid-cols-3 ">
        <div class="container mx-auto flex justify-between p-3 col-span-3">
            <h1 class="grid grid-rows-1 col-span-3 text-4xl py-1">Song overview</h1>

            <nav class="grid grid-rows-2 grid-cols-3 col-span-2">

                <a href="{{ route('songs.index') }}"
                    class="text-white bg-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Index</a>

                <a href="{{ route('songs.create') }}"
                    class="text-white bg-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</a>

            </nav>
        </div>
    </header>


    <main class="grid grid-rows-3 col-span-3 py-1">

        @extends('layouts.app')

        @section('content')
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold">Edit Song</h2>
                <form method="POST" action="{{ route('songs.index', ['index' => $song]) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4 text-black">
                        <label for="title" class="block text-sm font-medium text-white">Title</label>
                        <input type="text" id="title" name="title" class="form-input" value="{{ $song }}">
                    </div>
                    <div class="mb-4 text-black">
                        <label for="singer" class="block text-sm font-medium text-white">Singer</label>
                        <input type="text" id="singer" name="singer" class="form-input">
                    </div>
                    <div class="flex items-center">

                        <a href="{{ route('songs.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Back</a>
                    </div>
                </form>
            </div>
        @endsection

    </main>
    <footer class="fixed bottom-0 left-0 right-0 bg-purple-500 p-4 text-center grid grid-rows-5 col-span-3 h-12">
        <div class="container mx-auto">
            <p>&copy; Max Scholten | Songs</p>
        </div>
    </footer>

</body>

</html>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        return view('songs.index', compact('songs'));
    }

    public function show($index)
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        $song = $songs[$index];
        return view('songs.show', compact('song'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function edit($index)
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        $song = $songs[$index];
        return view('songs.edit', compact('song'));
    }
}

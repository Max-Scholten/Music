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
        // Haal de song op basis van het indexnummer op uit de array
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        $song = $songs[$index] ?? null;

        return view('songs.show', compact('song'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function edit($index)
    {
        // Haal de song op basis van het indexnummer op uit de array
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        $song = $songs[$index] ?? null;

        return view('songs.edit', compact('song'));
    }
    
}


<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    private $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];

    public function index()
    {
        return view('songs.index', ['songs' => $this->songs]);
    }

    public function show($index)
    {
        $song = $this->songs[$index] ?? null;
        return view('songs.show', compact('song'));
    }

    public function create()
    {
        return view('songs.create');
    }
    /*
    public function store(Request $request)
    {
        $this->songs[] = $request->input('song_name');
        return redirect()->route('songs.index')->with('success', 'Song created successfully');
    }
    */
    public function edit($index)
    {
        $song = $this->songs[$index] ?? null;
        return view('songs.edit', compact('song', 'index'));
    }

    public function update(Request $request, $index)
    {
        $this->songs[$index] = $request->input('song_name');
        return redirect()->route('songs.index')->with('success', 'Song updated successfully');
    }

    public function destroy($index)
    {
        unset($this->songs[$index]);
        return redirect()->route('songs.index')->with('success', 'Song deleted successfully');
    }
}

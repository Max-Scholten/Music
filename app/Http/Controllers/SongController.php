<?php
namespace App\Http\Controllers;

use App\Http\Requests\SongRequest;
use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{

    public function index()
    {
        $songs = Song::all(); // Fetch all songs from the database.

        return view('songs.index', compact('songs'));
    }



    public function show($id)
    {
        $song = Song::find($id); // Gets the songs compared to the ID

        return view('songs.show', compact('song'));
    }



    public function create()
    {
        return view('songs.create');
    }
    public function store(SongRequest $request)
    {

        // saves new songs in the database <= No mass assignment
//        $song = new Song;
//        $song->title = $validatedData['title'];
//        $song->singer = $validatedData['singer'];
//        $song->save();

        Song::create($request->validated()); // mass assignment

        // Will send a success message and send you back to te index page
        return redirect()->route('songs.index')->with('success', 'Song good saved');
    }

    public function edit($index)
    {

        $song = $this->songs[$index] ?? null;
        return view('songs.edit', compact('song'));
    }


    public function update(SongRequest $request, $id)
    {
        // Find the song by ID
        $song = Song::findOrFail($id)->update($request->validated());

        // Redirect back to the song list with a success message
        return redirect()->route('songs.index')->with('success', 'Song updated successfully.');
    }



    public function destroy($id)
    {
        // Find the song by ID
        $song = Song::find($id);

        if (!$song) {
            // Handle the case where the song is not found
            return redirect()->route('songs.index')->with('error', 'Song not found.');
        }

        // Delete the song
        $song->delete();

        // Redirect back to the song list with a success message
        return redirect()->route('songs.index')->with('success', 'Song deleted successfully.');
    }

}

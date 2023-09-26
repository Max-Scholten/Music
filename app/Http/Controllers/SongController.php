<?php
namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        // Validate the submitted form data if needed.
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'singer' => 'required|string|max:255',
        ]);

        // Save the new song in the database
        $song = new Song;
        $song->title = $validatedData['title'];
        $song->singer = $validatedData['singer'];
        $song->save();

        // Send a success message and go back to the index page
        return redirect()->route('songs.index')->with('success', 'Song created successfully');
    }

    public function edit($index)
    {

        $song = $this->songs[$index] ?? null;
        return view('songs.edit', compact('song'));
    }


    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'singer' => 'required|string|max:255',
        ]);

        // Find the song by ID
        $song = Song::find($id);

        if (!$song) {
            // Handle the case where the song is not found
            return redirect()->route('songs.index')->with('error', 'Song not found.');
        }

        // Update the song data
        $song->title = $validatedData['title'];
        $song->singer = $validatedData['singer'];
        $song->save();

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

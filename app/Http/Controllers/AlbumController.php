<?php
namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{

    public function index()
    {
        $albums = Album::all(); // Fetch all albums from the database.

        return view('albums.index', compact('albums'));
    }



    public function show($id)
    {
        $album = Album::find($id); // Gets the albums compared to the ID

        return view('albums.show', compact('album'));
    }



    public function create()
    {
        return view('albums.create');
    }
    public function store(AlbumRequest $request)
    {

        // saves new albums in the database <= No mass assignment
//        $album = new Album;
//        $album->title = $validatedData['title'];
//        $album->singer = $validatedData['singer'];
//        $album->save();

        Album::create($request->validated()); // mass assignment

        // Will send a success message and send you back to te index page
        return redirect()->route('albums.index')->with('success', 'Album good saved');
    }

    public function edit($index)
    {

        $album = $this->albums[$index] ?? null;
        return view('albums.edit', compact('album'));
    }


    public function update(AlbumRequest $request, $id)
    {
        // Find the album by ID
        $album = Album::findOrFail($id)->update($request->validated());

        // Redirect back to the album list with a success message
        return redirect()->route('albums.index')->with('success', 'Album updated successfully.');
    }



    public function destroy($id)
    {
        // Find the album by ID
        $album = Album::find($id);

        if (!$album) {
            // Handle the case where the album is not found
            return redirect()->route('albums.index')->with('error', 'Album not found.');
        }

        // Delete the album
        $album->delete();

        // Redirect back to the album list with a success message
        return redirect()->route('albums.index')->with('success', 'Album deleted successfully.');
    }

}

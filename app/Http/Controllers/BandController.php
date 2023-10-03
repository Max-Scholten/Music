<?php
namespace App\Http\Controllers;

use App\Http\Requests\BandRequest;
use Illuminate\Http\Request;
use App\Models\Bands;

class BandController extends Controller
{

    public function index()
    {
        $bands = Band::all(); // Fetch all bands from the database.

        return view('bands.index', compact('bands'));
    }



    public function show($id)
    {
        $band = Band::find($id); // Gets the bands compared to the ID

        return view('bands.show', compact('band'));
    }



    public function create()
    {
        return view('bands.create');
    }
    public function store(BandRequest $request)
    {

        // saves new bands in the database <= No mass assignment
//        $band = new Band;
//        $band->title = $validatedData['title'];
//        $band->singer = $validatedData['singer'];
//        $band->save();

        Band::create($request->validated()); // mass assignment

        // Will send a success message and send you back to te index page
        return redirect()->route('bands.index')->with('success', 'Band good saved');
    }

    public function edit($index)
    {

        $band = $this->bands[$index] ?? null;
        return view('bands.edit', compact('band'));
    }


    public function update(BandRequest $request, $id)
    {
        // Find the band by ID
        $band = Band::findOrFail($id)->update($request->validated());

        // Redirect back to the band list with a success message
        return redirect()->route('bands.index')->with('success', 'Band updated successfully.');
    }



    public function destroy($id)
    {
        // Find the band by ID
        $band = Band::find($id);

        if (!$band) {
            // Handle the case where the band is not found
            return redirect()->route('bands.index')->with('error', 'Band not found.');
        }

        // Delete the band
        $band->delete();

        // Redirect back to the band list with a success message
        return redirect()->route('bands.index')->with('success', 'Band deleted successfully.');
    }

}

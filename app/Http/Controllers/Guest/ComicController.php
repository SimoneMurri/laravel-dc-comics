<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('guest.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'unique:comics', 'min:4', 'max:40'],
            'description' => ['required', 'min:10', 'max:2000'],
            'thumb' => ['required', 'min:4', 'url:http,https'],
            'price' => ['required', 'min:1', 'max:15'],
            'series' => ['required', 'min:1', 'max:20'],
            'sale_date' => ['required', 'min:1', 'max:20'],
            'type' => ['required', 'min:1', 'max:20'],
            'artists' => ['required', 'min:1', 'max:50'],
            'writers' => ['required', 'min:1', 'max:20'],
        ], [
            'title.required' => 'Non va bene, inserisci un titolo'
        ]);

        $formData = $request->all();

        // $newComic = new Comic();
        // $newComic->title = $formData['title'];
        // $newComic->description = $formData['description'];
        // $newComic->thumb = $formData['thumb'];
        // $newComic->price = $formData['price'];
        // $newComic->series = $formData['series'];
        // $newComic->sale_date = $formData['sale_date'];
        // $newComic->type = $formData['type'];
        // $newComic->artists = json_encode($formData['artists']);
        // $newComic->writers = json_encode($formData['writers']);
        // $newComic->save();

        $newComic = Comic::create($formData);

        return redirect()->route('guest.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('guest.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('guest.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => ['required', 'unique:comics', 'min:4', 'max:40'],
            'description' => ['required', 'min:10', 'max:2000'],
            'thumb' => ['required', 'min:4', 'url:http,https'],
            'price' => ['required', 'min:1', 'max:15'],
            'series' => ['required', 'min:1', 'max:20'],
            'sale_date' => ['required', 'min:1', 'max:20'],
            'type' => ['required', 'min:1', 'max:20'],
            'artists' => ['required', 'min:1', 'max:50'],
            'writers' => ['required', 'min:1', 'max:20'],
        ], [
            'titolo.required' => 'Non va bene, inserisci un titolo'
        ]);
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('guest.comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

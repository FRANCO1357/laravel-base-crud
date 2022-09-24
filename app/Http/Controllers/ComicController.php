<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title' => ['required', 'string', 'unique:comics'],
            'description' => ['required', 'string', 'unique:comics'],
            'thumb' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:0', 'max:1000'],
            'series' => ['required', 'string'],
            'sale_date' => ['required', 'string'],
            'type' => ['required', 'string'],
        ],
        [
            'title.unique' => "Il fumetto $request->title esiste già",
            'title.required' => 'Il titolo è obbligatorio',
            'price.min' => 'Il prezzo minimo è 0', 
            'price.max' => 'Il prezzo massimo è 1000', 
        ]);

        // metodo lungo
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        // metodo corto
        // $comic = Comic::create($data);


        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'description' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'thumb' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:0', 'max:1000'],
            'series' => ['required', 'string'],
            'sale_date' => ['required', 'string'],
            'type' => ['required', 'string'],
        ],
        [
            'title.unique' => "Il fumetto $request->title esiste già",
            'description.unique' => "Descrizione già esistente",
            'title.required' => 'Il titolo è obbligatorio',
            'price.min' => 'Il prezzo minimo è 0', 
            'price.max' => 'Il prezzo massimo è 1000', 
        ]);

        // metodo lungo
        $comic->fill($data);
        $comic->save();

        // metodo corto
        // $comic->update($data);

        return redirect()->route('comics.show', $comic);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        // alternativa
        // Team::destroy($id);

        return redirect()->route('comics.index')->with('deleted', "$comic->title eliminato");
    }
}

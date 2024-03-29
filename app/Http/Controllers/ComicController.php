<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blueBanner = config('sub-banner');
        $comics = Comic::all();
        return view('comics.index', compact('comics', 'blueBanner'));
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
    public function store(StoreComicRequest $request)
    {
        // Recupero i dati inviati dalla form
        $form_data = $request->all();

        // Creo una nuova istanza per salvarla nel db
        $comic = new Comic();
        // $comic->title = $form_data['titolo'];
        // $comic->description = $form_data['descrizione'];
        // $comic->thumb = $form_data['immagine'];
        // $comic->price = $form_data['prezzo'];
        // $comic->series = $form_data['serie'];
        // $comic->sale_date = $form_data['data'];
        // $comic->type = $form_data['tipo'];
        $comic->fill($form_data);
        $comic->artists = json_encode(explode(',',$form_data['artists']));
        $comic->writers = json_encode(explode(',',$form_data['writers']));


        // Salvo la pasta nel db
        $comic->save();

        // Faccio il redirect
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $artists = json_decode($comic['artists']);
        $writers = json_decode($comic['writers']);
        return view('comics.show', compact('comic', 'artists', 'writers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, $id)
    {
       
        $form_data = $request->all();

        // Creo una nuova istanza per salvarla nel db
        $comic = Comic::find($id);
        // $comic->title = $form_data['titolo'];
        // $comic->description = $form_data['descrizione'];
        // $comic->thumb = $form_data['immagine'];
        // $comic->price = $form_data['prezzo'];
        // $comic->series = $form_data['serie'];
        // $comic->sale_date = $form_data['data'];
        // $comic->type = $form_data['tipo'];
        $comic->update($form_data);
        $comic->artists = json_encode(explode(',',$form_data['artists']));
        $comic->writers = json_encode(explode(',',$form_data['writers']));

        // Salvo la pasta nel db
        $comic->update();

        // Faccio il redirect
        return redirect()->route('comics.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Recupero la pasta da cancellare
        $comic = Comic::find($id);
        
        // Cancello la pasta con il metodo delete
        $comic->delete();

        return redirect()->route('comics.index');

    }
}

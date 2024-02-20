@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 bg-white">
                <h2 class="text-center">Inserisci un nuovo fumetto</h2>
            </div>
            <div class="col-12 bg-white">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="p-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Titolo..." >
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Descrizione..." ></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Immagine</label>
                            <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Immagine..." >
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="text" name="price" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="price" >
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Serie</label>
                            <input type="text" name="series" class="form-control" id="series" placeholder="Serie..." >
                        </div>
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Data di vendita</label>
                            <input type="date" name="sale_date" id="sale_date">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipo</label>
                            <input type="text" name="type" class="form-control" id="type" placeholder="Tipo..." >
                        </div>
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artista</label>
                            <input type="text" name="artists" class="form-control" id="artists" placeholder="Artista..." >
                        </div>
                        <div class="mb-3">
                            <label for="writers" class="form-label">Scrittore</label>
                            <input type="text" name="writers" class="form-control" id="writers" placeholder="Scrittore..." >
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Aggiungi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

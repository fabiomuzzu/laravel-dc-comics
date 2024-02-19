@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 bg-white">
            <h2 class="text-center">Modifica fumetto</h2>
        </div>
        <div class="col-12 bg-white">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')


                <div class="p-4">
                    <div class="mb-3">
                        <label for="titolo" class="form-label">Titolo</label>
                        <input type="text" name="titolo" class="form-control" id="titolo" value="{{$comic['title']}}" >
                    </div>
                    <div class="mb-3">
                        <label for="descrizione" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="descrizione" id="descrizione" cols="30" rows="5" >{{$comic['description']}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="immagine" class="form-label">Immagine</label>
                        <input type="text" name="immagine" class="form-control" id="immagine" value="{{$comic['thumb']}}" >
                    </div>
                    <div class="mb-3">
                        <label for="prezzo" class="form-label">Prezzo</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="text" name="prezzo" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="prezzo" value="{{$comic['price']}}" >
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="serie" class="form-label">Serie</label>
                        <input type="text" name="serie" class="form-control" id="serie"  value="{{$comic['series']}}" >
                    </div>
                    <div class="mb-3">
                        <label for="data_di_vendita" class="form-label">Data di vendita</label>
                        <input type="date" name="data" id="data"value="{{$comic['sale_date']}}" >
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <input type="text" name="tipo" class="form-control" id="tipo" value="{{$comic['type']}}" >
                    </div>
                    <div class="mb-3">
                        <label for="artista" class="form-label">Artista</label>
                        <input type="text" name="artista" class="form-control" id="artista" value="{{implode(',' ,json_decode($comic['artists']))}}" >
                    </div>
                    <div class="mb-3">
                        <label for="scrittore" class="form-label">Scrittore</label>
                        <input type="text" name="scrittore" class="form-control" id="scrittore" value="{{implode(',' ,json_decode($comic['writers']))}}" >
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Modifica</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

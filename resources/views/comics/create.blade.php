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
                    <div class="p-4">
                        <div class="mb-3">
                            <label for="titolo" class="form-label">Titolo</label>
                            <input type="text" name="titolo" class="form-control" id="titolo" placeholder="Titolo..." required>
                        </div>
                        <div class="mb-3">
                            <label for="descrizione" class="form-label">Descrizione</label>
                            <textarea class="form-control" name="descrizione" id="descrizione" cols="30" rows="5" placeholder="Descrizione..." required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="immagine" class="form-label">Immagine</label>
                            <div class="input-group mb-3">
                                <input type="file" name="immagine" class="form-control" id="immagine" required>
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="prezzo" class="form-label">Prezzo</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                                <input type="text" name="prezzo" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="prezzo" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="serie" class="form-label">Serie</label>
                            <input type="text" name="serie" class="form-control" id="serie" placeholder="Serie..." required>
                        </div>
                        <div class="mb-3">
                            <label for="data_di_vendita" class="form-label">Data di vendita</label>
                            <input type="text" name="data_di_vendita" class="form-control" id="data_di_vendita" placeholder="Data di vendita..." required>
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <input type="text" name="tipo" class="form-control" id="tipo" placeholder="Tipo..." required>
                        </div>
                        <div class="mb-3">
                            <label for="artista" class="form-label">Artista</label>
                            <input type="text" name="artista" class="form-control" id="artista" placeholder="Artista..." required>
                        </div>
                        <div class="mb-3">
                            <label for="scrittore" class="form-label">Scrittore</label>
                            <input type="text" name="scrittore" class="form-control" id="scrittore" placeholder="Scrittore..." required>
                        </div>
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary">Aggiungi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

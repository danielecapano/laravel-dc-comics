@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Copertina</label>
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Copertina (url)">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Prezzo in dollari">
            </div>
            <div class="mb-3">
                <label for="cooking_time" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Serie">
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    placeholder="Data di uscita (YYYY-MM-DD)">
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Tipologia</label>
                <input type="text" class="form-control" name="type" id=type" placeholder="Tipologia">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3"
                    placeholder="Descrivi il fumetto"></textarea>
            </div>

            <div class="">
                <input type="submit" class="btn btn-primary" value="crea">
            </div>

        </form>
    </div>
</section>

@endsection
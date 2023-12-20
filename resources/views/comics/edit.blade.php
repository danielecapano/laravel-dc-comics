@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <form action="{{ route('comics.update', $comic) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Titolo"
                    value='{{ $comic->title }}'>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Copertina</label>
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Copertina (url)"
                    value='{{ $comic->thumb }}'>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Prezzo in dollari"
                    value='{{ $comic->price }}'>
            </div>
            <div class="mb-3">
                <label for="cooking_time" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Serie"
                    value='{{ $comic->series }}'>
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    placeholder="Data di uscita (YYYY-MM-DD)" value='{{ $comic->sale_date }}'>
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Tipologia</label>
                <input type="text" class="form-control" name="type" id=type" placeholder="Tipologia"
                    value='{{ $comic->type }}'>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3"
                    placeholder="Descrivi il fumetto"> {!! $comic->description !!} </textarea>
            </div>

            <div class="">
                <input type="submit" class="btn btn-primary" value="salva">
            </div>

        </form>
    </div>
</section>

@endsection
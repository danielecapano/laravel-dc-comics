@extends('layouts.app');

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{ $comic->thumb }}" alt="Copertina" class="w-100">
            </div>
            <div class="col-6">
                <h1>{{ $comic->title }}</h1>
                <p>{{ $comic->description }}</p>
                <h2>{{ $comic->price }}</h2>
            </div>
        </div>
    </div>
</section>

@endsection
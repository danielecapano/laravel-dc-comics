@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Copertina</th>
                    <th>Prezzo</th>
                    <th>Serie</th>
                    <th>Data di uscita</th>
                    <th>Tipologia</th>
                    <th>
                        <a href="{{ route('comics.create') }}" class="btn btn-sm btn-primary">Nuovo fumetto</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                <tr>
                    <td><a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a></td>
                    <td><img src="{{$comic->thumb }}" height="64px" alt="Copertina"></td>
                    <td>{{ $comic->price}}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <div class="d-flex gap-1">
                            <a href="{{ route('comics.edit',$comic) }}" class="btn btn-secondary btn-sm">edit</a>
                            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                        </div>

                        </form>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="6">
                        Nessun fumetto trovato
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>

@endsection
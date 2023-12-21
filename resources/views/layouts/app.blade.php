<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">

    <title>@yield('title','DC.com - The Official Home of DC')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    {{-- <header>
        <div class="container py-1">
            <div class="row">
                <div class="col-auto me-auto">
                    DC Comics
                </div>
                <nav class="col-auto">
                    <ul class="d-flex gap-2">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('comics.index') }}">Comics</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header> --}}

    @include('partials.header')

    <main class="bg-light">
        @yield('content')
    </main>

</body>

</html>
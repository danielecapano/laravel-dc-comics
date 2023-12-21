<header class="header">
    <nav class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo"></a>
                    
                </div>
            </div>
            <div class="col-auto flex-grow-1">
                <ul class="menu d-flex mb-0 ">
                    <li class="menu-item"><a href="#">Characters</a></li>
                    <li class="menu-item active">
                        <a href="{{ route('comics.index') }}">Comics</a>
                    </li>
                    <li class="menu-item"><a href="#">Movies</a></li>
                    <li class="menu-item"><a href="#">TV</a></li>
                    <li class="menu-item"><a href="#">Games</a></li>
                    <li class="menu-item"><a href="#">Collectibles</a></li>
                    <li class="menu-item"><a href="#">Video</a></li>
                    <li class="menu-item"><a href="#">Fans</a></li>
                    <li class="menu-item"><a href="#">News</a></li>
                    <li class="menu-item"><a href="#">Shop</a></li>
                </ul>
            </div>
            <div class="col-auto">
                <input type="text" name="" id="" placeholder="search" class="search">
            </div>
        </div>
    </nav>
</header>
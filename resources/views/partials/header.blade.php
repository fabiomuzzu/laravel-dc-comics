<header>
    {{-- Banner Blue --}}
<div class="blue_banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="d-flex justify-content-end  list-unstyled m-0">
                    <li class="px-2 "><a href="#">DC POWER&#8480; VISA&reg; </a></li>
                    <li class="px-2 "><a href="#">ADDITIONAL DC SITES</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row py-3">

        <!-- HEADER LOGO-->
        <div class="col-3">
            <div class=" d-flex align-items-center h-100">
                <img class="logo" src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="">
            </div>
        </div>

        <!-- HEADER MENU -->
        <div class="col-9">
            <div class="header_menu_container">
                <ul>
                    <li><a class="nav-link {{Route::currentRouteName() === 'homepage' ? 'fw-bold' : ''}}" href="{{ route('homepage') }}">HOME</a></li>
                    <li><a class="nav-link {{Route::currentRouteName() === 'comics.index' ? 'fw-bold' : ''}}" href="{{ route('comics.index') }}">COMICS</a></li>
                    <li>MOVIES</li>
                    <li>TV</li>
                    <li>GAMES</li>
                    <li>COLLECTIBLES</li>
                    <li>VIDEOS</li>
                    <li>FANS</li>
                    <li>NEWS</li>
                    <li>SHOP</li>
                </ul>
            </div>
        </div>

    </div>
</div>
</header>

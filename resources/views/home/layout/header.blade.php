<nav class="navbar d-block navbar-expand-md navbar-dark bg-primary">

    <div class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <div class="d-flex flex-column flex-md-row w-100 d-lg-none">
                <div class="w-100 text-center text-sm-start">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('img/logo-metan-tipografi-2.png') }}" alt="Logo" height="44px">
                    </a>
                </div>

                <div class="w-100" style="height: 55px; width: auto">
                    <a href="#">
                        <div class="bg-secondary text-white text-center w-100" style="height: 100%;">55px x max-screen</div>
                    </a>
                </div>
            </div>

            <div class="w-100">
                <ul class="nav justify-content-around">
                    <li class="nav-item">
                        <a 
                            class="fw-normal nav-link {{ request()->routeIs('home') ? 'active':'' }}"
                            href="{{ route('home') }}"
                        >
                            Home
                        </a>
                    </li>

                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <a 
                                class="fw-normal nav-link {{ request()->routeIs('home') ? 'active':'' }}" 
                                href="{{ route('category.page', $category) }}"
                            >
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

            {{-- <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button 
                        type="button" 
                        class="btn-close text-reset" 
                        data-bs-dismiss="offcanvas"
                        aria-label="Close">
                    </button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-around flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('category.page', $category) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div> --}}
        </div>
    </div>

    <form class="container-fluid py-2 search-bar" id="searchNavbar" aria-labelledby="searchNavbarLabel"
        action="{{ route('search') }}">
        <div class="input-group">
            <input 
                type="text" 
                class="form-control" 
                name="q" 
                placeholder="Cari Artikel" 
                aria-label="Username"
                aria-describedby="basic-addon1"
            />
            <button 
                type="submit" 
                class="input-group-text btn-outline-warning" 
                style="color: black;"
            >
                    <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>
    </form>

</nav>

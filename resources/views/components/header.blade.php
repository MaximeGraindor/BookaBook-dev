<header class="container mx-auto bg-white rounded-lg px-8 py-6 mb-16 shadow-lg flex justify-between text-xl">
    <div class="flex">
        {{-- <a href="{{ url('/') }}" class="w-1/4 mr-8 flex items-center"><img src="{{ asset('storage/assets/logo-BookaBook.png') }}" alt="" class="border-r-2 border-black pr-8"></a> --}}
        <a href="{{ url('/') }}" class="mr-8 flex items-center border-r-2  pr-8 ">Book a Book</a>
        @auth
        <nav class="flex items-center">
            @can('manage-order')
                <a href="/order" class="mr-8 {{Request::path() === 'order' ? ' border-b-2 border-blueLightCustom' : ''}}">Commande</a>
            @endcan
            @can('add-book')
                <a href="/book/create" class="mr-8 {{Request::path() === 'book/create' ? ' border-b-2 border-blueLightCustom' : ''}}">Ajouter un livre</a>
            @endcan
            @can('manage-student')
                <a href="/books" class="mr-8 {{Request::path() === 'books' ? ' border-b-2 border-blueLightCustom' : ''}}">Livres</a>
                <a href="/students" class="mr-8 {{Request::path() === 'students' ? ' border-b-2 border-blueLightCustom' : ''}}">Étudiants</a>
            @endcan
        </nav>
        @endauth
    </div>
    <div class="flex items-center">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto flex">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item mr-6">
                        <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                        </li>
                    @endif
                @else
                    <li class="flex items-center">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle mr-10 flex items-center" href="/account" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->firstname }}&nbsp;{{ Auth::user()->name }}
                            <img src="{{ asset('/storage/profilePicture/'.Auth::user()->picture_path) }}" alt="" class="rounded-full h-10 w-10 flex items-center justify-center ml-4 object-cover">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Se deconnnecter
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</header>

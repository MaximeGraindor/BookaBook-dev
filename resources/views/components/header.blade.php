<header class="container mx-auto bg-white rounded px-8 py-4 mb-16 shadow-lg flex justify-between text-xl">
    <div class="flex">
        <a href="{{ url('/') }}" class="w-1/4 mr-8 flex items-center"><img src="{{ asset('storage/assets/logo-BookaBook.png') }}" alt="" class="border-r-2 border-black pr-8"></a>
        @auth
        <nav class="flex items-center">
            <a href="/" class="mr-6">Livres</a>
            @can('manage-order')
                <a href="/panier" class="mr-6">Panier</a>
                <a href="/commande" class="mr-6">Commande</a>
            @endcan
            @can('add-book')
                <a href="/book/create">Ajouter un livre
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
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/compte" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->firstname }}&nbsp;{{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
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
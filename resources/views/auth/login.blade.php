@extends('layouts.main')

@section('content')


    <main class="container mx-auto max-w-2xl">
        <div>
            <a href="{{ url('/') }}">
                <img src="{{ asset('storage/assets/logo-BookaBook.png') }}" alt="" class="w-1/2 mx-auto mb-10">
            </a>
        </div>
        <section class="bg-white p-10 rounded shadow-lg">
            <h1 class="text-3xl text-center mb-4">
                Se connecter
            </h1>
            <form method="POST" action="{{ route('login') }}" class="w-9/12 mx-auto">
                @csrf
                <div class="mb-4">
                    <label for="email" class="text-lg">{{ __('E-Mail Address') }}</label>

                    <div>
                        <input id="email" type="email" class="bg-input px-3 py-2 w-full rounded" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="text-lg">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="bg-input px-3 py-2 w-full rounded" name="password" required autocomplete="current-password">
                        <p class="mt-2">
                            @if (Route::has('password.request'))
                                <a class="font-semibold" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </p>
                        @error('password')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="text-right">
                    <button type="submit" class="bg-input px-6 py-2">
                        {{ __('Login') }}
                    </button>
                </div>
                <div>
                    <p class="text-center mt-6">
                        Pas encore inscrit ? <a href="/register" class="font-semibold">S'inscire</a>
                    </p>
                </div>

            </form>
        </section>
        <div class="mt-5 pt-5 border-t-2 text-center">
            <img src="{{ asset('storage/assets/logo-HEPL.png') }}" alt="Logo de l'HEPL" class="w-1/2 mx-auto mb-5">
            <p class="text-center" >
                Ce site a été réalisé dans la cadre scolaire de la Haute Ecole de la province de Liège
            </p>
        </div>
    </main>

@endsection

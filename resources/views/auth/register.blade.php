@extends('layouts.main')

@section('content')
    <main class="container mx-auto max-w-2xl">
        <div>
            <p class="text-6xl text-center mb-5">
                Book a Book
            </p>
        </div>
        <section class="bg-white p-10 rounded shadow-lg">
            <h1 class="text-3xl text-center mb-4">
                S'inscire
            </h1>
            <form method="POST" action="{{ route('register') }}" class="w-9/12 mx-auto">
                @csrf
                <div class="mb-4">
                    <label for="name" class="text-lg">{{ __('Name') }}</label>

                    <div>
                        <input class="bg-input px-3 py-2 w-full" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span>
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="text-lg">{{ __('E-Mail Address') }}</label>

                    <div>
                        <input class="bg-input px-3 py-2 w-full" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span>
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="text-lg">{{ __('Password') }}</label>

                    <div>
                        <input class="bg-input px-3 py-2 w-full" id="password" type="password" name="password" required autocomplete="new-password">

                        @error('password')
                        <span>
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password-confirm" class="text-lg">{{ __('Confirm Password') }}</label>
                    <div>
                        <input class="bg-input px-3 py-2 w-full" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="bg-input px-3 py-2">
                        {{ __('Register') }}
                    </button>
                </div>
                <div>
                    <p class="text-center mt-6">
                        Déjà inscrit ? <span class="font-semibold">Se connecter</span>
                    </p>
                </div>
            </form>
        </section>
        
        <div class="mt-5 pt-5 border-t-2">
            <img src="{{ asset('assets/logo-HEPL.png') }}" alt="">
            <p class="text-center" >
                Ce site a été réalisé dans la cadre scolaire de la Haute Ecole de la province de Liège
            </p>
        </div>
    </main>

@endsection

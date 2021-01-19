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
                S'inscire
            </h1>
            <form method="POST" action="{{ route('register') }}" class="w-9/12 mx-auto">
                @csrf
                <div class="mb-4">
                    <label for="firstname" class="text-lg">{{ __('Firstname') }}</label>

                    <div>
                        <input class="bg-input px-3 py-2 w-full rounded" id="firstname" type="text" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                        @error('firstname')
                            <span>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="name" class="text-lg">{{ __('Name') }}</label>

                    <div>
                        <input class="bg-input px-3 py-2 w-full rounded" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                        <input class="bg-input px-3 py-2 w-full rounded" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span>
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="group" class="text-lg">{{ __('Group') }}</label>

                    <div>
                        <input class="bg-input px-3 py-2 w-full rounded" id="group" type="text" name="group" value="{{ old('group') }}" required autocomplete="group" autofocus>

                        @error('group')
                        <span>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="text-lg">{{ __('Password') }}</label>

                    <div>
                        <input class="bg-input px-3 py-2 w-full rounded" id="password" type="password" name="password" required autocomplete="new-password">

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
                        <input class="bg-input px-3 py-2 w-full rounded" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="bg-input px-6 py-2">
                        {{ __('Register') }}
                    </button>
                </div>
                <div>
                    <p class="text-center mt-6">
                        Déjà inscrit ? <a href="/login" class="font-semibold">Se connecter</a>
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

@extends('layouts.main')

@section('content')
    <main class="container mx-auto max-w-2xl">
        <div>
            <p class="text-6xl">
                Book a Book
            </p>
        </div>
        <section class="bg-white p-10 rounded">
            <h1>
                S'inscire
            </h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <label for="name">{{ __('Name') }}</label>

                    <div>
                        <input class="bg-gray-600" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span>
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <div>
                        <input class="bg-gray-600" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span>
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password">{{ __('Password') }}</label>

                    <div>
                        <input class="bg-gray-600" id="password" type="password" name="password" required autocomplete="new-password">

                        @error('password')
                        <span>
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <div>
                        <input class="bg-gray-600" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div>
                    <button type="submit">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </section>
        
        <div>
            <img src="{{ asset('assets/logo-HEPL.png') }}" alt="">
            <p>
                Ce site a été réalisé dans la cadre scolaire de la Haute Ecole de la province de Liège
            </p>
        </div>
    </main>

@endsection

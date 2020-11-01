@extends('layouts.main')


@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <section>
            <h2 class="text-3xl mb-12">Livres obligatoires</h2>
            <div class="grid grid-cols-4 gap-6">
                @foreach($books as $book)
                    @if($book->required === 1)
                        <div class="">
                            <div class="mx-auto bg-white px-3 py-2">
                                <img src="{{ asset('storage/books/'.$book->cover_path) }}" alt="{{ $book->name }}" class="w-full mx-auto">
                            </div>
                            <div class="bg-input p-6 flex justify-between">
                                <form action="">
                                    <input type="submit" value="Ajouter" class="cursor-pointer">
                                </form>
                                <span>
                                    {{ $book->price }}
                                </span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <section class="mt-16">
            <h2 class="text-3xl mb-12">Livres facultatifs</h2>
            <div class="grid grid-cols-4 gap-6">
                @foreach($books as $book)
                    @if($book->required === 0)
                        <div class="">
                            <div class="w-8/12 mx-auto bg-white px-3 py-2">
                                <img src="{{ asset('storage/books/'.$book->cover_path) }}" alt="{{ $book->name }}" class="w-full mx-auto">
                            </div>
                            <div class="bg-input p-6 flex justify-between">
                                <form action="">
                                    <input type="submit" value="Ajouter" class="cursor-pointer">
                                </form>
                                <span>
                                    {{ $book->price }}
                                </span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

    </main>


@endsection
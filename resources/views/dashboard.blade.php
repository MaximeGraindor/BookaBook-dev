@extends('layouts.main')


@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <h1 class="sr-only">Book a Book</h1>
        <section>
            <h2 class="text-4xl mb-8">Livres obligatoires</h2>
            <div class="grid grid-cols-4 gap-10">
                @foreach($books as $book)
                    @if($book->required === 1)
                        <div class="bg-white flex flex-col justify-between rounded shadow-md">
                            <div class="mx-auto bg-white px-3 py-2 w-2/3 h-full flex items-center justify-center">
                                <a href="book/{{ $book->id }}"><img src="{{ asset('storage/books/'.$book->cover_path) }}" alt="{{ $book->name }}" class="w-full mx-auto border-2"></a>
                            </div>
                            <div class="bg-blueLightCustom p-4 flex text-xl">
                                @can('manage-order')
                                <form action="/order/add" method="POST">
                                    @csrf
                                    <button type="submit" class="flex items-center"><img src="{{ asset('/storage/assets/add-to-basket.svg') }}" alt="Ajouter au panier" class="w-1/12 inline mr-1">Ajouter</button>
                                    <input type="hidden" name="bookId" value="{{ $book->id}}">
                                </form>
                                @endcan
                                <span>
                                    {{ $book->sales[0]->student_price }}€
                                </span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <section class="mt-16">
            <h2 class="text-4xl mb-8">Livres facultatifs</h2>
            <div class="grid grid-cols-4 gap-10">
                @foreach($books as $book)
                    @if($book->required === 0)
                    <div class="bg-white flex flex-col justify-between rounded shadow-md">
                        <div class="mx-auto bg-white px-3 py-2 w-2/3 h-full flex items-center justify-center">
                                <img src="{{ asset('storage/books/'.$book->cover_path) }}" alt="{{ $book->name }}" class="w-full mx-auto border-2">
                            </div>
                            <div class="bg-blueLightCustom p-4 flex justify-between">
                                <form action="/order/add" method="POST">
                                    @csrf
                                    <button type="submit" class="flex items-center"><img src="{{ asset('/storage/assets/add-to-basket.svg') }}" alt="Ajouter au panier" class="w-1/12 inline mr-1">Ajouter</button>
                                    <input type="hidden" name="bookId" value="{{ $book->id}}">
                                </form>
                                <span>
                                    {{ $book->sales[0]->student_price }}€
                                </span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

    </main>


@endsection

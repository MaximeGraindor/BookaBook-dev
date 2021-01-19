@extends('layouts.main')


@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <h1 class="sr-only">Book a Book</h1>
        <section>
            <h2 class="mb-8 text-4xl">Livres obligatoires</h2>
            <div class="grid grid-cols-4 gap-10">
                @foreach($books as $book)
                    @if($book->required === 1)
                        <div class="flex flex-col justify-between bg-white rounded shadow-md">
                            <div class="flex items-center justify-center w-2/3 h-full px-3 py-2 mx-auto bg-white">
                                <a href="book/{{ $book->id }}"><img src="{{ asset('storage/books/'.$book->cover_path) }}" alt="{{ $book->name }}" class="w-full mx-auto border-2"></a>
                            </div>
                            <div class="flex p-4 text-xl bg-blueLightCustom">
                                @can('manage-order')
                                <form action="/order/add" method="POST">
                                    @csrf
                                    <button type="submit" class="flex items-center"><img src="{{ asset('/storage/assets/add-to-basket.svg') }}" alt="Ajouter au panier" class="inline w-1/12 mr-1">Ajouter</button>
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
            <h2 class="mb-8 text-4xl">Livres facultatifs</h2>
            <div class="grid grid-cols-4 gap-10">
                @foreach($books as $book)
                    @if($book->required === 0)
                        <div class="flex flex-col justify-between bg-white rounded shadow-md">
                            <div class="flex items-center justify-center w-2/3 h-full px-3 py-2 mx-auto bg-white">
                                <a href="book/{{ $book->id }}"><img src="{{ asset('storage/books/'.$book->cover_path) }}" alt="{{ $book->name }}" class="w-full mx-auto border-2"></a>
                            </div>
                            <div class="flex justify-between p-4 bg-blueLightCustom">
                                @can('manage-order')
                                <form action="/order/add" method="POST">
                                    @csrf
                                    <button type="submit" class="flex items-center"><img src="{{ asset('/storage/assets/add-to-basket.svg') }}" alt="Ajouter au panier" class="inline w-1/12 mr-1">Ajouter</button>
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

    </main>


@endsection

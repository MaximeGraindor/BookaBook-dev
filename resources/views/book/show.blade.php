@extends('layouts.main')



@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <div class="flex gap-5">
            <div class="w-3/12">
                <img src="{{ asset('storage/books/'.$book->cover_path) }}" alt="{{ $book->name }}" class="w-full"></a>
            </div>
            <div class="w-full">
                <div class="flex justify-between">
                    <h1 class="text-4xl font-bold">
                        {{ $book->name}}
                    </h1>
                    @can('manage-book')
                    <div class="flex gap-5">
                        <form action="/book/{{ $book->id }}/edit" method="get">
                            @csrf
                            <input type="submit" value="Modifier" class="bg-blueDarkCustom text-white py-2 px-4 rounded cursor-pointer font-bold">
                        </form>
                        <form action="/book/{{ $book->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Supprimer" class="bg-blueDarkCustom text-white py-2 px-4 rounded cursor-pointer font-bold">
                        </form>
                    </div>
                    @endcan
                </div>

                <p class="text-xl">
                    Par&nbsp;
                    @foreach ($book->authors as $author)
                        <span>{{ $author->name }}</span>
                    @endforeach
                </p>
                <p class="text-xl">
                    Editeur : {{ $book->ISBN }}
                </p>
                <p class="text-xl">
                    ISBN : {{ $book->ISBN }}
                </p>
                <p class="text-xl">
                    Prix&nbsp;:&nbsp;
                    @foreach ($book->sales as $sale)
                        <span>{{ $sale->student_price }}€</span>
                    @endforeach
                </p>
            </div>
        </div>

        <section class="mt-16">
            <h2 class="text-2xl mb-6">
                Voir d'autre livre
            </h2>
            <div class="grid grid-cols-4 gap-10">
                @foreach ($randomBooks as $randomBook)
                <div class="bg-white flex flex-col justify-between rounded shadow-md">
                    <div class="mx-auto bg-white px-3 py-2 w-2/3 h-full flex items-center justify-center">
                        <a href="/book/{{ $randomBook->id }}">
                            <img src="{{ asset('storage/books/'.$randomBook->cover_path) }}" alt="{{ $randomBook->name }}" class="w-full mx-auto border-2">
                        </a>
                    </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection


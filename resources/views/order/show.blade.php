@extends('layouts.main')



@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <h1 class="text-4xl mb-6">
            Commandes n°{{$order->id }} - {{$order->status[0]->name}}
        </h1>

        <section>
            <h2 class="text-3xl">
                Liste des livres
            </h2>

            @foreach ($order->books as $book)
                <div class="bg-blueLightCustom p-6 mt-10 flex gap-5">
                    <div class="w-1/12">
                        <img src="{{ asset('storage/books/'.$book->cover_path) }}" alt="" class="w-full">
                    </div>
                    <div class="w-full flex flex-col justify-between">
                        <div class="">
                            <div class="flex justify-between">
                                <span class="text-3xl font-bold">
                                {{ $book->name }}
                                </span>
                                <span class="text-3xl font-bold">
                                    {{ $book->sales[0]->student_price }}€
                                </span>
                            </div>
                            <p class="text-xl">
                            {{ $book->ISBN }}
                            </p>
                        @if ($book->required)
                            <p>
                                Obligatoire
                            </p>
                        @endif
                        <p class="text-xl">
                            {{ $book->pivot->quantity }}
                        </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </main>

@endsection


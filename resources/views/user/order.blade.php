@extends('layouts.main')

<x-header></x-header>

@section('content')
    <main class="container mx-auto">
        <h1 class="text-5xl">
            ORDER
        </h1>

        @foreach($orders as $key=>$order)
            <div class="bg-blue-200 p-6 mt-10">
                <p class="text-3xl font-bold mb-6">
                    Order n°{{$key+1}}
                </p>
                @foreach($order->books as $book)
                    <p>
                        {{ $book->name }}
                        -
                        <span>quantity : {{ $book->pivot->quantity }}</span>
                    </p>

                @endforeach

            </div>
        @endforeach
    </main>

@endsection
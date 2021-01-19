@extends('layouts.main')



@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <h1 class="mb-6 text-4xl">
            Commande
        </h1>

        <section>
            <div class="flex justify-between mb-6">
                <h2 class="text-3xl">
                    Panier
                </h2>
                <p class="text-xl">
                    {{$totalOrder}}€
                </p>
            </div>
            @if ($draftOrder)
                @foreach($draftOrder->books as $book)
                    <div class="flex gap-5 p-6 mt-10 bg-blueLightCustom">
                        <div class="w-1/12">
                        <img src="{{ asset('storage/books/'.$book->cover_path) }}" alt="" class="w-full">
                        </div>
                        <div class="flex flex-col justify-between w-full">
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
                            <form action="/bookOrder/{{ $book->pivot->id }}" method="post" class="text-right">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Supprimer" class="px-3 py-2 bg-white rounded">
                                <input type="hidden" name="bookId" value="{{$book->id}}">
                            </form>
                        </div>
                    </div>
                @endforeach
                <form action="/order/validatedOrder" method="post" class="mt-10 text-right">
                    @csrf
                    <input type="submit" value="valider" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                    <input type="hidden" name="draftOrderId" value="{{ $draftOrderId }}">
                </form>
            @else
            <p>
                Vous n'avez actuellement pas de livre dans votre panier.
            </p>
            @endif


        </section>

        <div class="p-6 mt-10 bg-blue-400">
            <h2 class="mb-6 text-3xl font-bold">
                Commande en cours
            </h2>
            @if ($waitingOrders)
                @foreach($waitingOrders as $waitingOrder)
                    <div class="flex gap-5 p-6 mt-10 bg-blueLightCustom">
                        <div class="flex flex-col justify-between w-full">
                            <div class="">
                                <div class="flex justify-between">
                                    <a href="/order/{{ $waitingOrder->id }}" class="text-2xl font-bold hover:underline">
                                        commande n°{{ $waitingOrder->id }} du {{ ($waitingOrder->created_at)->format('d M') }}
                                    </a>
                                </div>
                                <p class="text-xl">
                                {{ $waitingOrder->ISBN }}
                                </p>
                            @if ($waitingOrder->required)
                                <p>
                                    Obligatoire
                                </p>
                            @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>
                    Vous n'avez pas de commande en cours
                </p>
            @endif

        </div>
    </main>

@endsection


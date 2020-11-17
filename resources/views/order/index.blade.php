@extends('layouts.main')



@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <h1 class="text-4xl mb-6">
            Commande
        </h1>

        <section>
            <h2 class="text-3xl mb-6">
                Panier
            </h2>
            @if ($draftOrderBooks)
                @foreach($draftOrderBooks as $book)
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
                                        {{ $book->student_price }}€
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
                            <form action="/book/{{ $book->id }}" method="post" class="text-right">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Supprimer" class="px-3 py-2 bg-white rounded">
                                <input type="hidden" value="{{$book->id}}">
                            </form>
                        </div>
                    </div>
                @endforeach
                <form action="/order/validatedOrder" method="post" class="text-right mt-10">
                    @csrf
                    <input type="submit" value="valider" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <input type="hidden" name="draftOrderId" value="{{ $draftOrderId }}">
                </form>
            @else
            <p>
                Vous n'avez actuellement pas de livre dans votre panier.
            </p>
            @endif


        </section>

        <div class="bg-blue-200 p-6 mt-10">
            <h2 class="text-3xl font-bold mb-6">
                Commande en cours
            </h2>
            @if ($waitingOrders)
                @foreach($waitingOrders as $waitingOrder)
                    <div class="bg-blueLightCustom p-6 mt-10 flex gap-5">
                        <div class="w-full flex flex-col justify-between">
                            <div class="">
                                <div class="flex justify-between">
                                    <span class="text-3xl font-bold">
                                    {{ $waitingOrder->id }}
                                    </span>
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


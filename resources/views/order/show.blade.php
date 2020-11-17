@extends('layouts.main')



@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <h1 class="text-4xl mb-6">
            Commandes
        </h1>

        <section>
            <h2 class="text-3xl">
                Panier
            </h2>
            @foreach($orders as $key=>$order)
                <div class="bg-blueLightCustom p-6 mt-10 flex gap-5">
                    <div class="w-1/12">
                       <img src="{{ asset('storage/books/'.$order->cover_path) }}" alt="" class="w-full">
                    </div>
                    <div class="w-full flex flex-col justify-between">
                        <div class="">
                            <div class="flex justify-between">
                                <span class="text-3xl font-bold">
                                   {{ $order->title }}
                                </span>
                                <span class="text-3xl font-bold">
                                    {{ $order->student_price }}€
                                </span>
                            </div>
                            <p class="text-xl">
                               {{ $order->ISBN }}
                            </p>
                           @if ($order->required)
                            <p>
                                Obligatoire
                            </p>
                           @endif
                        </div>
                        <form action="/order/{{ $order->id }}" method="post" class="text-right">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Supprimer" class="px-3 py-2 bg-white rounded">
                            <input type="hidden" value="{{$order->id}}">
                        </form>
                   </div>
                </div>
            @endforeach
            <form action="/order/validateOrder" method="post" class="text-right mt-10">
                @csrf
                <input type="submit" value="valider" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{-- <input type="hidden" name="orderId" value="{{ $order->id }}"> --}}
            </form>
        </section>

        <div class="bg-blue-200 p-6 mt-10">
            <h2 class="text-3xl font-bold mb-6">
                Commande en cours
            </h2>
        </div>
    </main>

@endsection


@extends('layouts.main')
@section('content')

    <x-header></x-header>
    <main class="container mx-auto">
        <h1 class="mb-6 text-4xl">
            Modifier {{$book->name}}
        </h1>

        <form action="/book/{{ $book->id }}" method="post" class="grid grid-cols-2 gap-5">
            @csrf
            <div class="flex flex-col mb-5">
                <label for="" class="mb-1 text-xl">Image du livre</label>
                <input type="file" name="" id="" class="px-4 py-3 text-lg bg-white">
            </div>

            <div class="flex flex-col mb-5">
                <label for="" class="mb-1 text-xl">Nom</label>
                <input type="text" name="" id="" class="px-4 py-3 text-lg">
            </div>

            <div class="flex flex-col mb-5">
                <label for="" class="mb-1 text-xl">Auteurs</label>
                <input type="text" name="" id="" class="px-4 py-3 text-lg">
            </div>

            <div class="flex flex-col mb-5">
                <label for="" class="mb-1 text-xl">Maison d'éditions</label>
                <input type="text" name="" id="" class="px-4 py-3 text-lg">
            </div>

            <div class="flex flex-col mb-5">
                <label for="" class="mb-1 text-xl">ISBN</label>
                <input type="text" name="" id="" class="px-4 py-3 text-lg">
            </div>

            <div class="flex mb-5">
                <div>
                    <label for="" class="mb-1 text-xl">prix de vente</label>
                    <input type="text" name="" id="" class="px-4 py-3 text-lg">
                </div>
                <div>
                    <label for="" class="mb-1 text-xl">prix proposé</label>
                    <input type="text" name="" id="" class="px-4 py-3 text-lg">
                </div>
            </div>

            <div>
                <input type="submit" value="Modifier" class="px-4 py-3 border-2 border-black">
            </div>
        </form>

    </main>
@endsection

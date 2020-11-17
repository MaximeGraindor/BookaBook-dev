@extends('layouts.main')
@section('content')

    <x-header></x-header>
    <main class="container mx-auto">
        <h1 class="text-4xl mb-6">
            Modifier {{$book->name}}
        </h1>

        <form action="/book" method="post" class="grid grid-cols-2 gap-5">
            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Image du livre</label>
                <input type="file" name="" id="" class="px-4 py-3 text-lg bg-white">
            </div>

            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Nom</label>
                <input type="text" name="" id="" class="px-4 py-3 text-lg">
            </div>

            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Auteurs</label>
                <input type="text" name="" id="" class="px-4 py-3 text-lg">
            </div>

            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Maison d'éditions</label>
                <input type="text" name="" id="" class="px-4 py-3 text-lg">
            </div>

            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">ISBN</label>
                <input type="text" name="" id="" class="px-4 py-3 text-lg">
            </div>

            <div class="mb-5 flex">
                <div>
                    <label for="" class="text-xl mb-1">prix de vente</label>
                    <input type="text" name="" id="" class="px-4 py-3 text-lg">
                </div>
                <div>
                    <label for="" class="text-xl mb-1">prix proposé</label>
                    <input type="text" name="" id="" class="px-4 py-3 text-lg">
                </div>
            </div>

            <div>
                <input type="submit" value="Modifier" class="px-4 py-3 border-2 border-black">
            </div>
        </form>

    </main>
@endsection

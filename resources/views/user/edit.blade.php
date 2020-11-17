@extends('layouts.main')



@section('content')
    <x-header></x-header>

    <main class="container mx-auto">
        <h1 class="text-4xl mb-6">
            Modifier son profil
        </h1>

        <form action="/account/{{$user->id}}" method="post" enctype="multipart/form-data" class="grid grid-cols-2 gap-5">
            @method('PATCH')
            @csrf

            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Prénom :</label>
                <input type="text" value="{{ $user->firstname }}" name="firstname" class="px-4 py-3 text-lg">
            </div>
            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Nom :</label>
                <input type="text" value="{{ $user->name }}" name="name" class="px-4 py-3 text-lg">
            </div>
            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Mail :</label>
                <input type="text" value="{{ $user->email }}" name="email" class="px-4 py-3 text-lg">
            </div>
            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Groupe :</label>
                <input type="text" value="{{ $user->group }}" name="group" class="px-4 py-3 text-lg">
            </div>
            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Photo de profil :</label>
                <input type="file">
            </div>
            <div class="text-right">
                <input type="submit" value="envoyer" class="px-4 py-3 border-2 border-black">
            </div>
        </form>
    </main>
@endsection

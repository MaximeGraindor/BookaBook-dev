@extends('layouts.main')



@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <h1 class="text-4xl mb-6">
            Ajouter un livre
        </h1>

        <form action="/books" method="post" class="grid grid-cols-2 gap-5">
            @csrf
            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Image du livre</label>
                <input type="file" name="cover" id="" class="px-4 py-3 text-lg bg-white border-2 border-red-900">
                @error('cover')
                    <p>
                        {{$message}}
                    </p>
                @enderror
            </div>


            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Nom</label>
                <input type="text" name="name" id="" class="px-4 py-3 text-lg border-2 border-red-900">
                @error('name')
                    <p>
                        {{$message}}
                    </p>
                @enderror
            </div>


            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Auteurs</label>
                <select name="author" id="author" class="px-4 py-3 text-lg border-2 border-red-900">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id}}">{{ $author->name }}</option>
                    @endforeach

                </select>
                @error('author')
                    <p>
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">Maison d'éditions</label>
                <input type="text" name="publisher" id="" class="px-4 py-3 text-lg border-2 border-red-900">
                @error('publisher')
                    <p>
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="mb-5 flex flex-col">
                <label for="" class="text-xl mb-1">ISBN</label>
                <input type="text" name="isbn" id="" class="px-4 py-3 text-lg border-2 border-red-900">
                @error('isbn')
                    <p>
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="mb-5 flex">
                <div>
                    <label for="" class="text-xl mb-1">prix de vente</label>
                    <input type="text" name="public_price" id="" class="px-4 py-3 text-lg border-2 border-red-900">
                </div>
                <div>
                    <label for="" class="text-xl mb-1">prix proposé</label>
                    <input type="text" name="student_price" id="" class="px-4 py-3 text-lg border-2 border-red-900">
                </div>
            </div>

            <div>
                <input type="submit" value="Ajouter" class="px-4 py-3 border-2 border-black">
            </div>
        </form>

    </main>

@endsection

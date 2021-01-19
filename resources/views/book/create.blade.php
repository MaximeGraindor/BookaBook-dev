@extends('layouts.main')



@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <h1 class="mb-6 text-4xl">
            Ajouter un livre
        </h1>

        <form action="/books" method="post" class="grid grid-cols-2 gap-5">
            @csrf
            <div class="flex flex-col mb-5">
                <label for="" class="mb-1 text-xl">Image du livre</label>
                <input type="file" name="cover_path" id="" class="px-4 py-3 text-lg bg-white border-2 border-red-900" value="{{ old('cover_path') }}">
                @error('cover_path')
                    <p>
                        {{$message}}
                    </p>
                @enderror
            </div>


            <div class="flex flex-col mb-5">
                <label for="name" class="mb-1 text-xl">Nom</label>
                <input type="text" name="name" id="name" class="px-4 py-3 text-lg border-2 border-red-900" value="{{ old('name') }}">
                @error('name')
                    <p>
                        {{$message}}
                    </p>
                @enderror
            </div>


            <div class="flex flex-col mb-5">
                <label for="author" class="mb-1 text-xl">Auteurs</label>
                <input type="text" name="author" id="author" class="px-4 py-3 text-lg border-2 border-red-900" value="{{ old('author') }}">
                @error('author')
                    <p>
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="flex flex-col mb-5">
                <label for="publisher" class="mb-1 text-xl">Maison d'éditions</label>
                <input type="text" name="publisher" id="" class="px-4 py-3 text-lg border-2 border-red-900" value="{{ old('publisher') }}">
                @error('publisher')
                    <p>
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="flex flex-col mb-5">
                <label for="ISBN" class="mb-1 text-xl">ISBN</label>
                <input type="text" name="ISBN" id="ISBN" class="px-4 py-3 text-lg border-2 border-red-900" value="{{ old('ISBN') }}">
                @error('isbn')
                    <p>
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="flex mb-5">
                <div>
                    <label for="public_price" class="mb-1 text-xl">prix de vente</label>
                    <input type="text" name="public_price" id="public_price" class="px-4 py-3 text-lg border-2 border-red-900" value="{{ old('public_price') }}">
                    @error('public_price')
                    <p>
                        {{$message}}
                    </p>
                @enderror
                </div>
                <div>
                    <label for="student_price" class="mb-1 text-xl">prix proposé</label>
                    <input type="text" name="student_price" id="student_price" class="px-4 py-3 text-lg border-2 border-red-900" value="{{ old('student_price') }}">
                    @error('student_price')
                    <p>
                        {{$message}}
                    </p>
                @enderror
                </div>
            </div>

            <div class="flex flex-col col-span-2 row-span-2 mb-5">
                <label for="editing_details" class="mb-1 text-xl">Détails d'édition</label>
                <input type="text" name="editing_details" id="editing_details" class="px-4 py-3 text-lg border-2 border-red-900" value="{{ old('public_price') }}">
                @error('editing_details')
                    <p>
                        {{$message}}
                    </p>
                @enderror
            </div>

            <div class="col-span 2">
                <label for="required" class="mb-1 text-xl">Obligatoire</label>
                <input type="checkbox" name="required" id="required" class="px-4 py-3 text-lg border-2 border-red-900" value="{{ old('public_price') }}">
            </div>
            @error('required')
                    <p>
                        {{$message}}
                    </p>
                @enderror

            <div class="col-span 2">
                <input type="submit" value="Ajouter" class="px-4 py-3 border-2 border-black">
            </div>
        </form>

    </main>

@endsection

@extends('layouts.main')

@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <div class="mb-12 flex justify-between items-center">
            <h1 class="text-4xl">
                Liste des livres disponibles
            </h1>
            <a href="book/create" class="bg-blueLightCustom py-2 px-4 rounded cursor-pointer hover:font-bold shadow">Ajouter un livre</a>
        </div>

        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blueLightCustom">
                <tr>
                    <th class="px-6 py-5 bg-gray-50 text-left text-lg font-bold">
                        Titre
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-lg font-bold">
                        ISBN
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-lg font-bold">
                        Mise a jour
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($books as $book)
                    <tr class="mb-5">
                        <td class="px-6 py-4"><a href="book/{{ $book->id }}" class="hover:font-bold">{{ $book->name }}</a></td>
                        <td class="px-6 py-4">{{ $book->ISBN }}</td>
                        <td class="px-6 py-4">{{ $book->updated_at }}</td>
                    </tr>
                @endforeach

            </tbody>
            </table>
        </div>
        <div class="mt-6">

        </div>
    </main>
@endsection

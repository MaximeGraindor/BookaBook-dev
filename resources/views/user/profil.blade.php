@extends('layouts.main')



@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <div class="flex gap-5">
            <div class="w-2/3">
                <img src="{{ asset('storage/profilePicture/profilePicture.png') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="w-full">
                <div class="flex justify-between">
                    <h1 class="text-4xl font-bold">
                        {{ $user->firstname }} {{ $user->name }}
                    </h1>
                    <div>
                        <form action="/account/{{ $user->id }}/edit" method="get">
                            <input type="submit" value="Modifier" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        </form>
                    </div>
                </div>
                <ul>
                    <li>{{ $user->email }}</li>
                    <li>{{ $user->group }}</li>
                </ul>
            </div>
        </div>
    </main>






@endsection

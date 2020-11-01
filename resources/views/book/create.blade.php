@extends('layouts.main')

<x-header></x-header>

@section('content')
    <main class="container mx-auto">
        <h1 class="text-5xl">
            Ajouter un livrement
        </h1>

        <form action="">
            <div class="mb-5">
                <label for="">Image du livre</label>
                <input type="file" name="" id="">
            </div>

            <div class="mb-5">
                <label for="">Nom</label>
                <input type="text" name="" id="">
            </div>

            <div class="mb-5">
                <label for="">Auteurs</label>
                <input type="text" name="" id="">
            </div>

            <div class="mb-5">
                <label for="">Maison d'éditions</label>
                <input type="text" name="" id="">
            </div>

            <div class="mb-5">
                <label for="">ISBN</label>
                <input type="text" name="" id="">
            </div>

            <div class="mb-5">
                <div>
                    <label for="">prix de vente</label>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <label for="">prix proposé</label>
                    <input type="text" name="" id="">
                </div>
            </div>

            <div>
                <input type="submit" value="Ajouter">
            </div>
        </form>

    </main>

@endsection

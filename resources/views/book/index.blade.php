@extends('layouts.main')

@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <livewire:show-books />
    </main>
@endsection

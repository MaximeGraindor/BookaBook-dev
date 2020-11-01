@extends('layouts.main')

<x-header></x-header>

@section('content')
    <h1>
        TEST
    </h1>
    <ul>
        <li>{{ $user->firstname }}</li>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->group }}</li>
    </ul>

    <a href="/compte/{{ $user->id }}/edit">Modifier</a>
@endsection

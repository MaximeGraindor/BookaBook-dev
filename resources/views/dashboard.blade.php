@extends('layouts.main')

@section('content')
    @foreach($books as $book)
        <p>
            {{ $book->name }}
        </p>
        <p>
            {{ asset('books/'.$book->cover_path) }}
        </p>
        <img src="{{ asset('books/'.$book->cover_path) }}" alt="">
    @endforeach
@endsection
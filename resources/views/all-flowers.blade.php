@extends('myTemplate')

@section('title', 'Flowers list')

@section('content')

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @foreach ($flowers as $flower)
        <p>Name : {{ $flower->name }}</p>
        <p>Price : {{ $flower->price }} $</p>
        <a href="/flowers/{{ $flower->id }}">Detail page</a> /
        <a href="/flowers/update/{{ $flower->id }}">Update page</a>
        <hr>
    @endforeach

@endsection

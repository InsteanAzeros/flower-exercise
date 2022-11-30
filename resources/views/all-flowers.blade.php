@extends('myTemplate')

@section('title', 'Flowers list')

@section('content')

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    @foreach ($flowers as $flower)
        <p>Name : {{ $flower->name }}</p>
        <p>Price : {{ $flower->price }} $</p>
        <a href="{{ route('flower.details', $flower->id) }}">Detail page</a> /
        <a href="/flowers/update/{{ $flower->id }}">Update</a> /

        <form action="/flowers/delete/{{ $flower->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>

        <hr>
    @endforeach

@endsection

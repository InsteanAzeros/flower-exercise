@extends('myTemplate')

@section('title')
    {{ $flower->name }} - Detail page
@endsection

@section('content')
    <p>Name : {{ $flower->name }}</p>
    <p>Price : {{ $flower->price }} $</p>
    <hr>
@endsection

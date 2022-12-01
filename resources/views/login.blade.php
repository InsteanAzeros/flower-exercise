@extends('myTemplate')

@section('title', 'Login')

@section('content')

    <h2>Login</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Email">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>


        <label for="password">Password</label>
        <input type="text" name="password" id="password" placeholder="Password">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <input type="submit" value="Login">
    </form>

@endsection

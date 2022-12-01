@extends('myTemplate')

@section('title', 'Register')

@section('content')

    <h2>Register</h2>

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

        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username">
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

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

        <input type="submit" value="Register">
    </form>

@endsection

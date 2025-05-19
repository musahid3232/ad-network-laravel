@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input id="email" name="email" type="email" class="form-control" required autofocus>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" name="password" type="password" class="form-control" required>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
@endsection

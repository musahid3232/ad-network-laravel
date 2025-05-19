@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<h1>Admin Dashboard</h1>
<p>Welcome, {{ auth()->user()->name }}!</p>

<a href="{{ route('admin.users') }}" class="btn btn-primary">Manage Users</a>
@endsection

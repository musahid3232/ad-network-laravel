@extends('layouts.app')

@section('title', 'Publisher Dashboard')

@section('content')
<h1>Welcome, {{ auth()->user()->name }}</h1>

<p>Your total earnings: <strong>${{ number_format($earnings, 2) }}</strong></p>

<a href="{{ route('publisher.earningsReport') }}" class="btn btn-primary">View Earnings Report</a>
@endsection

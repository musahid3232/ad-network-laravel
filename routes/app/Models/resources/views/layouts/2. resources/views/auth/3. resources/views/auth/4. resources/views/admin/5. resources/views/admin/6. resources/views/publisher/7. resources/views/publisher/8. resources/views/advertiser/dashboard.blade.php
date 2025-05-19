@extends('layouts.app')

@section('title', 'Advertiser Dashboard')

@section('content')
<h1>Welcome, {{ auth()->user()->name }}</h1>

<a href="{{ route('advertiser.createAd') }}" class="btn btn-success mb-3">Create New Ad</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>URL</th>
            <th>Budget</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($ads as $ad)
        <tr>
            <td>{{ $ad->title }}</td>
            <td><a href="{{ $ad->url }}" target="_blank">{{ $ad->url }}</a></td>
            <td>${{ number_format($ad->budget, 2) }}</td>
            <td>{{ ucfirst($ad->status) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $ads->links() }}
@endsection

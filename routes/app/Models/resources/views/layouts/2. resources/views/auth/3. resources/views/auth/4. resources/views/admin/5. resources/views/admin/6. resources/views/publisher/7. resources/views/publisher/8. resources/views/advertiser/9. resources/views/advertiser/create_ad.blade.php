@extends('layouts.app')

@section('title', 'Create New Ad')

@section('content')
<h2>Create New Ad</h2>

<form action="{{ route('advertiser.storeAd') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Ad Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label for="url" class="form-label">Target URL</label>
        <input type="url" name="url" id="url" class="form-control" required>
        @error('url') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label for="budget" class="form-label">Budget ($)</label>
        <input type="number" name="budget" id="budget" class="form-control" required min="1">
        @error('budget') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Create Ad</button>
</form>
@endsection

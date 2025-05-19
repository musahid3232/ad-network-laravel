@extends('layouts.app')

@section('title', 'Users List')

@section('content')
<h2>Users</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Banned</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ ucfirst($user->role) }}</td>
            <td>{{ $user->is_banned ? 'Yes' : 'No' }}</td>
            <td>
                @if (!$user->is_banned)
                    <form action="{{ route('admin.banUser', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger btn-sm">Ban</button>
                    </form>
                @else
                    <form action="{{ route('admin.unbanUser', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success btn-sm">Unban</button>
                    </form>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $users->links() }}

@endsection

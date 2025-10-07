@extends('admin.layout.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Clients Management</h3>
        <a href="{{ route('admin.clients.create') }}" class="btn btn-primary">Add Client</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Bio</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ ucfirst($client->type) }}</td>
                    <td>{{ Str::limit($client->bio, 40) }}</td>
                    <td>
                        @if($client->image)
                            <img src="{{ asset('storage/' . $client->image) }}" alt="" width="50">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.clients.destroy', $client->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">No clients found.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $clients->links() }}
</div>
@endsection

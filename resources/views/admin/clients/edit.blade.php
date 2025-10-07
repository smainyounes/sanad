@extends('admin.layout.app')

@section('content')
<div class="container">
    <h3>Edit Client</h3>

    <form action="{{ route('admin.clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('admin.clients.partials.form', ['client' => $client])
        
        <button class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection

@extends('admin.layout.app')

@section('content')
<div class="container">
    <h3>Add New Client</h3>

    <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('admin.clients.partials.form', ['client' => null])
        
        <button class="btn btn-success mt-3">Save</button>
    </form>
</div>
@endsection

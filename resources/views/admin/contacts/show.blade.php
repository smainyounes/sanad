@extends('admin.layout.app')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h4>Contact Details</h4>
            </div>
            <div class="card-body">
                <p><strong>Nom:</strong> {{ $contact->name }}</p>
                <p><strong>Date:</strong> {{ $contact->created_at?->format('d/m/Y H:i') }}</p>
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                <p><strong>Sujet:</strong> {{ $contact->subject ?? 'N/A' }}</p>
                <p><strong>Message:</strong> {{ $contact->message }}</p>

                <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary">Retour</a>
            </div>
        </div>
    </div>
@endsection

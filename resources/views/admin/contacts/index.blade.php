@extends('admin.layout.app')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h4>Contacts List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nom complet</th>
                                <th>Date</th>
                                <th>Email</th>
                                <th>Sujet</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->created_at?->format('d/m/Y H:i') }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ Str::limit($contact->message, 50) }}</td>
                                    <td>
                                        <a href="{{ route('admin.contacts.show', $contact->id) }}" class="btn btn-info btn-sm">Afficher</a>
            
                                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('êtes vous sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        
        
                <div>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
        
    </div>
@endsection

@extends('admin.layout.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Specialities</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            + Add Speciality
        </button>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Created</th>
                <th width="180">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($specialities as $speciality)
                <tr>
                    <td>{{ $speciality->id }}</td>
                    <td>{{ $speciality->name }}</td>
                    <td>{{ $speciality->created_at->format('Y-m-d') }}</td>
                    <td>
                        <button 
                            class="btn btn-sm btn-warning edit-btn" 
                            data-id="{{ $speciality->id }}" 
                            data-name="{{ $speciality->name }}"
                            data-bs-toggle="modal"
                            data-bs-target="#editModal">
                            Edit
                        </button>

                        <form action="{{ route('admin.specialities.destroy', $speciality->id) }}" 
                              method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button 
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this speciality?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">No specialities found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $specialities->links() }}
</div>

{{-- CREATE MODAL --}}
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{ route('admin.specialities.store') }}" method="POST" class="modal-content">
        @csrf
        <div class="modal-header">
            <h5 class="modal-title" id="createModalLabel">Add Speciality</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="name">Speciality Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter speciality name" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
  </div>
</div>

{{-- EDIT MODAL --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="editForm" method="POST" class="modal-content">
        @csrf
        @method('PUT')
        <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Speciality</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="edit-name">Speciality Name</label>
                <input type="text" name="name" id="edit-name" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
  </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-btn');
    const editForm = document.getElementById('editForm');
    const editNameInput = document.getElementById('edit-name');

    editButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.getAttribute('data-id');
            const name = btn.getAttribute('data-name');

            editNameInput.value = name;
            editForm.action = `/admin/specialities/${id}`;
        });
    });
});
</script>
@endpush

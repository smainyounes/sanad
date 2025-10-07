@extends('admin.layout.app')

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Categories</h3>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                + Add Category
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
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at->format('Y-m-d') }}</td>
                        <td>
                            <button 
                                class="btn btn-sm btn-warning edit-btn" 
                                data-id="{{ $category->id }}" 
                                data-name="{{ $category->name }}"
                                data-bs-toggle="modal"
                                data-bs-target="#editModal">
                                Edit
                            </button>

                            <form action="{{ route('admin.categories.destroy', $category->id) }}" 
                                method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button 
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete this category?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">No categories found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $categories->links() }}
    </div>

    {{-- CREATE MODAL --}}
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.categories.store') }}" method="POST" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter category name" required>
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
                <h5 class="modal-title" id="editModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="edit-name">Category Name</label>
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

@section('scripts')
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
                editForm.action = `/admin/categories/${id}`;
            });
        });
    });
    </script>
@endsection

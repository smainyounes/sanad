@extends('admin.layout.app')

@section('content')
<div class="container" dir="rtl">
    <h3 class="mb-4">إضافة عميل جديد</h3>

    <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- استدعاء النموذج الجزئي الخاص بالعميل --}}
        @include('admin.clients.partials.form', ['client' => null])
        
        <button class="btn btn-success mt-3">حفظ</button>
    </form>
</div>
@endsection

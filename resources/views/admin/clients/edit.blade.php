@extends('admin.layout.app')

@section('content')
<div class="container" dir="rtl">
    <h3 class="mb-4">تعديل بيانات العميل</h3>

    <form action="{{ route('admin.clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- استدعاء النموذج الجزئي الخاص بالعميل --}}
        @include('admin.clients.partials.form', ['client' => $client])
        
        <button class="btn btn-primary mt-3">تحديث</button>
    </form>
</div>
@endsection

@extends('admin.layout.app')

@section('content')
    <div class="container my-5" dir="rtl">
        <div class="card">
            <div class="card-header">
                <h4>تفاصيل الرسالة</h4>
            </div>
            <div class="card-body">
                <p><strong>الاسم:</strong> {{ $contact->name }}</p>
                <p><strong>التاريخ:</strong> {{ $contact->created_at?->format('d/m/Y H:i') }}</p>
                <p><strong>البريد الإلكتروني:</strong> {{ $contact->email }}</p>
                <p><strong>الموضوع:</strong> {{ $contact->subject ?? 'غير محدد' }}</p>
                <p><strong>الرسالة:</strong> {{ $contact->message }}</p>

                <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary">رجوع</a>
            </div>
        </div>
    </div>
@endsection

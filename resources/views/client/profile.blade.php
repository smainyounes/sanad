@extends('client.layouts.app')

@section('title', 'صفحتي')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4">مرحباً، {{ auth()->user()->name }}</h3>
                        <p class="text-muted">سيتم إضافة إعدادات الحساب والملف الشخصي هنا لاحقاً.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



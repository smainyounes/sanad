@extends('admin.layout.app')

@section('content')
    <div class="container mt-5" dir="rtl">
        @include('admin.includes.alert')
        <div class="row">
            {{-- تعديل كلمة المرور --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>تغيير كلمة المرور</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.profile.password') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>كلمة المرور الحالية</label>
                                <input class="form-control" type="password" name="old_password" required>
                            </div>
                            <div class="form-group">
                                <label>كلمة المرور الجديدة</label>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label>تأكيد كلمة المرور الجديدة</label>
                                <input class="form-control" type="password" name="password_confirmation" required>
                            </div>
                            <div class="text-end">
                                <button class="btn btn-primary">تحديث</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- تعديل المعلومات العامة --}}
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>تعديل المعلومات العامة</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.profile.infos') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>الاسم الكامل</label>
                                <input class="form-control" type="text" name="name" placeholder="{{ Auth::guard('admin')->user()->name }}">
                            </div>
                            <div class="form-group">
                                <label>البريد الإلكتروني</label>
                                <input class="form-control" type="email" name="email" placeholder="{{ Auth::guard('admin')->user()->email }}">
                            </div>
    
                            <div class="text-end">
                                <button class="btn btn-primary">حفظ التغييرات</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

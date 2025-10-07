@extends('admin.layout.app')

@section('content')
    <div class="container mt-5" >
        <h1 class="mb-4 text-end">إدارة المشرفين</h1>
        @include('admin.includes.alert')
        <button class="btn btn-primary mb-3 float-end" data-bs-toggle="modal" data-bs-target="#addAdminModal">إضافة مشرف</button>
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="thead-dark">
                    <tr>
                        <th>الاسم</th>
                        <th>البريد الإلكتروني</th>
                        {{-- <th>الدور</th> --}}
                        <th>يمكنه تسجيل الدخول</th>
                        <th>رقم الهاتف</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            {{-- <td>
                                @if ($admin->admin_type == 'super_admin')
                                    مشرف عام
                                @else
                                    @if ($admin->getRoleNames()->isNotEmpty())
                                        {{ $admin->getRoleNames()->first() }}
                                    @endif
                                @endif
                            </td> --}}
                            <td>
                                @if ($admin->admin_type != 'super_admin')
                                    {{ $admin->can_login ? 'نعم' : 'لا' }}
                                @endif
                            </td>
                            <td>{{ $admin->phone }}</td>
                            <td>
                                <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-warning btn-sm">تعديل</a>
                                <form action="{{ route('admin.regenInviteToken', $admin->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-secondary btn-sm">إرسال دعوة</button>
                                </form>
                                <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('هل أنت متأكد من حذف هذا المشرف؟ هذا الإجراء لا يمكن التراجع عنه.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
    
            </table>
        </div>
    </div>

    <!-- نافذة إضافة مشرف -->
    <div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true" dir="rtl">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAdminModalLabel">إضافة مشرف</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admins.store') }}">
                        @csrf
            
                        <div class="mb-3 text-end">
                            <label for="name" class="form-label">الاسم</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                            @error('name')
                                <div class="invalid-feedback text-start">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div class="mb-3 text-end">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
                            @error('email')
                                <div class="invalid-feedback text-start">{{ $message }}</div>
                            @enderror
                        </div>
            
                        {{-- <div class="mb-3 text-end">
                            <label for="password" class="form-label">كلمة المرور</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                            @error('password')
                                <div class="invalid-feedback text-start">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div class="mb-3 text-end">
                            <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div> --}}
            
                        {{-- <div class="mb-3 text-end">
                            <label>الدور</label>
                            <select class="form-control" name="role">
                                <option value="super_admin">مشرف عام</option>
                                @if ($roles->isNotEmpty())
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('role')
                                <div class="invalid-feedback text-start">{{ $message }}</div>
                            @enderror
                        </div> --}}
            
                        <div class="mb-3 text-end">
                            <label for="can_login" class="form-label">يمكنه تسجيل الدخول</label>
                            <select class="form-select @error('can_login') is-invalid @enderror" id="can_login" name="can_login" required>
                                <option value="1">نعم</option>
                                <option value="0">لا</option>
                            </select>
                            @error('can_login')
                                <div class="invalid-feedback text-start">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div class="mb-3 text-end">
                            <label for="phone" class="form-label">رقم الهاتف <small class="text-muted">(اختياري)</small></label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone">
                            @error('phone')
                                <div class="invalid-feedback text-start">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <button type="submit" class="btn btn-primary w-100">إضافة مشرف</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

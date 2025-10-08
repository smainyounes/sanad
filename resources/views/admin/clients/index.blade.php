@extends('admin.layout.app')

@section('content')
<div class="container" >
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>إدارة العملاء</h3>
        <a href="{{ route('admin.clients.create') }}" class="btn btn-primary">إضافة عميل</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped text-center align-middle">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>البريد الإلكتروني</th>
                    <th>النوع</th>
                    <th>النبذة</th>
                    <th>الصورة</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>
                            @if($client->type === 'student')
                                طالب
                            @elseif($client->type === 'parent')
                                ولي أمر
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ Str::limit($client->bio, 40) }}</td>
                        <td>
                            @if($client->image)
                                <img src="{{ asset('storage/' . $client->image) }}" alt="صورة العميل" width="50">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-sm btn-warning">تعديل</a>
                            <form action="{{ route('admin.clients.destroy', $client->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('هل أنت متأكد من الحذف؟')" class="btn btn-sm btn-danger">حذف</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="text-center text-muted">لا يوجد عملاء حالياً.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $clients->links() }}
</div>
@endsection

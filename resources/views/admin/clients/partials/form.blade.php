<div class="mb-3" dir="rtl">
    <label>الاسم</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $client->name ?? '') }}">
    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3" dir="rtl">
    <label>البريد الإلكتروني</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $client->email ?? '') }}">
    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3" dir="rtl">
    <label>
        كلمة المرور 
        @if(isset($client)) 
            (اترك الحقل فارغًا للاحتفاظ بكلمة المرور الحالية) 
        @endif
    </label>
    <input type="password" name="password" class="form-control">
    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3" dir="rtl">
    <label>النوع</label>
    <select name="type" class="form-control">
        <option value="">-- اختر النوع --</option>
        <option value="student" {{ old('type', $client->type ?? '') == 'student' ? 'selected' : '' }}>طالب</option>
        <option value="parent" {{ old('type', $client->type ?? '') == 'parent' ? 'selected' : '' }}>ولي أمر</option>
    </select>
    @error('type') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3" dir="rtl">
    <label>نبذة تعريفية</label>
    <textarea name="bio" class="form-control">{{ old('bio', $client->bio ?? '') }}</textarea>
    @error('bio') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3" dir="rtl">
    <label>الصورة</label>
    <input type="file" name="image" class="form-control">
    @if(isset($client) && $client->image)
        <img src="{{ asset('storage/' . $client->image) }}" width="80" class="mt-2" alt="صورة العميل">
    @endif
    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $client->name ?? '') }}">
    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $client->email ?? '') }}">
    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label>Password @if(isset($client)) (leave blank to keep current) @endif</label>
    <input type="password" name="password" class="form-control">
    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label>Type</label>
    <select name="type" class="form-control">
        <option value="">-- Select Type --</option>
        <option value="student" {{ old('type', $client->type ?? '') == 'student' ? 'selected' : '' }}>Student</option>
        <option value="parent" {{ old('type', $client->type ?? '') == 'parent' ? 'selected' : '' }}>Parent</option>
    </select>
    @error('type') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label>Bio</label>
    <textarea name="bio" class="form-control">{{ old('bio', $client->bio ?? '') }}</textarea>
    @error('bio') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    @if(isset($client) && $client->image)
        <img src="{{ asset('storage/' . $client->image) }}" width="80" class="mt-2">
    @endif
    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
</div>

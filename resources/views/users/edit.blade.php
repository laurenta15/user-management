@extends('layouts.main')

@section('content')
<h4>Edit User</h4>

<div class="card p-4">

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama</label>
    <input type="text" name="name" class="form-control mb-3"
           value="{{ $user->name }}">

    <label>Email</label>
    <input type="email" name="email" class="form-control mb-3"
           value="{{ $user->email }}">

    <label>Nomor HP</label>
    <input type="text" name="nomor_hp" class="form-control mb-3"
           value="{{ $user->nomor_hp }}">

    <label>Alamat</label>
    <textarea name="alamat" class="form-control mb-3">{{ $user->alamat }}</textarea>

    <label>Status</label>
    <select name="status" class="form-control mb-3">
        <option value="active" {{ $user->status=='active'?'selected':'' }}>Active</option>
        <option value="suspended" {{ $user->status=='suspended'?'selected':'' }}>Suspended</option>
    </select>

    <label>Role</label>
    <select name="role" class="form-control mb-3">
        <option value="user" {{ $user->role=='user'?'selected':'' }}>User</option>
        <option value="admin" {{ $user->role=='admin'?'selected':'' }}>Admin</option>
    </select>

    <button class="btn btn-primary">Update</button>
</form>

</div>
@endsection

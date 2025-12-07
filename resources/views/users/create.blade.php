@extends('layouts.main')

@section('content')
<h4>Tambah User</h4>

<div class="card p-4">

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <label>Nama</label>
    <input type="text" name="name" class="form-control mb-3">

    <label>Email</label>
    <input type="email" name="email" class="form-control mb-3">

    <label>Password</label>
    <input type="password" name="password" class="form-control mb-3">

    <label>Nomor HP</label>
    <input type="text" name="nomor_hp" class="form-control mb-3">

    <label>Alamat</label>
    <textarea name="alamat" class="form-control mb-3"></textarea>

    <label>Status</label>
    <select name="status" class="form-control mb-3">
        <option value="active">Active</option>
        <option value="suspended">Suspended</option>
    </select>

    <label>Role</label>
    <select name="role" class="form-control mb-3">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>

    <button class="btn btn-primary">Simpan</button>
</form>

</div>
@endsection



<?php $__env->startSection('content'); ?>
<h4>Tambah User</h4>

<div class="card p-4">

<form action="<?php echo e(route('users.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\laravel12\user-management\resources\views/users/create.blade.php ENDPATH**/ ?>
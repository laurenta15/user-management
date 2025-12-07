

<?php $__env->startSection('content'); ?>
<h4>Edit User</h4>

<div class="card p-4">

<form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <label>Nama</label>
    <input type="text" name="name" class="form-control mb-3"
           value="<?php echo e($user->name); ?>">

    <label>Email</label>
    <input type="email" name="email" class="form-control mb-3"
           value="<?php echo e($user->email); ?>">

    <label>Nomor HP</label>
    <input type="text" name="nomor_hp" class="form-control mb-3"
           value="<?php echo e($user->nomor_hp); ?>">

    <label>Alamat</label>
    <textarea name="alamat" class="form-control mb-3"><?php echo e($user->alamat); ?></textarea>

    <label>Status</label>
    <select name="status" class="form-control mb-3">
        <option value="active" <?php echo e($user->status=='active'?'selected':''); ?>>Active</option>
        <option value="suspended" <?php echo e($user->status=='suspended'?'selected':''); ?>>Suspended</option>
    </select>

    <label>Role</label>
    <select name="role" class="form-control mb-3">
        <option value="user" <?php echo e($user->role=='user'?'selected':''); ?>>User</option>
        <option value="admin" <?php echo e($user->role=='admin'?'selected':''); ?>>Admin</option>
    </select>

    <button class="btn btn-primary">Update</button>
</form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\user-management\resources\views/users/edit.blade.php ENDPATH**/ ?>
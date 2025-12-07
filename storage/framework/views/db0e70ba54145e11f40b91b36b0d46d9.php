

<?php $__env->startSection('content'); ?>
<h4 class="mb-3">Data User</h4>

<a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary mb-3">+ Tambah User</a>

<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>

<div class="card shadow">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($u->name); ?></td>
                    <td><?php echo e($u->email); ?></td>
                    <td><?php echo e($u->role); ?></td>
                    <td>
                        <a href="<?php echo e(route('users.edit', $u->id)); ?>" class="btn btn-warning btn-sm">Edit</a>

                        <form action="<?php echo e(route('users.destroy',$u->id)); ?>"
                              method="POST" class="d-inline">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus user?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo e($users->links()); ?>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\user-management\resources\views/users/index.blade.php ENDPATH**/ ?>
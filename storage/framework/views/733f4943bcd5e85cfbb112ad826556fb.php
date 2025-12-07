<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">ADMIN PANEL</div>
    </a>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('users.index')); ?>">
            <span>User Management</span>
        </a>
    </li>

</ul>
<?php /**PATH C:\xampp\htdocs\user-management\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>

<?php $__env->startSection('dashContent'); ?>

<div class="kpi-section">
    <h6>User KPI</h6><hr>
    <div class="kpi-grid">
        <div class="kpi-card orange">
            <span class="card-value"><?php echo e($data['totalUsers']); ?></span>
            <span class="card-text">Total Users</span>
            <i class="bi bi-people-fill icon"></i>
        </div>
        <div class="kpi-card orange">
            <span class="card-value"><?php echo e($data['adminUsers']); ?></span>
            <span class="card-text">Admin Users</span>
            <i class="bi bi-person-lock icon"></i>
        </div>
        <div class="kpi-card orange">
            <span class="card-value"><?php echo e($data['clientUsers']); ?></span>
            <span class="card-text">Client Users</span>
            <i class="bi bi-person icon"></i>
        </div>
    </div>
</div>

<div class="kpi-section">
    <h6>Booking KPI</h6><hr>
    <div class="kpi-grid">
        <div class="kpi-card purple">
            <span class="card-value"><?php echo e($data['totalBookings']); ?></span>
            <span class="card-text">Total Bookings</span>
            <i class="bi bi-journal-plus icon"></i>
        </div>
        <div class="kpi-card grey-dark">
            <span class="card-value"><?php echo e($data['completedBookings']); ?></span>
            <span class="card-text">Completed Bookings</span>
            <i class="bi bi-journal-check icon"></i>
        </div>
    </div>
</div>

<div class="kpi-section">
    <h6>Webpage KPI</h6><hr>
    <div class="kpi-grid">
        <div class="kpi-card red">
            <span class="card-value"><?php echo e($data['totalWebpages']); ?></span>
            <span class="card-text">Total Web Pages</span>
            <i class="bi bi-globe icon"></i>
        </div>
        <div class="kpi-card red">
            <span class="card-value"><?php echo e($data['activeWebpages']); ?></span>
            <span class="card-text">Active Web Pages</span>
            <i class="bi bi-clipboard2-check icon"></i>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminDashboard.Layout.adminBaseView', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\KIIT\Desktop\INTERSHIP\WEB DEVELOPEMENT\PROJECTS\PROJECT3\bookingsms\resources\views/AdminDashboard/Profile/index.blade.php ENDPATH**/ ?>
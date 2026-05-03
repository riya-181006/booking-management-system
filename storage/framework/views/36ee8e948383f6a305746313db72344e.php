
<?php $__env->startSection('dashContent'); ?>
<form action="<?php echo e(route('booking.delete',['id'=>Request::segment(3)])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <div class="mb-3 w-50">
        <h6 for="usertype"  class="form-label">Are you Sure you want to delete this Booking?</h6>
    </div>
    <div class="mb-3 w-50">
        <button type="submit" class="btn btn-danger">Delete</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminDashboard.Layout.adminBaseView', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\KIIT\Desktop\INTERSHIP\WEB DEVELOPEMENT\PROJECTS\PROJECT3\bookingsms\resources\views/AdminDashboard/Bookings/delete.blade.php ENDPATH**/ ?>
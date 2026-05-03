
<?php $__env->startSection('dashContent'); ?>
  <?php echo csrf_field(); ?>
  <form action="<?php echo e(Request::segment(2)=='add'
    ? route('booking.save')
    : route('booking.update',['id'=>Request::segment(3)])); ?>" 
    method="POST">
    <?php echo csrf_field(); ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Request::segment(2) != 'add'): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  <div class="container">
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->user_type == 1): ?>
      <div class="mb-3 w-50">
          <label for="user_name" class="form-label">User Name</label>
          <select class="form-select" name="user_name" aria-label="Default select example">
            <option selected>Select User</option>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
            <option value="<?php echo e($user->id); ?>" <?php echo e(isset($booking->user_id) && $booking->user_id == $user->id ? 'selected' : ''); ?>><?php echo e($user->name); ?></option>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </select>
      </div>
      <?php else: ?>
        <input type="hidden" name="user_name" value="<?php echo e(isset($booking->user_id)?$booking->user_id:Auth::user()->id); ?>">
      
      <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      <div class="mb-3 w-50">
          <label for="booking_name" class="form-label">Booking Name</label>
          <input type="text" class="form-control" id="booking_name" name="booking_name" placeholder="Booking Name" value="<?php echo e(isset($booking->name)?$booking->name:''); ?>">
      </div>
      <div class="mb-3 w-50">
          <label for="booking_on" class="form-label">Booking on</label>
          <input type="date" class="form-control" id="booking_on" name="booking_on" placeholder="Booking Date" value="<?php echo e(isset($booking->booking_datetime)?$booking->booking_datetime:''); ?>">            
      </div>
      <div class="mb-3 w-50">
        <label for="booking_status" class="form-label">Booking status</label>
        <select class="form-select" name="booking_status" aria-label="Default select example">
          <option selected>Set Status</option>
          <option value="1" <?php echo e(isset($booking->status) && $booking->status == 1 ? 'selected' : ''); ?> >Booked</option>
          <option value="2" <?php echo e(isset($booking->status) && $booking->status == 2 ? 'selected' : ''); ?> >Booking cancelled</option>
          <option value="3" <?php echo e(isset($booking->status) && $booking->status == 3 ? 'selected' : ''); ?> >Booking Fulfilled</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary"><?php echo e(Request::segment(2)=='add'?'Save':'Update'); ?></button>
  </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminDashboard.Layout.adminBaseView', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\KIIT\Desktop\INTERSHIP\WEB DEVELOPEMENT\PROJECTS\PROJECT3\bookingsms\resources\views/AdminDashboard/Bookings/addEdit.blade.php ENDPATH**/ ?>
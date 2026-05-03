
<?php $__env->startSection('dashContent'); ?>
<style>
  .action-wrapper {
    position: relative;
    display: inline-block;
  }
  .dots-btn {
    background: #f1f5f9;
    border: none;
    border-radius: 6px;
    width: 32px;
    height: 32px;
    font-size: 1.2rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #475569;
    transition: background 0.15s;
  }
  .dots-btn:hover {
    background: #e2e8f0;
  }
  .action-dropdown {
    display: none;
    position: absolute;
    right: 0;
    top: 36px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.12);
    min-width: 140px;
    z-index: 999;
    overflow: hidden;
  }
  .action-dropdown.show {
    display: block;
  }
  .action-dropdown a {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.65rem 1rem;
    font-size: 0.9rem;
    text-decoration: none;
    color: #1e293b;
    transition: background 0.12s;
  }
  .action-dropdown a:hover {
    background: #f8fafc;
  }
  .action-dropdown a.delete-link {
    color: #ef4444;
  }
  .action-dropdown a.delete-link:hover {
    background: #fff5f5;
  }
  .action-dropdown a i {
    font-size: 0.95rem;
  }
</style>
    <div class="container">
        <a href="<?php echo e(route('user.add')); ?>" class="btn btn-primary mb-2 float-end">Create New User</a>
        <table class="table table-light table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">User Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <tr>
                    <th scope="row"><?php echo e($i); ?></th>
                    <td><?php echo e(@$user->name); ?></td>
                    <td><?php echo e(@$user->email); ?></td>
                    <td>
                      <div class="action-wrapper">
                        <button class="dots-btn" onclick="toggleDropdown(this)">⋮</button>
                        <div class="action-dropdown">
                          <a href="<?php echo e(route('user.edit', ['id' => $user->id])); ?>">
                            <i class="bi bi-pencil-square text-primary"></i> Edit
                          </a>
                          <a href="<?php echo e(route('user.delete.view', ['id' => $user->id])); ?>" class="delete-link">
                            <i class="bi bi-trash"></i> Delete
                          </a>
                        </div>
                      </div>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </tbody>
        </table>
    </div>
<script>
  function toggleDropdown(btn) {
    const dropdown = btn.nextElementSibling;
    const isOpen = dropdown.classList.contains('show');
    document.querySelectorAll('.action-dropdown.show').forEach(d => d.classList.remove('show'));
    if (!isOpen) dropdown.classList.add('show');
  }
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.action-wrapper')) {
      document.querySelectorAll('.action-dropdown.show').forEach(d => d.classList.remove('show'));
    }
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminDashboard.Layout.adminBaseView', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\KIIT\Desktop\INTERSHIP\WEB DEVELOPEMENT\PROJECTS\PROJECT3\bookingsms\resources\views/AdminDashboard/Users/index.blade.php ENDPATH**/ ?>
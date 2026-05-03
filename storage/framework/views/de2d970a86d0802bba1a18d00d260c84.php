
<?php $__env->startSection('dashContent'); ?>
<style>
  .users-wrapper {
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    overflow: hidden;
    margin-top: 0.5rem;
  }

  .users-topbar {
    display: flex;
    justify-content: flex-end;
    padding: 1rem 1.25rem;
    background: #fff;
    border-bottom: 1px solid #e2e8f0;
  }

  .btn-create {
    background: #2563eb;
    color: #fff;
    border: none;
    padding: 0.55rem 1.2rem;
    border-radius: 8px;
    font-size: 0.875rem;
    font-weight: 500;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    transition: background 0.2s, transform 0.15s, box-shadow 0.15s;
  }
  .btn-create:hover {
    background: #1d4ed8;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(37,99,235,0.3);
  }

  .user-table {
    width: 100%;
    border-collapse: collapse;
  }

  .user-table thead tr {
    background: linear-gradient(90deg, #1e3a5f, #2563eb);
  }

  .user-table thead th {
    color: #fff;
    font-weight: 600;
    font-size: 0.82rem;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    padding: 1rem 1.25rem;
    border: none;
  }

  .user-table tbody tr {
    border-bottom: 1px solid #f1f5f9;
    transition: background 0.15s, transform 0.15s, box-shadow 0.15s;
  }

  .user-table tbody tr:hover {
    background: #e8f4ff;
    transform: scale(1.005);
    box-shadow: 0 4px 12px rgba(37,99,235,0.08);
    position: relative;
    z-index: 1;
  }

  .user-table tbody td {
    padding: 0.9rem 1.25rem;
    font-size: 0.9rem;
    color: #1e293b;
    vertical-align: middle;
  }

  .user-table tbody tr:nth-child(even) { background: #f8fafc; }
  .user-table tbody tr:nth-child(even):hover { background: #e8f4ff; }

  .row-num { font-weight: 700; color: #64748b; }

  /* 3-dot menu */
  .action-wrapper {
    position: relative;
    display: inline-block;
  }

  .dots-btn {
    background: #f1f5f9;
    border: 1px solid #e2e8f0;
    border-radius: 7px;
    width: 32px;
    height: 32px;
    font-size: 1.1rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #475569;
    transition: background 0.2s, box-shadow 0.2s;
  }
  .dots-btn:hover {
    background: #e2e8f0;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }

  .action-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 38px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
    min-width: 135px;
    z-index: 999;
    overflow: hidden;
    animation: fadeIn 0.15s ease;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-6px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .action-menu.show { display: block; }

  .action-menu a {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.65rem 1rem;
    font-size: 0.875rem;
    text-decoration: none;
    color: #1e293b;
    transition: background 0.15s;
  }
  .action-menu a:hover { background: #f1f5f9; }
  .action-menu a.delete-link { color: #dc2626; }
  .action-menu a.delete-link:hover { background: #fef2f2; }
</style>

<div class="users-wrapper">
  <div class="users-topbar">
    <a href="<?php echo e(route('user.add')); ?>" class="btn-create">
      <i class="bi bi-plus-lg"></i> Create New User
    </a>
  </div>

  <table class="user-table">
    <thead>
      <tr>
        <th>#</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
      <tr>
        <td class="row-num"><?php echo e($i); ?></td>
        <td><?php echo e(@$user->name); ?></td>
        <td><?php echo e(@$user->email); ?></td>
        <td>
          <div class="action-wrapper">
            <button class="dots-btn" onclick="toggleMenu(this)">⋮</button>
            <div class="action-menu">
              <a href="<?php echo e(route('user.edit', ['id' => $user->id])); ?>">
                <i class="bi bi-pencil-square" style="color:#2563eb"></i> Edit
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
  function toggleMenu(btn) {
    const menu = btn.nextElementSibling;
    document.querySelectorAll('.action-menu.show').forEach(m => {
      if (m !== menu) m.classList.remove('show');
    });
    menu.classList.toggle('show');
  }

  document.addEventListener('click', function(e) {
    if (!e.target.closest('.action-wrapper')) {
      document.querySelectorAll('.action-menu.show').forEach(m => m.classList.remove('show'));
    }
  });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminDashboard.Layout.adminBaseView', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\KIIT\Desktop\INTERSHIP\WEB DEVELOPEMENT\PROJECTS\PROJECT3\bookingsms\resources\views/AdminDashboard/Bookings/index.blade.php ENDPATH**/ ?>
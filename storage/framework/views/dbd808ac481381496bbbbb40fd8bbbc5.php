
<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('style'); ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    * { font-family: 'Poppins', sans-serif; }
    body {
        background: #e8f2ef;
        font-size: .875rem;
    }
    .top-navbar {
        position: fixed;
        top: 0; left: 0; right: 0;
        z-index: 200;
        height: 56px;
        background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1.5rem;
        box-shadow: 0 2px 16px rgba(0,0,0,0.35);
    }
    .top-navbar .brand {
        font-size: 1.1rem;
        font-weight: 700;
        color: #fff;
        letter-spacing: 0.5px;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .top-navbar .brand-icon {
        width: 32px; height: 32px;
        background: linear-gradient(135deg, #29b6f6, #0277bd);
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1rem;
    }
    .signout-btn {
        background: rgba(255,255,255,0.1);
        border: 1px solid rgba(255,255,255,0.2);
        color: #fff !important;
        border-radius: 8px;
        padding: 6px 16px;
        font-size: 0.8rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.25s ease;
        cursor: pointer;
    }
    .signout-btn:hover {
        background: rgba(255,255,255,0.22);
        border-color: rgba(255,255,255,0.4);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    .website-link {
        display: flex;
        align-items: center;
        gap: 7px;
        color: rgba(255,255,255,0.45);
        font-size: 0.75rem;
        font-weight: 500;
        text-decoration: none;
        padding: 6px 10px;
        border-radius: 8px;
        border: 1px solid rgba(255,255,255,0.1);
        transition: all 0.25s ease;
        letter-spacing: 0.3px;
    }
    .website-link:hover {
        color: #29b6f6;
        border-color: rgba(41,182,246,0.4);
        background: rgba(41,182,246,0.08);
    }
    .sidebar {
        position: fixed;
        top: 56px; left: 0; bottom: 0;
        width: 230px;
        background: linear-gradient(180deg, #0d1b2a 0%, #1a2e42 100%);
        z-index: 100;
        overflow-y: auto;
        overflow-x: hidden;
        box-shadow: 3px 0 20px rgba(0,0,0,0.25);
        padding-top: 1rem;
        transition: all 0.3s ease;
    }
    .sidebar-section-label {
        font-size: 0.65rem;
        font-weight: 600;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: rgba(255,255,255,0.3);
        padding: 1.2rem 1.2rem 0.4rem;
    }
    .sidebar .nav-link {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 1.2rem;
        color: rgba(255,255,255,0.65);
        font-weight: 500;
        font-size: 0.875rem;
        border-radius: 0;
        border-left: 3px solid transparent;
        transition: all 0.25s ease;
        text-decoration: none;
        margin: 2px 0;
        position: relative;
    }
    .sidebar .nav-link svg {
        width: 17px; height: 17px;
        flex-shrink: 0;
        transition: transform 0.25s ease;
    }
    .sidebar .nav-link:hover {
        color: #fff;
        background: rgba(41, 182, 246, 0.12);
        border-left-color: #29b6f6;
        padding-left: 1.5rem;
    }
    .sidebar .nav-link:hover svg {
        transform: scale(1.15);
        color: #29b6f6;
    }
    .sidebar .nav-link.active {
        color: #fff;
        background: rgba(41, 182, 246, 0.18);
        border-left-color: #29b6f6;
        font-weight: 600;
    }
    .sidebar .nav-link.active svg {
        color: #29b6f6;
    }
    .main-content {
        flex: 1;
        min-width: 0;
        margin-left: 230px;
        margin-top: 56px;
        padding: 2rem;
        min-height: calc(100vh - 56px);
        background: linear-gradient(160deg, #dff0ea 0%, #e8f4ef 40%, #d6ece5 100%);
    }
    .page-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid rgba(44, 83, 100, 0.15);
    }
    .page-header h1 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #0d1b2a;
        margin: 0;
    }
    .kpi-section-title {
        font-size: 0.78rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: #2c5364;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .kpi-section-title::after {
        content: '';
        flex: 1;
        height: 1px;
        background: linear-gradient(90deg, rgba(44,83,100,0.25), transparent);
    }
    .kpi-grid {
        display: flex;
        gap: 1.25rem;
        flex-wrap: wrap;
    }
    .kpi-card {
        position: relative;
        border-radius: 20px;
        padding: 1.5rem 1.75rem;
        min-width: 220px;
        flex: 1;
        max-width: 280px;
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .kpi-card::before {
        content: '';
        position: absolute;
        top: -30px; right: -30px;
        width: 120px; height: 120px;
        border-radius: 50%;
        background: rgba(255,255,255,0.12);
    }
    .kpi-card::after {
        content: '';
        position: absolute;
        bottom: -20px; right: 20px;
        width: 80px; height: 80px;
        border-radius: 50%;
        background: rgba(255,255,255,0.08);
    }
    .kpi-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }
    .kpi-card.kpi-total {
        background: linear-gradient(135deg, #7c3aed 0%, #9d5cf0 50%, #a855f7 100%);
        box-shadow: 0 8px 24px rgba(124,58,237,0.4);
    }
    .kpi-card.kpi-completed {
        background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
        box-shadow: 0 8px 24px rgba(15,32,39,0.45);
    }
    .kpi-card.kpi-pending {
        background: linear-gradient(135deg, #d97706 0%, #f59e0b 100%);
        box-shadow: 0 8px 24px rgba(217,119,6,0.4);
    }
    .kpi-card .kpi-label {
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: rgba(255,255,255,0.75);
        margin-bottom: 0.4rem;
        position: relative;
        z-index: 1;
    }
    .kpi-card .kpi-value {
        font-size: 2.6rem;
        font-weight: 700;
        color: #fff;
        line-height: 1;
        position: relative;
        z-index: 1;
        margin-bottom: 0.75rem;
        letter-spacing: -1px;
    }
    .kpi-card .kpi-icon {
        position: absolute;
        bottom: 1.2rem; right: 1.4rem;
        width: 44px; height: 44px;
        background: rgba(255,255,255,0.15);
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        z-index: 1;
        backdrop-filter: blur(4px);
    }
    .kpi-card .kpi-icon svg {
        width: 22px; height: 22px;
        color: rgba(255,255,255,0.9);
    }
    .kpi-card .kpi-badge {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        background: rgba(255,255,255,0.2);
        border-radius: 20px;
        padding: 3px 10px;
        font-size: 0.7rem;
        font-weight: 600;
        color: rgba(255,255,255,0.95);
        position: relative;
        z-index: 1;
        backdrop-filter: blur(4px);
    }
    .dropdown { position: relative; display: inline-block; }
    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background: #fff;
        min-width: 140px;
        border-radius: 10px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        z-index: 10;
        overflow: hidden;
        border: 1px solid #e2e8f0;
    }
    .dropdown-content a {
        color: #333;
        padding: 10px 16px;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.82rem;
        font-weight: 500;
        transition: background 0.2s;
    }
    .dropdown-content a:hover { background: #f0f4f8; color: #0277bd; }
    .dropdown:hover .dropdown-content { display: block; }
    .bi-list {
        font-size: 1.3rem;
        cursor: pointer;
        color: #555;
        transition: color 0.2s;
    }
    .bi-list:hover { color: #29b6f6; }
    .card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 2px 16px rgba(0,0,0,0.07);
        background: rgba(255,255,255,0.85);
        backdrop-filter: blur(8px);
        width: 100%;
    }
    .card .card-body { overflow: visible !important; }
    .table { border-radius: 12px; overflow: visible; width: 100% !important; }
    .table-responsive { overflow: visible !important; }
    .table thead th {
        background: #0d1b2a;
        color: #fff;
        font-weight: 600;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
        border: none;
        padding: 12px 16px;
    }
    .table tbody tr {
        transition: background 0.2s;
        font-size: 0.875rem;
    }
    .table tbody tr:hover { background: #e8f4fd; }
    .btn-primary {
        background: linear-gradient(135deg, #29b6f6, #0277bd);
        border: none;
        border-radius: 10px;
        font-weight: 600;
        font-size: 0.85rem;
        padding: 8px 20px;
        transition: all 0.25s ease;
    }
    .btn-primary:hover {
        background: linear-gradient(135deg, #0277bd, #01579b);
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(2,119,189,0.35);
    }
    .btn-danger {
        border-radius: 10px;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.25s ease;
    }
    .btn-danger:hover { transform: translateY(-2px); box-shadow: 0 6px 16px rgba(220,53,69,0.3); }
    .form-control, .form-select {
        border-radius: 10px;
        border: 1.5px solid #e0e0e0;
        padding: 10px 14px;
        font-size: 0.875rem;
        transition: all 0.25s ease;
        background: rgba(255,255,255,0.9);
    }
    .form-control:focus, .form-select:focus {
        border-color: #29b6f6;
        box-shadow: 0 0 0 3px rgba(41,182,246,0.18);
    }
    label {
        font-weight: 500;
        font-size: 0.82rem;
        color: #444;
    }
    @media (max-width: 767px) {
        .sidebar { transform: translateX(-100%); }
        .main-content { margin-left: 0; }
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<header class="top-navbar">
    <a class="brand" href="#">
        <div class="brand-icon">✈</div>
        Booking System
    </a>
    <form action="<?php echo e(route('logout')); ?>" method="POST" class="m-0">
        <?php echo csrf_field(); ?>
        <button type="submit" class="signout-btn">Sign out</button>
    </form>
</header>
<div class="d-flex">
    
    <nav class="sidebar">
        <div class="px-3 pb-3 pt-1">
            <a href="<?php echo e(route('home')); ?>" target="_blank" class="website-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                Visit Website
            </a>
        </div>
        <div class="sidebar-section-label">Main Menu</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::segment(1) == 'dashboard' ? 'active' : ''); ?>" href="<?php echo e(route('dashboard.user')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::segment(1) == 'booking' ? 'active' : ''); ?>" href="<?php echo e(route('booking.my')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    Bookings
                </a>
            </li>
        </ul>
        <div class="sidebar-section-label">Settings</div>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link <?php echo e(Request::segment(1) == 'profile' ? 'active' : ''); ?>" href="<?php echo e(route('user.profile.get')); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Profile
                </a>
            </li>
        </ul>
    </nav>
    
    <main class="main-content">
        <div class="page-header">
            <h1><?php echo e(ucfirst(Request::segment(1))); ?></h1>
        </div>
        <?php echo $__env->yieldContent('dashContent'); ?>
    </main>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('customjs'); ?>
<script>
    CKEDITOR.replace('editor');
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.baseview', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\KIIT\Desktop\INTERSHIP\WEB DEVELOPEMENT\PROJECTS\PROJECT3\bookingsms\resources\views/UserDashboard/Layout/userBaseView.blade.php ENDPATH**/ ?>
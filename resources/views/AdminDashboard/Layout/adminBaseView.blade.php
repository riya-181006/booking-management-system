@extends('layout.baseview')
@section('title','Dashboard')
@section('style')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body {
    font-family: 'Inter', sans-serif;
    background-color: #e8f5f3;
    color: #1a1a2e;
  }
  .top-navbar {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 200;
    height: 56px;
    background: #0f1f2e;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 1.5rem 0 1rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.3);
  }
  .top-navbar .brand {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    color: #fff;
    font-weight: 600;
    font-size: 1.1rem;
    text-decoration: none;
  }
  .top-navbar .brand-icon {
    width: 34px; height: 34px;
    background: #2563eb;
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
  }
  .top-navbar .brand-icon svg { color: #fff; }
  .top-navbar .signout-btn {
    background: #1e3a52;
    color: #cbd5e1;
    border: none;
    padding: 0.4rem 1rem;
    border-radius: 8px;
    font-size: 0.875rem;
    cursor: pointer;
    font-family: inherit;
    transition: background 0.2s;
  }
  .top-navbar .signout-btn:hover { background: #2563eb; color: #fff; }
  .sidebar {
    position: fixed;
    top: 56px; left: 0; bottom: 0;
    width: 220px;
    background: #0f1f2e;
    padding: 1.5rem 0;
    overflow-y: auto;
    z-index: 100;
  }
  .sidebar .nav-section-label {
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #475569;
    padding: 0.75rem 1.25rem 0.4rem;
  }
  .sidebar .nav-link {
    display: flex;
    align-items: center;
    gap: 0.65rem;
    padding: 0.6rem 1.25rem;
    color: #94a3b8;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 500;
    border-radius: 0;
    transition: background 0.15s, color 0.15s;
  }
  .sidebar .nav-link:hover {
    background: rgba(255,255,255,0.06);
    color: #e2e8f0;
  }
  .sidebar .nav-link.active {
    background: rgba(37,99,235,0.15);
    color: #fff;
    border-left: 3px solid #2563eb;
  }
  .sidebar .nav-link svg { flex-shrink: 0; }
  .main-content {
    margin-left: 220px;
    margin-top: 56px;
    padding: 2rem;
    min-height: calc(100vh - 56px);
    background: #e8f5f3;
  }
  .page-header {
    padding-bottom: 1rem;
    margin-bottom: 1.5rem;
    border-bottom: 1px solid #c5deda;
  }
  .page-header h1 {
    font-size: 1.75rem;
    font-weight: 700;
    color: #0f1f2e;
  }
  .kpi-section { margin-bottom: 2rem; }
  .kpi-section h6 {
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #64748b;
    margin-bottom: 0.75rem;
  }
  .kpi-section hr {
    border: none;
    border-top: 1px solid #c5deda;
    margin-bottom: 1rem;
  }
  .kpi-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
  }
  .kpi-card {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    padding: 1.25rem 1.5rem;
    min-width: 180px;
    width: 220px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    color: #fff;
  }
  .kpi-card .card-value {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    line-height: 1;
    margin-bottom: 0.3rem;
  }
  .kpi-card .card-text {
    display: block;
    font-size: 0.78rem;
    opacity: 0.85;
  }
  .kpi-card .icon {
    position: absolute;
    right: -0.5rem;
    top: 50%;
    transform: translateY(-50%);
    font-size: 4rem;
    opacity: 0.15;
  }
  .orange { background: #f59e0b; }
  .purple { background: #7c3aed; }
  .grey-dark { background: #374151; }
  .red { background: linear-gradient(135deg, #cf5252, #7f1d1d); }
  @media (max-width: 768px) {
    .sidebar { width: 100%; position: relative; top: 0; height: auto; }
    .main-content { margin-left: 0; }
  }
  .kpi-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    cursor: pointer;
}
.kpi-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.25);
}
.card-value {
  color: #fff !important;
}
.card-text {
  color: #fff !important;
}
</style>
@endsection
@section('content')
{{-- Top Navbar --}}
<header class="top-navbar">
  <a class="brand" href="#">
    <div class="brand-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v3"/><rect x="9" y="11" width="14" height="10" rx="2"/></svg>
    </div>
    Booking System
  </a>
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="signout-btn">Sign out</button>
  </form>
</header>
{{-- Sidebar --}}
<nav class="sidebar">
  <span class="nav-section-label">Main Menu</span>
  <a class="nav-link {{ Request::segment(1) == 'admin' ? 'active' : '' }}" href="{{ route('dashboard.admin') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
    Dashboard
  </a>
  <a class="nav-link {{ Request::segment(1) == 'booking' ? 'active' : '' }}" href="{{ route('booking.all') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
    Bookings
  </a>
  <a class="nav-link {{ Request::segment(1) == 'webpage' ? 'active' : '' }}" href="{{ route('webpage.index') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
    Webpage
  </a>
  <a class="nav-link {{ Request::segment(1) == 'user' ? 'active' : '' }}" href="{{ route('user.user') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
    Users
  </a>
  <span class="nav-section-label" style="margin-top:1rem;">Settings</span>
  <a class="nav-link {{ Request::segment(1) == 'profile' ? 'active' : '' }}" href="{{ route('user.profile.get') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
    Profile
  </a>
</nav>
{{-- Main --}}
<main class="main-content">
  <div class="page-header">
    <h1>
  @if(Request::is('admin/dashboard'))
    Admin
  @elseif(Request::is('user/profile'))
    Profile
  @elseif(Request::is('user'))
    Users
  @elseif(Request::is('booking/all'))
    Bookings
  @elseif(Request::is('booking/add'))
    Create Booking
  @elseif(Request::is('webpage'))
    Webpages
  @else
    {{ ucfirst(Request::segment(2) ?? Request::segment(1)) }}
  @endif
</h1>
  </div>
  @yield('dashContent')
</main>
@endsection
@extends('layout.baseview')
@section('title','BookEase')
@section('style')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;900&family=DM+Sans:wght@300;400;500;600&display=swap');
  :root {
    --navy: #0a1628;
    --navy-mid: #132240;
    --navy-light: #1e3a5f;
    --gold: #c9a84c;
    --gold-light: #e8c97a;
    --cream: #faf7f2;
    --muted: #8a9bb5;
    --white: #ffffff;
    --teal: #1a9e8f;
    --teal-light: #22c9b7;
  }
  * { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body { font-family: 'DM Sans', sans-serif; background: var(--cream); color: var(--navy); overflow-x: hidden; }
  .site-navbar {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    padding: 0 3rem; height: 72px;
    display: flex; align-items: center; justify-content: space-between;
    background: rgba(10,22,40,0.92); backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(201,168,76,0.2); transition: all 0.3s;
  }
  .nav-logo { display: flex; align-items: center; gap: 0.6rem; text-decoration: none; }
  .nav-logo-icon { width: 38px; height: 38px; background: linear-gradient(135deg, var(--gold), var(--gold-light)); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; }
  .nav-logo-text { font-family: 'Playfair Display', serif; font-size: 1.4rem; font-weight: 700; color: var(--white); }
  .nav-logo-text span { color: var(--gold); }
  .nav-links { display: flex; align-items: center; gap: 0.25rem; list-style: none; }
  .nav-links a { color: rgba(255,255,255,0.75); text-decoration: none; font-size: 0.9rem; font-weight: 500; padding: 0.5rem 1rem; border-radius: 8px; transition: all 0.2s; }
  .nav-links a:hover, .nav-links a.active { color: var(--gold-light); background: rgba(201,168,76,0.1); }
  .nav-cta { background: linear-gradient(135deg, var(--gold), var(--gold-light)) !important; color: var(--navy) !important; font-weight: 700 !important; }
  .nav-cta:hover { box-shadow: 0 4px 16px rgba(201,168,76,0.4) !important; transform: translateY(-1px); }
  .page-banner {
    margin-top: 72px;
    background: linear-gradient(135deg, var(--navy) 0%, var(--navy-mid) 60%, #0d2137 100%);
    padding: 4rem 3rem;
    position: relative;
    overflow: hidden;
  }
  .page-banner::before {
    content: '';
    position: absolute;
    top: -50%; right: -10%;
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(201,168,76,0.1) 0%, transparent 70%);
    border-radius: 50%;
  }
  .page-banner-inner {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }
  .breadcrumb-custom {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.78rem;
    color: var(--muted);
    margin-bottom: 1rem;
  }
  .breadcrumb-custom a { color: var(--gold); text-decoration: none; }
  .breadcrumb-custom a:hover { color: var(--gold-light); }
  .breadcrumb-custom span { color: rgba(255,255,255,0.3); }
  .page-banner h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.8rem, 4vw, 2.8rem);
    font-weight: 800;
    color: var(--white);
    line-height: 1.2;
  }
  .page-banner h1 em { font-style: italic; color: var(--gold); }
  .page-banner-divider {
    width: 60px; height: 3px;
    background: linear-gradient(90deg, var(--gold), var(--teal-light));
    border-radius: 2px;
    margin-top: 1rem;
  }
  .page-main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 3.5rem 3rem;
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 3rem;
    align-items: start;
  }
  .page-content-area {
    background: var(--white);
    border-radius: 20px;
    padding: 2.5rem;
    box-shadow: 0 4px 24px rgba(10,22,40,0.07);
    border: 1px solid #e8f0eb;
    line-height: 1.8;
    font-size: 0.975rem;
    color: #374151;
  }
  .page-content-area h1,
  .page-content-area h2,
  .page-content-area h3 {
    font-family: 'Playfair Display', serif;
    color: var(--navy);
    margin: 1.5rem 0 0.75rem;
    line-height: 1.3;
  }
  .page-content-area h1 { font-size: 1.8rem; }
  .page-content-area h2 { font-size: 1.4rem; }
  .page-content-area h3 { font-size: 1.15rem; }
  .page-content-area p { margin-bottom: 1rem; }
  .page-content-area a {
    color: var(--teal);
    text-decoration: underline;
    text-underline-offset: 3px;
    transition: color 0.2s;
  }
  .page-content-area a:hover { color: var(--gold); }
  .page-content-area ul, .page-content-area ol {
    padding-left: 1.5rem;
    margin-bottom: 1rem;
  }
  .page-content-area li { margin-bottom: 0.4rem; }
  .page-content-area blockquote {
    border-left: 3px solid var(--gold);
    padding: 0.75rem 1.25rem;
    background: var(--cream);
    border-radius: 0 10px 10px 0;
    margin: 1.5rem 0;
    font-style: italic;
    color: #64748b;
  }
  .page-content-area img {
    max-width: 100%;
    border-radius: 12px;
    margin: 1rem 0;
  }
  .page-not-found {
    text-align: center;
    padding: 4rem 2rem;
  }
  .page-not-found .pnf-icon { font-size: 3rem; margin-bottom: 1rem; }
  .page-not-found h2 {
    font-family: 'Playfair Display', serif;
    font-size: 1.6rem;
    color: var(--navy);
    margin-bottom: 0.75rem;
  }
  .page-not-found p { color: #64748b; margin-bottom: 1.5rem; }
  .page-sidebar { display: flex; flex-direction: column; gap: 1.5rem; }
  .sidebar-card {
    background: var(--white);
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 20px rgba(10,22,40,0.06);
    border: 1px solid #e8f0eb;
  }
  .sidebar-card-title {
    font-family: 'Playfair Display', serif;
    font-size: 1rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 1rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid var(--cream);
  }
  .sidebar-nav { list-style: none; }
  .sidebar-nav li { margin-bottom: 0.25rem; }
  .sidebar-nav a {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.55rem 0.75rem;
    border-radius: 8px;
    color: #64748b;
    text-decoration: none;
    font-size: 0.875rem;
    font-weight: 500;
    transition: all 0.2s;
  }
  .sidebar-nav a:hover {
    background: var(--cream);
    color: var(--navy);
  }
  .sidebar-nav a.active {
    background: rgba(201,168,76,0.1);
    color: var(--navy);
    font-weight: 600;
  }
  .sidebar-nav a::before { content: '→'; color: var(--gold); font-size: 0.75rem; }
  .cta-sidebar {
    background: linear-gradient(135deg, var(--navy), var(--navy-light));
    border-radius: 16px;
    padding: 1.75rem 1.5rem;
    text-align: center;
    position: relative;
    overflow: hidden;
    border: none;
  }
  .cta-sidebar::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--gold), var(--teal-light));
  }
  .cta-sidebar h4 {
    font-family: 'Playfair Display', serif;
    font-size: 1.1rem;
    color: white;
    margin-bottom: 0.5rem;
  }
  .cta-sidebar p { font-size: 0.8rem; color: var(--muted); margin-bottom: 1.25rem; line-height: 1.6; }
  .btn-gold-sm {
    display: inline-block;
    background: linear-gradient(135deg, var(--gold), var(--gold-light));
    color: var(--navy);
    font-weight: 700;
    font-size: 0.85rem;
    padding: 0.65rem 1.5rem;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.2s;
  }
  .btn-gold-sm:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(201,168,76,0.4); color: var(--navy); }
  footer { background: var(--navy); padding: 3rem; border-top: 1px solid rgba(201,168,76,0.2); }
  .footer-inner { max-width: 1200px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; }
  .footer-brand { font-family: 'Playfair Display', serif; font-size: 1.2rem; font-weight: 700; color: white; }
  .footer-brand span { color: var(--gold); }
  .footer-bottom-links { display: flex; gap: 1.5rem; }
  .footer-bottom-links a { color: var(--muted); text-decoration: none; font-size: 0.82rem; transition: color 0.2s; }
  .footer-bottom-links a:hover { color: var(--gold-light); }
  .footer-copy { color: var(--muted); font-size: 0.82rem; }
  .footer-copy a { color: var(--gold); text-decoration: none; }
  @media (max-width: 900px) {
    .page-main { grid-template-columns: 1fr; padding: 2rem 1.5rem; }
    .page-sidebar { order: -1; }
    .site-navbar { padding: 0 1.5rem; }
    .page-banner { padding: 3rem 1.5rem; }
  }
  @media (max-width: 600px) {
    .nav-links { display: none; }
    footer { padding: 2rem 1.5rem; }
    .footer-inner { flex-direction: column; text-align: center; }
  }
</style>
@endsection
@section('content')
<nav class="site-navbar">
  <a href="/" class="nav-logo">
    <div class="nav-logo-icon">✈</div>
    <span class="nav-logo-text">Book<span>Ease</span></span>
  </a>
  <ul class="nav-links">
    <li><a href="/">Home</a></li>
    @foreach($pages as $page)
    <li><a href="{{url('page/'.$page->slug)}}" class="{{ Request::is('page/'.$page->slug) ? 'active' : '' }}">{{$page->name}}</a></li>
    @endforeach
    <li><a href="/#contact" class="nav-cta">Book Now</a></li>
  </ul>
</nav>
<div class="page-banner">
  <div class="page-banner-inner">
    <div class="breadcrumb-custom">
      <a href="/">Home</a>
      <span>›</span>
      <span style="color:rgba(255,255,255,0.6);">{{ isset($data->name) ? $data->name : 'Page' }}</span>
    </div>
    <h1>{{ isset($data->name) ? $data->name : 'Welcome to <em>BookEase</em>' }}</h1>
    <div class="page-banner-divider"></div>
  </div>
</div>
<div class="page-main">
  <div class="page-content-area">
    @if(isset($data->html))
      {!! $data->html !!}
    @else
      <div class="page-not-found">
        <div class="pnf-icon">🗓️</div>
        <h2>Page Not Found</h2>
        <p>The page you're looking for doesn't exist or may have been moved.</p>
        <a href="/" class="btn-gold-sm">← Back to Home</a>
      </div>
    @endif
</div>
  <aside class="page-sidebar">
    <div class="sidebar-card">
      <div class="sidebar-card-title">Pages</div>
      <ul class="sidebar-nav">
        <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
        @foreach($pages as $page)
        <li>
          <a href="{{url('page/'.$page->slug)}}" class="{{ Request::is('page/'.$page->slug) ? 'active' : '' }}">
            {{$page->name}}
          </a>
        </li>
        @endforeach
      </ul>
    </div>
    <div class="cta-sidebar">
      <h4>Ready to Book?</h4>
      <p>Join thousands of businesses already using BookEase to simplify their scheduling.</p>
      <a href="/#contact" class="btn-gold-sm">Get Started →</a>
    </div>
  </aside>
</div>
<footer>
  <div class="footer-inner">
    <div class="footer-brand">Book<span>Ease</span></div>
    <div class="footer-bottom-links">
      <a href="/">Home</a>
      <a href="/#about">About</a>
      <a href="/#contact">Contact</a>
    </div>
    <div class="footer-copy">© 2026 <a href="/">BookEase</a>. All rights reserved.</div>
  </div>
</footer>
@endsection
@section('customjs')
<script>
  window.addEventListener('scroll', () => {
    document.querySelector('.site-navbar').style.background =
      window.scrollY > 60 ? 'rgba(10,22,40,0.98)' : 'rgba(10,22,40,0.92)';
  });
</script>
@endsection
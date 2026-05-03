<?php $__env->startSection('title','Home - BookEase'); ?>
<?php $__env->startSection('style'); ?>
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
  .hero {
    min-height: 100vh; background: linear-gradient(160deg, var(--navy) 0%, var(--navy-mid) 55%, #0d2137 100%);
    display: flex; align-items: center; position: relative; overflow: hidden; padding: 7rem 3rem 4rem;
  }
  .hero::before { content:''; position:absolute; top:-20%; right:-10%; width:600px; height:600px; background:radial-gradient(circle, rgba(201,168,76,0.12) 0%, transparent 70%); border-radius:50%; }
  .hero::after  { content:''; position:absolute; bottom:-10%; left:-5%;  width:400px; height:400px; background:radial-gradient(circle, rgba(26,158,143,0.1) 0%, transparent 70%);  border-radius:50%; }
  .hero-grid { max-width:1200px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center; position:relative; z-index:2; width:100%; }
  .hero-badge { display:inline-flex; align-items:center; gap:0.4rem; background:rgba(201,168,76,0.15); border:1px solid rgba(201,168,76,0.3); color:var(--gold-light); font-size:0.78rem; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; padding:0.35rem 0.9rem; border-radius:50px; margin-bottom:1.5rem; }
  .hero h1 { font-family:'Playfair Display',serif; font-size:clamp(2.4rem,5vw,3.8rem); font-weight:900; color:var(--white); line-height:1.1; margin-bottom:1.5rem; }
  .hero h1 em { font-style:italic; color:var(--gold); }
  .hero-desc { color:var(--muted); font-size:1.05rem; line-height:1.75; margin-bottom:2.5rem; max-width:480px; }
  .hero-actions { display:flex; gap:1rem; flex-wrap:wrap; }
  .btn-gold { background:linear-gradient(135deg,var(--gold),var(--gold-light)); color:var(--navy); font-weight:700; font-size:0.95rem; padding:0.85rem 2rem; border-radius:10px; text-decoration:none; border:none; cursor:pointer; transition:all 0.25s; display:inline-flex; align-items:center; gap:0.5rem; font-family:'DM Sans',sans-serif; }
  .btn-gold:hover { transform:translateY(-3px); box-shadow:0 12px 32px rgba(201,168,76,0.45); color:var(--navy); }
  .btn-outline-gold { background:transparent; color:var(--gold-light); font-weight:600; font-size:0.95rem; padding:0.85rem 2rem; border-radius:10px; text-decoration:none; border:1px solid rgba(201,168,76,0.4); cursor:pointer; transition:all 0.25s; display:inline-flex; align-items:center; }
  .btn-outline-gold:hover { background:rgba(201,168,76,0.1); border-color:var(--gold); transform:translateY(-2px); color:var(--gold-light); }
  .hero-stats { display:flex; gap:2rem; margin-top:3rem; padding-top:2rem; border-top:1px solid rgba(255,255,255,0.08); }
  .hero-stat-value { font-family:'Playfair Display',serif; font-size:1.8rem; font-weight:700; color:var(--gold); }
  .hero-stat-label { font-size:0.78rem; color:var(--muted); text-transform:uppercase; letter-spacing:0.08em; margin-top:0.1rem; }
  .hero-visual { position:relative; }
  .booking-card-demo { background:rgba(255,255,255,0.05); backdrop-filter:blur(20px); border:1px solid rgba(255,255,255,0.1); border-radius:20px; padding:2rem; position:relative; overflow:hidden; }
  .booking-card-demo::before { content:''; position:absolute; top:0; left:0; right:0; height:3px; background:linear-gradient(90deg,var(--gold),var(--teal-light)); }
  .demo-header { display:flex; align-items:center; justify-content:space-between; margin-bottom:1.5rem; }
  .demo-title { font-family:'Playfair Display',serif; color:white; font-size:1.1rem; font-weight:600; }
  .demo-badge { background:rgba(26,158,143,0.2); color:var(--teal-light); font-size:0.7rem; font-weight:600; padding:0.2rem 0.6rem; border-radius:50px; text-transform:uppercase; }
  .demo-row { display:flex; align-items:center; gap:1rem; padding:0.8rem 0; border-bottom:1px solid rgba(255,255,255,0.06); }
  .demo-row:last-child { border-bottom:none; }
  .demo-avatar { width:36px; height:36px; border-radius:50%; background:linear-gradient(135deg,var(--navy-light),var(--teal)); display:flex; align-items:center; justify-content:center; font-size:0.75rem; color:white; font-weight:600; flex-shrink:0; }
  .demo-info { flex:1; }
  .demo-name { color:rgba(255,255,255,0.9); font-size:0.85rem; font-weight:500; }
  .demo-date { color:var(--muted); font-size:0.75rem; margin-top:0.15rem; }
  .demo-status { font-size:0.7rem; font-weight:600; padding:0.2rem 0.6rem; border-radius:50px; text-transform:uppercase; letter-spacing:0.04em; }
  .status-confirmed { background:rgba(26,158,143,0.2); color:var(--teal-light); }
  .status-pending   { background:rgba(201,168,76,0.2);  color:var(--gold-light);  }
  .status-new       { background:rgba(99,102,241,0.2);  color:#a5b4fc;            }
  .floating-card { position:absolute; background:var(--navy); border:1px solid rgba(201,168,76,0.3); border-radius:14px; padding:1rem 1.25rem; box-shadow:0 20px 60px rgba(0,0,0,0.4); }
  .floating-card-1 { top:-1.5rem; right:-1.5rem; animation:float 4s ease-in-out infinite; }
  .floating-card-2 { bottom:-1.5rem; left:-1.5rem; animation:float 4s ease-in-out infinite 2s; }
  @keyframes float { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-8px)} }
  .fc-value { font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:700; color:var(--gold); }
  .fc-label { font-size:0.72rem; color:var(--muted); text-transform:uppercase; letter-spacing:0.06em; }
  section { padding: 6rem 3rem; }
  .section-inner { max-width: 1200px; margin: 0 auto; }
  .section-tag { display:inline-block; font-size:0.72rem; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:var(--gold); margin-bottom:0.75rem; }
  .section-title { font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3.5vw,2.8rem); font-weight:800; color:var(--navy); line-height:1.2; margin-bottom:1rem; }
  .section-title em { font-style:italic; color:var(--teal); }
  .section-subtitle { color:#64748b; font-size:1rem; line-height:1.7; max-width:540px; }
  .about-section { background: var(--white); }
  .about-grid { display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center; }
  .about-image-wrap { position:relative; }
  .about-img { width:100%; border-radius:20px; object-fit:cover; height:420px; display:block; }
  .about-img-accent { position:absolute; bottom:-1.5rem; right:-1.5rem; width:160px; height:160px; border-radius:16px; background:linear-gradient(135deg,var(--gold),var(--gold-light)); z-index:-1; }
  .about-img-badge { position:absolute; top:1.5rem; left:-1.5rem; background:var(--navy); border:2px solid var(--gold); color:white; border-radius:14px; padding:1rem 1.25rem; text-align:center; }
  .about-img-badge .num { font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:var(--gold); display:block; }
  .about-img-badge .lbl { font-size:0.7rem; color:var(--muted); text-transform:uppercase; letter-spacing:0.06em; }
  .about-text p { color:#475569; font-size:0.975rem; line-height:1.8; margin-bottom:1.25rem; }
  .features-grid { display:grid; grid-template-columns:1fr 1fr 1fr; gap:1.25rem; margin-top:2.5rem; }
  .feature-item { background:var(--cream); border-radius:14px; padding:1.4rem; border:1px solid #e8f0eb; transition:all 0.25s; }
  .feature-item:hover { transform:translateY(-4px); box-shadow:0 16px 40px rgba(10,22,40,0.1); border-color:var(--gold); }
  .feature-icon { font-size:1.4rem; margin-bottom:0.6rem; }
  .feature-name { font-weight:700; font-size:0.875rem; color:var(--navy); margin-bottom:0.25rem; }
  .feature-desc { font-size:0.78rem; color:#64748b; line-height:1.5; }
  .team-section { background: var(--navy); }
  .team-section .section-title { color: var(--white); }
  .team-section .section-subtitle { color: var(--muted); }
  .team-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:2rem; margin-top:3rem; }
  .team-card { background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:20px; overflow:hidden; transition:all 0.3s; }
  .team-card:hover { background:rgba(255,255,255,0.07); border-color:rgba(201,168,76,0.3); transform:translateY(-6px); box-shadow:0 24px 60px rgba(0,0,0,0.4); }
  .team-img-wrap { position:relative; overflow:hidden; }
  .team-img-wrap img { width:100%; height:240px; object-fit:cover; display:block; filter:grayscale(20%); transition:all 0.4s; }
  .team-card:hover .team-img-wrap img { filter:grayscale(0%); transform:scale(1.04); }
  .team-overlay { position:absolute; bottom:0; left:0; right:0; height:60%; background:linear-gradient(transparent,rgba(10,22,40,0.8)); }
  .team-body { padding:1.5rem; }
  .team-name { font-family:'Playfair Display',serif; font-size:1.1rem; font-weight:700; color:var(--white); margin-bottom:0.2rem; }
  .team-role { font-size:0.75rem; color:var(--gold); text-transform:uppercase; letter-spacing:0.08em; font-weight:600; margin-bottom:0.7rem; }
  .team-bio { font-size:0.82rem; color:var(--muted); line-height:1.6; margin-bottom:1rem; }
  .team-socials { display:flex; gap:0.5rem; }
  .team-socials a { width:32px; height:32px; border-radius:8px; background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.1); display:flex; align-items:center; justify-content:center; color:var(--muted); font-size:0.85rem; text-decoration:none; transition:all 0.2s; }
  .team-socials a:hover { background:rgba(201,168,76,0.2); border-color:var(--gold); color:var(--gold-light); transform:translateY(-2px); }
  .contact-section { background: var(--cream); }
  .contact-grid { display:grid; grid-template-columns:1fr 1.2fr; gap:4rem; align-items:start; margin-top:3rem; }
  .contact-info-card { background:var(--navy); border-radius:20px; padding:2.5rem; position:relative; overflow:hidden; }
  .contact-info-card::before { content:''; position:absolute; top:0; left:0; right:0; height:4px; background:linear-gradient(90deg,var(--gold),var(--teal-light)); }
  .contact-info-card .card-title { font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:700; color:white; margin-bottom:1.5rem; }
  .contact-item { display:flex; gap:1rem; align-items:flex-start; padding:1.1rem 0; border-bottom:1px solid rgba(255,255,255,0.07); }
  .contact-item:last-child { border-bottom:none; }
  .contact-icon { width:40px; height:40px; background:rgba(201,168,76,0.15); border-radius:10px; display:flex; align-items:center; justify-content:center; color:var(--gold); font-size:1rem; flex-shrink:0; }
  .contact-label { font-size:0.7rem; font-weight:700; text-transform:uppercase; letter-spacing:0.1em; color:var(--gold); margin-bottom:0.2rem; }
  .contact-value { color:rgba(255,255,255,0.85); font-size:0.9rem; }
  .contact-form-card { background:var(--white); border-radius:20px; padding:2.5rem; box-shadow:0 8px 40px rgba(10,22,40,0.08); border:1px solid #e8f0eb; }
  .contact-form-card h3 { font-family:'Playfair Display',serif; font-size:1.5rem; font-weight:700; color:var(--navy); margin-bottom:1.75rem; }
  .form-group-custom { margin-bottom:1.25rem; }
  .form-label-custom { display:block; font-size:0.78rem; font-weight:700; color:var(--navy); letter-spacing:0.06em; text-transform:uppercase; margin-bottom:0.4rem; }
  .form-control-custom { width:100%; padding:0.75rem 1rem; border:1.5px solid #dde5ef; border-radius:10px; font-family:'DM Sans',sans-serif; font-size:0.9rem; color:var(--navy); background:var(--cream); transition:all 0.2s; outline:none; }
  .form-control-custom:focus { border-color:var(--gold); background:white; box-shadow:0 0 0 3px rgba(201,168,76,0.12); }
  textarea.form-control-custom { min-height:110px; resize:vertical; }
  .form-grid { display:grid; grid-template-columns:1fr 1fr; gap:1rem; }
  footer { background:var(--navy); padding:4rem 3rem 2rem; border-top:1px solid rgba(201,168,76,0.2); }
  .footer-inner { max-width:1200px; margin:0 auto; }
  .footer-grid { display:grid; grid-template-columns:1.5fr 1fr 1fr; gap:3rem; margin-bottom:3rem; }
  .footer-brand { font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:700; color:white; margin-bottom:0.75rem; }
  .footer-brand span { color:var(--gold); }
  .footer-desc { color:var(--muted); font-size:0.875rem; line-height:1.7; max-width:280px; }
  .footer-col-title { font-size:0.72rem; font-weight:700; text-transform:uppercase; letter-spacing:0.12em; color:var(--gold); margin-bottom:1.1rem; }
  .footer-links { list-style:none; }
  .footer-links li { margin-bottom:0.5rem; }
  .footer-links a { color:var(--muted); text-decoration:none; font-size:0.875rem; transition:color 0.2s; }
  .footer-links a:hover { color:var(--gold-light); }
  .footer-bottom { padding-top:2rem; border-top:1px solid rgba(255,255,255,0.07); display:flex; align-items:center; justify-content:space-between; }
  .footer-bottom p { color:var(--muted); font-size:0.82rem; }
  .footer-bottom a { color:var(--gold); text-decoration:none; }
  @keyframes fadeUp { from{opacity:0;transform:translateY(24px)} to{opacity:1;transform:translateY(0)} }
  .hero-content > * { animation:fadeUp 0.7s ease both; }
  .hero-badge{animation-delay:0.1s} .hero h1{animation-delay:0.2s} .hero-desc{animation-delay:0.3s} .hero-actions{animation-delay:0.4s} .hero-stats{animation-delay:0.5s}
  @media (max-width:900px) {
    .hero-grid,.about-grid,.contact-grid,.footer-grid { grid-template-columns:1fr; }
    .team-grid { grid-template-columns:1fr 1fr; }
    .features-grid { grid-template-columns:1fr 1fr; }
    .site-navbar { padding:0 1.5rem; }
    section { padding:4rem 1.5rem; }
    .hero { padding:5rem 1.5rem 3rem; }
  }
  @media (max-width:600px) {
    .team-grid,.features-grid,.form-grid { grid-template-columns:1fr; }
    footer { padding:3rem 1.5rem 1.5rem; }
    .nav-links { display:none; flex-direction:column; position:fixed; top:72px; left:0; right:0; background:rgba(10,22,40,0.98); padding:1.5rem; gap:0.5rem; }
    .nav-links.open { display:flex; }
  }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<nav class="site-navbar">
  <a href="#" class="nav-logo">
    <div class="nav-logo-icon">✈</div>
    <span class="nav-logo-text">Book<span>Ease</span></span>
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="#" class="active">Home</a></li>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
    <li><a href="<?php echo e(url('page/'.$page->slug)); ?>"><?php echo e($page->name); ?></a></li>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
    <li><a href="#contact" class="nav-cta">Book Now</a></li>
  </ul>
  <button style="display:none;background:none;border:1px solid rgba(255,255,255,0.2);border-radius:8px;padding:0.4rem 0.7rem;color:white;cursor:pointer;font-size:1.1rem;" id="navToggle">☰</button>
</nav>
<section class="hero">
  <div class="hero-grid">
    <div class="hero-content">
      <div class="hero-badge">✦ Premium Booking Platform</div>
      <h1>Manage Every Booking with <em>Precision</em> & Ease</h1>
      <p class="hero-desc">BookEase streamlines your reservations, team scheduling, and client management — all from one elegant dashboard built for modern businesses.</p>
      <div class="hero-actions">
        <a href="#contact" class="btn-gold">Get Started →</a>
        <a href="#about" class="btn-outline-gold">Learn More</a>
      </div>
      <div class="hero-stats">
        <div><div class="hero-stat-value">12k+</div><div class="hero-stat-label">Active Bookings</div></div>
        <div><div class="hero-stat-value">98%</div><div class="hero-stat-label">Satisfaction Rate</div></div>
        <div><div class="hero-stat-value">500+</div><div class="hero-stat-label">Businesses</div></div>
      </div>
    </div>
    <div class="hero-visual">
      <div class="floating-card floating-card-1">
        <div class="fc-value">+24%</div>
        <div class="fc-label">This Month</div>
      </div>
      <div class="booking-card-demo">
        <div class="demo-header">
          <span class="demo-title">Recent Bookings</span>
          <span class="demo-badge">● Live</span>
        </div>
        <div class="demo-row">
          <div class="demo-avatar">PR</div>
          <div class="demo-info"><div class="demo-name">Procheta Ray</div><div class="demo-date">Mar 25, 2026 · Suite A</div></div>
          <span class="demo-status status-confirmed">Confirmed</span>
        </div>
        <div class="demo-row">
          <div class="demo-avatar">RK</div>
          <div class="demo-info"><div class="demo-name">Riya Kumar</div><div class="demo-date">Mar 26, 2026 · Room 3</div></div>
          <span class="demo-status status-pending">Pending</span>
        </div>
        <div class="demo-row">
          <div class="demo-avatar">AM</div>
          <div class="demo-info"><div class="demo-name">Arjun Mehta</div><div class="demo-date">Mar 27, 2026 · Hall B</div></div>
          <span class="demo-status status-new">New</span>
        </div>
      </div>
      <div class="floating-card floating-card-2">
        <div class="fc-value">3</div>
        <div class="fc-label">Today's New</div>
      </div>
    </div>
  </div>
</section>
<section class="about-section" id="about">
  <div class="section-inner">
    <div class="about-grid">
      <div class="about-image-wrap">
        <img src="https://dummyimage.com/600x420/0a1628/c9a84c&text=BookEase" class="about-img" alt="About BookEase">
        <div class="about-img-accent"></div>
        <div class="about-img-badge">
          <span class="num">5+</span>
          <span class="lbl">Years of Trust</span>
        </div>
      </div>
      <div class="about-text">
        <span class="section-tag">About Us</span>
        <h2 class="section-title">Built for Businesses That Mean <em>Business</em></h2>
        <p>BookEase was born from a simple frustration — managing bookings shouldn't require three different tools and a spreadsheet. We built one elegant platform to handle it all, from first inquiry to final confirmation.</p>
        <p>Our system adapts to any industry — hospitality, healthcare, events, or professional services. Wherever time slots and reservations matter, BookEase delivers clarity and control.</p>
        <div class="features-grid">
          <div class="feature-item">
            <div class="feature-icon">📅</div>
            <div class="feature-name">Smart Scheduling</div>
            <div class="feature-desc">Auto-detect conflicts and optimise time slots.</div>
          </div>
          <div class="feature-item">
            <div class="feature-icon">🔔</div>
            <div class="feature-name">Real-time Alerts</div>
            <div class="feature-desc">Instant notifications for every booking update.</div>
          </div>
          <div class="feature-item">
            <div class="feature-icon">🛡️</div>
            <div class="feature-name">Privacy First</div>
            <div class="feature-desc">End-to-end data protection for your clients.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="team-section" id="team">
  <div class="section-inner">
    <span class="section-tag">Our People</span>
    <h2 class="section-title" style="color:var(--white);">The Innovative <em style="color:var(--gold);">Minds</em> Behind BookEase</h2>
    <p class="section-subtitle">A passionate team committed to simplifying how the world manages its time.</p>
    <div class="team-grid">
      <div class="team-card">
        <div class="team-img-wrap">
          <img src="https://dummyimage.com/400x300/0a1628/c9a84c&text=Alexandra+Chen" alt="Alexandra Chen">
          <div class="team-overlay"></div>
        </div>
        <div class="team-body">
          <div class="team-name">Alexandra Chen</div>
          <div class="team-role">Chief Executive Officer</div>
          <div class="team-bio">Visionary leader with 10+ years scaling SaaS platforms across Southeast Asia and Europe.</div>
          <div class="team-socials">
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-envelope"></i></a>
          </div>
        </div>
      </div>
      <div class="team-card">
        <div class="team-img-wrap">
          <img src="https://dummyimage.com/400x300/132240/e8c97a&text=Rohan+Sharma" alt="Rohan Sharma">
          <div class="team-overlay"></div>
        </div>
        <div class="team-body">
          <div class="team-name">Rohan Sharma</div>
          <div class="team-role">Head of Engineering</div>
          <div class="team-bio">Full-stack architect obsessed with performance, reliability, and clean code at scale.</div>
          <div class="team-socials">
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-github"></i></a>
            <a href="#"><i class="bi bi-envelope"></i></a>
          </div>
        </div>
      </div>
      <div class="team-card">
        <div class="team-img-wrap">
          <img src="https://dummyimage.com/400x300/1e3a5f/22c9b7&text=Priya+Nair" alt="Priya Nair">
          <div class="team-overlay"></div>
        </div>
        <div class="team-body">
          <div class="team-name">Priya Nair</div>
          <div class="team-role">Product Designer</div>
          <div class="team-bio">Crafting interfaces that feel effortless — because great design should be invisible.</div>
          <div class="team-socials">
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-dribbble"></i></a>
            <a href="#"><i class="bi bi-envelope"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-section" id="contact">
  <div class="section-inner">
    <span class="section-tag">Get in Touch</span>
    <h2 class="section-title">Ready to Transform Your <em>Bookings?</em></h2>
    <p class="section-subtitle">Reach out and our team will get you a personalised demo within 24 hours.</p>
    <div class="contact-grid">
      <div class="contact-info-card">
        <div class="card-title">Contact Info</div>
        <div class="contact-item">
          <div class="contact-icon">✉</div>
          <div><div class="contact-label">Email</div><div class="contact-value">support@bookease.com</div></div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">📞</div>
          <div><div class="contact-label">Phone</div><div class="contact-value">+91 XXXXX XXXXX</div></div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">📍</div>
          <div><div class="contact-label">Address</div><div class="contact-value">Somewhere, Bangalore<br>Kolkaya 560 XXX</div></div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">🕐</div>
          <div><div class="contact-label">Hours</div><div class="contact-value">Mon–Fri · 9 AM to 6 PM IST</div></div>
        </div>
      </div>
      <div class="contact-form-card">
        <h3>Send Us a Message</h3>
        <form>
          <div class="form-grid">
            <div class="form-group-custom">
              <label class="form-label-custom">Your Name</label>
              <input type="text" class="form-control-custom" placeholder="John Doe">
            </div>
            <div class="form-group-custom">
              <label class="form-label-custom">Email Address</label>
              <input type="email" class="form-control-custom" placeholder="john@example.com">
            </div>
          </div>
          <div class="form-group-custom">
            <label class="form-label-custom">Subject</label>
            <input type="text" class="form-control-custom" placeholder="How can we help?">
          </div>
          <div class="form-group-custom">
            <label class="form-label-custom">Message</label>
            <textarea class="form-control-custom" placeholder="Tell us about your booking needs..."></textarea>
          </div>
          <button type="submit" class="btn-gold" style="width:100%;justify-content:center;">Send Message →</button>
        </form>
      </div>
    </div>
  </div>
</section>
<section style="padding: 0;">
  <div style="display:flex; gap:2.5rem; align-items:center; margin-bottom:3rem; flex-wrap:wrap;">
    <div style="flex:1; min-width:260px;">
      <p style="font-size:0.75rem; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:#c9a84c; margin-bottom:0.6rem;">Who We Are</p>
      <h2 style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:800; color:#0a1628; line-height:1.25; margin-bottom:1rem;">
        Simplifying Bookings,<br><em style="font-style:italic; color:#1a9e8f;">One Reservation at a Time</em>
      </h2>
      <p style="color:#475569; font-size:0.975rem; line-height:1.85; margin-bottom:1rem;">
        BookEase was founded with a clear mission — to eliminate the chaos of managing appointments, reservations, and schedules through fragmented tools. We believe every business, regardless of size, deserves a streamlined, elegant booking experience for both their team and their clients.
      </p>
      <p style="color:#475569; font-size:0.975rem; line-height:1.85;">
        From hospitality to healthcare, events to professional services — BookEase adapts to your workflow, not the other way around. Our platform is built on three pillars: <strong style="color:#0a1628;">clarity</strong>, <strong style="color:#0a1628;">reliability</strong>, and <strong style="color:#0a1628;">elegance</strong>.
      </p>
    </div>
    <div style="flex:1; min-width:260px;">
      <img src="https://dummyimage.com/600x380/0a1628/c9a84c&text=Our+Story" alt="About BookEase" style="width:100%; border-radius:16px; display:block; box-shadow:0 16px 48px rgba(10,22,40,0.15);">
    </div>
  </div>
  <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1.25rem; margin-bottom:3rem;">
    <div style="background:linear-gradient(135deg,#0a1628,#1e3a5f); border-radius:14px; padding:1.5rem; text-align:center; border-top:3px solid #c9a84c;">
      <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:800; color:#e8c97a;">12k+</div>
      <div style="font-size:0.75rem; color:#8a9bb5; text-transform:uppercase; letter-spacing:0.08em; margin-top:0.3rem;">Bookings Managed</div>
    </div>
    <div style="background:linear-gradient(135deg,#0a1628,#1e3a5f); border-radius:14px; padding:1.5rem; text-align:center; border-top:3px solid #1a9e8f;">
      <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:800; color:#22c9b7;">500+</div>
      <div style="font-size:0.75rem; color:#8a9bb5; text-transform:uppercase; letter-spacing:0.08em; margin-top:0.3rem;">Businesses Served</div>
    </div>
    <div style="background:linear-gradient(135deg,#0a1628,#1e3a5f); border-radius:14px; padding:1.5rem; text-align:center; border-top:3px solid #c9a84c;">
      <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:800; color:#e8c97a;">98%</div>
      <div style="font-size:0.75rem; color:#8a9bb5; text-transform:uppercase; letter-spacing:0.08em; margin-top:0.3rem;">Satisfaction Rate</div>
    </div>
    <div style="background:linear-gradient(135deg,#0a1628,#1e3a5f); border-radius:14px; padding:1.5rem; text-align:center; border-top:3px solid #1a9e8f;">
      <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:800; color:#22c9b7;">5+</div>
      <div style="font-size:0.75rem; color:#8a9bb5; text-transform:uppercase; letter-spacing:0.08em; margin-top:0.3rem;">Years of Trust</div>
    </div>
  </div>
  <div style="background:#faf7f2; border-radius:16px; padding:2.5rem; margin-bottom:2.5rem; border-left:4px solid #c9a84c;">
    <p style="font-size:0.72rem; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:#c9a84c; margin-bottom:0.6rem;">Our Story</p>
    <h3 style="font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:700; color:#0a1628; margin-bottom:1rem;">From Frustration to a Full Platform</h3>
    <p style="color:#475569; font-size:0.95rem; line-height:1.85; margin-bottom:0.85rem;">
      It started in 2019 when our founders were running a boutique hospitality business and spending more time managing calendars than serving guests. Spreadsheets broke. Emails got lost. Double-bookings created embarrassing situations. They knew there had to be a better way.
    </p>
    <p style="color:#475569; font-size:0.95rem; line-height:1.85;">
      After two years of building, testing, and refining with real businesses, BookEase launched publicly in 2021. Today, it powers reservations for hotels, clinics, coworking spaces, event venues, and consulting firms across India and beyond.
    </p>
  </div>
  <div style="margin-bottom:2.5rem;">
    <p style="font-size:0.72rem; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:#c9a84c; margin-bottom:0.5rem;">What We Stand For</p>
    <h3 style="font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:700; color:#0a1628; margin-bottom:1.75rem;">Our Core Values</h3>
    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.25rem;">
      <div style="background:#fff; border-radius:14px; padding:1.5rem; border:1px solid #e8f0eb; display:flex; gap:1rem; align-items:flex-start;">
        <div style="font-size:1.5rem; flex-shrink:0;">🎯</div>
        <div>
          <div style="font-weight:700; color:#0a1628; margin-bottom:0.3rem;">Precision</div>
          <div style="font-size:0.85rem; color:#64748b; line-height:1.6;">Every detail in a booking matters. We obsess over accuracy so your clients never have a bad experience.</div>
        </div>
      </div>
      <div style="background:#fff; border-radius:14px; padding:1.5rem; border:1px solid #e8f0eb; display:flex; gap:1rem; align-items:flex-start;">
        <div style="font-size:1.5rem; flex-shrink:0;">⚡</div>
        <div>
          <div style="font-weight:700; color:#0a1628; margin-bottom:0.3rem;">Speed</div>
          <div style="font-size:0.85rem; color:#64748b; line-height:1.6;">A booking should take seconds, not minutes. Our platform is built for speed at every touchpoint.</div>
        </div>
      </div>
      <div style="background:#fff; border-radius:14px; padding:1.5rem; border:1px solid #e8f0eb; display:flex; gap:1rem; align-items:flex-start;">
        <div style="font-size:1.5rem; flex-shrink:0;">🛡️</div>
        <div>
          <div style="font-weight:700; color:#0a1628; margin-bottom:0.3rem;">Trust & Privacy</div>
          <div style="font-size:0.85rem; color:#64748b; line-height:1.6;">Your data and your clients' data is handled with the highest standards of security and confidentiality.</div>
        </div>
      </div>
      <div style="background:#fff; border-radius:14px; padding:1.5rem; border:1px solid #e8f0eb; display:flex; gap:1rem; align-items:flex-start;">
        <div style="font-size:1.5rem; flex-shrink:0;">🌱</div>
        <div>
          <div style="font-weight:700; color:#0a1628; margin-bottom:0.3rem;">Continuous Growth</div>
          <div style="font-size:0.85rem; color:#64748b; line-height:1.6;">We listen to every piece of feedback and ship improvements constantly. BookEase gets better every week.</div>
        </div>
      </div>
    </div>
  </div>
  <div style="background:linear-gradient(135deg,#0a1628,#132240); border-radius:16px; padding:2.5rem; text-align:center; position:relative; overflow:hidden;">
    <div style="position:absolute; top:0; left:0; right:0; height:3px; background:linear-gradient(90deg,#c9a84c,#22c9b7);"></div>
    <p style="font-size:0.72rem; font-weight:700; letter-spacing:0.15em; text-transform:uppercase; color:#c9a84c; margin-bottom:0.5rem;">Ready to Start?</p>
    <h3 style="font-family:'Playfair Display',serif; font-size:1.5rem; font-weight:700; color:#ffffff; margin-bottom:0.75rem;">Join 500+ Businesses on BookEase</h3>
    <p style="color:#8a9bb5; font-size:0.9rem; margin-bottom:1.5rem; max-width:480px; margin-left:auto; margin-right:auto; line-height:1.7;">Get set up in under 10 minutes. No credit card required for your free trial.</p>
    <a href="/#contact" style="display:inline-block; background:linear-gradient(135deg,#c9a84c,#e8c97a); color:#0a1628; font-weight:700; font-size:0.95rem; padding:0.85rem 2.25rem; border-radius:10px; text-decoration:none;">Get Started Today →</a>
  </div>
</section>
<footer>
  <div class="footer-inner">
    <div class="footer-grid">
      <div>
        <div class="footer-brand">Book<span>Ease</span></div>
        <p class="footer-desc">The all-in-one booking management platform for modern businesses. Elegant, reliable, and built to scale.</p>
      </div>
      <div>
        <div class="footer-col-title">Quick Links</div>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#team">Our Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div>
        <div class="footer-col-title">Services</div>
        <ul class="footer-links">
          <li><a href="#">Online Bookings</a></li>
          <li><a href="#">Team Scheduling</a></li>
          <li><a href="#">Client Management</a></li>
          <li><a href="#">Analytics & Reports</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 <a href="#">BookEase</a>. All rights reserved.</p>
      <p style="color:var(--muted);font-size:0.82rem;">Privacy Policy · Terms of Service</p>
    </div>
  </div>
</footer>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('customjs'); ?>
<script>
  window.addEventListener('scroll', () => {
    document.querySelector('.site-navbar').style.background =
      window.scrollY > 60 ? 'rgba(10,22,40,0.98)' : 'rgba(10,22,40,0.92)';
  });
  document.getElementById('navToggle')?.addEventListener('click', () => {
    const nl = document.getElementById('navLinks');
    nl.classList.toggle('open');
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.baseview', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\KIIT\Desktop\INTERSHIP\WEB DEVELOPEMENT\PROJECTS\PROJECT3\bookingsms\resources\views/index.blade.php ENDPATH**/ ?>
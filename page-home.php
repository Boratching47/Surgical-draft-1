<?php
/*
Template Name: Home Page Template
*/
$tdir = get_template_directory_uri();
?><!doctype html>
<html lang="en-NZ">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Surgical Group &mdash; Specialist Care in Christchurch</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
:root{
  --navy-900:#0a1733;--navy-800:#0f2147;--navy-700:#15315f;
  --blue:#2e7bff;--blue-bright:#4f9bff;--blue-soft:#6aa8ff;
  --ink:#16223a;--slate:#5b6677;--line:#e6ecf3;--bg:#ffffff;--bg-alt:#f4f8fd;
  --display:'Plus Jakarta Sans',system-ui,sans-serif;--body:'Inter',system-ui,sans-serif;
  --container:1180px;--radius:16px;
}
*,*::before,*::after{box-sizing:border-box;}
html{scroll-behavior:smooth;}
body{margin:0;font-family:var(--body);color:var(--ink);background:var(--bg);line-height:1.6;-webkit-font-smoothing:antialiased;}
h1,h2,h3,h4{font-family:var(--display);line-height:1.1;margin:0 0 .4em;font-weight:700;}
p{margin:0 0 1rem;}
a{color:var(--blue);text-decoration:none;}
img{max-width:100%;display:block;}
.container{width:100%;max-width:var(--container);margin-inline:auto;padding-inline:24px;}
.btn{display:inline-flex;align-items:center;gap:.55rem;font-family:var(--display);font-weight:600;font-size:.95rem;padding:.85rem 1.6rem;border-radius:999px;border:1.5px solid transparent;cursor:pointer;transition:transform .15s ease,background .2s ease,box-shadow .2s ease;white-space:nowrap;}
.btn:hover{transform:translateY(-2px);}
.btn--primary{background:var(--blue);color:#fff;box-shadow:0 8px 22px rgba(46,123,255,.35);}
.btn--primary:hover{background:#1f6bf0;}
.btn--ghost{background:rgba(255,255,255,.12);color:#fff;border-color:rgba(255,255,255,.35);backdrop-filter:blur(6px);}
.btn--ghost:hover{background:rgba(255,255,255,.2);}
.btn--outline{background:transparent;color:var(--blue);border-color:var(--blue);}
.btn--outline:hover{background:var(--blue);color:#fff;}
.btn svg{width:17px;height:17px;}
.btn--full{width:100%;justify-content:center;}
.site-header{position:sticky;top:0;z-index:50;background:rgba(10,23,51,.92);backdrop-filter:blur(10px);padding-bottom:10px;transition:height .25s ease,background .25s ease;}
.site-header.shrink .nav{height:60px;}
.site-header.shrink{background:rgba(10,23,51,.97);box-shadow:0 2px 20px rgba(0,0,0,.25);}
.nav{display:flex;align-items:center;justify-content:space-between;height:74px;}
.brand{display:flex;align-items:center;gap:.6rem;color:#fff;font-family:var(--display);font-weight:800;font-size:1.2rem;letter-spacing:-.01em;}
.brand__mark{width:42px;height:42px;flex:none;object-fit:contain;}
.nav__links{display:flex;align-items:center;gap:2rem;list-style:none;margin:0;padding:0;}
.nav__links a{color:#dbe4f3;font-family:var(--display);font-weight:500;font-size:.95rem;}
.nav__links a:hover{color:#fff;}
.nav__right{display:flex;align-items:center;gap:1rem;}
.nav__toggle{display:none;background:none;border:0;cursor:pointer;padding:8px;}
.nav__toggle span{display:block;width:24px;height:2px;background:#fff;margin:5px 0;transition:.2s;}
.hero{position:relative;color:#fff;overflow:hidden;background:var(--navy-900);}
.hero__bg{position:absolute;inset:0;z-index:0;}
.hero__bg img{width:100%;height:100%;object-fit:cover;opacity:0;position:absolute;inset:0;transition:opacity 1.2s ease;}
.hero__bg img.active{opacity:.55;}
.hero__bg::after{content:"";position:absolute;inset:0;background:linear-gradient(105deg,var(--navy-900) 28%,rgba(15,33,71,.85) 50%,rgba(10,23,51,.35) 100%);}
.hero__inner{position:relative;z-index:1;padding:6.5rem 0 7rem;max-width:640px;}
.hero h1{font-size:clamp(2.6rem,6vw,4.7rem);font-weight:800;letter-spacing:-.025em;line-height:1.04;margin-bottom:.1em;}
.hero h1 .accent{color:var(--blue-bright);display:block;}
.hero__rule{width:74px;height:3px;background:rgba(255,255,255,.45);border:0;margin:1.7rem 0 2rem;border-radius:3px;}
.hero__sub{font-size:1.15rem;color:#c9d6ec;max-width:480px;margin-bottom:2rem;}
.hero__cta{display:flex;gap:1rem;flex-wrap:wrap;}
.trust{background:var(--bg-alt);border-bottom:1px solid var(--line);}
.trust__inner{display:flex;flex-wrap:wrap;gap:2.5rem;justify-content:space-between;align-items:center;padding:1.5rem 0;}
.trust__item{display:flex;align-items:center;gap:.7rem;color:var(--slate);font-family:var(--display);font-weight:600;font-size:.95rem;}
.trust__item svg{width:22px;height:22px;color:var(--blue);flex:none;}
.section{padding:5.5rem 0;}
.section--alt{background:var(--bg-alt);}
.eyebrow{font-family:var(--display);font-weight:700;font-size:.8rem;letter-spacing:.12em;text-transform:uppercase;color:var(--blue);margin-bottom:.6rem;}
.section__head{max-width:640px;margin-bottom:3rem;}
.section__head h2{font-size:clamp(1.9rem,3.5vw,2.7rem);letter-spacing:-.015em;color:var(--ink);}
.section__head p{color:var(--slate);font-size:1.08rem;}
.cards{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;}
.cards--4{grid-template-columns:repeat(4,1fr);}
.card{background:#fff;border:1px solid var(--line);border-radius:var(--radius);padding:2rem 1.8rem;transition:transform .18s ease,box-shadow .18s ease;}
.card:hover{transform:translateY(-4px);box-shadow:0 18px 40px rgba(16,34,71,.1);}
.card h3{font-size:1.1rem;color:var(--ink);}
.card p{color:var(--slate);font-size:.95rem;margin:0;}
.card--img{padding:0;overflow:hidden;}
.card--img .card__img-wrap{aspect-ratio:16/10;overflow:hidden;background:var(--navy-800);}
.card--img .card__img-wrap img{width:100%;height:100%;object-fit:cover;transition:transform .4s ease;}
.card--img:hover .card__img-wrap img{transform:scale(1.04);}
.card--img .card__body{padding:1.5rem 1.6rem 1.8rem;}
.card--img .card__body h3{font-size:1.1rem;margin-bottom:.35rem;}
.card--img .card__body p{font-size:.93rem;color:var(--slate);margin:0;}
.split{display:grid;grid-template-columns:1.05fr .95fr;gap:3.5rem;align-items:center;}
.split__media{border-radius:var(--radius);overflow:hidden;aspect-ratio:4/3;background:var(--navy-800);position:relative;}
.split__media img{width:100%;height:100%;object-fit:cover;}
.split ul{list-style:none;padding:0;margin:1.5rem 0 2rem;display:grid;gap:.9rem;}
.split li{display:flex;gap:.7rem;align-items:flex-start;color:var(--ink);font-weight:500;}
.split li svg{width:22px;height:22px;color:var(--blue);flex:none;margin-top:2px;}
.team{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;}
.doc{background:#fff;border:1px solid var(--line);border-radius:var(--radius);overflow:hidden;transition:transform .18s ease,box-shadow .18s ease;}
.doc:hover{transform:translateY(-4px);box-shadow:0 18px 40px rgba(16,34,71,.1);}
.doc__photo{aspect-ratio:1/1;background:linear-gradient(160deg,var(--navy-700),var(--navy-900));overflow:hidden;}
.doc__photo img{width:100%;height:100%;object-fit:cover;display:block;}
.doc__body{padding:1.2rem 1.3rem 1.5rem;}
.doc__body h4{font-size:1.05rem;margin-bottom:.15rem;color:var(--ink);}
.doc__body span{color:var(--slate);font-size:.9rem;}
.reviews-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-bottom:2rem;}
.review-card{background:#fff;border:1px solid var(--line);border-radius:var(--radius);padding:1.8rem;display:flex;flex-direction:column;gap:1rem;}
.review-card__stars{color:#f5b800;font-size:1.2rem;letter-spacing:2px;}
.review-card__text{color:var(--slate);font-size:.97rem;line-height:1.65;margin:0;flex:1;}
.review-card__author{display:flex;align-items:center;gap:.75rem;}
.review-card__avatar{width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,var(--blue),var(--blue-soft));color:#fff;display:flex;align-items:center;justify-content:center;font-family:var(--display);font-weight:700;flex:none;}
.review-card__author strong{display:block;font-size:.95rem;color:var(--ink);}
.review-card__author span{font-size:.82rem;color:var(--slate);}
.reviews-badge{display:flex;align-items:center;gap:.75rem;justify-content:center;color:var(--slate);font-size:1rem;}
.reviews-badge strong{color:var(--ink);}
.cta-band{background:linear-gradient(115deg,var(--navy-900),var(--navy-700));color:#fff;border-radius:24px;padding:3.5rem;text-align:center;}
.cta-band h2{font-size:clamp(1.8rem,3vw,2.6rem);margin-bottom:.4em;}
.cta-band p{color:#c9d6ec;max-width:520px;margin:0 auto 2rem;}
.hero__cta--center{justify-content:center;}
.location-block{display:grid;grid-template-columns:1.1fr .9fr;gap:3rem;align-items:start;background:#fff;border:1px solid var(--line);border-radius:24px;overflow:hidden;}
.location-block__img{aspect-ratio:4/3;background:var(--navy-800);}
.location-block__img img{width:100%;height:100%;object-fit:cover;}
.location-block__info{padding:2.5rem 2.5rem 2.5rem 0;}
.location-rule{width:50px;height:3px;background:var(--blue);border:0;margin:1rem 0 1.5rem;border-radius:3px;}
.location-list{list-style:none;padding:0;margin:0 0 1.5rem;display:grid;gap:1.1rem;}
.location-list li{display:flex;gap:.85rem;align-items:flex-start;font-size:.97rem;color:var(--ink);}
.location-list li svg{width:20px;height:20px;color:var(--blue);flex:none;margin-top:3px;}
.location-list a{color:var(--blue);}
.location-map{border-radius:12px;overflow:hidden;margin-top:.5rem;}
.blog-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;}
.blog-card{background:#fff;border:1px solid var(--line);border-radius:var(--radius);overflow:hidden;transition:transform .18s ease,box-shadow .18s ease;}
.blog-card:hover{transform:translateY(-4px);box-shadow:0 18px 40px rgba(16,34,71,.1);}
.blog-card__img{aspect-ratio:16/9;overflow:hidden;background:var(--navy-800);}
.blog-card__img img{width:100%;height:100%;object-fit:cover;transition:transform .4s ease;}
.blog-card:hover .blog-card__img img{transform:scale(1.04);}
.blog-card__body{padding:1.5rem 1.6rem 1.8rem;}
.blog-card__tag{display:inline-block;background:rgba(46,123,255,.1);color:var(--blue);font-family:var(--display);font-weight:600;font-size:.75rem;letter-spacing:.08em;text-transform:uppercase;padding:.25rem .7rem;border-radius:999px;margin-bottom:.8rem;}
.blog-card__body h3{font-size:1.07rem;margin-bottom:.5rem;}
.blog-card__body h3 a{color:var(--ink);}
.blog-card__body h3 a:hover{color:var(--blue);}
.blog-card__body p{color:var(--slate);font-size:.93rem;margin-bottom:.75rem;}
.blog-card__date{font-size:.83rem;color:var(--slate);}
.site-footer{background:var(--navy-900);color:#c9d6ec;padding:4rem 0 2rem;}
.footer__grid{display:grid;grid-template-columns:1.6fr 1fr 1fr 1fr;gap:2.5rem;margin-bottom:3rem;}
.footer__grid h5{font-family:var(--display);color:#fff;font-size:.85rem;letter-spacing:.1em;text-transform:uppercase;margin-bottom:1.1rem;}
.footer__grid a{color:#aebbd2;display:block;margin-bottom:.6rem;font-size:.95rem;}
.footer__grid a:hover{color:#fff;}
.footer__brand .brand{margin-bottom:1rem;}
.footer__brand p{color:#8b9bb8;font-size:.95rem;max-width:280px;}
.footer__bar{border-top:1px solid rgba(255,255,255,.1);padding-top:1.5rem;font-size:.85rem;color:#7e8eaa;display:flex;justify-content:space-between;flex-wrap:wrap;gap:1rem;}
.section__head--narrow h2{font-size:clamp(1.9rem,3.5vw,2.6rem);letter-spacing:-.015em;}
.lead{color:var(--slate);font-size:1.05rem;}
.reveal{opacity:0;transform:translateY(24px);transition:opacity .6s ease,transform .6s ease;}
.reveal.in{opacity:1;transform:none;}
@media(prefers-reduced-motion:reduce){.reveal{opacity:1;transform:none;transition:none;}html{scroll-behavior:auto;}}
@media(max-width:1024px){.cards--4{grid-template-columns:repeat(2,1fr);}}
@media(max-width:880px){
  .nav__links,.nav__right .btn{display:none;}
  .nav__toggle{display:block;}
  .cards,.team,.reviews-grid,.blog-grid{grid-template-columns:repeat(2,1fr);}
  .split{grid-template-columns:1fr;}
  .footer__grid{grid-template-columns:1fr 1fr;}
  .hero__inner{padding:4rem 0 4.5rem;}
  .location-block{grid-template-columns:1fr;}
  .location-block__info{padding:0 1.5rem 2rem;}
}
@media(max-width:540px){
  .cards,.cards--4,.team,.footer__grid,.reviews-grid,.blog-grid{grid-template-columns:1fr;}
  .cta-band{padding:2.2rem 1.5rem;}
  .hero__cta{flex-direction:column;align-items:stretch;}
  .btn{justify-content:center;}
}
</style>
</head>
<body>

<header class="site-header">
  <div class="container nav">
    <a class="brand" href="/">
      <img class="brand__mark" src="<?php echo $tdir; ?>/images/tsg-logo-white.png" alt="The Surgical Group">
      The Surgical Group
    </a>
    <ul class="nav__links">
      <li><a href="#specialists">Our Specialists</a></li>
      <li><a href="#about">About Us</a></li>
      <li><a href="#blog">Blog</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <div class="nav__right">
      <button class="nav__toggle" aria-label="Menu" onclick="document.querySelector('.nav__links').style.display='flex'"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

<section class="hero">
  <div class="hero__bg" id="hero-bg">
    <img class="hero-slide active" src="<?php echo $tdir; ?>/images/ccg-colorectal.jpg" alt="">
    <img class="hero-slide" src="<?php echo $tdir; ?>/images/ccg-clinical.jpg" alt="">
    <img class="hero-slide" src="<?php echo $tdir; ?>/images/cbuggs-bariatric.jpg" alt="">
    <img class="hero-slide" src="<?php echo $tdir; ?>/images/cc-4.jpg" alt="">
    <img class="hero-slide" src="<?php echo $tdir; ?>/images/building.jpg" alt="">
  </div>
  <div class="container">
    <div class="hero__inner">
      <h1>Your<span class="accent">Specialist Care</span>in Christchurch</h1>
      <hr class="hero__rule">
      <p class="hero__sub">A group of Christchurch's leading surgical specialists, working together to deliver expert, patient focused care under one roof.</p>
      <div class="hero__cta">
        <button class="btn btn--primary" onclick="document.getElementById('enquiry-modal').classList.add('open')">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
          Make An Enquiry
        </button>
      </div>
    </div>
  </div>
</section>

<section class="trust">
  <div class="container trust__inner">
    <div class="trust__item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/></svg>Fully accredited specialists</div>
    <div class="trust__item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Fast referral &amp; consult times</div>
    <div class="trust__item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Patient centred approach</div>
    <div class="trust__item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg>Central Christchurch location</div>
  </div>
</section>

<section class="section" id="services">
  <div class="container">
    <div class="section__head reveal">
      <div class="eyebrow">What we do</div>
      <h2>Comprehensive surgical specialties</h2>
      <p>Our specialists cover a broad range of surgical disciplines, so patients and referrers have a trusted point of contact across Christchurch.</p>
    </div>
    <div class="cards cards--4 reveal">
      <article class="card card--img">
        <div class="card__img-wrap"><img src="<?php echo $tdir; ?>/images/ccg-colorectal.jpg" alt="Colorectal Surgery"></div>
        <div class="card__body"><h3>Colorectal Surgery</h3><p>Expert assessment and treatment of bowel, colon and rectal conditions, including screening and minimally invasive procedures.</p></div>
      </article>
      <article class="card card--img">
        <div class="card__img-wrap"><img src="<?php echo $tdir; ?>/images/cbuggs-bariatric.jpg" alt="Bariatric Surgery"></div>
        <div class="card__body"><h3>Bariatric Surgery</h3><p>Specialist weight loss surgery to improve health and quality of life, with comprehensive pre and post operative support.</p></div>
      </article>
      <article class="card card--img">
        <div class="card__img-wrap"><img src="<?php echo $tdir; ?>/images/ccg-clinical.jpg" alt="Upper GI and General Surgery"></div>
        <div class="card__body"><h3>Upper GI &amp; General Surgery</h3><p>A full range of general surgical care, from consultation through to procedure and follow up, tailored to each patient.</p></div>
      </article>
      <article class="card card--img">
        <div class="card__img-wrap"><img src="<?php echo $tdir; ?>/images/ccg-colorectal-2.jpg" alt="Gynaecologic Oncology"></div>
        <div class="card__body"><h3>Gynaecologic Oncology</h3><p>We provide expert oncology treatment for cancers of the female reproductive system, including cervix, uterus, ovaries and vulva.</p></div>
      </article>
    </div>
  </div>
</section>

<section class="section section--alt" id="about">
  <div class="container split reveal">
    <div class="split__media">
      <img src="<?php echo $tdir; ?>/images/building.jpg" alt="The Surgical Group">
    </div>
    <div>
      <div class="eyebrow">About us</div>
      <h2 class="section__head--narrow">Specialist care, brought together</h2>
      <p class="lead">The Surgical Group brings Christchurch's surgical specialists under one banner, making it simpler for patients and GPs to access trusted, coordinated care.</p>
      <ul>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Experienced, fully accredited surgeons</li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Streamlined referrals for GPs and nurses</li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Clear communication at every step</li>
      </ul>
      <a class="btn btn--outline" href="#specialists">Meet the team</a>
    </div>
  </div>
</section>

<section class="section" id="specialists">
  <div class="container">
    <div class="section__head reveal">
      <div class="eyebrow">Our specialists</div>
      <h2>The team behind your care</h2>
      <p>Christchurch's leading surgical specialists, working together under one roof.</p>
    </div>
    <div class="team reveal">
      <article class="doc"><div class="doc__photo"><img src="https://christchurchcolorectal.co.nz/wp-content/uploads/2025/02/CCC-62-450x450.jpg" alt="Prof Frank Frizelle"></div><div class="doc__body"><h4>Prof Frank Frizelle</h4><span>Colorectal Surgeon</span></div></article>
      <article class="doc"><div class="doc__photo"><img src="https://christchurchcolorectal.co.nz/wp-content/uploads/2025/02/CCC-53-450x450.jpg" alt="Mr John Frye"></div><div class="doc__body"><h4>Mr John Frye</h4><span>Colorectal &amp; General Surgeon</span></div></article>
      <article class="doc"><div class="doc__photo"><img src="https://christchurchcolorectal.co.nz/wp-content/uploads/2025/02/christchurch-colorectal-03694-450x450.jpg" alt="Prof Tim Eglinton"></div><div class="doc__body"><h4>Prof Tim Eglinton</h4><span>Colorectal &amp; General Surgeon</span></div></article>
      <article class="doc"><div class="doc__photo"><img src="https://christchurchcolorectal.co.nz/wp-content/uploads/2025/02/CCC-46-450x450.jpg" alt="Mr Chris Wakeman"></div><div class="doc__body"><h4>Mr Chris Wakeman</h4><span>Colorectal &amp; General Surgeon</span></div></article>
      <article class="doc"><div class="doc__photo"><img src="https://christchurchcolorectal.co.nz/wp-content/uploads/2025/02/christchurch-colorectal-03622-450x450.jpg" alt="Mr Richard Tapper"></div><div class="doc__body"><h4>Mr Richard Tapper</h4><span>Colorectal &amp; General Surgeon</span></div></article>
      <article class="doc"><div class="doc__photo"><img src="https://christchurchcolorectal.co.nz/wp-content/uploads/2025/02/colorectalheadshotscropped-02959-450x450.jpg" alt="Mr Prashant Sharma"></div><div class="doc__body"><h4>Mr Prashant Sharma</h4><span>Colorectal &amp; General Surgeon</span></div></article>
      <article class="doc"><div class="doc__photo"><img src="https://christchurchcolorectal.co.nz/wp-content/uploads/2025/02/christchurch-colorectal-03278-450x450.jpg" alt="Dr Sarah Abbott"></div><div class="doc__body"><h4>Dr Sarah Abbott</h4><span>Colorectal &amp; General Surgeon</span></div></article>
      <article class="doc"><div class="doc__photo"><img src="https://christchurchcolorectal.co.nz/wp-content/uploads/2025/02/christchurch-colorectal-03739-1-450x450.jpg" alt="Dr Rebecca Shine"></div><div class="doc__body"><h4>Dr Rebecca Shine</h4><span>Colorectal &amp; General Surgeon</span></div></article>
      <article class="doc"><div class="doc__photo"><img src="https://christchurchcolorectal.co.nz/wp-content/uploads/2025/02/colorectalheadshots1-03069-2-450x450.jpg" alt="Mr Simon Richards"></div><div class="doc__body"><h4>Mr Simon Richards</h4><span>Colorectal &amp; General Surgeon</span></div></article>
      <article class="doc"><div class="doc__photo"><img src="https://christchurchcolorectal.co.nz/wp-content/uploads/2026/02/CCG-25-450x450.jpg" alt="Dr Tamara Glyn"></div><div class="doc__body"><h4>Dr Tamara Glyn</h4><span>Colorectal &amp; General Surgeon</span></div></article>
      <article class="doc"><div class="doc__photo"><img src="https://christchurchcolorectal.co.nz/wp-content/uploads/2025/02/christchurch-colorectal-03713-1-450x450.jpg" alt="Mr Greg Turner"></div><div class="doc__body"><h4>Mr Greg Turner</h4><span>Colorectal &amp; General Surgeon</span></div></article>
    </div>
  </div>
</section>

<section class="section section--alt" id="reviews">
  <div class="container">
    <div class="section__head reveal">
      <div class="eyebrow">Patient reviews</div>
      <h2>What our patients say</h2>
      <p>Real reviews from patients of Christchurch Colorectal Group on Google.</p>
    </div>
    <div class="reviews-grid reveal">
      <article class="review-card">
        <div class="review-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="review-card__text">"I cannot speak highly enough of the team at Christchurch Colorectal Group. From the very first consultation through to my procedure and follow up, I felt well informed and in safe hands. Truly outstanding care."</p>
        <div class="review-card__author"><div class="review-card__avatar">S</div><div><strong>Sarah M.</strong><span>Google Review</span></div></div>
      </article>
      <article class="review-card">
        <div class="review-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="review-card__text">"The staff were incredibly professional and caring throughout my treatment. Waiting times were minimal and communication was clear at every stage. I would highly recommend this practice to anyone needing specialist care."</p>
        <div class="review-card__author"><div class="review-card__avatar">J</div><div><strong>James T.</strong><span>Google Review</span></div></div>
      </article>
      <article class="review-card">
        <div class="review-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="review-card__text">"Excellent service and a very thorough consultation. My surgeon took the time to explain everything in plain language and made me feel completely at ease. The self referral process was simple and quick."</p>
        <div class="review-card__author"><div class="review-card__avatar">L</div><div><strong>Linda K.</strong><span>Google Review</span></div></div>
      </article>
    </div>
    <div class="reviews-badge reveal">
      <svg viewBox="0 0 24 24" width="28" height="28"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
      <span>Rated <strong>5.0</strong> on Google</span>
    </div>
  </div>
</section>

<section class="section" id="contact">
  <div class="container">
    <div class="cta-band reveal">
      <h2>Not sure if you need a consultation?</h2>
      <p>Refer yourself and our team will guide you.</p>
      <div class="hero__cta hero__cta--center">
        <button class="btn btn--primary" onclick="document.getElementById('referral-modal').classList.add('open')">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          Self Refer
        </button>
      </div>
    </div>
  </div>
</section>

<section class="section section--alt" id="location">
  <div class="container">
    <div class="location-block reveal">
      <div class="location-block__img">
        <img src="<?php echo $tdir; ?>/images/building.jpg" alt="Specialist Centre, 21 Caledonian Road">
      </div>
      <div class="location-block__info">
        <div class="eyebrow">Find us</div>
        <h2>Where you can find us</h2>
        <hr class="location-rule">
        <ul class="location-list">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg><div>Specialist Centre, Level 2<br>21 Caledonian Road, Saint Albans<br>Christchurch 8014</div></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg><div>Ph: <a href="tel:0396833140">03 968 3140</a></div></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><div>Email: <a href="mailto:info@surgicalgroup.co.nz">info@surgicalgroup.co.nz</a></div></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg><div>Opening Hours<br>8am to 5pm Monday to Friday</div></li>
        </ul>
        <div class="location-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.1!2d172.6381!3d-43.5231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318a3e6e6e6e6f%3A0x0!2s21+Caledonian+Rd%2C+Saint+Albans%2C+Christchurch+8014!5e0!3m2!1sen!2snz!4v1" width="100%" height="200" style="border:0;border-radius:12px;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="blog">
  <div class="container">
    <div class="section__head reveal">
      <div class="eyebrow">Latest articles</div>
      <h2>From the blog</h2>
      <p>Helpful guides and insights from our surgical team on conditions, procedures and what to expect.</p>
    </div>
    <div class="blog-grid reveal">
      <article class="blog-card">
        <div class="blog-card__img"><img src="<?php echo $tdir; ?>/images/cc-4.jpg" alt="When to see a colorectal specialist"></div>
        <div class="blog-card__body"><span class="blog-card__tag">Colorectal</span><h3><a href="#">When Should You See a Colorectal Specialist?</a></h3><p>Many people put off seeing a specialist about bowel symptoms. Here is what to look out for and when it is time to book an appointment.</p><span class="blog-card__date">June 2026</span></div>
      </article>
      <article class="blog-card">
        <div class="blog-card__img"><img src="<?php echo $tdir; ?>/images/cbuggs-bariatric.jpg" alt="Bariatric surgery guide"></div>
        <div class="blog-card__body"><span class="blog-card__tag">Bariatric</span><h3><a href="#">Your Guide to Bariatric Surgery in Christchurch</a></h3><p>Thinking about weight loss surgery? Our specialists walk you through the options, what recovery looks like and the long term results.</p><span class="blog-card__date">May 2026</span></div>
      </article>
      <article class="blog-card">
        <div class="blog-card__img"><img src="<?php echo $tdir; ?>/images/ccg-clinical.jpg" alt="Self referral guide"></div>
        <div class="blog-card__body"><span class="blog-card__tag">Patient Guide</span><h3><a href="#">How to Self Refer: What Happens After You Submit?</a></h3><p>You do not always need a GP to see one of our specialists. Here is how the self referral process works and what to expect next.</p><span class="blog-card__date">April 2026</span></div>
      </article>
    </div>
  </div>
</section>

<footer class="site-footer">
  <div class="container">
    <div class="footer__grid">
      <div class="footer__brand">
        <span class="brand"><img class="brand__mark" src="<?php echo $tdir; ?>/images/tsg-logo-white.png" alt="The Surgical Group">The Surgical Group</span>
        <p>Specialist surgical care in central Christchurch.</p>
      </div>
      <div><h5>Care</h5><a href="#">Colorectal Surgery</a><a href="#">Bariatric Surgery</a><a href="#">Upper GI &amp; General Surgery</a><a href="#">Gynaecologic Oncology</a></div>
      <div><h5>Practice</h5><a href="#">About Us</a><a href="#specialists">Our Specialists</a><a href="#blog">Blog</a></div>
      <div><h5>Contact</h5><a href="https://docs.google.com/forms/d/e/1FAIpQLScNj9e_nMqsdYuTmP872JaveLH36FamTQNBpiheUnb_NgB0-Q/viewform?usp=publish-editor" target="_blank" rel="noopener">Self Referral</a><a href="tel:0396833140">03 968 3140</a><a href="#location">Find Us</a></div>
    </div>
    <div class="footer__bar">
      <span>&copy; 2026 The Surgical Group. All rights reserved.</span>
      <span>Christchurch, New Zealand</span>
    </div>
  </div>
</footer>

<!-- ENQUIRY MODAL -->
<div id="enquiry-modal" class="modal" onclick="if(event.target===this)this.classList.remove('open')">
  <div class="modal__box">
    <button class="modal__close" onclick="document.getElementById('enquiry-modal').classList.remove('open')" aria-label="Close">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>
    <div class="modal__header">
      <div class="eyebrow">Get in touch</div>
      <h2>Make An Enquiry</h2>
      <p>Fill in your details and a member of our team will be in touch with you shortly.</p>
    </div>
    <div style="padding:1.5rem 2.5rem 2.5rem;">
      <?php echo do_shortcode('[wpforms id="ENQUIRY_FORM_ID"]'); ?>
    </div>
  </div>
</div>

<!-- SELF REFERRAL MODAL -->
<div id="referral-modal" class="modal" onclick="if(event.target===this)this.classList.remove('open')">
  <div class="modal__box">
    <button class="modal__close" onclick="document.getElementById('referral-modal').classList.remove('open')" aria-label="Close">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>
    <div class="modal__header">
      <div class="eyebrow">Self Referral</div>
      <h2>Refer yourself to our team</h2>
      <p>Fill in this form and one of our coordinators will be in touch within one business day.</p>
    </div>
    <div style="padding:1.5rem 2.5rem 2.5rem;">
      <?php echo do_shortcode('[wpforms id="REFERRAL_FORM_ID"]'); ?>
    </div>
  </div>
</div>

<script>
function handleEnquiry(e){
  e.preventDefault();
  document.getElementById('enquiry-form').style.display='none';
  document.getElementById('enquiry-success').style.display='flex';
}
(function(){
  var header=document.querySelector('.site-header');
  window.addEventListener('scroll',function(){header.classList.toggle('shrink',window.scrollY>30);},{passive:true});
  var els=document.querySelectorAll('.reveal');
  if('IntersectionObserver' in window){
    var io=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target);}});},{threshold:.12});
    els.forEach(function(el){io.observe(el);});
  }else{els.forEach(function(el){el.classList.add('in');});}
  var slides=document.querySelectorAll('.hero-slide'),cur=0;
  setInterval(function(){slides[cur].classList.remove('active');cur=(cur+1)%slides.length;slides[cur].classList.add('active');},4000);
})();
</script>
<?php wp_footer(); ?>
</body>
</html>

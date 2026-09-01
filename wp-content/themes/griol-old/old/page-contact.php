<?php
/*
 * Template Name: Contact
 */
get_header();
$dir = get_template_directory_uri() . '/assets';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <img class="page-hero-img" src="<?php echo $dir; ?>/fire-door.jpg" alt="Contact Griol">
  <div class="page-hero-overlay"></div>
  <div class="container-page page-hero-content fade-up">
    <p class="eyebrow">Contact</p>
    <h1>Talk to a fire door specialist</h1>
    <p>Request an inspection, get a quote or speak to our compliance team.</p>
    <nav class="breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a> <span>/</span> Contact</nav>
  </div>
</section>

<!-- CONTACT GRID -->
<section class="container-page" style="padding:5rem 0;display:grid;grid-template-columns:1.2fr 1fr;gap:3rem;">
  <div>
    <p class="eyebrow">Send a message</p>
    <h2 style="font-size:clamp(1.875rem,4vw,2.5rem);">We respond within one business day</h2>
    <p style="margin-top:1rem;color:var(--muted-fg);margin-bottom:2rem;">Fill in the form and our team will be in touch with next steps and indicative pricing.</p>
    <?php get_template_part('template-parts/contact-form'); ?>
  </div>

  <aside style="display:flex;flex-direction:column;gap:1rem;">
    <div style="background:var(--card);border:1px solid var(--border);border-radius:.75rem;padding:1.5rem;">
      <h3 style="font-size:1.125rem;font-weight:700;margin-bottom:1rem;">Direct contact</h3>
      <ul style="display:flex;flex-direction:column;gap:1rem;">
        <li style="display:flex;align-items:flex-start;gap:.75rem;font-size:.875rem;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2" style="flex-shrink:0;margin-top:.15rem;"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
          <div><div style="font-weight:600;">Phone</div><a href="tel:+442012345678" style="color:var(--muted-fg);">+44 (0) 20 1234 5678</a></div>
        </li>
        <li style="display:flex;align-items:flex-start;gap:.75rem;font-size:.875rem;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2" style="flex-shrink:0;margin-top:.15rem;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          <div><div style="font-weight:600;">Email</div><a href="mailto:info@griol.co.uk" style="color:var(--muted-fg);">info@griol.co.uk</a></div>
        </li>
        <li style="display:flex;align-items:flex-start;gap:.75rem;font-size:.875rem;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2" style="flex-shrink:0;margin-top:.15rem;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <div><div style="font-weight:600;">Office</div><p style="color:var(--muted-fg);">London, United Kingdom<br>Nationwide service</p></div>
        </li>
        <li style="display:flex;align-items:flex-start;gap:.75rem;font-size:.875rem;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2" style="flex-shrink:0;margin-top:.15rem;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <div><div style="font-weight:600;">Hours</div><p style="color:var(--muted-fg);">Mon-Fri 8:00-18:00<br>Emergency 24/7</p></div>
        </li>
      </ul>
      <div style="margin-top:1.5rem;display:grid;grid-template-columns:1fr 1fr;gap:.75rem;">
        <a href="tel:+442012345678" class="btn-fire">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
          Call
        </a>
        <a href="mailto:info@griol.co.uk" class="btn-dark">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          Email
        </a>
      </div>
    </div>

    <div style="background:var(--fire);color:#fff;border-radius:.75rem;padding:1.5rem;">
      <h3 style="font-size:1.125rem;font-weight:700;margin-bottom:.5rem;display:flex;align-items:center;gap:.5rem;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        Emergency enquiry
      </h3>
      <p style="font-size:.875rem;color:rgba(255,255,255,.9);">For critical fire safety failures or post-incident support, our 24/7 emergency line is available.</p>
      <a href="tel:+448009999999" style="margin-top:1rem;display:inline-flex;align-items:center;gap:.5rem;background:#fff;color:var(--fire);padding:.625rem 1rem;border-radius:var(--radius);font-weight:600;font-size:.875rem;">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
        0800 999 9999
      </a>
    </div>
  </aside>
</section>

<!-- MAP -->
<section class="container-page" style="padding-bottom:5rem;">
  <div style="border-radius:1rem;overflow:hidden;border:1px solid var(--border);box-shadow:var(--shadow-elegant);">
    <iframe title="Griol Fire Protection location" src="https://www.google.com/maps?q=London,UK&output=embed" style="width:100%;height:400px;display:block;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<?php get_footer(); ?>

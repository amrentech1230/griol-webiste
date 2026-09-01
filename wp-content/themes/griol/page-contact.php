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
<section class="container-page contact-grid-section">
  <div class="contact-form-column">
    <p class="eyebrow">Send a message</p>
    <h2 class="contact-heading">We respond within one business day</h2>
    <p class="contact-subheading">Fill in the form and our team will be in touch with next steps and indicative pricing.</p>
    <?php get_template_part('template-parts/contact-form'); ?>
  </div>

  <aside class="contact-sidebar">
    <div class="contact-card">
      <h3 class="contact-card-heading">Direct contact</h3>
      <ul class="contact-info-list">
        <li class="contact-info-item">
          <svg class="contact-info-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
          <div><div class="contact-info-label">Phone</div><a href="tel:++447480 998546" class="contact-info-link">+44 7480 998546</a></div>
        </li>
        <li class="contact-info-item">
          <svg class="contact-info-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          <div><div class="contact-info-label">Email</div><a href="mailto:info@griolfireprotection.co.uk" class="contact-info-link">info@griolfireprotection.co.uk</a></div>
        </li>
        <li class="contact-info-item">
          <svg class="contact-info-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <div><div class="contact-info-label">Office</div><p class="contact-info-text">Greater London, United Kingdom</p></div>
        </li>
        <li class="contact-info-item">
          <svg class="contact-info-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--fire)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <div><div class="contact-info-label">Hours</div><p class="contact-info-text">Mon-Fri 10:00 AM-6:00 PM<br>Emergency 24/7</p></div>
        </li>
      </ul>
      <div class="contact-buttons">
        <a href="tel:+447480998546" class="btn-fire">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
          Call
        </a>
        <a href="mailto:info@griol.co.uk" class="btn-dark">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          Email
        </a>
      </div>
    </div>

    <div class="emergency-card">
      <h3 class="emergency-heading">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        Emergency enquiry
      </h3>
      <p class="emergency-text">For critical fire safety failures or post-incident support, our 24/7 emergency line is available.</p>
      <a href="tel:+447480998546" class="emergency-button">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
        +44 7480 998546
      </a>
    </div>
  </aside>
</section>

<!-- MAP -->
<section class="map-section">
  <div class="map-container">
<iframe class="map-iframe" title="Griol Fire Protection location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317993.84295345395!2d-0.4184717607179589!3d51.48886838074967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00ba11ae26f%3A0x2ff173e384b8e98b!2sGreater%20London%2C%20UK!5e0!3m2!1sen!2sin!4v1779898521346!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<style>
  .contact-grid-section {
    padding: 5rem 2rem;
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 3rem;
  }
  .contact-heading {
    font-size: clamp(1.875rem, 4vw, 2.5rem);
  }
  .contact-subheading {
    margin-top: 1rem;
    color: var(--muted-fg);
    margin-bottom: 2rem;
  }
  .contact-sidebar {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }
  .contact-card {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: .75rem;
    padding: 1.5rem;
  }
  .contact-card-heading {
    font-size: 1.125rem;
    font-weight: 700;
    margin-bottom: 1rem;
  }
  .contact-info-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }
  .contact-info-item {
    display: flex;
    align-items: flex-start;
    gap: .75rem;
    font-size: .875rem;
  }
  .contact-info-icon {
    flex-shrink: 0;
    margin-top: .15rem;
  }
  .contact-info-label {
    font-weight: 600;
  }
  .contact-info-link,
  .contact-info-text {
    color: var(--muted-fg);
  }
  .contact-buttons {
    margin-top: 1.5rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: .75rem;
  }
  .emergency-card {
    background: var(--fire);
    color: #fff;
    border-radius: .75rem;
    padding: 1.5rem;
  }
  .emergency-heading {
    font-size: 1.125rem;
    font-weight: 700;
    margin-bottom: .5rem;
    display: flex;
    align-items: center;
    gap: .5rem;
  }
  .emergency-text {
    font-size: .875rem;
    color: rgba(255,255,255,.9);
  }
  .emergency-button {
    margin-top: 1rem;
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    background: #fff;
    color: var(--fire);
    padding: .625rem 1rem;
    border-radius: var(--radius);
    font-weight: 600;
    font-size: .875rem;
  }
  .map-section {
    padding-bottom: 5rem;
  }
  .map-container {
    border-radius: 1rem;
    overflow: hidden;
    border: 1px solid var(--border);
    box-shadow: var(--shadow-elegant);
  }
  .map-iframe {
    width: 100%;
    height: 400px;
    display: block;
  }

  @media (max-width: 768px) {
    .contact-grid-section {
      grid-template-columns: 1fr;
      gap: 2rem;
      padding: 3rem 1.5rem;
    }
  }
</style>

<?php get_footer(); ?>

</main>

<footer class="site-footer">
  <div class="container-page">
    <div class="footer-grid">

      <div class="footer-col">
        <div style="background:#fff;display:inline-block;border-radius:.375rem;padding:.375rem;margin-bottom:1rem;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Griol" style="height:2rem;width:auto;">
        </div>
        <p>UK certified fire door inspection, maintenance, installation and compliance specialists.</p>
      </div>

      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="<?php echo home_url('/services/fire-door-inspections'); ?>">Fire Door Inspections</a></li>
          <li><a href="<?php echo home_url('/services/fire-door-maintenance'); ?>">Fire Door Maintenance</a></li>
          <li><a href="<?php echo home_url('/services/fire-door-installation'); ?>">Fire Door Installation</a></li>
          <li><a href="<?php echo home_url('/services/fire-door-repairs'); ?>">Fire Door Repairs</a></li>
          <li><a href="<?php echo home_url('/services/compliance-checks'); ?>">Compliance Checks</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="<?php echo home_url('/about'); ?>">About Us</a></li>
          <li><a href="<?php echo home_url('/faq'); ?>">FAQ's</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Get in Touch</h4>
        <div class="contact-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
          <a href="tel:+442012345678">+44 (0) 20 1234 5678</a>
        </div>
        <div class="contact-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          <a href="mailto:info@griol.co.uk">info@griol.co.uk</a>
        </div>
        <div class="contact-item">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>London, United Kingdom</span>
        </div>
      </div>

    </div>
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> Griol Fire Protection. All rights reserved.</p>
      <p>Certified UK Fire Door Specialists</p>
    </div>
  </div>
</footer>

<div class="floating-btns">
  <a href="mailto:info@griol.co.uk" class="float-btn float-btn-email" aria-label="Email us">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
  </a>
  <a href="tel:+442012345678" class="float-btn float-btn-phone" aria-label="Call us">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
  </a>
</div>

<?php wp_footer(); ?>
</body>
</html>

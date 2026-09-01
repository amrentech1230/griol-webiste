<?php $default = isset($args['service']) ? $args['service'] : ''; ?>
<?php if (isset($_GET['enquiry']) && $_GET['enquiry'] === 'sent'): ?>
<div style="background:#d1fae5;color:#065f46;border-radius:.75rem;padding:1rem 1.25rem;margin-bottom:1rem;font-size:.9rem;">
  ✅ Thanks! Your enquiry has been sent. We'll be in touch within one business day.
</div>
<?php endif; ?>
<form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
  <?php wp_nonce_field('griol_contact'); ?>
  <input type="hidden" name="action" value="griol_contact">
  <input type="text" name="name" placeholder="Full Name" required>
  <input type="tel" name="phone" placeholder="Phone Number" required>
  <input type="email" name="email" placeholder="Email Address" required>
  <select name="service" required>
    <option value="" disabled <?php selected($default,''); ?>>Service Required</option>
    <?php foreach (['Fire Door Inspections','Fire Door Maintenance','Fire Door Installation','Fire Door Repairs','Compliance Checks'] as $opt): ?>
    <option value="<?php echo $opt; ?>" <?php selected($default,$opt); ?>><?php echo $opt; ?></option>
    <?php endforeach; ?>
  </select>
  <input name="address" placeholder="Full Address with Postcode" required>
  <textarea name="message" rows="3" placeholder="Your Message" required></textarea>
  <button type="submit" class="btn-fire">Send enquiry</button>
</form>

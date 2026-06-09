<?php
/**
 * Template Name: Join Now Template
 *
 * @package The_Grit_Project
 */

get_header(); ?>

  <!-- ================= PAGE HEADER ================= -->
  <header class="page-header">
    <div class="container">
      <span class="section-tagline" style="color: var(--color-torch-orange);">Enter The Arena</span>
      <h1 class="section-title">Join The Grit Project</h1>
      <p class="section-subtitle">Stop Building Alone. Join The Room.</p>
    </div>
  </header>

  <main>
    <div class="subpage-container" style="max-width: 1050px; padding: 4rem 0;">
      
      <div class="contact-grid">
        <!-- Info Column -->
        <div class="contact-info-col" style="color: var(--color-black);">
          <p class="contact-desc" style="color: var(--color-black); font-size: 1.25rem;">
            You don't need an MBA. You don't need permission. You need grit, enthusiasm, and people your own age.
          </p>
          
          <div class="why-col-solution" style="box-shadow: var(--shadow-flat-black); background-color: var(--color-white); color: var(--color-black); border-color: var(--color-black); margin-bottom: 2rem; padding: 2rem;">
            <h4 style="margin-bottom: 1rem; font-family: var(--font-heading); font-weight: 700;">What You Get:</h4>
            <ul class="why-list" style="gap: 1rem;">
              <li class="why-item" style="gap: 0.75rem;"><span class="why-icon">✔</span><div class="why-item-desc" style="color:var(--color-black);font-weight:600;">Monthly meetups in Hyderabad and Nagpur</div></li>
              <li class="why-item" style="gap: 0.75rem;"><span class="why-icon">✔</span><div class="why-item-desc" style="color:var(--color-black);font-weight:600;">A community of young builders across two cities</div></li>
              <li class="why-item" style="gap: 0.75rem;"><span class="why-icon">✔</span><div class="why-item-desc" style="color:var(--color-black);font-weight:600;">The right connections. Easily.</div></li>
              <li class="why-item" style="gap: 0.75rem;"><span class="why-icon">✔</span><div class="why-item-desc" style="color:var(--color-black);font-weight:600;">Lower risk. Faster progress.</div></li>
              <li class="why-item" style="gap: 0.75rem;"><span class="why-icon">✔</span><div class="why-item-desc" style="color:var(--color-black);font-weight:600;">All free resources and blueprints</div></li>
              <li class="why-item" style="gap: 0.75rem;"><span class="why-icon">✔</span><div class="why-item-desc" style="color:var(--color-black);font-weight:600;">Real connections. No fluff.</div></li>
            </ul>
          </div>

          <div style="margin: 1.5rem 0; border-top: 1px solid var(--color-gray-light); padding-top: 1.5rem;">
            <p style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 880; color: var(--color-burnt-orange); line-height: 1.4; margin-bottom: 0.5rem;">
              Startup is now easier. And less risky.
            </p>
            <p style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 880; color: var(--color-torch-orange); line-height: 1.4; margin-bottom: 0.5rem;">
              A part of your startup journey can be easy with us.
            </p>
            <p style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 880; color: var(--color-black); line-height: 1.4;">
              Connecting people with the right people. Easily.
            </p>
          </div>

          <p style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-burnt-orange); font-weight: 700; margin-bottom: 2rem;">
            Free to join. Because starting shouldn't cost money.
          </p>

          <div class="contact-detail-items">
            <div class="contact-detail-item">
              <div class="contact-detail-icon" style="background-color: var(--color-white); border-color: var(--color-black);">💬</div>
              <div class="contact-detail-text">
                <div class="contact-detail-label">WhatsApp Contact</div>
                <div class="contact-detail-val">+91 7378692885</div>
              </div>
            </div>
            <div class="contact-detail-item">
              <div class="contact-detail-icon" style="background-color: var(--color-white); border-color: var(--color-black);">📍</div>
              <div class="contact-detail-text">
                <div class="contact-detail-label">Chapters</div>
                <div class="contact-detail-val">Hyderabad & Nagpur</div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Form Column -->
        <div class="contact-form-card" id="apply-form-container" style="background-color: var(--color-white); border-color: var(--color-black); box-shadow: var(--shadow-flat-black);">
          <h3 class="form-title">Enter The Arena</h3>
          <form id="rsvp-form">
            <div class="form-group">
              <label for="rsvp-name" class="form-label">Name</label>
              <input type="text" id="rsvp-name" class="form-control" placeholder="Areebah Memon" required>
            </div>
            <div class="form-group">
              <label for="rsvp-phone" class="form-label">WhatsApp Number</label>
              <input type="tel" id="rsvp-phone" class="form-control" placeholder="+91 7378692885" required>
            </div>
            <div class="form-group">
              <label for="rsvp-city" class="form-label">Select Chapter</label>
              <select id="rsvp-city" class="form-control" required>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Nagpur">Nagpur</option>
              </select>
            </div>
            <div class="form-group">
              <label for="rsvp-role" class="form-label">What are you building or want to build?</label>
              <textarea id="rsvp-role" class="form-control" rows="3" placeholder="A design agency / logistics software / content community / nonprofit..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary form-submit-btn btn-mega" style="width: 100%;">JOIN THE COMMUNITY – FREE</button>
          </form>
        </div>
      </div>

      <div class="back-home-wrapper" style="text-align: center; margin-top: 5rem;">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-home-link">← Back to Homepage</a>
      </div>
    </div>
  </main>

<?php get_footer(); ?>

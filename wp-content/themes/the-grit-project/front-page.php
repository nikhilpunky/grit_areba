<?php
/**
 * The template for displaying the homepage
 *
 * @package The_Grit_Project
 */

get_header(); ?>

  <main>
    <!-- ================= SECTION 1: HOME ================= -->
    <section class="hero" id="home">
      <div class="hero-grid">
        <div class="hero-content">
          <span class="hero-tagline">The Grit Project is a monthly meetup for young founders, creators, and builders. No age is too young to enter a room or a business.</span>
          <h1 class="hero-headline">
            You have an idea. You're under 30. You live in Hyderabad or Nagpur. Let's go.
          </h1>
          <p class="hero-subheadline">
            You don't need an MBA. You need grit, enthusiasm, and people your own age who get it.
          </p>
          <div class="hero-buttons">
            <a href="<?php echo esc_url( home_url( '/join-now/' ) ); ?>" class="btn btn-primary hero-btn-primary">JOIN THE MEETUP – FREE</a>
            <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="btn btn-secondary hero-btn-secondary">Read My Story</a>
          </div>
        </div>
        
        <div class="hero-visual">
          <div class="hero-image-wrapper">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/grit_meetup_vibe.png" alt="Group photo from a meetup - The Grit Project" class="hero-image">
            <div class="hero-badge">Under 30 Only ⚡</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= STATS ROW ================= -->
    <section class="stats-row">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-num">2<span>+</span></div>
          <div class="stat-label">Cities (Hyd & Ngp)</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">500<span>+</span></div>
          <div class="stat-label">Young Builders</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">15<span>+</span></div>
          <div class="stat-label">Meetups Hosted</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">0<span>%</span></div>
          <div class="stat-label">Corporate Fluff</div>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 8: MEETUPS ================= -->
    <section class="chapters-section" id="meetups">
      <div class="container">
        <span class="section-tagline">Show Show. Sit Down. Build.</span>
        <h2 class="section-title">Meetups – Hyderabad & Nagpur</h2>
        
        <div class="chapters-grid">
          <!-- Hyd Card -->
          <div class="chapter-card" id="hyd-chapter">
            <h3 class="chapter-city">Hyderabad</h3>
            <span class="chapter-status">Active Chapter</span>
            
            <div class="meetup-details-box">
              <div class="meetup-detail-row">
                <span class="detail-label">When</span>
                <span class="detail-val">Second Saturday of every month</span>
              </div>
              <div class="meetup-detail-row">
                <span class="detail-label">Time</span>
                <span class="detail-val">4:00 PM – 6:00 PM</span>
              </div>
              <div class="meetup-detail-row">
                <span class="detail-label">Where</span>
                <span class="detail-val">Venue TBA (coworking / café / lounge)</span>
              </div>
              <div class="meetup-detail-row">
                <span class="detail-label">Fee</span>
                <span class="detail-val">Will be announced shortly</span>
              </div>
              <div class="meetup-detail-row">
                <span class="detail-label">Next Theme</span>
                <span class="detail-val" style="color: var(--color-torch-orange);">"I have an idea. Now what?"</span>
              </div>
            </div>
            
            <div class="chapter-cta-group">
              <a href="<?php echo esc_url( home_url( '/join-now/?city=Hyderabad' ) ); ?>" class="btn btn-primary">Save Your Spot – Hyderabad</a>
            </div>
          </div>
          
          <!-- Ngp Card -->
          <div class="chapter-card" id="ngp-chapter">
            <h3 class="chapter-city">Nagpur</h3>
            <span class="chapter-status">Active Chapter</span>
            
            <div class="meetup-details-box">
              <div class="meetup-detail-row">
                <span class="detail-label">When</span>
                <span class="detail-val">Day to be announced (monthly)</span>
              </div>
              <div class="meetup-detail-row">
                <span class="detail-label">Time</span>
                <span class="detail-val">Time to be announced</span>
              </div>
              <div class="meetup-detail-row">
                <span class="detail-label">Where</span>
                <span class="detail-val">Venue TBA (coworking / café / lounge)</span>
              </div>
              <div class="meetup-detail-row">
                <span class="detail-label">Fee</span>
                <span class="detail-val">Will be announced shortly</span>
              </div>
              <div class="meetup-detail-row">
                <span class="detail-label">Next Theme</span>
                <span class="detail-val" style="color: var(--color-founder-gold);">To be announced</span>
              </div>
            </div>
            
            <div class="chapter-cta-group">
              <a href="<?php echo esc_url( home_url( '/join-now/?city=Nagpur' ) ); ?>" class="btn btn-primary">Save Your Spot – Nagpur</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 9: FREE RESOURCES ================= -->
    <section class="resources-section bg-dark" id="resources">
      <div class="container">
        <span class="section-tagline" style="color: var(--color-torch-orange);">Tools That Actually Work</span>
        <h2 class="section-title">Free Resources</h2>
        <p class="section-subtitle">No fluff. No theory. Just step-by-step guides based on things we've actually built.</p>
        
        <div class="resource-intro-quote">
          "I raised only <span style="color: var(--color-torch-orange);">2,000 rupees</span> at my first fundraiser. These guides exist so you don't start from zero like I did."
        </div>

        <p class="general-body-text" style="color: var(--color-gray-light);">
          Here is the truth: You could figure all this out alone. It will take you years of trial and error, failed campaigns, and money lost. Or you could take what we already learned the hard way and start building next week. Your call.
        </p>

        <!-- Resources Table -->
        <div class="neo-table-container">
          <table class="neo-table" style="color: var(--color-black);">
            <thead>
              <tr>
                <th>Guide</th>
                <th>What You'll Learn</th>
                <th>Why You Need This</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Start an NGO as a Student</strong></td>
                <td>Legal steps. Team building. First campaign.</td>
                <td>Without this, you will waste months on paperwork.</td>
              </tr>
              <tr>
                <td><strong>Run a Small Fundraiser</strong></td>
                <td>Start with 2,000 rupees and grow.</td>
                <td>Most people raise zero. This fixes that.</td>
              </tr>
              <tr>
                <td><strong>Coordinate Multiple Authors</strong></td>
                <td>Manage 29 collaborators across cities.</td>
                <td>Trying this without a system is chaos.</td>
              </tr>
              <tr>
                <td><strong>Organize a Large Community Event</strong></td>
                <td>Sponsors. Vendors. Crowds.</td>
                <td>Events fail when no one pays. We figured it out.</td>
              </tr>
              <tr>
                <td><strong>Create a Website Blueprint</strong></td>
                <td>No coding. Clear thinking for developers.</td>
                <td>Developers hate vague instructions. Use this.</td>
              </tr>
              <tr>
                <td><strong>Join Professional Networks</strong></td>
                <td>Get into BNI, Rotaract under 25.</td>
                <td>These networks change lives. Now you know how.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
          <button class="btn btn-secondary trigger-resource" data-resource-title="All Grit Project Blueprints" data-resource-link="https://docs.google.com/document/d/1Xy_5gPqj06bL0Uv_u9xHjZ5UqVepw7t9xXvK2O/edit?usp=sharing">
            DOWNLOAD ALL GUIDES – FREE
          </button>
        </div>
      </div>
    </section>
  </main>

  <!-- Resource Email Gate Overlay -->
  <div class="modal-overlay" id="resource-modal-overlay" role="dialog" aria-modal="true" aria-labelledby="resource-modal-title">
    <div class="modal-card">
      <button class="modal-close-btn" aria-label="Close Resource Modal">&times;</button>
      <h2 class="form-title" id="resource-modal-title">Unlock Blueprint</h2>
      <p style="font-size: 0.9rem; color: var(--color-gray-muted); margin-bottom: 1.5rem;">
        Enter your details to instantly receive the raw blueprint access link.
      </p>
      <form id="resource-form">
        <div class="form-group">
          <label for="resource-name" class="form-label">Name</label>
          <input type="text" id="resource-name" class="form-control" placeholder="Areebah Fatima Memon" required>
        </div>
        <div class="form-group">
          <label for="resource-email" class="form-label">Email Address</label>
          <input type="email" id="resource-email" class="form-control" placeholder="areebah@thegritproject.in" required>
        </div>
        <button type="submit" class="btn btn-primary form-submit-btn">Unlock Now</button>
      </form>
    </div>
  </div>

<?php get_footer(); ?>

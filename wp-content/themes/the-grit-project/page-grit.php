<?php
/**
 * Template Name: The Grit Template
 *
 * @package The_Grit_Project
 */

get_header(); ?>

  <!-- ================= PAGE HEADER ================= -->
  <header class="page-header">
    <div class="container">
      <span class="section-tagline" style="color: var(--color-torch-orange);">What Is The Grit Project</span>
      <h1 class="section-title">The Room That Should Exist</h1>
    </div>
  </header>

  <main>
    <div class="subpage-container">
      <div class="subpage-intro">
        Most entrepreneurship programs are taught by people who have never started a business. They teach theories. Textbooks. Definitions. You write business plans no one reads.
      </div>
      
      <div class="general-body-text">
        <p class="general-body-text">
          That knowledge is fine. But it doesn't teach you what to do when a client ghosts you. When a product launch fails. When you lose money and have to rebuild. You only learn that by being in a room where people are actually building, failing, and doing business in real time.
        </p>
        <p class="general-body-text">
          That room is <strong>The Grit Project</strong>. Monthly meetups in Hyderabad and Nagpur. No lectures. No textbooks. Just young founders sharing real stories — wins, failures, embarrassing moments. Training on topics that actually matter: fundraising, pitching, blueprints. Referrals. Real networking.
        </p>
        <p class="general-body-text">
          You walk in. You listen. You ask questions. You leave with one contact and one small action. That's it. We are not an institution. Not a course. Not another LinkedIn group. Just a gathering — organized by young entrepreneurs, for young entrepreneurs.
        </p>
      </div>

      <div style="margin-top: 3.5rem;">
        <h3 style="font-family: var(--font-heading); font-size: 1.8rem; margin-bottom: 2rem; border-bottom: 2px solid var(--color-black); padding-bottom: 0.5rem; text-transform: uppercase;">What happens at each meetup:</h3>
        
        <div class="meetup-steps-grid">
          <!-- Card 1 -->
          <div class="step-card">
            <span class="step-num">01</span>
            <h4 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 850; margin-bottom: 0.5rem; color: var(--color-black);">A Founder's Story</h4>
            <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--color-gray-dark); margin: 0;">A young founder shares their real story — wins, failures, and the embarrassing stuff.</p>
          </div>
          
          <!-- Card 2 -->
          <div class="step-card">
            <span class="step-num">02</span>
            <h4 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 850; margin-bottom: 0.5rem; color: var(--color-black);">Tactical Training</h4>
            <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--color-gray-dark); margin: 0;">Training on a specific topic: fundraising, pitching, client acquisition, and blueprints.</p>
          </div>
          
          <!-- Card 3 -->
          <div class="step-card">
            <span class="step-num">03</span>
            <h4 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 850; margin-bottom: 0.5rem; color: var(--color-black);">Referrals & Matchmaking</h4>
            <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--color-gray-dark); margin: 0;">Connect directly with other young builders facing similar scaling hurdles in your city.</p>
          </div>
          
          <!-- Card 4 -->
          <div class="step-card">
            <span class="step-num">04</span>
            <h4 style="font-family: var(--font-heading); font-size: 1.25rem; font-weight: 850; margin-bottom: 0.5rem; color: var(--color-black);">One Contact, One Action</h4>
            <p style="font-family: var(--font-body); font-size: 0.95rem; color: var(--color-gray-dark); margin: 0;">Leave with exactly one new contact and one action item to execute next week.</p>
          </div>
        </div>
      </div>

      <div class="back-home-wrapper" style="text-align: center; margin-top: 5rem;">
        <a href="<?php echo esc_url( home_url( '/join-now/' ) ); ?>" class="btn btn-primary btn-mega" style="margin-bottom: 2rem; display: block;">Apply & Secure Your Spot</a>
        <br>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-home-link">← Back to Homepage</a>
      </div>
    </div>
  </main>

<?php get_footer(); ?>

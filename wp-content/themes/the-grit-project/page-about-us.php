<?php
/**
 * Template Name: About Us Template
 *
 * @package The_Grit_Project
 */

get_header(); ?>

  <!-- ================= PAGE HEADER ================= -->
  <header class="page-header">
    <div class="container">
      <span class="section-tagline" style="color: var(--color-torch-orange);">Who Is Behind This</span>
      <h1 class="section-title">About Us</h1>
      <p class="section-subtitle">One founder who saw a problem. One vice president who joined to scale it.</p>
    </div>
  </header>

  <main>
    <div class="subpage-container" style="max-width: 1000px;">
      
      <!-- Bios Grid -->
      <div class="about-bios-grid" style="margin-bottom: 5rem;">
        <!-- Bios Card Areebah -->
        <div class="bio-card" style="border-color: var(--color-founder-gold); box-shadow: 8px 8px 0px var(--color-founder-gold);">
          <h3 class="bio-name">Areebah Fatima Memon</h3>
          <span class="bio-role" style="color: var(--color-founder-gold);">Founder & President</span>
          <ul class="bio-bullets">
            <li class="bio-bullet">NGO founder and school Executive Director (with 800+ Students)</li>
            <li class="bio-bullet">Published author – Asia Book of Records & World Book of Records</li>
            <li class="bio-bullet">Youngest member of BNI Secunderabad | Member of Rotaract, Living Collective India, SCC</li>
          </ul>
        </div>
        
        <!-- Bios Card Saad -->
        <div class="bio-card" style="border-color: var(--color-torch-orange); box-shadow: 8px 8px 0px var(--color-torch-orange);">
          <h3 class="bio-name">Syed Saad Ali</h3>
          <span class="bio-role" style="color: var(--color-torch-orange);">Vice President</span>
          <ul class="bio-bullets">
            <li class="bio-bullet">Co-founder of Grayy Store, BGOB, and Jash-e-Ramazan (65+ stall event)</li>
            <li class="bio-bullet">Organizer of Summer Fest</li>
            <li class="bio-bullet">Built multiple big communities in Nagpur from scratch</li>
          </ul>
        </div>
      </div>

      <div style="margin: 4rem 0; text-align: center; background-color: var(--color-black); color: var(--color-white); padding: 2.5rem; border: var(--border-thick); box-shadow: var(--shadow-flat-orange);">
        <p style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 700; line-height: 1.5;">
          Why trust us: because we have built real things. Not theories. We know the loneliness of building young. So we built a room for all of us.
        </p>
      </div>

      <!-- Note from Areebah with Portrait -->
      <section class="story-section-personal" id="areebah-note" style="border-top: 2px solid var(--color-black); padding-top: 4rem;">
        <div class="story-personal-grid">
          <div class="personal-visual">
            <div class="personal-img-wrapper">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/areebah_memon_portrait.png" alt="Areebah Fatima Memon - Founder of The Grit Project" class="hero-image">
              <div class="personal-badge">Founder 💡</div>
            </div>
          </div>
          
          <div class="personal-content">
            <span class="section-tagline">Behind The Vision</span>
            <h2 class="personal-title" style="font-size: 2.2rem;">A Note From Areebah</h2>
            <p class="personal-text" style="font-size: 1.05rem; margin-bottom: 1.25rem;">
              "I was tired of walking into startup meetups and professional circles in Hyderabad and Nagpur where the average age was 45. The speakers stood on stage sharing theoretical templates, and older attendees patted us on the head with 'that's cute.'
            </p>
            <p class="personal-text" style="font-size: 1.05rem; margin-bottom: 1.25rem;">
              They didn't get the fire. They didn't understand no-code stacks, building landing pages at midnight, or running operations with a three-person team of students.
            </p>
            <p class="personal-text" style="font-size: 1.05rem; margin-bottom: 1.5rem;">
              The Grit Project was born out of anger. I wanted a room of peers. A room where we could share the gut-punch of losing a key client, the anxiety of running out of runway, or the raw excitement of securing our first customer. If you are serious about building and you're under 30, this is the shortcut you've been looking for. No theories. Just execution."
            </p>
            <div class="personal-signature">
              Areebah Fatima Memon
              <span style="font-weight: normal; font-size: 0.85rem;">Founder, The Grit Project</span>
            </div>
            <div style="margin-top: 2rem;">
              <a href="https://wa.me/917378692885?text=Hey%20Areebah!%20Read%20your%20story%20on%20The%20Grit%20Project%20site.%20I'd%20love%20to%20chat%20about%20building%20something." 
                 target="_blank" 
                 class="btn btn-primary">
                Chat Directly on WhatsApp
              </a>
            </div>
          </div>
        </div>
      </section>

      <div class="back-home-wrapper" style="text-align: center; margin-top: 5rem;">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-home-link">← Back to Homepage</a>
      </div>
    </div>
  </main>

<?php get_footer(); ?>

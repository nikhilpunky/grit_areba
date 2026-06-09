<?php
/**
 * Template Name: The Problem Template
 *
 * @package The_Grit_Project
 */

get_header(); ?>

  <!-- ================= PAGE HEADER ================= -->
  <header class="page-header">
    <div class="container">
      <span class="section-tagline" style="color: var(--color-torch-orange);">The Obstacle In Your Path</span>
      <h1 class="section-title">Why Young Entrepreneurs Stay Stuck</h1>
    </div>
  </header>

  <main>
    <div class="subpage-container">
      <!-- Section 3 Opening Quote Card -->
      <div class="callout-card" style="margin-top: 0;">
        <span class="step-num" style="font-size: 2.5rem; color: var(--color-torch-orange);">"</span>
        <h3 class="callout-card-title">I was 18. In a room full of successful people. Everyone was double my age. Sometimes triple.</h3>
        <p style="font-family: var(--font-body); font-size: 1.05rem; color: var(--color-gray-light); margin: 0; line-height: 1.5;">
          I joined BNI Secunderabad when I was 18. I am still the youngest member there. The room was welcoming. People believed in me. There were suits, formal dress-ups, and decades of experience.
        </p>
      </div>
      
      <div class="general-body-text" style="margin-bottom: 3.5rem;">
        <p class="general-body-text">
          But here's what I felt: I couldn't find people my age in my network. Not because they weren't out there — but because I didn't know them. And they didn't know me. I felt overly ambitious for my age. Like I had too much fire. Too many ideas. Too much desire. And no one my age to share it with.
        </p>
        <p class="general-body-text">
          Then I started asking around. I learned that there are young people out there — building, failing, trying again. They just aren't connected. That's when it hit me: What if we all got connected? What if there was a room where people my age — with fire, with ambition, with embarrassing early failures — could sit together and build?
        </p>
        <p class="general-body-text">
          That room didn't exist. So I decided to build it. That room is <strong>The Grit Project</strong>.
        </p>
      </div>

      <!-- Section 7: How This Is Crucial For Your Life Journey -->
      <div style="margin-top: 4rem; padding-top: 3rem; border-top: 2px solid var(--color-black);">
        <span class="section-tagline">Crucial For Your Life Journey</span>
        
        <div class="callout-card" style="background-color: var(--color-ivory); color: var(--color-black); border-color: var(--color-black); box-shadow: var(--shadow-flat-black);">
          <h3 class="callout-card-title" style="color: var(--color-burnt-orange); font-size: 1.9rem; line-height: 1.1;">
            Your 20s are the most expensive years to waste
          </h3>
          <p style="font-family: var(--font-body); font-size: 1.1rem; font-weight: 600; color: var(--color-black); margin-bottom: 1.5rem;">
            Every month you spend building alone is a month you cannot get back.
          </p>
          <div style="font-family: var(--font-body); font-size: 1rem; line-height: 1.6; color: var(--color-gray-dark);">
            <p style="margin-bottom: 1rem;">
              Here is what no one tells you: Your startup journey is not just about money. It is about momentum. It is about confidence. It is about not quitting when things get hard.
            </p>
            <p style="margin-bottom: 1rem;">
              When you have a room full of people your age who are also failing and rebuilding, something changes. You stop feeling crazy. You stop feeling too ambitious. You realize that the fire inside you is not a problem — it is your greatest asset.
            </p>
            <p style="margin: 0;">
              The Grit Project is not just a meetup. It is a part of your startup journey. We are there for the embarrassing early failures. We are there when you land your first client. We are there when you rebuild after losing money. We are there for all of it.
            </p>
          </div>
        </div>

        <p class="general-body-text" style="font-size: 1.35rem; font-weight: 700; color: var(--color-burnt-orange); text-align: center; margin-top: 2rem; margin-bottom: 2rem;">
          Your journey does not have to be lonely. Let this be the room that walks with you.
        </p>
      </div>

      <div class="back-home-wrapper" style="text-align: center;">
        <a href="<?php echo esc_url( home_url( '/join-now/' ) ); ?>" class="btn btn-primary btn-mega" style="margin-bottom: 2rem; display: block;">Join The Community</a>
        <br>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-home-link">← Back to Homepage</a>
      </div>
    </div>
  </main>

<?php get_footer(); ?>

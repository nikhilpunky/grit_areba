<?php
/**
 * The main template file
 *
 * @package The_Grit_Project
 */

get_header(); ?>

<main style="background-color: var(--color-white); min-height: 70vh; padding: 6rem 0;">
  <div class="container" style="max-width: 800px;">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header" style="margin-bottom: 2rem;">
            <h1 class="entry-title" style="font-family: var(--font-heading); font-size: 3rem; text-transform: uppercase;"><?php the_title(); ?></h1>
          </header>
          
          <div class="entry-content general-body-text">
            <?php the_content(); ?>
          </div>
        </article>
        <?php
      endwhile;
    endif;
    ?>
  </div>
</main>

<?php
get_footer();

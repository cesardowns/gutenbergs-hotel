
  <?php
  if ( have_posts() ):
    while ( have_posts() ): the_post();
  ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="single-entry-header">

      <div class="post-intro">
        <?php the_title( '<h1 class="single-entry-title">', '</h1>' ); ?>

        <div class="post-meta">
          <ul>
            <li><?php the_author(); ?></li>
            <li><?php echo get_the_date(); ?></li>
            <li><?php the_tags(); ?></li>
          </ul>
        </div>

      </div>

      <figure>
        <?php the_post_thumbnail(); ?>
      </figure>

    </header>

    <div class="single-entry-content">

      <?php the_content(); ?>

    </div>

  </article>

    <?php

    endwhile;
  endif;
  ?>

<?php get_header(); ?>
<main id="main" class="main" role="main">
  <div class="content__wrapper">
    <?php if ( have_posts() ) : ?>
    <header class="entry__header">
      <h1 class="entry__title">
        <?php printf( esc_html__( 'Search Results for: %s', '_s' ), '<span>' . get_search_query() . '</span>' ); ?>
      </h1>
    </header>
    <div class="entry__content content__default">
      <?php 
      while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'excerpt' ); 
      endwhile;
      echo dfw_pagination();
      ?>
    </div>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
<main id="main" class="main" role="main">
  <div class="content__wrapper">
    <?php 
    if ( have_posts() ) : 
      while ( have_posts() ) : 
        the_post();
        $olc_tagline_heading   = fcwp_get_field( 'olc_tagline_heading', true );
        $olc_tagline           = fcwp_get_field( 'olc_tagline', true );
        $olc_box_one_icon      = fcwp_get_field( 'olc_box_one_icon', true );
        $olc_box_one_heading   = fcwp_get_field( 'olc_box_one_heading', true );
        $olc_box_one_text      = fcwp_get_field( 'olc_box_one_text', true );
        $olc_box_two_icon      = fcwp_get_field( 'olc_box_two_icon', true );
        $olc_box_two_heading   = fcwp_get_field( 'olc_box_two_heading', true );
        $olc_box_two_text      = fcwp_get_field( 'olc_box_two_text', true );
        $olc_box_three_icon    = fcwp_get_field( 'olc_box_three_icon', true );
        $olc_box_three_heading = fcwp_get_field( 'olc_box_three_heading', true );
        $olc_box_three_text    = fcwp_get_field( 'olc_box_three_text', true );
        $olc_fp_divider_text   = fcwp_get_field( 'olc_fp_divider_text', true );
    ?>
        <div class="tagline">
          <h2 class="tagline__heading">
            <?php $olc_tagline_heading; ?>
          </h2>
          <p class="taline__text">
          </p>
        </div>
    <?php
      endwhile; 
    else:
      get_template_part( 'template-parts/content', 'none' );
    endif; 
    wp_reset_postdata();
    get_sidebar('sidebar');
    ?>
  </div>
</main>
<?php get_footer(); ?>
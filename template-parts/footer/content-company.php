<?php
$olc_company_name   = fcwp_get_field( 'olc_company_name', true );
$olc_footer_tagline = fcwp_get_field( 'olc_footer_tagline', true );
$olc_address        = fcwp_get_field( 'olc_address', true );
$olc_city           = fcwp_get_field( 'olc_city', true );
$olc_state          = fcwp_get_field( 'olc_state', true );
$olc_zip_code       = fcwp_get_field( 'olc_zip_code', true );
$olc_phone_number   = fcwp_get_field( 'olc_phone_number', true );
?>
<div class="company">
  <span itemprop="name" class="company__name">
    <?php echo $olc_company_name; ?>
  </span>
  <span class="company__text">
    <?php echo $olc_footer_tagline; ?>
  </span>
</div>
<address class="company__address" itemscope itemtype="http://schema.org/PostalAddress">
  <span itemprop="streetAddress"><?php echo $olc_address; ?>,</span>
  <span itemprop="addressLocality" class="inline"><?php echo $olc_city; ?></span>
  <span itemprop="addressRegion" class="inline"><?php echo $olc_state; ?></span> 
  <span itemprop="postalCode" class="inline"><?php echo $olc_zip_code; ?></span><br />
  <a href="tel:<?php echo $olc_phone_number; ?>" aria-lable="Phone Number" itemprop="telephone">
    <?php echo $olc_phone_number; ?>
  </a>
</address>
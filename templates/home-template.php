<?php
/**
 * Template Name: Home
 */
?>
<section class="home-container container-fluid animated fadeIn">
  <div class="row">
    <div class="col-md-12">
      <?php

      $images = get_field( 'slideshow' );

      if( $images ): ?>
          <ul>
              <?php foreach( $images as $image ): ?>
                  <li>
                      <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif; ?>
    </div>
  </div>
</section>

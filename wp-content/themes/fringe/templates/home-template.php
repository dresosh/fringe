<?php
/**
 * Template Name: Home
 */
?>

<section class="home-container container-fluid animated fadeIn">
  <div class="row">
    <div class="col-md-12 animated fadeInRight">
      <?php if( get_field('heading') ): ?>
        <h1><?php echo get_field( 'heading' ); ?></h1>
      <?php endif; ?>
    </div>
    <div class="slideshow col-md-12 no-padding">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!-- <ol class="carousel-indicators"> -->
          <!-- Slide Buttons go here -->
        <!-- </ol> -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <?php
          $images = get_field('slideshow');
          if( $images ): ?>

          <?php foreach( $images as $image ): ?>
            <div class="item">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <!-- <p><?php echo $image['caption']; ?></p> -->
            </div>
          <?php endforeach; ?>

          <?php endif; ?>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </div>
  <!-- <div class="socialbar">
    <a href="https://www.instagram.com/thefringebenefit/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/IG_ico.png" alt="" /></a>
  </div> -->
</section>

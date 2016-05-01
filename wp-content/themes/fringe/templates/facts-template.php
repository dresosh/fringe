<?php
/**
 * Template Name: Facts
 */
?>


<!-- Modal -->
<?php $loop = new WP_Query( array( 'post_type' => 'facts', 'posts_per_page' => -1) ); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
<div class="modal fade" id="<?php global $post; echo $post->post_name; ?>-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <!-- Title -->
        <h1><?php echo the_title(); ?></h1>

        <!-- Carousel -->
        <?php if ( get_field('gallery')) :?>
          <div id="carousel-<?php global $post; echo $post->post_name; ?>" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators"> -->
              <!-- Slide Buttons go here -->
            <!-- </ol> -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <?php
              $images = get_field('gallery');
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
          <a class="left carousel-control" href="#carousel-<?php global $post; echo $post->post_name; ?>" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-<?php global $post; echo $post->post_name; ?>" role="button" data-slide="next">
            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <?php endif ?>

      <!-- About text -->
      <p>
        <?php echo get_field('about'); ?>
      </p>

      <!-- Website -->
      <a class="web-btn" href="<?php echo get_field('website'); ?>" target="_blank"><h4 class="web-url"><?php echo get_field('website'); ?></h4></a>
      </div>
    </div>
  </div>
</div>
<?php endwhile;  wp_reset_query();?>




<!-- Facts page -->
<section class="facts-container animated bounceInUp">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <h1 class="heading">facts</h1>
        <div class="animated zoomInDown">
          <p>
            <?php echo get_field( 'summary' ); ?>
          </p>
        </div>
        <hr>
        <h3>In collaboration with...</h3>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <?php $args = array( 'post_type' => 'facts', 'posts_per_page' => -1 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <a href="<?php global $post; echo $post->post_name; ?>-modal" data-toggle="modal" data-target="#<?php global $post; echo $post->post_name; ?>-modal">
              <div class="facts-thumb col-md-4 col-sm-4 animated zoomInLeft">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
              </div>
            </a>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="col-md-offset-2 col-md-8 animated zoomInDown">
          <p class="quote">
            <?php
              global $wp_query;
              $postid = $wp_query->post->ID;
              echo get_post_meta($postid, 'quote', true);
              wp_reset_query();
            ?>
          </p>
          <p class="author">
            - <?php echo get_field( 'author' ); ?> -
          </p>
      </div>
    </div>
  </div>

</section>

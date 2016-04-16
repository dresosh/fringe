<?php
/**
 * Template Name: Facts
 */
?>
<section class="facts-container animated bounceInLeft">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <h1>facts</h1>
        <p>
          <?php echo get_field( 'summary' ); ?>
        </p>
        <hr>
        <h3>In collaboration with...</h3>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <?php $args = array( 'post_type' => 'fact', 'posts_per_page' => 10 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-4">
              <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="" />
            </div>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="col-md-offset-2 col-md-8">
          <p class="quote">
            <?php echo get_field( 'quote' ); ?>
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

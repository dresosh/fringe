<?php
/**
 * Template Name: Facts
 */
?>


<!-- Modal -->
<?php $loop = new WP_Query( array( 'post_type' => 'facts', 'posts_per_page' => -1) ); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <?php echo the_title(); ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile;  wp_reset_query();?>









<section class="facts-container animated bounceInUp">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <h1>facts</h1>
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
            <div data-toggle="modal" data-target="#myModal" class="facts-thumb col-md-4 col-sm-4 animated zoomInLeft">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
            </div>
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

<?php $args = array( 'post_type' => 'artist', 'posts_per_page' => 10 ); ?>
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="col-md-4">
    <img class="img-responsive" src=<?php the_post_thumbnail_url(); ?> alt="" />
  </div>
<?php endwhile; ?>

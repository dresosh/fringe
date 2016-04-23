<section class="fringe-post-container animated rollIn">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <h1><?php the_title(); ?></h1>
        <h5><?php the_time( get_option( 'date_format' ) ); ?></h5>
        <p>
          <?php echo get_field('blog'); ?>
        </p>


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
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
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      </div>

    </div>
  </div>
</section>

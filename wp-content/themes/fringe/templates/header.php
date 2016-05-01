<header>
  <div class="container no-padding">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fringe-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/fringe"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/FB_Logo.png" alt="" /></a>
          <a href="https://www.instagram.com/thefringebenefit/" target="_blank"><img class="ig-icon" src="<?php echo get_template_directory_uri(); ?>/dist/images/IG_ico.png" alt="" /></a>
        </div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'container_id' => 'fringe-nav', 'container_class' => 'collapse navbar-collapse' ]);
      endif;
      ?>
    </nav>
  </div>
</header>

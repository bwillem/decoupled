<?php get_header(); ?>

       <div class="cover-container">

          <div class="inner cover">
                <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                  <div class='site-logo'>
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img class='img-responsive' src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                  </div>
                <?php else : ?>
                  <h1 class="cover-heading" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></h1>
                <?php endif;?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <?php echo the_content(); ?>
              
                <?php endwhile; endif; ?>
          </div>

       </div>
          
<?php get_footer(); ?>
<?php get_header(); ?>
	<div class='cover-container'>
		<div class='inner cover'>
			
		      <?php 
		        $the_query = new WP_Query( 'cat=3' );
		      ?>

		      <!--Begin carousel code-->
		      <div id="carousel-example-generic" class="carousel slide visible-sm visible-md visible-lg" data-ride="carousel">
		        <!-- Indicators -->
		        <ol class="carousel-indicators">

		          <!-- WP loop, only category posts according to the query, $thequery-->
		          <?php if( have_posts() ):
		            while( $the_query->have_posts() ):
		              $the_query->the_post();
		          ?>

		          <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if($the_query->current_post == 0): ?>active<?php endif; ?>"></li>

		          <?php endwhile; endif; ?>

		        </ol>

		        <!-- Resets the post loop to zero so we can start another loop below -->
		        <?php rewind_posts(); ?>

		        <!-- Wrapper for slides -->
		        <div class="carousel-inner" role="listbox">

		          <!-- Reopen the loop, starting from zero-->
		          <?php if( have_posts() ):
		            while( $the_query->have_posts() ):
		              $the_query->the_post();
		          ?>

		          <div class="item <?php if($the_query->current_post == 0): ?>active<?php endif; ?>">

		            <?php 
		              $thumbnail_id = get_post_thumbnail_id();
		              $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
		              $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachement_image_alt', 'true' );
		            ?>
		            <img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> featured image">
		            <div class="carousel-caption">
		              <!-- ... -->
		            </div>
		          </div>
		          <?php endwhile; endif; ?>
		          <!-- ... -->
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
		      </div><!--close carousel-->

		</div>
	</div>
<?php get_footer(); ?>

<!-- single.php is a template with posts in each slider div. cat templates vary only by query_post catID -->
			  	<?php  
		            $thumbnail_id = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
		            $thumbnail_url = $thumbnail_id[0];

		          ?>
         			 <a href="<?php echo get_permalink( $post->ID ); ?>"><img class="img-responsive img-center" src="<?php echo $thumbnail_url; ?>"></a><!--image thumb-->
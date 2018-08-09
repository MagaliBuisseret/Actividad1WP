<?php get_header() ?>

<div class="container">
	<div class="col-md-12">
		<h1>
			<?php the_title() ?>
		</h1>
		<div class="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  				the_content();
			endwhile;
			else: ?>
			  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer() ?>
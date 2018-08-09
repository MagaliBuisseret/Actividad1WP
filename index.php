<?php get_header() ?>


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>		
			</a>
		</h2>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	<div class="row">
		<div class="col-md-offset-4 col-md-4 center">
			<h3> <strong>EL BOOTCAMP DE PROGRAMACIÓN MÁS GRANDE DE LATINOAMÉRICA</strong></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur quaerat dolorum totam commodi iusto aut</p>
			<img src="<?php echo get_bloginfo('template_url') ?>/assets/img/people.png.jpeg" class="img-responsive">
		</div>
	</div>
	<div class="jumbotron main">
		<h3> <strong>SOLICITA INFORMACIÓN E INSCRÍBETE</strong></h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur quaerat dolorum totam commodi iusto aut, facilis, dolorem vel, blanditiis enim. <br>
		Dignissimos ipsa, adipisci ad, repellat aliquam nihil illum id!</p>
		<button type="button" class="btn btn-primary">Inscríbete</button>
		<p>Vive la experiencia Desafio Latam!</p>
	</div>



<?php get_footer() ?>
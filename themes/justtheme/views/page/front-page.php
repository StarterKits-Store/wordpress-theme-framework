<?php
/**
 * The template for displaying homepage.
 */

use JustCoded\ThemeFramework\Web\View;
use justtheme\App\Models\Homepage;

$model = new Homepage();

View::layout_open(); ?>

	<section id="hero">
		<?php while ( $model->hero_query->have_posts() ) : $model->hero_query->the_post(); ?>
			<?php View::render( 'page/_front-hero' ); ?>
		<?php endwhile; ?>
	</section>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php View::render( 'page/_content' ); ?>

	<?php endwhile; // End of the loop. ?>

	<?php if ( is_active_sidebar( 'homepage-bottom' ) ) : ?>
		<aside class="homepage-bottom widget-area" role="complementary">
			<?php dynamic_sidebar( 'homepage-bottom' ); ?>
		</aside>
	<?php endif; ?>

<?php View::layout_close(); ?>

<?php
/**
 * Template Name: Contact Example
 */
use JustCoded\ThemeFramework\Web\View;

View::layout_open(); ?>

	<h1>This is an example of custom page template</h1>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php View::render( 'page/_content', array(
			'referer' => 'contact',
		) ); ?>

	<?php endwhile; // End of the loop. ?>

<?php View::layout_close(); ?>
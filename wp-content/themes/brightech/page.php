<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<div class="wrapper">

	
	<?php
		//include 'test-path/section-contact-info.php';
		//include 'test-path/section-offices.php';
		include 'test-path/section-form.php';
	?>	
	<div class="container content">

		<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Post title. Only visible to screen readers. */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'brightech' ),
							array(
								'span' => array(
									'class' => array(),
								),
								)
							),
							get_the_title()
							)
						);
						
					endwhile; // End of the loop.
		?>


	</div>	
</div>

<?php
get_footer();

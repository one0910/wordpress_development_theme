<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ken-cens.com
 */

get_header(); ?>

<div class="container">
    <div class="row primary">
        <div id="content" class="col-md-10 col-lg-8">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
	<!-- =================================== Sidebar =============================== -->
        <aside class="col-md-10 col-lg-4">
        	<?php get_sidebar() ?>
        </aside>
	</div>
</div>

<?php get_footer();?>


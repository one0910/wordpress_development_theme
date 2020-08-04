<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ken-cens.com
 */

get_header(); ?>
		<?php
		if ( have_posts() ) : ?>
    <!-- ================================== Blog header 圖片================================ -->
		    <div id="feature-image">
		        <div class="container">
				<?php
					the_archive_title( '<h1 class="page-title leanFont text-center">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
		        </div>
		    </div>
	<!-- ================================== 部落格文章內容 ================================ -->
	    <div class="container">
	        <div class="row primary">
	            <div id="content" class="col-md-10 col-lg-8">
					<?php
					/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;
 
						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div>
	<!-- =================================== Sidebar =============================== -->
	            <aside class="col-md-10 col-lg-4">
	            	<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>
	<?php get_footer();?>



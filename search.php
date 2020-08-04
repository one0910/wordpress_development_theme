<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ken-cens.com
 */

get_header(); ?>
<!-- ================================== Blog header 圖片================================ -->
<div id="feature-image">
    <div class="container">
        <!-- <h1 class="leanFont text-center">我的文章</h1> -->
		<h1 class="page-title text-center leanFont"><?php printf( esc_html__( '搜尋結果: %s', 'ken-cens-com' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </div>
</div>

<!-- ================================== 部落格文章內容 ================================ -->
<div class="container">
    <div class="row primary">
        <div id="content" class="col-md-10 col-lg-8">

	<?php
	if ( have_posts() ) : ?>
			<?php
			// global $post;
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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


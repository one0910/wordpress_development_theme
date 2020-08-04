<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ken-cens.com
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
	    <!-- ================================== 插入文章detail ================================ -->
        	<div class="post-detail mt-4">
	            <i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php the_author() ?>
	            <i class="fa fa-clock-o" aria-hidden="true"></i><time><?php the_date() ?></time>
	            <i class="fa fa-folder-open" aria-hidden="true"><?php the_category(',') ?></i>
	            <i class="fa fa-tags" aria-hidden="true"></i><?php the_tags("",",","") ?>
	            <a href="<?php comments_link() ?> "><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number(0,1,'%') ?></a>
        	</div>

		</div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->
	    <!-- ================================== 插入文章內容 ================================ -->
    <?php if (has_post_thumbnail()): ?>
    <div class="mt-4">
        <!-- <img src="assets/images/wordpress2.jpg" class="img-responsive"> -->
        <?php the_post_thumbnail(array(710,710)) ?>
    </div>
    <?php endif ?>
    
    <?php if (is_single()): ?>
    	<div class="post-content mt-4">
    		<?php the_content() ?>
    	</div>
	<?php else: ?>
	    <div class="post-excerpt mt-4">
	        <?php excerpt_more() ?>
	    </div>
    <?php endif ?>

</article><!-- #post-## -->

<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ken-cens.com
 */

?>
<!-- ================================== 部落格文章內容 ================================ -->
<div class="container">
    <div class="row primary">
        <div id="content" class="col-md-10 col-lg-8" style="margin-top: -107px">
			<section class="no-results not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( '未搜尋到項目', 'ken-cens-com' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<?php
					if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

						<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ken-cens-com' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

					<?php elseif ( is_search() ) : ?>

						<p><?php esc_html_e( '抱歉，找不到您要搜尋的項目，請重新輸入您要找的關鍵字.', 'ken-cens-com' ); ?></p>
						<?php
							get_search_form();

					else : ?>

						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ken-cens-com' ); ?></p>
						<?php
							get_search_form();

					endif; ?>
				</div><!-- .page-content -->
			</section><!-- .no-results -->
		</div>
	</div>
</div>

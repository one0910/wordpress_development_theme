<?php
/*
	Template Name: Contact Page
*/
 $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
get_header();?>

<!-- ================================== Blog header 圖片================================ -->
	<?php if (has_post_thumbnail()): ?>
	    <div id="feature-image" style="
	    background: url( <?php echo $thumbnail_url ?> );
	    background-size: cover;
	    ">
	        <div class="container">
	            <h1 class="leanFont text-center"><?php the_title() ?></h1>
	        </div>
	    </div>
	<?php else: ?>
	   <div id="feature-image">
	        <div class="container">
	            <h1 class="leanFont text-center"><?php the_title() ?></h1>
	        </div>
	    </div>
	<?php endif ?>
    <!-- ================================== 聯繫方式 ================================ -->
        <div id="contact-form" class="some-spaces_contact">
            <div class="container">
            	<?php while(have_posts()):the_post() ?>
            		<?php the_content() ?>
            	<?php endwhile ?>
               <!--  <div class="row">
                    <div class="col-sm-12">  
                        <h3 class="leanFont">如您有任何問題，歡迎聯絡我們</h3>
                    </div>
                </div>
                <form class="mt-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name" class="control-label sr-only">姓 名 *</label>
                                <input type="text" class="form-control" id="name" placeholder="請輸入您的姓名">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email" class="control-label sr-only">電子郵件 *</label>
                                <input type="email" class="form-control" id="email" placeholder="請輸入您郵件地址">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message"" class="control-label sr-only">留言訊息 *</label>
                                <textarea class="form-control" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">送出訊息</button>
                            </div>
                        </div>
                    </div>
                </form> -->
            </div>
        </div>
<?php get_footer(); ?>


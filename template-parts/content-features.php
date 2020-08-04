<?php
$feature_section_title = get_field('feature_section_title');
$feature_section_image = get_field('feature_section_image');
?>
<!-- ================================== 課程優勢欄位 ================================ -->
    <div class="features text-center pt-5 pb-4">
        <div class="container">
            <!-- <img src="<?php bloginfo("stylesheet_directory") ?>/assets/images/rocket.png" alt="Rocket" id="Rocket"> -->
            <?php if (isset($feature_section_image)): ?>
            <img src="<?php echo $feature_section_image['url'] ?>" alt="<?php echo $feature_section_image['alt'] ?>" id="Rocket">
            <?php else: echo "no feattures images";?>
            <?php endif ?>
            <!-- <h2 class="leanFont">課程優勢</h2> -->
            <h2 class="leanFont"><?php echo $feature_section_title ?></h2>

            <div class="row mt-5">
            	<?php $loop = new WP_Query(array(
            		'post_type' => 'course_features',
            		'orderby' => 'post_id',
            		'order' => 'ASC',
            	)) ;
                ?>
            	<?php while ($loop->have_posts()):$loop->the_post();?>
                	<div class="col-sm-4">
                		<?php if (!empty(get_field('course_features_icon'))): ?>
                		<img src="<?php echo get_field('course_features_icon')['url']; ?>" alt="<?php echo get_field('course_features_icon')['alt']; ?>" class="smallPhoto">
                		<?php endif ?>
                        <h4><?php the_title() ?></h4>
                    </div>
            	<?php endwhile ?>
                <?php wp_reset_query() ?>
                <?php wp_reset_postdata() ?>
            <!--     	<div class="col-sm-3">
                    <img src="<?php bloginfo("stylesheet_directory") ?>/assets/images/target.png" alt="Target" class="smallPhoto">
                        <h4>【終身學習80堂課】</h4>
                    </div>
                    <div class="col-sm-3">
                        <img src="<?php bloginfo("stylesheet_directory") ?>/assets/images/clock.png" alt="Clock" class="smallPhoto">
                        <h4>【超過12小時的影音教學】</h4>
                    </div>
                    <div class="col-sm-3">
                        <img src="<?php bloginfo("stylesheet_directory") ?>/assets/images/calendar.png" alt="Calendar" class="smallPhoto">
                        <h4>【30日無條件退費】</h4>
                    </div>
                    <div class="col-sm-3">
                        <img src="<?php bloginfo("stylesheet_directory") ?>/assets/images/phone.png" alt="Phone" class="smallPhoto">
                        <h4>【手機線上觀看】</h4>
                    </div>
                </div> -->
            </div>
        </div>
</div>
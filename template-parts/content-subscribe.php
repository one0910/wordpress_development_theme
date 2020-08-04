<?php
    $subscribe_bar_text = get_post_meta(75,'subscribe_bar_text',true);
    $subscribe_bar__button_text = get_post_meta(75,'subscribe_bar__button_text',true);
 ?>
    <!-- ==================================== 訂閱欄位 ================================== -->
    <div class="subscribe-bar text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <!-- <p><strong>訂閱我的最新消息</strong>，您會在第一時間獲得我們的最新優惠訊息</p> -->
                    <p><?php echo $subscribe_bar_text; ?></p>

                </div>
                <div class="col-sm-4">
                    <!-- <button type="button" class="btn btn-success btn-lg leanFont" data-toggle="modal" data-target="#myModal">這裡點擊訂閱</button> -->
                    <!-- <button type="button" class="btn btn-success btn-lg leanFont" data-toggle="modal" data-target="#myModal"><?php echo $subscribe_bar__button_text ?></button> -->
                    <a class="btn btn-success btn-lg leanFont" href="https://github.com/one0910/wordpress_development_theme">goGithub</a>
                </div>
            </div>
        </div>
    </div>
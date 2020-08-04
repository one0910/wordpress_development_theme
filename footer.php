<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ken-cens.com
 */

?>
<?php wp_footer(); ?>
<!-- ================================== 基礎架網課程欄位 ================================ -->
            <div id="otherCourse">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="leanFont"><strong>您是否想了解更多關於HTML、CSS、Javascript、jQuery、PHP、mySQL等語言及架站工具?</strong></h2>
                            <!-- <p><a href="#" class="btn btn-lg btn-danger leanFont mt-4">點擊這裡獲得優惠卷</a></p> -->
                            <p><a href="#" class="btn btn-lg btn-danger leanFont mt-4" data-toggle="modal" data-target="#myModal">輸入您的Email，訂閱我的電子報</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ================================== 頁尾footer ================================ -->
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-3">
                                <a href="#">My Wordpress Theme</a>
                            </div>
                            <div class="col-xs-6">
                                <nav>
                                <?php
                                    wp_nav_menu(array(
                                        "theme_location" => "footer",
                                        "container" => "nav",
                                        "menu_class" => "text-center list-inline",
                                    ));
                                 ?>
                                </nav>
                            </div>
                            <div class="col-xs-3">
                                <p>&copy 2017 版權 ellson.com</p>
                            </div>
                        </div>
                    </div>
                </footer>
            <!-- ==================================== Modal ================================== -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">請訂閱我們的郵件</h4>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <label for="" id="email">您的郵件地址:</label>
                                <input type="email" class="form-control" id="subscrbe-email" placeholder="email@domain.com">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary leanFont" data-dismiss="modal">關 閉</button>
                        <button type="button" class="btn btn-primary leanFont">訂 閱</button>
                    </div>

                </div>
            </div>
        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
            crossorigin="anonymous"
        ></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
            integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
            crossorigin="anonymous"
        ></script>
        <!-- <script src="bootstrap-3.4.1-dist/js/bootstrap.js"></script> -->

</body>
</html>

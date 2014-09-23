<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="en" />

    <!-- bootstrap CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/article.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/slides.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="header">
    <div class="container">
        <div class="h-nav">
            <a href="/index/index">Trang Chủ</a>
            <a href="/index/aboutUs">Giới Thiệu</a>
            <a href="/index/contact">Liên Hệ</a>
        </div>
        <div>
            <div class="col-md-3 col-sm-4 col-xs-12 logo clear-padding-left">
                <div >
                <img alt="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.jpg" width="160" style="margin-left: 20px;margin-top: 7px;"/>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 h-search hidden-xs">
                <form method="get" action="/product-type.html" role="search">
                    <div class="input-group frm-search">
                        <input class="form-control" type="text" style="height: 28px;" placeholder="Nhập Từ Khóa" name="keyword" value="">
                            <span class="input-group-btn">
                                <button class="btn" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="blog-masthead"style="background-color: #078E6A;">

        <nav class="blog-nav">
            <?php $this->widget('application.modules.frontend.extensions.widgets.FCMenu',array(
                'items'=>array(
                    array('label'=>'Trang Chủ', 'url'=>array('/index/index'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Sản Phẩm', 'url'=>array('/index/product'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Dự Án', 'url'=>array('/index/project'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Thống Kê', 'url'=>array('#'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Mẫu Nhà Đẹp', 'url'=>array('#'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Tin Hot', 'url'=>array('#'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Site Map', 'url'=>array('#'),'linkOptions'=>array("class"=>"blog-nav-item"))
                ),

            )); ?>
        </nav>

    </div>
</div>
<div class="container" id="page">

    <div class="col-md-8">
        <!-- slide
    ================================================== -->
        <div>
            <div class="col-xs-9 clear-padding-left">
                <span>
                    <?php
                    $arr_day=array(
                        "Mon"=>"Thứ 2",
                        "Tue"=>"Thứ 3",
                        "Wed"=>"Thứ 4",
                        "Thu"=>"Thứ 5",
                        "Fri"=>"Thứ 6",
                        "Sat"=>"Thứ 7",
                        "Sun"=>"Chủ Nhật",
                    );
                    echo $arr_day[date("D")].", ".date("d/m/Y H:i A");
                    ?>
                </span>
            </div>
            <div class="col-xs-3 title-page-home-right clear-padding-right">

                <a href="#">
                    <img height="16" src="http://st.f1.vnecdn.net/responsive/i/v6/graphics/icon_print.gif" alt="">
                </a>
                <a href="#">
                    <img width="16" height="16" src="http://4.bp.blogspot.com/-9aREVazKHMI/Ul6UIbTb38I/AAAAAAAAW8k/4lS-ab-y2cE/s320/rss_feed_icon_high_res.gif" alt="">
                </a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <div class="carousel-inner ">
                <div class="item">
                    <img data-src="holder.js/100x100/auto" src="<?php echo Yii::app()->baseUrl; ?>/upload/timthumb_005.jpg" alt="">

                </div>
                <div class="item">
                    <img data-src="holder.js/100x100/auto" src="<?php echo Yii::app()->baseUrl; ?>/upload/timthumb_007.jpg" alt="">

                </div>
                <div class="item">
                    <img data-src="holder.js/100x100/auto" src="<?php echo Yii::app()->baseUrl; ?>/upload/timthumb_006.jpg" alt="">

                </div>
                <div class="item">
                    <img data-src="holder.js/100x100/auto" src="<?php echo Yii::app()->baseUrl; ?>/upload/timthumb_002.png" alt="">

                </div>
                <div class="item active">
                    <img data-src="holder.js/100x100/auto" src="<?php echo Yii::app()->baseUrl; ?>/upload/timthumb_004.jpg" alt="">

                </div>
            </div>

            <a class="left" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

        </div>

        <!-- /.slides -->
        <div class="clearfix"></div>

    </div>
    <div class="col-md-4">
        <!--- slide Video-->
        <h2 class="h2-title">Dự Án Nổi Bật</h2>
        <div id="myCarouselVideo" class="carousel slide" data-ride="carousel"  style="top: 2px;">
            <!-- Indicators -->

            <div class="carousel-inner ">
                <div class="item">
                    <img data-src="holder.js/100x100/auto" src="<?php echo Yii::app()->baseUrl; ?>/upload/timthumb_003.png" alt="">
                </div>
                <div class="item active">
                    <img data-src="holder.js/100x100/auto" src="<?php echo Yii::app()->baseUrl; ?>/upload/timthumb_012.jpg" alt="">
                </div>
            </div>

            <a class="left" href="#myCarouselVideo" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right" href="#myCarouselVideo" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

        </div>
        <!---/. slide Video-->
    </div>
    <div class="clear"></div>
    <hr>
</div>
<!--- content-->
<?php echo $content; ?>
<!---/. content-->
<!-- page -->
<!--- footer-->
<div class="container">
    <footer id="footer">
        <hr class="featurette-divider">
        <div class="container" id="page">

            Copyright &copy; <?php echo date('Y'); ?> by My Company1.<br/>
            All Rights Reserved.<br/>
            Email:oliverson1989@gmail.com
            <p class="pull-right"><a href="#"><span class="glyphicon glyphicon-adjust"></span></a></p>
        </div>
    </footer>
</div>
<!--/. footer -->
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/docs.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/jquery-1.js"></script>
</body>
</html>

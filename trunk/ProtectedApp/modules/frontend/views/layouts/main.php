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
            <a href="/home">Trang Chủ</a>
            <a href="/home">Giới Thiệu</a>
            <a href="/home">Liên Hệ</a>
            <a class="right" style="float: right;">Đăng Nhập</a>
            <a class="right" style="float: right;">Đăng Ký</a>
        </div>
        <div>
            <div class="col-md-3 col-sm-4 col-xs-12 logo clear-padding-left">
                <div >
                <span class="titleLogo">Tin</span>
                <img alt="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" width="50"/>
                <span class="titleLogo">Hot</span>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 h-search hidden-xs">
                <form method="get" action="/product-type.html" role="search">
                    <div class="input-group frm-search">
                        <input class="form-control" type="text" style="height: 28px;" placeholder="Tìm Bài Viết" name="keyword" value="">
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
<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav ">
            <?php $this->widget('application.modules.frontend.extensions.widgets.FCMenu',array(
                'items'=>array(
                    array('label'=>'Home', 'url'=>array('/index/index'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Contact', 'url'=>array('/index/contact'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("class"=>"blog-nav-item"))
                ),

            )); ?>
        </nav>
    </div>
</div>

<div class="container" id="page">
    <div class="col-md-12 breadcrumb-wrapper">
    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif?>
    </div>
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
                    <?php
                    $feed_class = new GetFeed();
                    $feed_class->feedUrl="http://vnexpress.net/rss/thoi-su.rss";
                    $feed=$feed_class->getFeeds();
                    $item=$feed[0];
                    $str_description=$feed_class->getAsXMLContent($item->description);
                    $img=explode('src',$str_description);
                    if(isset($img[1])){
                        $img=explode('"',$img[1]);
                        if(isset($img[1])){
                            $img=explode('"',$img[1]);
                        }
                        $img=$img[0];
                        $rootPath = pathinfo(Yii::app()->request->scriptFile);
                        $file_name=explode("/",$img);
                    }

                    ?>
                    <div class="thumbnail col-sm-6">
                        <img style="width: 179px; height: 200px;"  src="<?php echo $img ?>" alt="">
                    </div>
                    <div class="thumbnail col-sm-6">
                        <img style="width: 179px; height: 200px;"  src="<?php echo $img ?>" alt="">
                    </div>

                </div>
                <div class="item">
                    <img data-src="holder.js/100x100/auto" src="http://col.stb01.s-msn.com/i/AE/8EA7A206ECDFDCBC114EDC40C75D.jpg" alt="">

                </div>
                <div class="item active">
                    <img data-src="holder.js/100x100/auto" src="http://col.stb01.s-msn.com/i/A7/2AA13A38A18036166E891A5D951623.jpg" alt="">

                </div>
            </div>

            <a class="left" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

        </div>

        <!-- /.slides -->
        <div class="clearfix"></div>
        <!--- content-->
        <?php echo $content; ?>
        <!---/. content-->
    </div>
    <div class="col-md-4">
        <!--- slide Video-->
        <h2 class="h2-title">Video</h2>
        <div id="myCarouselVideo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <div class="carousel-inner ">
                <div class="item">
                    <img data-src="holder.js/100x100/auto" src="http://col.stb00.s-msn.com/i/BE/47ACBE8C0B021FAE0466874C072EB.jpg" alt="">
                </div>
                <div class="item">
                    <img data-src="holder.js/100x100/auto" src="http://col.stb01.s-msn.com/i/AE/8EA7A206ECDFDCBC114EDC40C75D.jpg" alt="">
                </div>
                <div class="item active">
                    <img data-src="holder.js/100x100/auto" src="http://col.stb01.s-msn.com/i/A7/2AA13A38A18036166E891A5D951623.jpg" alt="">
                </div>
            </div>

            <a class="left" href="#myCarouselVideo" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right" href="#myCarouselVideo" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

        </div>
        <div class="thumbnail">
            <img src="http://col.stb00.s-msn.com/i/66/E914E552E8548A7BE6D6D1DA116DBD.jpg" alt=""/>
        </div>
        <!---/. slide Video-->
    </div>
    <div class="clear"></div>
</div><!-- page -->
<!--- footer-->
<footer id="footer">
    <hr class="featurette-divider">
    <div class="container" id="page">

        Copyright &copy; <?php echo date('Y'); ?> by My Company1.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
        <p class="pull-right"><a href="#"><span class="glyphicon glyphicon-adjust"></span></a></p>
    </div>
</footer>
<!--/. footer -->
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/docs.min.js"></script>
</body>
</html>

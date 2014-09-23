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
</body>
</html>

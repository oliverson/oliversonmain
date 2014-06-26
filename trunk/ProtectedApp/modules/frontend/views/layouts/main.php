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
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav ">
            <?php $this->widget('application.modules.frontend.extensions.widgets.FCMenu',array(
                'items'=>array(
                    array('label'=>'Home', 'url'=>array('/site/index'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Contact', 'url'=>array('/site/contact'),'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("class"=>"blog-nav-item")),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("class"=>"blog-nav-item"))
                ),

            )); ?>
        </nav>
    </div>
</div>

<div class="container" id="page">
    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
    <?php endif?>
    <div class="col-md-8">
        <!-- slide
    ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <div class="carousel-inner ">
                <div class="item">
                    <img data-src="holder.js/100x100/auto" src="http://col.stb00.s-msn.com/i/BE/47ACBE8C0B021FAE0466874C072EB.jpg" alt="">
                    test1
                </div>
                <div class="item">
                    test2
                </div>
                <div class="item active">
                    test3
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
        <!--- slide content-->

        <!---/. slide content-->
    </div>
    <div class="clear"></div>
</div><!-- page -->
<!--- footer-->
<footer id="footer">
    <div class="container" id="page">
        <hr class="featurette-divider">
        Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
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

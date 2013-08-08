<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<title><?php echo CHtml::encode($this->pageTitle); ?>- Premium Admin Template</title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />

    <!-- Bootstrap Extended -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">

    <!-- JQueryUI v1.9.2 -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css" />

    <!-- Glyphicons -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/css/glyphicons.css" />

    <!-- Bootstrap Extended -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />

    <!-- Uniform -->
    <link rel="stylesheet" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/pixelmatrix-uniform/css/uniform.default.css" />

    <!-- JQuery v1.8.2 -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/jquery-1.8.2.min.js"></script>

    <!-- Modernizr -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/modernizr.custom.76094.js"></script>

    <!-- MiniColors -->
    <link rel="stylesheet" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/jquery-miniColors/jquery.miniColors.css" />

    <!-- Notyfy -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/notyfy/jquery.notyfy.js"></script>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/notyfy/jquery.notyfy.css"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/notyfy/themes/default.css"/>

    <!-- Gritter -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/Gritter/css/jquery.gritter.css"/>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/Gritter/js/jquery.gritter.min.js"></script>


    <!-- google-code-prettify -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/google-code-prettify/prettify.css" type="text/css" rel="stylesheet" />

    <!-- Theme -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/css/style.min.css?1362656687" />

    <!-- LESS 2 CSS -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/less-1.3.3.min.js"></script>
</head>

<body>
<!-- Start Content -->
<div class="container-fluid login">

    <div class="navbar main">
        <a href="login.html?lang=en" class="appbrand"><span>Smashing Admin</span></a>


        <ul class="topnav pull-left tn1">
            <li class="hidden-phone">
                <a href="#themer" data-toggle="collapse" class="glyphicons eyedropper"><i></i><span>Themer</span></a>
                <div id="themer" class="collapse">
                    <div class="wrapper">
                        <span class="close2">&times; close</span>
                        <h4>Themer <span>color options</span></h4>
                        <ul>
                            <li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
                            <li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
                            <li>
                                <span class="link" id="themer-custom-reset">reset theme</span>
                                <span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
                            </li>
                        </ul>
                        <div id="themer-getcode" class="hide">
                            <hr class="separator" />
                            <button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
                            <button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="hidden-phone">
                <a href="#" data-toggle="dropdown"><img src="theme/images/lang/en.png" alt="en" /></a>
                <ul class="dropdown-menu pull-left">
                    <li class="active"><a href="?page=login&amp;lang=en" title="English"><img src="theme/images/lang/en.png" alt="English"> English</a></li>
                    <li><a href="?page=login&amp;lang=ro" title="Romanian"><img src="theme/images/lang/ro.png" alt="Romanian"> Romanian</a></li>
                    <li><a href="?page=login&amp;lang=it" title="Italian"><img src="theme/images/lang/it.png" alt="Italian"> Italian</a></li>
                    <li><a href="?page=login&amp;lang=fr" title="French"><img src="theme/images/lang/fr.png" alt="French"> French</a></li>
                    <li><a href="?page=login&amp;lang=pl" title="Polish"><img src="theme/images/lang/pl.png" alt="Polish"> Polish</a></li>
                </ul>
            </li>
        </ul>

        <ul class="topnav pull-right">
            <li class="visible-desktop">
                <ul class="notif">
                    <li><a href="" class="glyphicons envelope" data-toggle="tooltip" data-placement="bottom" data-original-title="5 new messages"><i></i> 5</a></li>
                    <li><a href="" class="glyphicons shopping_cart" data-toggle="tooltip" data-placement="bottom" data-original-title="1 new orders"><i></i> 1</a></li>
                    <li><a href="" class="glyphicons log_book" data-toggle="tooltip" data-placement="bottom" data-original-title="3 new activities"><i></i> 3</a></li>
                </ul>
            </li>
            <li class="dropdown visible-desktop">
                <a href="" data-toggle="dropdown" class="glyphicons cogwheel"><i></i>Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="">Some option</a></li>
                    <li><a href="">Some other option</a></li>
                    <li><a href="">Other option</a></li>
                </ul>
            </li>

            <li class="account">
                <a href="login.html?lang=en" class="glyphicons logout lock"><span class="hidden-phone text">Welcome <strong>guest</strong></span><i></i></a>
            </li>
        </ul>
    </div>

    <?php echo $content; ?>

</div>

<!-- JQueryUI v1.9.2 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>

<!-- JQueryUI Touch Punch -->
<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- MiniColors -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/jquery-miniColors/jquery.miniColors.js"></script>

<!-- Themer -->
<script>
    var themerPrimaryColor = '#47759e';
</script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/jquery.cookie.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/themer.js"></script>



<!-- Resize Script -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/jquery.ba-resize.js"></script>

<!-- Uniform -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/pixelmatrix-uniform/jquery.uniform.min.js"></script>

<!-- Bootstrap Script -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/js/bootstrap.min.js"></script>

<!-- Bootstrap Extended -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/bootbox.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js" type="text/javascript"></script>

<!-- Custom Onload Script -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/load.js"></script>



<!-- google-code-prettify -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/google-code-prettify/prettify.js"></script>
<script>
    $(function(){
        if ($('.prettyprint').length)
            prettyPrint();
    });
</script>
</body>
</html>

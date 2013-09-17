<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

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
    <!-- logo icon -->
    <link rel="icon" type="image/ico" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/logo.png">

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
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/css/style.min.css?<?php echo time(0); ?>" />
    <link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/admin/index/style" />
    <!-- LESS 2 CSS -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/less-1.3.3.min.js"></script>

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/backend/css/main.css" rel="stylesheet">

    <title>Admin - <?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body>
<!-- Start Content -->
<?php
$primaryColor='#47759e';
if(Yii::app()->request->cookies["primaryColor"])
{
    $primaryColor=Yii::app()->request->cookies["primaryColor"];
}
$hiddenMenu='';
if(Yii::app()->request->cookies["hiddenMenu"])
{
    $hiddenMenu='menu-hidden';
}
$menu_right="";
$checked_menu_right="";
if(!Yii::app()->user->isGuest)
{
    if(Yii::app()->request->cookies["rightMenu"])
    {
        $menu_right=" menu-right";
        $checked_menu_right='checked="checked"';
    }
}
?>
<div class="container-fluid <?php if(Yii::app()->user->isGuest): ?>login<?php endif ?><?php echo $menu_right." ".$hiddenMenu  ?>">

<div class="main navbar">
    <a href="login.html?lang=en" class="appbrand" id='appbrand'>
            <span>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/backend/logo.png" width="28" height="28" alt="">
                <?php echo Yii::t('backend','template.title.admin') ?>
            </span>
    </a>
    <?php if(!Yii::app()->user->isGuest): ?>
        <button type="button" class="btn btn-navbar">
            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
        </button>
    <?php endif ?>
    <ul class="topnav pull-left tn1">
        <li class="hidden-phone">
            <a href="#themer" data-toggle="collapse" class="glyphicons eyedropper"><i></i>
                <span><?php echo Yii::t('backend','template.title.theme') ?></span>
            </a>
            <div id="themer" class="collapse">
                <div class="wrapper">
                    <span class="close2">&times; <?php echo Yii::t('backend','btn.close') ?></span>
                    <h4> <?php echo Yii::t('backend','template.color.options') ?></h4>
                    <?php if(!Yii::app()->user->isGuest): ?>
                        <script type="text/javascript">
                            label_toggle_button_set_theme={enabled: '<?php echo Yii::t('backend','template.menu.left')  ?>',disabled: '<?php echo Yii::t('backend','template.menu.right')  ?>'};
                        </script>
                        <div id="wrapper_toggle_button_set_theme" style="width: 100%;<?php if(Yii::app()->request->cookies["hiddenMenu"]){echo "display:none;";} ?>">
                            <!--[if gt IE 8]><!--><?php echo Yii::t('backend','template.menu') ?>:<!--<![endif]-->
                            <div class="toggle-button-set-theme pull-right">
                                <input  <?php echo $checked_menu_right; ?> type="checkbox" class="checkbox" id="toggle-menu-position" />
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    <?php endif ?>
                    <ul>
                        <li><?php echo Yii::t('backend','template.theme') ?>: <select id="themer-theme" class="pull-right">
                                <option value="other">Khác</option>
                                <option value="#47759e">Mặc Định</option>
                                <option value="#ba5d32">Nâu</option>
                                <option value="#86618f">Tím Xám</option>
                                <option value="#b94b6f">Tím Vang</option>
                        </select><div class="clearfix"></div></li>
                        <li>
                            <?php echo Yii::t('backend','template.primary.color') ?>:
                            <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" />

                        </li>
                    </ul>

                </div>
            </div>
        </li>
        <li class="hidden-phone">
            <a style="padding-top: 5px;" href="#" data-toggle="dropdown"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/images/lang/en.png" alt="en" /></a>
            <ul class="dropdown-menu pull-left">
                <li class="active"><a href="?page=login&amp;lang=en" title="English"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/images/lang/en.png" alt="English"> English</a></li>
                <li><a href="?page=login&amp;lang=ro" title="Romanian"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/images/lang/ro.png" alt="Romanian"> Romanian</a></li>
                <li><a href="?page=login&amp;lang=it" title="Italian"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/images/lang/it.png" alt="Italian"> Italian</a></li>
                <li><a href="?page=login&amp;lang=fr" title="French"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/images/lang/fr.png" alt="French"> French</a></li>
                <li><a href="?page=login&amp;lang=pl" title="Polish"><img src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/images/lang/pl.png" alt="Polish"> Polish</a></li>
            </ul>
        </li>
    </ul>
    <?php if(!Yii::app()->user->isGuest): ?>
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
            <a data-toggle="dropdown" href="my_account.html?lang=en" class="glyphicons logout lock"><span class="hidden-phone text">mosaicpro</span><i></i></a>
            <ul class="dropdown-menu pull-right">
                <li><a href="my_account.html?lang=en" class="glyphicons cogwheel">Settings<i></i></a></li>
                <li><a href="my_account.html?lang=en" class="glyphicons camera">My Photos<i></i></a></li>
                <li class="highlight profile">
							<span>
								<span class="heading">Profile <a href="my_account.html?lang=en" class="pull-right">edit</a></span>
								<span class="img"></span>
								<span class="details">
									<a href="my_account.html?lang=en">Mosaic Pro</a>
									contact@mosaicpro.biz
								</span>
								<span class="clearfix"></span>
							</span>
                </li>
                <li>
							<span>
								<a class="btn btn-default btn-small pull-right" style="padding: 2px 10px; background: #fff;" href="<?php echo Yii::app()->createUrl('index/logout') ?>">Sign Out</a>
							</span>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div id="wrapper">
    <div id="menu" class="hidden-phone">
			<span class="profile">
				<a class="img" href="my_account.html?lang=en"><img src="http://www.placehold.it/74x74/232323&amp;text=photo" alt="Mr. Awesome" /></a>
				<span>
					<strong>Mr. Awesome</strong>
					<a href="my_account.html?lang=en">edit account</a>
				</span>
			</span>
        <div id="search">
            <input type="text" placeholder="Quick search ..." />
            <button class="glyphicons search"><i></i></button>
        </div>
        <ul>
            <li class="hasSubmenu glyphicons home active">
                <a data-toggle="collapse" href="#menu_index"><i></i><span>Dashboard</span></a>
                <ul class="collapse in" id="menu_index">
                    <li class=" active"><a href="index.html?lang=en"><span>Dashboard v1</span></a></li>
                    <li class=""><a href="index_v2.html?lang=en"><span>Dashboard v2</span></a></li>
                </ul>
                <span class="count">2</span>
            </li>
            <li class="hasSubmenu glyphicons cogwheels">
                <a data-toggle="collapse" href="#menu_components"><i></i><span>Components</span></a>
                <ul class="collapse" id="menu_components">
                    <li class=""><a href="ui.html?lang=en"><span>UI Elements</span></a></li>
                    <li class=""><a href="widgets.html?lang=en"><span>Widgets</span></a></li>
                    <li class=""><a href="charts.html?lang=en"><span>Charts</span></a></li>
                    <li class=""><a href="tables.html?lang=en"><span>Tables</span></a></li>
                    <li class=""><a href="grid.html?lang=en"><span>Grid</span></a></li>
                </ul>
                <span class="count">5</span>
            </li>
            <li class="hasSubmenu">
                <a data-toggle="collapse" class="glyphicons show_thumbnails_with_lines" href="#menu_forms"><i></i><span>Forms</span></a>
                <ul class="collapse" id="menu_forms">
                    <li class=""><a href="form_wizard.html?lang=en"><span>Form Wizard</span></a></li>
                    <li class=""><a href="form_elements.html?lang=en"><span>Form Elements</span></a></li>
                    <li class=""><a href="form_validator.html?lang=en"><span>Form Validator</span></a></li>
                    <li class=""><a href="file_managers.html?lang=en"><span>File Managers</span></a></li>
                </ul>
                <span class="count">4</span>
            </li>
            <li class="glyphicons calendar"><a href="calendar.html?lang=en"><i></i><span>Calendar</span></a></li>
            <li class="glyphicons picture"><a href="gallery.html?lang=en"><i></i><span>Photo Gallery</span></a></li>
            <li class="hasSubmenu">
                <a data-toggle="collapse" class="glyphicons shopping_cart" href="#menu_ecommerce"><i></i><span>Online Shop</span></a>
                <ul class="collapse" id="menu_ecommerce">
                    <li class=""><a href="products.html?lang=en"><span>Products</span></a></li>
                    <li class=""><a href="product_edit.html?lang=en"><span>Add product</span></a></li>
                </ul>
                <span class="count">2</span>
            </li>
            <li class="hasSubmenu glyphicons gift">
                <a data-toggle="collapse" href="#menu_extra"><i></i><span>Extra</span></a>
                <ul class="collapse" id="menu_extra">
                    <li class=""><a href="login.html?lang=en"><span>Login</span></a></li>
                    <li class=""><a href="my_account.html?lang=en"><span>My Account</span></a></li>
                    <li class=""><a href="bookings.html?lang=en"><span>Bookings</span></a></li>
                    <li class=""><a href="finances.html?lang=en"><span>Finances</span></a></li>
                    <li class=""><a href="pages.html?lang=en"><span>Site Pages</span></a></li>
                </ul>
                <span class="count">5</span>
            </li>
        </ul>
        <div class="clearfix" style="clear: both"></div>
    </div>
    <?php endif ?>
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
    <?php
    if(Yii::app()->request->enableCsrfValidation){
        $csrfTokenName = Yii::app()->request->csrfTokenName;
        $csrfToken = Yii::app()->request->csrfToken;
        echo "var crsf={ '$csrfTokenName':'$csrfToken' };";
    }
     ?>
    var themerPrimaryColor = '<?php echo $primaryColor; ?>';
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

<!-- Custom Action Script -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/action.js"></script>

<!-- google-code-prettify -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/google-code-prettify/prettify.js"></script>
<!-- tabele fix-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/backend/theme/scripts/table.fix.js"></script>
<script>
    $(function(){
        if ($('.prettyprint').length)
            prettyPrint();
    });
</script>
</body>
</html>

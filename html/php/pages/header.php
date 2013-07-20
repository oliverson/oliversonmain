<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
	<title><?php echo APP_NAME; ?> - Premium Admin Template</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<!-- Bootstrap -->
	<link href="<?php echo getURL(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo getURL(); ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	
	<!-- Bootstrap Extended -->
	<link href="<?php echo getURL(); ?>bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo getURL(); ?>bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo getURL(); ?>bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
	
	<!-- JQueryUI v1.9.2 -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css" />
	
	<!-- Glyphicons -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/css/glyphicons.css" />
	
	<!-- Bootstrap Extended -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>bootstrap/extend/bootstrap-select/bootstrap-select.css" />
	<link rel="stylesheet" href="<?php echo getURL(); ?>bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
	
	<!-- Uniform -->
	<link rel="stylesheet" media="screen" href="<?php echo getURL(); ?>theme/scripts/pixelmatrix-uniform/css/uniform.default.css" />

<?php if ($page == 'tables'): ?>
	<!-- DataTables -->
	<link rel="stylesheet" media="screen" href="<?php echo getURL(); ?>theme/scripts/DataTables/media/css/DT_bootstrap.css" />

<?php endif; ?>
<?php if ($page == 'gallery'): ?>
	<!-- Bootstrap Image Gallery -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/scripts/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css" />
	
<?php endif; ?>
<?php if ($page == 'form_elements'): ?>
	<!-- ColorPicker -->
	<link rel="stylesheet" media="screen" href="<?php echo getURL(); ?>theme/scripts/farbtastic/farbtastic.css" />

<?php endif; ?>
	<!-- JQuery v1.8.2 -->
	<script src="<?php echo getURL(); ?>theme/scripts/jquery-1.8.2.min.js"></script>
	
	<!-- Modernizr -->
	<script src="<?php echo getURL(); ?>theme/scripts/modernizr.custom.76094.js"></script>
	
	<!-- MiniColors -->
	<link rel="stylesheet" media="screen" href="<?php echo getURL(); ?>theme/scripts/jquery-miniColors/jquery.miniColors.css" />
	
	<!-- Notyfy -->
	<script type="text/javascript" src="<?php echo getURL(); ?>theme/scripts/notyfy/jquery.notyfy.js"></script>
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/scripts/notyfy/jquery.notyfy.css"/>
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/scripts/notyfy/themes/default.css"/>
	
	<!-- Gritter -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/scripts/Gritter/css/jquery.gritter.css"/>
	<script type="text/javascript" src="<?php echo getURL(); ?>theme/scripts/Gritter/js/jquery.gritter.min.js"></script>
	
<?php if ($page == 'calendar'): ?>
	<!-- Calendar -->
	<link rel="stylesheet" media="screen" href="<?php echo getURL(); ?>theme/scripts/fullcalendar/fullcalendar/fullcalendar.css" />

<?php endif; ?>

	<!-- google-code-prettify -->
	<link href="<?php echo getURL(); ?>theme/scripts/google-code-prettify/prettify.css" type="text/css" rel="stylesheet" />
	
<?php if ($page == 'file_managers'): ?>
	<!-- plupload -->
	<style type="text/css">@import url(<?php echo getURL(); ?>theme/scripts/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css);</style>
	
<?php endif; ?>
<?php if (DEV): ?>
	<!-- Theme -->
	<link rel="stylesheet/less" href="<?php echo getURL(); ?>theme/less/style.less?<?php echo time(0); ?>" />
	
<?php if (SKIN): ?>	
	<!-- Skin -->
	<link rel="stylesheet/less" href="<?php echo getURL(); ?>theme/skins/less/<?php echo SKIN; ?>.less?<?php echo time(0); ?>" />
<?php endif; ?>
<?php else: ?>
	<!-- Theme -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/css/style.min.css?<?php echo time(0); ?>" />
<?php if (SKIN): ?>	
	<!-- Skin -->
	<link rel="stylesheet" href="<?php echo getURL(); ?>theme/skins/css/<?php echo SKIN; ?>.min.css?<?php echo time(0); ?>" />
<?php endif; ?>	
<?php endif; ?>
<?php if (DEV): ?>
	<!-- FireBug Lite -->
	<!-- <script type="text/javascript" src="https://getfirebug.com/firebug-lite-debug.js"></script> -->
	
<?php endif; ?>
<?php if (GA): ?>
	<!-- Google Analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36057737-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
<?php endif; ?>
	<!-- LESS 2 CSS -->
	<script src="<?php echo getURL(); ?>theme/scripts/less-1.3.3.min.js"></script>
	
<?php if ($page == 'gallery' || $page == 'finances' || $page == 'index'): ?>	
	<!--[if IE]><script type="text/javascript" src="<?php echo getURL(); ?>theme/scripts/excanvas/excanvas.js"></script><![endif]-->
	<!--[if lt IE 8]><script type="text/javascript" src="<?php echo getURL(); ?>theme/scripts/json2.js"></script><![endif]-->
<?php endif; ?>
</head>
<body>
	
	<!-- Start Content -->
	<div class="container-fluid<?php if (MENU_POSITION): echo " " . MENU_POSITION; endif; ?><?php if ($page == 'login'): ?> login<?php endif; ?><?php if ($page == 'documentation'): ?> documentation<?php endif; ?>">
		
		<div class="navbar main">
			<a href="<?php echo $page == 'login' ? getURL(array('login')) : getURL(array('index')); ?>" class="appbrand"><span>Smashing Admin</span></a>
			
			<?php if ($page != 'login' && $page != 'documentation'): ?>
			<button type="button" class="btn btn-navbar">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<?php endif; ?>
			
			<ul class="topnav pull-left tn1">
				<?php if (SKIN_JS): ?>
				<li class="hidden-phone">
					<a href="#themer" data-toggle="collapse" class="glyphicons eyedropper"><i></i><span><?php echo $translate->_('Themer'); ?></span></a>
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
				<?php endif; ?>
				<li class="hidden-phone">
					<a href="#" data-toggle="dropdown"><img src="<?php echo getURL(); ?>theme/images/lang/<?php echo $locale; ?>.png" alt="<?php echo $locale; ?>" /></a>
			    	<ul class="dropdown-menu pull-left">
			      		<li<?php if ($locale == 'en'): ?> class="active"<?php endif; ?>><a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('lang' => 'en')))); ?>" title="<?php echo $translate->_('english'); ?>"><img src="<?php echo getURL(); ?>theme/images/lang/en.png" alt="<?php echo $translate->_('english'); ?>"> <?php echo $translate->_('english'); ?></a></li>
			      		<li<?php if ($locale == 'ro'): ?> class="active"<?php endif; ?>><a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('lang' => 'ro')))); ?>" title="<?php echo $translate->_('romanian'); ?>"><img src="<?php echo getURL(); ?>theme/images/lang/ro.png" alt="<?php echo $translate->_('romanian'); ?>"> <?php echo $translate->_('romanian'); ?></a></li>
			      		<li<?php if ($locale == 'it'): ?> class="active"<?php endif; ?>><a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('lang' => 'it')))); ?>" title="<?php echo $translate->_('italian'); ?>"><img src="<?php echo getURL(); ?>theme/images/lang/it.png" alt="<?php echo $translate->_('italian'); ?>"> <?php echo $translate->_('italian'); ?></a></li>
			      		<li<?php if ($locale == 'fr'): ?> class="active"<?php endif; ?>><a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('lang' => 'fr')))); ?>" title="<?php echo $translate->_('french'); ?>"><img src="<?php echo getURL(); ?>theme/images/lang/fr.png" alt="<?php echo $translate->_('french'); ?>"> <?php echo $translate->_('french'); ?></a></li>
			      		<li<?php if ($locale == 'pl'): ?> class="active"<?php endif; ?>><a href="?<?php echo str_replace("&", "&amp;", http_build_query(array_merge($_GET, array('lang' => 'pl')))); ?>" title="<?php echo $translate->_('polish'); ?>"><img src="<?php echo getURL(); ?>theme/images/lang/pl.png" alt="<?php echo $translate->_('polish'); ?>"> <?php echo $translate->_('polish'); ?></a></li>
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
					<?php if ($page == 'login'): ?>
					<a href="<?php echo getURL(array('login')); ?>" class="glyphicons logout lock"><span class="hidden-phone text">Welcome <strong>guest</strong></span><i></i></a>
					<?php else: ?>
					<a data-toggle="dropdown" href="<?php echo getURL(array('my_account')); ?>" class="glyphicons logout lock"><span class="hidden-phone text">mosaicpro</span><i></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="<?php echo getURL(array('my_account')); ?>" class="glyphicons cogwheel">Settings<i></i></a></li>
						<li><a href="<?php echo getURL(array('my_account')); ?>" class="glyphicons camera">My Photos<i></i></a></li>
						<li class="highlight profile">
							<span>
								<span class="heading">Profile <a href="<?php echo getURL(array('my_account')); ?>" class="pull-right">edit</a></span>
								<span class="img"></span>
								<span class="details">
									<a href="<?php echo getURL(array('my_account')); ?>">Mosaic Pro</a>
									contact@mosaicpro.biz
								</span>
								<span class="clearfix"></span>
							</span>
						</li>
						<li>
							<span>
								<a class="btn btn-default btn-small pull-right" style="padding: 2px 10px; background: #fff;" href="<?php echo getURL(array('login')); ?>">Sign Out</a>
							</span>
						</li>
					</ul>
					<?php endif; ?>
				</li>
			</ul>
		</div>
		
		<?php if ($page != 'login' && $page != 'documentation'): ?>
		<div id="wrapper">
		<div id="menu" class="hidden-phone">
			<span class="profile">
				<a class="img" href="<?php echo getURL(array('my_account')); ?>"><img src="<?php if (DEV): ?><?php echo getURL(); ?>theme/images/mrawesome.jpg<?php else: ?>http://www.placehold.it/74x74/232323&amp;text=photo<?php endif; ?>" alt="Mr. Awesome" /></a>
				<span>
					<strong>Mr. Awesome</strong>
					<a href="<?php echo getURL(array('my_account')); ?>">edit account</a>
				</span>
			</span>
			<div id="search">
				<input type="text" placeholder="Quick search ..." />
				<button class="glyphicons search"><i></i></button>
			</div>
			<ul>
				<li class="hasSubmenu glyphicons home<?php if ($page == 'index' || $page == 'index_v2'): ?> active<?php endif; ?>">
					<a data-toggle="collapse" href="#menu_index"><i></i><span><?php echo $translate->_('dashboard'); ?></span></a>
					<ul class="collapse<?php if ($page == 'index' || $page == 'index_v2'): ?> in<?php endif; ?>" id="menu_index">
						<li class="<?php if ($page == 'index'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('index')); ?>"><span><?php echo $translate->_('Dashboard v1'); ?></span></a></li>
						<li class="<?php if ($page == 'index_v2'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('index_v2')); ?>"><span><?php echo $translate->_('Dashboard v2'); ?></span></a></li>
					</ul>
					<span class="count">2</span>
				</li>
				<li class="hasSubmenu glyphicons cogwheels<?php if ($page == 'ui' || $page == 'widgets' || $page == 'charts' || $page == 'tables' || $page == 'grid'): ?> active<?php endif; ?>">
					<a data-toggle="collapse" href="#menu_components"><i></i><span><?php echo $translate->_('Components'); ?></span></a>
					<ul class="collapse<?php if ($page == 'ui' || $page == 'widgets' || $page == 'charts' || $page == 'tables' || $page == 'grid'): ?> in<?php endif; ?>" id="menu_components">
						<li class="<?php if ($page == 'ui'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('ui')); ?>"><span><?php echo $translate->_('ui_elements'); ?></span></a></li>
						<li class="<?php if ($page == 'widgets'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('widgets')); ?>"><span><?php echo $translate->_('Widgets'); ?></span></a></li>
						<li class="<?php if ($page == 'charts'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('charts')); ?>"><span><?php echo $translate->_('charts'); ?></span></a></li>
						<li class="<?php if ($page == 'tables'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('tables')); ?>"><span><?php echo $translate->_('tables'); ?></span></a></li>
						<li class="<?php if ($page == 'grid'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('grid')); ?>"><span><?php echo $translate->_('Grid'); ?></span></a></li>
					</ul>
					<span class="count">5</span>
				</li>
				<li class="hasSubmenu<?php if ($page == 'form_elements' || $page == 'form_validator' || $page == 'form_wizard' || $page == 'file_managers'): ?> active<?php endif; ?>">
					<a data-toggle="collapse" class="glyphicons show_thumbnails_with_lines" href="#menu_forms"><i></i><span><?php echo $translate->_('forms'); ?></span></a>
					<ul class="collapse<?php if ($page == 'form_elements' || $page == 'form_wizard' || $page == 'form_validator' || $page == 'file_managers'): ?> in<?php endif; ?>" id="menu_forms">
						<li class="<?php if ($page == 'form_wizard'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('form_wizard')); ?>"><span><?php echo $translate->_('Form Wizard'); ?></span></a></li>
						<li class="<?php if ($page == 'form_elements'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('form_elements')); ?>"><span><?php echo $translate->_('form_elements'); ?></span></a></li>
						<li class="<?php if ($page == 'form_validator'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('form_validator')); ?>"><span><?php echo $translate->_('form_validator'); ?></span></a></li>
						<li class="<?php if ($page == 'file_managers'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('file_managers')); ?>"><span><?php echo $translate->_('file_managers'); ?></span></a></li>
					</ul>
					<span class="count">4</span>
				</li>
				<li class="glyphicons calendar<?php if ($page == 'calendar'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('calendar')); ?>"><i></i><span><?php echo $translate->_('calendar'); ?></span></a></li>
				<li class="glyphicons picture<?php if ($page == 'gallery'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('gallery')); ?>"><i></i><span><?php echo $translate->_('photo_gallery'); ?></span></a></li>
				<li class="hasSubmenu<?php if ($page == 'products' || $page == 'categories' || $page == 'product_edit'): ?> active<?php endif; ?>">
					<a data-toggle="collapse" class="glyphicons shopping_cart" href="#menu_ecommerce"><i></i><span><?php echo $translate->_('online_shop'); ?></span></a>
					<ul class="collapse<?php if ($page == 'products' || $page == 'categories' || $page == 'product_edit'): ?> in<?php endif; ?>" id="menu_ecommerce">
						<li class="<?php if ($page == 'products'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('products')); ?>"><span><?php echo $translate->_('products'); ?></span></a></li>
						<li class="<?php if ($page == 'product_edit'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('product_edit')); ?>"><span><?php echo $translate->_('add_product'); ?></span></a></li>
					</ul>
					<span class="count">2</span>
				</li>
				<li class="hasSubmenu glyphicons gift<?php if ($page == 'bookings' || $page == 'finances' || $page == 'pages' || $page == 'my_account'): ?> active<?php endif; ?>">
					<a data-toggle="collapse" href="#menu_extra"><i></i><span><?php echo $translate->_('Extra'); ?></span></a>
					<ul class="collapse<?php if ($page == 'bookings' || $page == 'finances' || $page == 'pages' || $page == 'my_account'): ?> in<?php endif; ?>" id="menu_extra">
						<li class="<?php if ($page == 'login'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('login')); ?>"><span><?php echo $translate->_('login'); ?></span></a></li>
						<li class="<?php if ($page == 'my_account'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('my_account')); ?>"><span><?php echo $translate->_('my_account'); ?></span></a></li>
						<li class="<?php if ($page == 'bookings'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('bookings')); ?>"><span><?php echo $translate->_('bookings'); ?></span></a></li>
						<li class="<?php if ($page == 'finances'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('finances')); ?>"><span><?php echo $translate->_('finances'); ?></span></a></li>
						<li class="<?php if ($page == 'pages'): ?> active<?php endif; ?>"><a href="<?php echo getURL(array('pages')); ?>"><span><?php echo $translate->_('site_pages'); ?></span></a></li>
					</ul>
					<span class="count">5</span>
				</li>
			</ul>
			<div class="clearfix" style="clear: both"></div>
			<?php if (MENU_JS): ?>
			<div class="separator uniformjs">
				<div class="innerLR">
					<label for="toggle-menu-position" class="checkbox">
						<input type="checkbox" class="checkbox" id="toggle-menu-position"<?php if (MENU_POSITION): ?> checked="checked"<?php endif; ?> /> 
						right menu
					</label>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<div id="content">
		<?php endif; ?>
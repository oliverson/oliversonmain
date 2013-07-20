<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('forms'); ?></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('file_managers'); ?></li>
</ul>
<div class="separator bottom"></div>

<h3 class="glyphicons suitcase"><i></i> <?php echo $translate->_('file_managers'); ?></h3>
<div class="innerLR">
	<div class="widget">
		<div class="widget-head"><h4 class="heading glyphicons file_import"><i></i>File Manager</h4></div>
		<div class="widget-body">
			<form id="pluploadForm">
				<div id="pluploadUploader">
					<p>You browser doesn't have Flash, Silverlight, Gears, BrowserPlus or HTML5 support.</p>
				</div>
			</form>
		</div>
	</div>
</div>
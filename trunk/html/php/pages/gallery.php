<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('photo_gallery'); ?></li>
</ul>
<div class="separator bottom"></div>

<div class="innerLR">
	<div class="widget">
		<div class="widget-head">
			<h3 class="heading"><?php echo $translate->_('photo_gallery'); ?></h3>
		</div>
		<div class="widget-body">
			<div class="row-fluid gallery" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery-2" data-delegate="#gallery-2">
				<ul>
					<?php for ($i=1; $i<=12; $i++): ?>
					<li class="span2">
						<a href="<?php echo getURL(); ?>theme/images/gallery/<?php echo $i; ?>.jpg" class="thumb view" data-gallery="gallery">
							<img src="<?php echo getURL(); ?>theme/images/gallery/rs/<?php echo $i; ?>.jpg" alt="Album" />
						</a>
					</li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
	</div>

	<div class="widget">
		<div class="widget-head">
			<h3 class="heading"><?php echo $translate->_('photo_gallery'); ?></h3>
		</div>
		<div class="widget-body">
			<div class="row-fluid gallery" data-toggle="modal-gallery" data-target="#modal-gallery" id="gallery" data-delegate="#gallery">
				<ul>
					<?php for ($i=1; $i<=12; $i++): ?>
					<li class="span3">
						<a href="<?php echo getURL(); ?>theme/images/gallery/<?php echo $i; ?>.jpg" class="thumb view" data-gallery="gallery">
							<img src="<?php echo getURL(); ?>theme/images/gallery/rs/<?php echo $i; ?>.jpg" alt="Album" />
						</a>
					</li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- modal-gallery is the modal dialog used for the image gallery -->
<div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3 class="modal-title"></h3>
    </div>
    <div class="modal-body"><div class="modal-image"></div></div>
    <div class="modal-footer">
        <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
        <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
        <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
    </div>
</div>

<div id="modal-gallery-2" class="modal modal-gallery hide fade" tabindex="-1">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3 class="modal-title"></h3>
    </div>
    <div class="modal-body"><div class="modal-image"></div></div>
    <div class="modal-footer">
        <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
        <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
        <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
    </div>
</div>
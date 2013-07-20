<ul class="breadcrumb">
	<li>You are here: <a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('dashboard'); ?></li>
</ul>

<div class="menubar" style="margin: -1px 0 5px;">
	<ul>
		<li>Button widget:</li>
		<li><a href="">Button 1</a></li>
		<li class="divider"></li>
		<li><a href="">Button 2</a></li>
		<li class="divider"></li>
		<li><a href="">Export</a></li>
	</ul>
</div>
<div class="separator bottom"></div>

<div class="innerLR">
	
	<div class="row-fluid">
	<div class="span3">
	
		<div class="widget widget-3 margin-bottom-none">
			<div class="widget-head">
				<h4 class="heading"><span class="glyphicons user_remove"><i></i></span><?php echo $translate->_('cancelled'); ?></h4>
			</div>
			<div class="widget-body large dashboard cancellations">
				4 
				<span>
					<span><?php echo $translate->_('lost'); ?></span>
					<span>&euro;89.00</span>
				</span>
			</div>
			
			<div class="widget-footer align-center">
				<a href="#" class="glyphicons print"><i></i> <?php echo $translate->_('print'); ?></a>
				<a href="#" class="glyphicons list"><i></i> <?php echo $translate->_('view'); ?></a>
			</div>
			
		</div>
	
	</div>
	<div class="span9">
	
		<div class="row-fluid">
			<div class="span2">
				<a href="" class="widget-stats">
					<span class="glyphicons shopping_cart"><i></i></span>
					<span class="txt">Sales</span>
					<div class="clearfix"></div>
					<span class="count label label-important">20</span>
				</a>
			</div>
			<div class="span2">
				<a href="" class="widget-stats">
					<span class="glyphicons shield"><i></i></span>
					<span class="txt">Alerts</span>
					<div class="clearfix"></div>
					<span class="count label">25</span>
				</a>
			</div>
			<div class="span2">
				<a href="" class="widget-stats">
					<span class="glyphicons user_add"><i></i></span>
					<span class="txt">Clients</span>
					<div class="clearfix"></div>
					<span class="count label label-warning">33</span>
				</a>
			</div>
			<div class="span2">
				<a href="" class="widget-stats">
					<span class="glyphicons envelope"><i></i></span>
					<span class="txt">Messages</span>
					<div class="clearfix"></div>
					<span class="count label label-primary">265</span>
				</a>
			</div>
			<div class="span2">
				<a href="" class="widget-stats">
					<span class="glyphicons fishes"><i></i></span>
					<span class="txt">Fishes caught</span>
					<div class="clearfix"></div>
					<span class="count label label-important">13</span>
				</a>
			</div>
			<div class="span2">
				<a href="" class="widget-stats">
					<span class="glyphicons coins"><i></i></span>
					<span class="txt">Total Earnings</span>
					<div class="clearfix"></div>
					<span class="count label label-success">&euro;292,039.02</span>
				</a>
			</div>
		</div>
	
	</div>
	</div>
	
</div>
<div class="separator bottom"></div>

<div class="heading-buttons">
	<!-- <h3 class="glyphicons home"><i></i><?php echo $translate->_('dashboard'); ?></h3> -->
	<h3><?php echo $translate->_('dashboard'); ?><span class="hidden-phone">| Awesome dashboard heading</span></h3>
	<div class="buttons pull-right">
		<a href="" class="btn btn-default">Default</a>
		<a href="" class="btn btn-primary">Primary</a>
		<a href="" class="btn btn-warning">Warning</a>
		<a href="" class="btn hidden-phone btn-danger">Danger</a>
		<a href="" class="btn btn-success hidden-phone">Success</a>
	</div>
	<div class="clearfix" style="clear: both;"></div>
</div>
<div class="separator bottom"></div>

<div class="innerLR">
	<div class="widget">
		<div class="widget-head">
			<h4 class="heading glyphicons cardio"><i></i><?php echo $translate->_('website_traffic'); ?></h4>
		</div>
		<div class="widget-body">
			<div id="chart_ordered_bars" style="height: 250px;"></div>
		</div>
	</div>
	
	<div class="menubar">
		<ul>
			<li>Button widget:</li>
			<li><a href="">Button 1</a></li>
			<li class="divider"></li>
			<li><a href="">Button 2</a></li>
			<li class="divider"></li>
			<li><a href="">Export</a></li>
		</ul>
	</div>
	<div class="separator bottom"></div>
	
</div>

<div class="innerLR">
	<div class="row-fluid">
		<div class="span6">
			<div class="widget">
				<div class="widget-head">
					<h4 class="heading glyphicons stats"><i></i><?php echo $translate->_('overview'); ?></h4>
				</div>
				<div class="widget-body list">
					<ul>
						<li><span class="count">350,254 <span class="sparkline"></span></span> <?php echo $translate->_('visits'); ?></li>
						<li><span class="count">120,103 <span class="sparkline"></span></span> <?php echo $translate->_('visitors'); ?></li>
						<li><span class="count">5,156,392 <span class="sparkline"></span></span> <?php echo $translate->_('pageviews'); ?></li>
					</ul>
				</div>
			</div>
			<div class="widget">
				<div class="widget-head">
					<h4 class="heading glyphicons heart"><i></i><?php echo $translate->_('interest'); ?></h4>
				</div>
				<div class="widget-body list">
					<ul>
						<li><span class="count">00:01:59 <span class="sparkline"></span></span> <?php echo $translate->_('avg_time'); ?></li>
						<li><span class="count">48% <span class="sparkline"></span></span> <?php echo $translate->_('returning'); ?></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="span6">
			<div class="widget">
				<div class="widget-head">
					<h4 class="heading glyphicons pie_chart"><i></i><?php echo $translate->_('traffic_sources'); ?></h4>
				</div>
				<div class="widget-body">
					<div id="pie" style="height: 226px;"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="innerLR">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget widget-tabs">
				<div class="widget-head">
					<ul>
						<li class="active"><a class="glyphicons coffe_cup" href="#dataTableSourcesTab" data-toggle="tab"><i></i><?php echo $translate->_('traffic_sources'); ?></a></li>
						<li><a class="glyphicons share_alt" href="#dataTableRefferingTab" data-toggle="tab"><i></i><?php echo $translate->_('referrals'); ?></a></li>
					</ul>
				</div>
				<div class="widget-body">
					<div class="tab-content">
						<div class="tab-pane active" id="dataTableSourcesTab">
							<div id="dataTableSources"></div>
						</div>
						<div class="tab-pane" id="dataTableRefferingTab">
							<div id="dataTableReffering"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="innerLR">
	<div class="row-fluid">
		<div class="span6">
			<div class="widget widget-activity">
				<div class="widget-head">
					<h4 class="heading">Recent Activity</h4>
				</div>
				<div class="widget-body">
					<ul class="filters">
						<li>Filter by</li>
						<li class="glyphicons user_add"><i></i></li>
						<li class="glyphicons shopping_cart active"><i></i></li>
						<li class="glyphicons envelope"><i></i></li>
						<li class="glyphicons link"><i></i></li>
						<li class="glyphicons camera"><i></i></li>
					</ul>
					<div class="clearfix"></div>
					<ul class="activities">
						<?php for($i=1;$i<=3;$i++): ?>
						<li>
							<span class="glyphicons activity-icon shopping_cart"><i></i></span>
							<a href="">Client name</a> bought 10 items worth of &euro;50 (<a href="">order #230<?php echo $i; ?></a>)
						</li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>
			<div class="widget">
				<div class="widget-head">
					<h4 class="heading glyphicons history"><i></i><?php echo $translate->_('activity'); ?></h4>
					<a href="" class="details pull-right">view all</a>
				</div>
				<div class="widget-body list">
					<ul>
						<li>
							<span>Sales today</span>
							<span class="count">&euro;5,900</span>
						</li>
						<li>
							<span>Some other stats</span>
							<span class="count">36,900</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="widget">
				<div class="widget-head">
					<h4 class="heading"><?php echo $translate->_('Last orders'); ?></h4>
					<a href="" class="details pull-right">view all</a>
				</div>
				<div class="widget-body list products">
					<ul>
						<li>
							<span class="img">photo</span>
							<span class="title">10 items<br/><strong>&euro;5,900.00</strong></span>
							<span class="count"></span>
						</li>
						<li>
							<span class="img">photo</span>
							<span class="title">Product name<br/><strong>&euro;2,900</strong></span>
							<span class="count"></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="span6">
			<div class="widget">
				<div class="widget-head"><h4 class="heading glyphicons conversation"><i></i>Comments</h4></div>
				<div class="widget-body">
					<div class="media">
						<img class="media-object pull-left" src="theme/images/mrawesome.jpg" alt="">
						<div class="media-body">
							<blockquote>
								  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien. Duis a odio id erat scelerisque fermentum in ut leo. Suspendisse potenti. Nunc semper cursus dui luctus porttitor. Donec facilisis semper magna sit amet ullamcorper. Cras rutrum magna eget risus vulputate congue. Sed sem libero, dignissim sit amet viverra vitae, suscipit sit amet elit. Integer tincidunt risus in metus rhoncus molestie. Nam semper, augue suscipit elementum vehicula, nisl justo fermentum mi, at ultrices quam enim eu nulla. Sed et neque a metus ultrices condimentum non nec purus.</p>
								  <small><a href="#" title="">John Doe</a><cite> | client @ Famous Company</cite></small>
							</blockquote>
						</div>
					</div>
					<div class="media">
						<img class="media-object pull-right" src="theme/images/mrawesome.jpg" alt="">
						<div class="media-body">
							<blockquote class="pull-right">
								  <p>In ultricies ante eget tortor euismod vitae molestie eros hendrerit. Cras tristique, orci ac lacinia aliquet, velit risus laoreet lectus, eget sollicitudin metus orci non nulla. Pellentesque ac turpis turpis. Aliquam erat volutpat. Proin semper auctor mauris vel tempor. Ut eget turpis neque. Nam ultricies tortor eu odio ultricies euismod. Nulla rhoncus iaculis felis vulputate euismod. Maecenas sapien arcu, gravida eu tincidunt vel, ultricies ullamcorper neque. Phasellus interdum, nibh eu pulvinar mollis, eros dolor sollicitudin nunc, in ullamcorper nisl ante eu nunc.</p>
								  <small><a href="#" title="">John Doe</a><cite> | client @ Famous Company</cite></small>
							</blockquote>
						</div>
					</div>
					<div class="media">
						<img class="media-object pull-left" src="theme/images/mrawesome.jpg" alt="">
						<div class="media-body">
							<blockquote>
								  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh felis, facilisis bibendum sapien. Duis a odio id erat scelerisque fermentum in ut leo. Suspendisse potenti. Nunc semper cursus dui luctus porttitor. Donec facilisis semper magna sit amet ullamcorper. Cras rutrum magna eget risus vulputate congue. Sed sem libero, dignissim sit amet viverra vitae, suscipit sit amet elit. Integer tincidunt risus in metus rhoncus molestie. Nam semper, augue suscipit elementum vehicula, nisl justo fermentum mi, at ultrices quam enim eu nulla. Sed et neque a metus ultrices condimentum non nec purus.</p>
								  <small><a href="#" title="">John Doe</a><cite> | client @ Famous Company</cite></small>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
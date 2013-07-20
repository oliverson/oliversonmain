<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('dashboard'); ?></li>
</ul>
<div class="separator bottom"></div>

<div class="heading-buttons">
	<h3><?php echo $translate->_('dashboard'); ?></h3>
	<div class="buttons pull-right">
		<a href="" class="btn btn-primary">Primary</a>
		<a href="" class="btn btn-default">Default</a>
		<a href="" class="btn btn-danger">Danger</a>
	</div>
	<div class="clearfix" style="clear: both;"></div>
</div>
<div class="separator bottom"></div>

<div class="innerLR">
	<div class="row-fluid">
		<div class="span8">
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
						<span class="count label label-success">33</span>
					</a>
				</div>
				<div class="span3">
					<a href="" class="widget-stats">
						<span class="glyphicons envelope"><i></i></span>
						<span class="txt">Messages</span>
						<div class="clearfix"></div>
						<span class="count label label-info">265</span>
					</a>
				</div>
				<div class="span3">
					<a href="" class="widget-stats">
						<span class="glyphicons fishes"><i></i></span>
						<span class="txt">Fishes caught</span>
						<div class="clearfix"></div>
						<span class="count label label-important">13</span>
					</a>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="widget margin-bottom-none">
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
		</div>
	</div>

	<div class="separator bottom"></div>
	
	<div class="widget">
		<div class="widget-head">
			<h4 class="heading glyphicons cardio"><i></i><?php echo $translate->_('website_traffic'); ?></h4>
		</div>
		<div class="widget-body">
			<div class="btn-group separator bottom pull-right">
				<button id="websiteTraffic24Hours" class="btn btn-default">24 <?php echo $translate->_('hours'); ?></button>
				<button id="websiteTraffic7Days" class="btn btn-default">7 <?php echo $translate->_('days'); ?></button>
				<button id="websiteTraffic14Days" class="btn btn-default">14 <?php echo $translate->_('days'); ?></button>
				<button id="websiteTrafficClear" class="btn btn-default" disabled="disabled"><?php echo $translate->_('clear'); ?></button>
			</div>
			<div class="clearfix" style="clear: both;"></div>
			<div id="placeholder" style="height: 200px;"></div>
			<div id="overview" style="height: 40px;"></div>
		</div>
	</div>
</div>

<div class="menubar">
	<ul>
		<li><a href="">Button 1</a></li>
		<li><a href="">Button 2</a></li>
		<li class="divider"></li>
		<li><a href="">Export</a></li>
	</ul>
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

<div class="well">
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

<h4 class="heading-arrow">Recent Activity</h4>
<div class="innerLR">
	<div class="widget-activity">
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
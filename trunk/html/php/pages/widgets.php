<ul class="breadcrumb">
	<li><a href="<?php echo getURL(array('index')); ?>" class="glyphicons home"><i></i> <?php echo APP_NAME; ?></a></li>
	<li class="divider"></li>
	<li><?php echo $translate->_('Widgets'); ?></li>
</ul>
<div class="separator bottom"></div>

<div class="heading-buttons">
	<h3><?php echo $translate->_('Widgets'); ?><span class="hidden-phone">| Awesome heading</span></h3>
	<div class="buttons pull-right">
		<a href="" class="btn btn-source-toggle btn-primary btn-icon glyphicons embed_close"><i></i>View source toggle</a>
	</div>
	<div class="clearfix" style="clear: both;"></div>
</div>
<div class="separator bottom"></div>

<div class="innerLR">
	<div class="row-fluid">
		<div class="span6">
			
			<div class="widget">
				<div class="widget-head"><h4 class="heading">Widget</h4></div>
				<div class="widget-body">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
				</div>
			</div>
			
<div class="code">
<pre class="prettyprint linenum lang-html">
&lt;div class="widget"&gt;
	&lt;div class="widget-head"&gt;&lt;h4 class="heading"&gt;Widget&lt;/h4&gt;&lt;/div&gt;
	&lt;div class="widget-body"&gt;
		&lt;p&gt;Anim pariatur cliche reprehenderit ... &lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
<div class="separator bottom"></div>
</div>
			
			<div class="widget widget-tabs">
				<div class="widget-head">
					<ul>
						<li class="active"><a class="glyphicons coffe_cup" href="#tab-1" data-toggle="tab"><i></i>Active tab</a></li>
						<li><a class="glyphicons share_alt" href="#tab-2" data-toggle="tab"><i></i>Other tab</a></li>
					</ul>
				</div>
				<div class="widget-body">
					<div class="tab-content">
						<div class="tab-pane active" id="tab-1">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
						</div>
						<div class="tab-pane" id="tab-2">
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
						</div>
					</div>
				</div>
			</div>
			
<div class="code">
<pre class="prettyprint linenum lang-html">
&lt;div class="widget widget-tabs"&gt;
	&lt;div class="widget-head"&gt;
		&lt;ul&gt;
			&lt;li class="active"&gt;&lt;a class="glyphicons coffe_cup" href="#tab-1" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;Active tab&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a class="glyphicons share_alt" href="#tab-2" data-toggle="tab"&gt;&lt;i&gt;&lt;/i&gt;Other tab&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	&lt;div class="widget-body"&gt;
		&lt;div class="tab-content"&gt;
			&lt;div class="tab-pane active" id="tab-1"&gt;
				&lt;p>Anim pariatur cliche reprehenderit ... &lt;/p&gt;
			&lt;/div&gt;
			&lt;div class="tab-pane" id="tab-2"&gt;
				&lt;p>Anim pariatur cliche reprehenderit ... &lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
<div class="separator bottom"></div>
</div>
			
			<div class="widget">
				<div class="widget-head progress progress-primary" id="widget-progress-bar">
					<div class="bar">Lorem ipsum <strong>dolor</strong> - <strong class="steps-percent">100%</strong></div>
				</div>
				<div class="widget-body">
					<h4>Progress Widget</h4>
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
				</div>
			</div>
			
<div class="code">
<pre class="prettyprint linenum lang-html">
&lt;div class="widget"&gt;
	&lt;div class="widget-head progress progress-primary" id="widget-progress-bar"&gt;
		&lt;div class="bar"&gt;Lorem ipsum &lt;strong&gt;dolor&lt;/strong&gt; - 
		&lt;strong class="steps-percent"&gt;100%&lt;/strong&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="widget-body"&gt;
		&lt;h4&gt;Progress Widget&lt;/h4&gt;
		&lt;p&gt;Anim pariatur cliche reprehenderit ... &lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
<div class="separator bottom"></div>
</div>

		<h4 class="heading-arrow">Simple heading with arrow</h4>
<div class="code">
<pre class="prettyprint linenum lang-html">
&lt;h4 class="heading-arrow"&gt;Simple heading with arrow&lt;/h4&gt;
</pre>
<div class="separator bottom"></div>
</div>
			
		</div>
		<div class="span6">
		
			<div class="accordion" id="accordion">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
							Collapsible Accordions
						</a>
				    </div>
				    <div id="collapse-1" class="accordion-body collapse">
				      	<div class="accordion-inner">
				        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				      	</div>
				    </div>
			  	</div>
			  	<div class="accordion-group">
				    <div class="accordion-heading">
				      	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">
				        	Collapsible Accordions
				      	</a>
				    </div>
				    <div id="collapse-2" class="accordion-body collapse">
				    	<div class="accordion-inner">
				        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				      	</div>
				    </div>
			  	</div>
			  	<div class="accordion-group">
				    <div class="accordion-heading">
				      	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-3">
				        	Collapsible Accordions
				      	</a>
				    </div>
				    <div id="collapse-3" class="accordion-body collapse in">
				    	<div class="accordion-inner">
				        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
				      	</div>
				    </div>
			  	</div>
			</div>
			
<div class="code">
<pre class="prettyprint lang-html">
&lt;div class="accordion" id="accordion2"&gt;
	&lt;div class="accordion-group"&gt;
		&lt;div class="accordion-heading"&gt;
			&lt;a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"&gt;
				Collapsible Group Item #1
			&lt;/a&gt;
		&lt;/div&gt;
		&lt;div id="collapseOne" class="accordion-body collapse"&gt;
			&lt;div class="accordion-inner"&gt;
				Anim pariatur cliche ...
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
  	&lt;div class="accordion-group"&gt;
		&lt;div class="accordion-heading"&gt;
			&lt;a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"&gt;
				Active Item
			&lt;/a&gt;
		&lt;/div&gt;
		&lt;div id="collapseTwo" class="accordion-body collapse <strong>in</strong>"&gt;
			...
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
<div class="separator bottom"></div>
</div>
			
			<div class="widget">
				<div class="widget-head">
					<h4 class="heading glyphicons history"><i></i>List Widget</h4>
					<a href="" class="details pull-right">link</a>
				</div>
				<div class="widget-body list">
					<ul>
						<li>
							<span>List item #1</span>
							<span class="count">&euro;5,900</span>
						</li>
						<li>
							<span>List item #2</span>
							<span class="count">36,900</span>
						</li>
					</ul>
				</div>
			</div>
			
<div class="code">
<pre class="prettyprint linenum lang-html">
&lt;div class="widget"&gt;
	&lt;div class="widget-head"&gt;
		&lt;h4 class="heading glyphicons history"&gt;&lt;i&gt;&lt;/i&gt;List Widget&lt;/h4&gt;
		&lt;a href="" class="details pull-right"&gt;link&lt;/a&gt;
	&lt;/div&gt;
	&lt;div class="widget-body list"&gt;
		&lt;ul&gt;
			&lt;li&gt;
				&lt;span&gt;List item #1&lt;/span&gt;
				&lt;span class="count"&gt;5,900&lt;/span&gt;
			&lt;/li&gt;
			&lt;li&gt;
				&lt;span&gt;List item #2&lt;/span&gt;
				&lt;span class="count"&gt;36,900&lt;/span&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
<div class="separator bottom"></div>
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
			
<div class="code">
<pre class="prettyprint linenum lang-html">
&lt;div class="menubar"&gt;
	&lt;ul&gt;
		&lt;li&gt;Button widget:&lt;/li&gt;
		&lt;li&gt;&lt;a href=""&gt;Button 1&lt;/a&gt;&lt;/li&gt;
		&lt;li class="divider"&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=""&gt;Button 2&lt;/a&gt;&lt;/li&gt;
		&lt;li class="divider"&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=""&gt;Export&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
</pre>
<div class="separator bottom"></div>
</div>
			
			<div class="row-fluid">
				<div class="span4">
					<a href="" class="widget-stats">
						<span class="glyphicons shopping_cart"><i></i></span>
						<span class="txt">Sales</span>
						<div class="clearfix"></div>
						<span class="count label label-important">20</span>
					</a>
				</div>
				<div class="span4">
					<a href="" class="widget-stats">
						<span class="glyphicons shield"><i></i></span>
						<span class="txt">Alerts</span>
						<div class="clearfix"></div>
						<span class="count label">25</span>
					</a>
				</div>
				<div class="span4">
					<a href="" class="widget-stats">
						<span class="glyphicons user_add"><i></i></span>
						<span class="txt">Clients</span>
						<div class="clearfix"></div>
						<span class="count label label-warning">33</span>
					</a>
				</div>
			</div>
			
<div class="code">
<div class="separator bottom"></div>
<pre class="prettyprint linenum lang-html">
&lt;a href="" class="widget-stats"&gt;
	&lt;span class="glyphicons user_add"&gt;&lt;i&gt;&lt;/i&gt;&lt;/span&gt;
	&lt;span class="txt"&gt;Clients&lt;/span&gt;
	&lt;div class="clearfix"&gt;&lt;/div&gt;
	&lt;span class="count label label-warning"&gt;33&lt;/span&gt;
&lt;/a&gt;
</pre>
</div>
			
		</div>
	</div>
</div>

<script type="text/javascript">
$(function()
{
	function mt_rand (min, max) {
	  // http://kevin.vanzonneveld.net
	  // +   original by: Onno Marsman
	  // +   improved by: Brett Zamir (http://brett-zamir.me)
	  // +   input by: Kongo
	  // *     example 1: mt_rand(1, 1);
	  // *     returns 1: 1
	  var argc = arguments.length;
	  if (argc === 0) {
	    min = 0;
	    max = 2147483647;
	  }
	  else if (argc === 1) {
	    throw new Error('Warning: mt_rand() expects exactly 2 parameters, 1 given');
	  }
	  else {
	    min = parseInt(min, 10);
	    max = parseInt(max, 10);
	  }
	  return Math.floor(Math.random() * (max - min + 1)) + min;
	}
	$('#widget-progress-bar .bar').width("50%");
	setInterval(function(){
		var w = mt_rand(30, 100);
		$('#widget-progress-bar .steps-percent').html(w + "%");
		$('#widget-progress-bar .bar').width(w + "%");
	}, 2000);
});
</script>
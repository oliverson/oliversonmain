function setCookieTheme(post_data){
    if(crsf!=undefined && crsf!=null){
        for(var i in crsf){
            post_data[i]=crsf[i];
        }
    }
    $.ajax({
        type: 'POST',
        url: '/admin/index/setCookies',
        data: post_data ,
        success: function(data){
            return 1;
        }
    });
}
function themerUpdateColors(primary)
{
	updatePrimaryColor(primary, true, true);
}

//Converts an RGB object to a hex string
function rgb2hex(rgb)
{
	var hex = [
		rgb.r.toString(16),
		rgb.g.toString(16),
		rgb.b.toString(16)
	];
	$.each(hex, function(nr, val) {
		if (val.length === 1) hex[nr] = '0' + val;
	});
	return '#' + hex.join('');
}

// converts a string to RGB object
function rgbString2obj(string)
{
	var parts = string.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
	var rgbObj = { r: Number(parts[1]), g: Number(parts[2]), b: Number(parts[3]) };
	return rgbObj;
}

function updatePrimaryColor(hex, attach, charts)
{
	themerPrimaryColor = hex;
	$('#themer-primary-cp').val(themerPrimaryColor);
	$.minicolors.refresh();

	if (attach === true)
		attachStylesheet();

	if (charts === true)
		updateCharts();

    themeSetPrimaryColor();
    $('.toggle-button-set-theme').toggleButtons('destroy');
    $('.toggle-button-set-theme').toggleButtons({
            width: 100,
            label: label_toggle_button_set_theme,
            style: {
                custom: {
                    enabled: {
                        background: themerPrimaryColor,
                        gradient: undefined,
                        color: "#FFFFFF"
                    },
                    disabled: {
                        background: themerPrimaryColor,
                        gradient: undefined,
                        color: "#FFFFFF"
                    }
                }
            }
        }
    );
    $('.toggle-button-primary').toggleButtons('destroy');
    $('.toggle-button-primary').toggleButtons('init',{
            style: {
                custom: {
                    enabled: {
                        background: themerPrimaryColor,
                        gradient: undefined,
                        color: "#FFFFFF"
                    }
                }
            }
        }
    );
}
function themerAdvancedToggle()
{
    var cp = [$('#themer-primary-cp'), $('#themer-header-cp'), $('#themer-menu-cp')];
        $('#themer').addClass('themer-advanced');
        $.each(cp, function(k,v){ v.attr('data-textfield', true).removeClass('minicolors-hidden'); });
}
function generateCSS(basePath)
{
	if(!basePath)
		basePath = "";

	var css =
		"@primaryColor: " + themerPrimaryColor + ";\n" +

		primaryBgColorTargets.join(", \n") + "\n" +
		"{\n" +
		"	background: @primaryColor;\n"+
		"}\n\n" +

		primaryTextColorTargets.join(", \n") + "\n" +
		"{\n" +
		"	color: @primaryColor;\n"+
		"}\n\n" +

		primaryBorderColorTargets.join(", \n") + "\n" +
		"{\n" +
		"	border-color: @primaryColor;\n"+
		"}\n\n";

	css +=
		".table-primary tbody td\n" +
		"{\n" +
		"	background-color: lighten(@primaryColor, 50%);\n" +
		"}\n\n" +
		".table-primary tbody tr.selected td, .table-primary tbody tr.selectable:hover td\n" +
		"{\n" +
		"	background-color: lighten(@primaryColor, 40%);\n" +
		"}\n\n" +
		".table-primary.table-bordered tbody td, .table-primary, .pagination ul > .disabled > a, .pagination ul > .disabled > span\n" +
		"{\n" +
		"	border-color: lighten(@primaryColor, 50%);\n" +
		"}\n\n" +
            ".btn-primary:hover {\n" +
            "    background-color: lighten(@primaryColor, 10%);\n" +
            "    color: #FFFFFF;"+
            "}"+
            ".btn-primary:focus, .btn-primary:active, .btn-primary.active {\n" +
            "background-color: @primaryColor;\n" +
            "color: #FFFFFF;\n" +
            "}\n" +
            ".btn-primary.disabled, .btn-primary[disabled] {\n" +
            "    background-color: lighten(@primaryColor, 30%);\n" +
            "    border-color: lighten(@primaryColor, 20%);\n" +
            "    color: lighten(@primaryColor, 10%);\n" +
            "}\n" +
		".navbar.main .appbrand\n" +
		"{\n" +
		"	background: darken(@primaryColor, 10%);\n" +
		"	border-color: lighten(@primaryColor, 10%);\n" +
		"}\n\n" +
		".navbar.main .appbrand span\n" +
		"{\n" +
		"	border-color: darken(@primaryColor, 15%);\n" +
		"}\n\n" +
		".navbar.main .btn-navbar .icon-bar\n" +
		"{\n" +
		"	background: lighten(@primaryColor, 20%);\n" +
		"}\n\n" +
		".navbar.main .topnav\n" +
		"{\n" +
        "	background-color: @primaryColor;\n" +
		"	border-color: darken(@primaryColor, 15%);\n" +
		"}\n\n" +
		".navbar.main .topnav > li\n" +
		"{\n" +
		"	border-right-color: darken(@primaryColor, 15%);\n" +
		"	border-left-color: lighten(@primaryColor, 15%);\n" +
		"}\n\n" +
		".navbar.main .btn-navbar\n" +
		"{\n" +
		"	border-right-color: darken(@primaryColor, 15%);\n" +
		"}\n\n" +
		"#menu > ul > li.active\n" +
		"{\n" +
		"	border-top-color: darken(@primaryColor, 10%);\n" +
		"}\n\n" +
		"#menu > ul > li.active > a\n" +
		"{\n" +
		"	border-bottom-color: darken(@primaryColor, 10%);\n" +
		"	border-top-color: lighten(@primaryColor, 10%);\n" +
		"}\n\n" +
		".navbar.main .topnav > li > a.glyphicons i:before, .navbar.main .topnav > li .notif li > a.glyphicons i:before,\n" +
		".navbar.main .topnav > li > a, .navbar.main .topnav > li .notif li > a\n" +
		"{\n" +
		"	color: lighten(@primaryColor, 30%);\n" +
		"}\n\n" +
		"#menu > ul > li.active .count\n" +
		"{\n" +
		"	background: darken(@primaryColor, 20%);\n" +
		"}\n\n" +

		".widget-activity ul.activities li.highlight\n" +
		"{\n" +
		"	background-color: fade(@primaryColor, 10%);\n" +
		"	border-color: fade(@primaryColor, 20%);\n" +
		"}\n\n" +
		".widget-activity ul.activities li.highlight .activity-icon\n" +
		"{\n" +
		"	border-color: fade(@primaryColor, 20%);\n" +
		"}\n\n" +

		".widget .widget-body.list.list-2 ul li\n" +
		"{\n" +
		"	&.active { border-color: lighten(@primaryColor, 20%); }\n" +
		"	a { color: lighten(@primaryColor, 20%); i:before { background: lighten(@primaryColor, 50%); color: lighten(@primaryColor, 10%); border-color: lighten(@primaryColor, 20%); } }\n" +
		"}";

	return css;
}

function attachStylesheet(basePath, reset)
{
	if(!$("#themer-stylesheet").length) $('body').append('<div id="themer-stylesheet"></div>');
	$("#themer-stylesheet").html($('<style type="text/less">' + generateCSS(basePath) + '</style>'));
	less.refreshStyles();
}

function updateCharts()
{
	if (typeof charts == 'undefined')
		return false;

	//console.log('before: ' + charts.utility.chartColors);

	// apply styling
	charts.utility.chartColors.shift();
	charts.utility.chartColors.unshift(themerPrimaryColor);

	//console.log('after: ' + charts.utility.chartColors);

	if (typeof charts.website_traffic_graph != 'undefined' && charts.website_traffic_graph.plot != null)
		charts.website_traffic_graph.init();

	if (typeof charts.website_traffic_overview != 'undefined' && charts.website_traffic_overview.plot != null)
		charts.website_traffic_overview.init();

	if (typeof charts.traffic_sources_pie != 'undefined' && charts.traffic_sources_pie.plot != null)
		charts.traffic_sources_pie.init();

	if (typeof charts.chart_simple != 'undefined' && charts.chart_simple.plot != null)
		charts.chart_simple.init();

	if (typeof charts.chart_lines_fill_nopoints != 'undefined' && charts.chart_lines_fill_nopoints.plot != null)
		charts.chart_lines_fill_nopoints.init();

	if (typeof charts.chart_ordered_bars != 'undefined' && charts.chart_ordered_bars.plot != null)
		charts.chart_ordered_bars.init();

	if (typeof charts.chart_donut != 'undefined' && charts.chart_donut.plot != null)
		charts.chart_donut.init();

	if (typeof charts.chart_stacked_bars != 'undefined' && charts.chart_stacked_bars.plot != null)
		charts.chart_stacked_bars.init();

	if (typeof charts.chart_pie != 'undefined' && charts.chart_pie.plot != null)
		charts.chart_pie.init();

	if (typeof charts.chart_horizontal_bars != 'undefined' && charts.chart_horizontal_bars.plot != null)
		charts.chart_horizontal_bars.init();

	if (typeof charts.chart_live != 'undefined' && charts.chart_live.plot != null)
		charts.chart_live.init();

	if (typeof genSparklines != 'undefined')
		genSparklines();
}

function themeSetPrimaryColor()
{
    var post_data={};
    post_data['primaryColor']= $('#themer-primary-cp').val();
    setCookieTheme(post_data);
}
var primaryBgColorTargets =
[
	".btn-primary",
	".navbar.main",
	".navbar.main .btn-navbar",
	"#flotTip",
	".btn-group.open .btn-primary.dropdown-toggle, .btn-primary.disabled, .btn-primary[disabled], .btn-primary:hover",
	"#menu > ul > li.active > a",
	".label-primary",
	".table-primary thead th",
	".pagination ul > .active > a, .pagination ul > .active > span",
	".gallery ul li .thumb",
	".widget-activity ul.filters li.glyphicons.active i",
	".ui-slider-wrap .slider-primary .ui-slider-range",
	".accordion-heading .accordion-toggle",
	".ui-widget-header",
	".ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active",
	".fc-event-skin",
	"#external-events li",
	".notyfy_wrapper.notyfy_primary",
	".progress.progress-primary .bar",
	".alert.alert-primary",
	".pagination ul > li > a:hover, .pagination ul > li.primary > a"
];
var primaryTextColorTargets =
[
 	"a, p a",
	".breadcrumb .glyphicons i:before",
	".widget .widget-body.list ul li .count",
	".breadcrumb .glyphicons i:before",
	".breadcrumb .glyphicons, .breadcrumb a",
	".widget-stats .txt strong",
	".widget-activity ul.activities li.highlight .activity-icon i:before",
	".glyphicons.single i:before",
	".glyphicons.single",
	".table-primary tbody td.important",
	".widget.widget-3 .widget-body.large.cancellations span span:first-child",
	".widget .widget-footer a:hover, .widget .widget-footer a:hover i:before",
	".widget.widget-3 .widget-footer a:hover, .widget.widget-3 .widget-footer a:hover i:before",
	"blockquote small",
	"#menu .profile span a"
];
var primaryBorderColorTargets =
[
	".btn-primary",
	".ui-slider-wrap .slider-primary .ui-slider-handle",
	"#flotTip",
	".widget.widget-2.primary .widget-head",
	".widget .widget-body.list.list-2 ul li.active a i:before",
	".table-primary thead th",
	".pagination ul > .active > a, .pagination ul > .active > span",
	".widget.widget-4 .widget-head .heading",
	".ui-widget-header",
	".fc-event-skin",
	".alert.alert-primary",
	".pagination ul > li > a:hover, .pagination ul > li.primary > a"
];

/*
 * Holds the latest CSS/LESS
 */
var latestCode = {
	css: function(){ return $('#themer-stylesheet').text(); },
	less: null
};

/*
 * Persistent Custom Theme Colors
 */
var themerPrimaryColorSelectPic=themerPrimaryColor;
$(function()
{
	if ($('#themer').length)
	{
		var themerOpened = $.cookie('themerOpened') ? $.cookie('themerOpened') : 0;

		$('#themer')
			.on('shown', function(){ $.cookie('themerOpened', 1); })
			.on('hidden', function(){ $.cookie('themerOpened', 0); });

		$('#themer .close2').on('click', function(){
			$('#themer').collapse('hide');
		});

		if (themerOpened == 1)
			$('#themer').collapse('show');

		$("#themer-primary-cp")
			.attr('data-default', themerPrimaryColor)
			.on('change', function(){
				var input = $(this),
				hex = input.val();
				if (hex) updatePrimaryColor(hex, true, true);
                themerPrimaryColorSelectPic=hex;
                $('#themer-theme').val('other');
			});
		var themeSelect = $('#themer-theme');

		themeSelect.on('change', function(e)
		{
			e.preventDefault();
            if(themeSelect.val()!="other"){
                updatePrimaryColor(themeSelect.val(), true, true);
            }else{
                updatePrimaryColor(themerPrimaryColorSelectPic, true, true);
            }
		});
	    themerAdvancedToggle();
	}
});
$(function()
{
	// main menu -> submenus
	$('#menu .collapse').on('show', function()
	{
		$(this).parents('.hasSubmenu:first').addClass('active');
	})
	.on('hidden', function()
	{
		$(this).parents('.hasSubmenu:first').removeClass('active');
	});
	
	// main menu visibility toggle
	$('.navbar.main .btn-navbar').click(function()
	{
		$('.container-fluid:first').toggleClass('menu-hidden');
		$('#menu').toggleClass('hidden-phone');
		
		if (typeof masonryGallery != 'undefined') 
			masonryGallery();
	});
	
	// tooltips
	$('[data-toggle="tooltip"]').tooltip();
	
	if ($('.widget-activity').length)
		$('.widget-activity .filters .glyphicons').click(function()
		{
			$('.widget-activity .filters .active').toggleClass('active');
			$(this).toggleClass('active');
		});
	
	$(window).resize(function()
	{
		if (!$('#menu').is(':visible') && !$('.container-fluid:first').is('.menu-hidden') && !$('.container-fluid:first').is('.documentation') && !$('.container-fluid:first').is('.login'))
			$('.container-fluid:first').addClass('menu-hidden');
	});
	
	$(window).resize();
	
	$('.btn-source-toggle').click(function(e){
		e.preventDefault();
		$('.code').toggleClass('hide');
	});
	
	$('#toggle-menu-position').on('change', function(){
		$('.container-fluid:first').toggleClass('menu-right');
		$.cookie('rightMenu', $(this).prop('checked') ? $(this).prop('checked') : null);
	});
	
	if ($.cookie('rightMenu') && $('#toggle-menu-position').length)
	{
		$('#toggle-menu-position').prop('checked', true);
		$('.container-fluid:first').not('.menu-right').addClass('menu-right');
	}
	
	/* wysihtml5 */
	if ($('textarea.wysihtml5').size() > 0)
		$('textarea.wysihtml5').wysihtml5();
	
	/* DataTables */
	if ($('.dynamicTable').size() > 0)
	{
		$('.dynamicTable').dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
			"oLanguage": {
				"sLengthMenu": "_MENU_ records per page"
			}
		});
	}
	
	/*
	 * Helper function for JQueryUI Sliders Create event
	 */
	function JQSliderCreate()
	{
		$(this)
			.removeClass('ui-corner-all ui-widget-content')
			.wrap('<span class="ui-slider-wrap"></span>')
			.find('.ui-slider-handle')
			.removeClass('ui-corner-all ui-state-default');
	}
	
	/*
	 * JQueryUI Slider: Default slider
	 */
	if ($('.slider-single').size() > 0)
	{
		$( ".slider-single" ).slider({
			create: JQSliderCreate,
			value: 10,
	        animate: true,
	        start: function() { if (typeof mainYScroller != 'undefined') mainYScroller.disable(); },
	        stop: function() { if (typeof mainYScroller != 'undefined') mainYScroller.enable(); }
	    });
	}
	
	/*
	 * JQueryUI Slider: Multiple Vertical Sliders
	 */
	$( ".sliders-vertical > span" ).each(function() 
	{
        var value = parseInt( $( this ).text(), 10 );
        $( this ).empty().slider({
        	create: JQSliderCreate,
            value: value,
            range: "min",
            animate: true,
            orientation: "vertical",
            start: function() { if (typeof mainYScroller != 'undefined') mainYScroller.disable(); },
	        stop: function() { if (typeof mainYScroller != 'undefined') mainYScroller.enable(); }
        });
    });
	
	/*
	 * JQueryUI Slider: Range Slider
	 */
	if ($('.range-slider').size() > 0)
    {
		$( ".range-slider .slider" ).slider({
			create: JQSliderCreate,
	        range: true,
	        min: 0,
	        max: 500,
	        values: [ 75, 300 ],
	        slide: function( event, ui ) {
	            $( ".range-slider .amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	        },
	        start: function() { if (typeof mainYScroller != 'undefined') mainYScroller.disable(); },
	        stop: function() { if (typeof mainYScroller != 'undefined') mainYScroller.enable(); }
	    });
    	$( ".range-slider .amount" ).val( "$" + $( ".range-slider .slider" ).slider( "values", 0 ) +
    			" - $" + $( ".range-slider .slider" ).slider( "values", 1 ) );
    }
	
	/*
	 * JQueryUI Slider: Snap to Increments
	 */
	if ($('.increments-slider').size() > 0)
    {
		$( ".increments-slider .slider" ).slider({
			create: JQSliderCreate,
			value:100,
	        min: 0,
	        max: 500,
	        step: 50,
	        slide: function( event, ui ) {
	            $( ".increments-slider .amount" ).val( "$" + ui.value );
	        },
	        start: function() { if (typeof mainYScroller != 'undefined') mainYScroller.disable(); },
	        stop: function() { if (typeof mainYScroller != 'undefined') mainYScroller.enable(); }
	    });
		$( ".increments-slider .amount" ).val( "$" + $( ".increments-slider .slider" ).slider( "value" ) );
    }
	
	/*
	 * JQueryUI Slider: Vertical Range Slider
	 */
	if ($('.vertical-range-slider').size() > 0)
    {
		$( ".vertical-range-slider .slider" ).slider({
			create: JQSliderCreate,
			orientation: "vertical",
	        range: true,
	        min: 0,
	        max: 500,
	        values: [ 100, 400 ],
	        slide: function( event, ui ) {
	            $( ".vertical-range-slider .amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	        },
	        start: function() { if (typeof mainYScroller != 'undefined') mainYScroller.disable(); },
	        stop: function() { if (typeof mainYScroller != 'undefined') mainYScroller.enable(); }
	    });
    	$( ".vertical-range-slider .amount" ).val( "$" + $( ".vertical-range-slider .slider" ).slider( "values", 0 ) +
    			" - $" + $( ".vertical-range-slider .slider" ).slider( "values", 1 ) );
    }
	
	/*
	 * JQueryUI Slider: Range fixed minimum
	 */
	if ($('.slider-range-min').size() > 0)
	{
		$( ".slider-range-min .slider" ).slider({
			create: JQSliderCreate,
            range: "min",
            value: 150,
            min: 1,
            max: 700,
            slide: function( event, ui ) {
                $( ".slider-range-min .amount" ).val( "$" + ui.value );
            },
            start: function() { if (typeof mainYScroller != 'undefined') mainYScroller.disable(); },
	        stop: function() { if (typeof mainYScroller != 'undefined') mainYScroller.enable(); }
        });
        $( ".slider-range-min .amount" ).val( "$" + $( ".slider-range-min .slider" ).slider( "value" ) );
	}
	
	/*
	 * JQueryUI Slider: Range fixed maximum
	 */
	if ($('.slider-range-max').size() > 0)
	{
		$( ".slider-range-max .slider" ).slider({
			create: JQSliderCreate,
            range: "max",
            min: 1,
            max: 700,
            value: 150,
            slide: function( event, ui ) {
                $( ".slider-range-max .amount" ).val( "$" + ui.value );
            },
            start: function() { if (typeof mainYScroller != 'undefined') mainYScroller.disable(); },
	        stop: function() { if (typeof mainYScroller != 'undefined') mainYScroller.enable(); }
        });
        $( ".slider-range-max .amount" ).val( "$" + $( ".slider-range-max .slider" ).slider( "value" ) );
	}
	
	/*
	 * Boostrap Extended
	 */
	// custom select for Boostrap using dropdowns
	$('.selectpicker').selectpicker();
	
	// bootstrap-toggle-buttons
	$('.toggle-button').toggleButtons();
	
	/*
	 * UniformJS: Sexy form elements
	 */
	$('.uniformjs').find("select, input, button, textarea").uniform();
	
	// colorpicker
	if ($('#colorpicker').size() > 0)
	{
		$('#colorpicker').farbtastic('#colorpickerColor');
	}
	// datepicker
	if ($('#datepicker').length) 
	{
		$("#datepicker").datepicker({
			showOtherMonths:true
		});
	}
	if ($('#datepicker-inline').length)
	{
		$('#datepicker-inline').datepicker({
	        inline: true,
			showOtherMonths:true
	    });
	}
	
	// bookings daterange
	if ($('#dateRangeFrom').length && $('#dateRangeTo').length)
	{
		$( "#dateRangeFrom" ).datepicker({
			defaultDate: "+1w",
			changeMonth: false,
			numberOfMonths: 2,
			onClose: function( selectedDate ) {
				$( "#dateRangeTo" ).datepicker( "option", "minDate", selectedDate );
			}
		}).datepicker( "option", "maxDate", $('#dateRangeTo').val() );

		$( "#dateRangeTo" ).datepicker({
			defaultDate: "+1w",
			changeMonth: false,
			numberOfMonths: 2,
			onClose: function( selectedDate ) {
				$( "#dateRangeFrom" ).datepicker( "option", "maxDate", selectedDate );
			}
		}).datepicker( "option", "minDate", $('#dateRangeFrom').val() );
	}

});
/*form checkbox*/
function setCheckboxes(the_form, do_check)
{
    var elts      = (typeof(document.forms[the_form].elements['check_form[]']) != 'undefined')
        ? document.forms[the_form].elements['check_form[]']
        : 0;
    var elts_cnt  = (typeof(elts.length) != 'undefined')
        ? elts.length
        : 0;

    if (elts_cnt) {
        for (var i = 0; i < elts_cnt; i++) {
            elts[i].checked = do_check;
        }
    } else {
        elts.checked        = do_check;
    }
    var chk_all      = (typeof(document.forms[the_form].elements['chk_all']) != 'undefined')
        ? document.forms[the_form].elements['chk_all']
        : 0;
    chk_all.checked        = do_check;
    return true;
}
function checkAll(the_form,chk)
{
    setCheckboxes(the_form, chk.checked)
}

function verifyCheck(gridView,the_form,title,message,message_not_item,url,post_data){
    var flag=false;
    var elts      = (typeof(document.forms[the_form].elements['check_form[]']) != 'undefined')
        ? document.forms[the_form].elements['check_form[]']
        : 0;
    if(post_data==null)
    {
        post_data=new Array();
    }
    for (var i = 0; i < elts.length; i++) {
        if(elts[i].checked){
            flag=true;
            post_data['check_form['+i+']']=elts[i].value;
        }
    }
    if(elts && flag==false){
        if(elts.checked){
            flag=true;
            post_data['check_form[0]']=elts.value;
        }
    }
    if(flag)
    {
        if(window.confirm(message, title))
        {
            jQuery('#'+gridView).yiiGridView('update', {
                type: 'POST',
                url: url,
                data: post_data,
                success: function(data){
                    $.fn.yiiGridView.update(gridView,{data: $(this).serialize()});
                    alert(data);
                }
            });
        }
    }
    else
    {
        alert(message_not_item);
    }
}

function changeNumRowShow(url,value,post_data){
    if(post_data==null)
    {
        post_data=new Array();
    }
    post_data['page_show']=value;
    jQuery('#'+gridView).yiiGridView('update', {
        type: 'POST',
        url: url,
        data: post_data,
        success: function(data){
            $.fn.yiiGridView.update(gridView,{data: $(this).serialize()});
            alert(data);
        }
    });
}
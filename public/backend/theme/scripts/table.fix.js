/**
 * Created with JetBrains PhpStorm.
 * User: Administrator
 * Date: 9/13/13
 * Time: 11:17 AM
 * To change this template use File | Settings | File Templates.
 */
(function ($) {
    $.fn.fixedTable = function (option) {
        $(this).find('thead').css('display','none');
        var id=$(this).attr('id')+"GridViewFix"
        if($("#"+id+'Table').length>0)
        {
            $("#"+id+'Table').remove();
        }else{
            $(this).wrapAll($('<div></div>').attr('id',id));
        }

        $(this).wrapAll($('<div></div>').addClass('wrapper_grid_view'));

        /*get head*/

        $("#"+id).prepend('<tables id="'+id+'Table" style="table-layout: fixed;"></table>');
        var head_fix=$("#"+id+'Table');
        head_fix.append('<thead>'+$(this).find('thead').html()+'</thead>');
        $.fn.setCopyAttr($(this),head_fix);
        head_fix.removeClass('table-fixed');
        var t_head=head_fix.find('thead');
        $.fn.setCopyAttr($(this).find('thead'),t_head);//set atrr head
        t_head.css('display','');

        var tr=$(this).find('tbody').find('tr');
        var td_root=$(tr[0]).find('td');
        var th_copy=head_fix.find('thead').find('th');
        $.each(td_root, function(index){
            var width=$(this).width();
            if($(this).width()<$(th_copy[index]).width()){
                width=$(th_copy[index]).width();
            }
            console.log($(th_copy[index]).width());
            console.log($(this).width());
            $(th_copy[index]).css("min-width",width);
            $(th_copy[index]).width(width);
            $(this).css("min-width",width);
            $(this).width(width);
        });
    };
    $.fn.setCopyAttr=function (el_root,el_copy){
        var element = el_root;
        $.each(element.get(0).attributes, function(i, attrib){
            if(attrib.name!='id')
            {
                el_copy.attr(attrib.name,attrib.value);
            }
        });
    }
    if ($(".table-fixed").length)
    {
        $(".table-fixed").each(function(){
            $(this).fixedTable();
        })

    }
    $(window).resize(function()
    {
        if ($(".table-fixed").length)
        {
            $(".table-fixed").each(function(){
                $(this).fixedTable();
            })

        }
    });
}(jQuery));

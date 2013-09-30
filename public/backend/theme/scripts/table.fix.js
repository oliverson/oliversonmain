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
            $(this).wrapAll($('<div></div>').addClass('wrapper_grid_view'));
        }
        /*get head*/
        var table=document.createElement("table");
        var thead=document.createElement("thead");
        var tr=document.createElement("tr");
        $(this).find('thead').find('tr').find('th').each(function(){
            var th=document.createElement("th");
            th.innerHTML=$(this).html();
            $.fn.setCopyAttr($(this),$(th));
            tr.appendChild(th);
        });
        thead.appendChild(tr);
        table.appendChild(thead);
        var head_fix='<tables id="'+id+'Table" style="table-layout: fixed;"><thead><tr><th>test</th></tr></table>';
        $("#"+id).prepend(table);
        head_fix=$(table);
        var wrapper_header=$('<div></div>').addClass('wrapper_head_grid_view');
        head_fix.wrapAll(wrapper_header);
        head_fix.attr('id',id+'Table');

        $($(this).parent()).scroll(function(){
            $(head_fix.parent()).scrollLeft($(this).scrollLeft());
        });
        $.fn.setCopyAttr($(this),head_fix);
        head_fix.removeClass('table-fixed');
        var t_head=head_fix.find('thead');
        $.fn.setCopyAttr($(this).find('thead'),t_head);//set atrr head
        t_head.css('display','');

        var tr=$(this).find('tbody').find('tr');
        var td_root=$(tr[0]).find('td');
        var th_copy=head_fix.find('thead').find('th');
        var array_width=new Array();
        $.each(td_root, function(index){
            $(this).removeAttr('style');
            if(index<td_root.length-1)
            {
                $(this).width("1%");
            }

        });
        $.each(td_root, function(index){
            if(index<td_root.length-1)
            {
                var width=$(this).width();
                if($(this).width()<$(th_copy[index]).width()){
                    width=$(th_copy[index]).width();
                    $(this).css("min-width",width);
                    $(this).width(width);
                }
            }
        });
        $.each(td_root, function(index){
            var width=$(this).width();
            $(th_copy[index]).css("min-width",width);
            $(th_copy[index]).width(width);
        });
        var width_bar=$($(this).parent()).width()-$($(this).parent())[0].clientWidth;
        $(head_fix.parent()).width($($(this).parent()).width()-width_bar);
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

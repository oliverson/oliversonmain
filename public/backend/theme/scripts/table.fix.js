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
        var t_head=$('<thead></thead>').append($(this).find('thead').html());

        $.fn.setCopyAttr($(this).find('thead'),t_head);//set atrr head
        var head_fix=$('<tables id="'+id+'Table" style="table-layout: fixed;"></table>').append(t_head);
        $.fn.setCopyAttr($(this),head_fix);
        head_fix.removeClass('table-fixed');
        t_head.css('display','');

        $("#"+id).prepend(head_fix);

        var tr=$(this).find('tbody').find('tr');
        var td_root=$(tr[0]).find('td');
        var th_copy=head_fix.find('thead').find('th');
        $.each(td_root, function(index){
            $(th_copy[index]).css("min-width",$(this).width());
            $(th_copy[index]).width($(this).width());
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

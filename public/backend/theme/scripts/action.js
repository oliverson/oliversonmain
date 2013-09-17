/**
 * Created with JetBrains PhpStorm.
 * User: Administrator
 * Date: 9/9/13
 * Time: 4:50 PM
 * To change this template use File | Settings | File Templates.
 */
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
    if(url==""){
        return false;
    }
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

function changeNumRowShow(gridView,url,value,post_data){
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
        }
    });
}

function afterDelete(th,flag,data){
    console.log(th);
}

function changeTitle(title1,title2,control){
    if($(control).html()==title1){
        $(control).html(title2);
    }else{
        $(control).html(title1);
    }
}

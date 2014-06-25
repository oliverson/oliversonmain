<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 8/22/13
 * Time: 5:06 PM
 * To change this template use File | Settings | File Templates.
 */

class AdminCButtonColumn extends CButtonColumn
{
    protected function renderButton($id,$button,$row,$data)
    {
        if (isset($button['visible']) && !$this->evaluateExpression($button['visible'],array('row'=>$row,'data'=>$data)))
            return;
        $label=isset($button['label']) ? $button['label'] : $id;
        $url=isset($button['url']) ? $this->evaluateExpression($button['url'],array('data'=>$data,'row'=>$row)) : '#';
        $options=isset($button['options']) ? $button['options'] : array();
        if(!isset($options['title']))
            $options['title']=$label;
        $label='<i></i>';
        echo CHtml::link($label,$url,$options);
    }
}
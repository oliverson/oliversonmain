<?php
/**
 * Created by PhpStorm.
 * User: pt.son
 * Date: 6/26/14
 * Time: 12:19 PM
 */
Yii::import('zii.widgets.CMenu');
class FCMenu extends CMenu {
    protected function renderMenu($items)
    {
        if(count($items))
        {
            $this->renderMenuRecursive($items);
        }
    }

    /**
     * Recursively renders the menu items.
     * @param array $items the menu items to be rendered recursively
     */
    protected function renderMenuRecursive($items)
    {
        $count=0;
        $n=count($items);
        foreach($items as $item)
        {
            $count++;
            $options=isset($item['itemOptions']) ? $item['itemOptions'] : array();
            $class=array();
            if($item['active'] && $this->activeCssClass!='')
                $class[]=$this->activeCssClass;
            if($count===1 && $this->firstItemCssClass!==null)
                $class[]=$this->firstItemCssClass;
            if($count===$n && $this->lastItemCssClass!==null)
                $class[]=$this->lastItemCssClass;
            if($this->itemCssClass!==null)
                $class[]=$this->itemCssClass;

            $menu=$this->renderMenuItem($item,$class);
            if(isset($this->itemTemplate) || isset($item['template']))
            {
                $template=isset($item['template']) ? $item['template'] : $this->itemTemplate;
                echo strtr($template,array('{menu}'=>$menu));
            }
            else
                echo $menu;

            if(isset($item['items']) && count($item['items']))
            {
                $this->renderMenuRecursive($item['items']);
            }
        }
    }
    protected function renderMenuItem($item,$class)
    {
        if($class!==array())
        {
            if(empty($item['linkOptions']['class']))
                $item['linkOptions']['class']=implode(' ',$class);
            else
                $item['linkOptions']['class'].=' '.implode(' ',$class);
        }
        if(isset($item['url']))
        {
            $label=$this->linkLabelWrapper===null ? $item['label'] : CHtml::tag($this->linkLabelWrapper, $this->linkLabelWrapperHtmlOptions, $item['label']);
            return CHtml::link($label,$item['url'],isset($item['linkOptions']) ? $item['linkOptions'] : array());
        }
        else
            return CHtml::tag('span',isset($item['linkOptions']) ? $item['linkOptions'] : array(), $item['label']);
    }

}
<?php
Yii::import('zii.widgets.grid.CGridView');

class AdminGridView extends CGridView
{
    public $template = '<div class="list-loader"></div>{summary}{items}<div class="top form-inline small">{pager}</div>';
    public $columnGroup;
    //public $htmlOptions = array('class'=>'clearfix main_bg');
    public $itemsCssClass = 'table_gird';
    public $itemId = 'public_list';
    public $cssFile = false;
    public $summaryText = '';
    public $summaryCssClass = '';
    public $pager;
    //public $pagerCssClass = 'dataTables_paginate fg-buttonset fg-buttonset-multi paging_full_numbers';
    public $myPageSize;
    public $emptyText = '';
    public $showCheckBox=false;
    public $showNo=false;
    public $valueFiledCheckBox="";
    public $nameForm="check_element";
    public $array_option_page_show='<option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>';
    public function init()
    {
        if(!empty($this->dataProvider->pagination)){
            //set pagesize
            if (empty($this->myPageSize))
                $this->myPageSize = Yii::app()->params['page_size'];
            $this->dataProvider->pagination->pageSize = $this->myPageSize;
        }

        parent::init();
    }


    /**
     * Renders the table header.
     */
    public function renderTableHeader()
    {
        $this->renderColumnGroup();

        if(!$this->hideHeader)
        {
            echo '<thead>'."\n";

            if($this->filterPosition===self::FILTER_POS_HEADER)
                $this->renderFilter();

            echo "<tr>\n";
            if($this->showCheckBox)
            {
                echo '<th class="center" style="width: 1%;">'
                    .'<span><input type="checkbox" onchange="checkAll('."'".$this->nameForm."'".',this);">'
                    .'</span></th>';
            }
            if($this->showNo)
            {
                echo '<th class="center" style="width: 1%;" >'.Yii::t('backend','grid.no').'</th>';
            }
            foreach($this->columns as $column)
                $column->renderHeaderCell();
            echo "</tr>\n";

            if($this->filterPosition===self::FILTER_POS_BODY)
                $this->renderFilter();

            echo "</thead>\n";
        }
        else if($this->filter!==null && ($this->filterPosition===self::FILTER_POS_HEADER || $this->filterPosition===self::FILTER_POS_BODY))
        {
            echo "<thead>\n";
            $this->renderFilter();
            echo "</thead>\n";
        }
    }

    protected function renderColumnGroup()
    {
        if (is_array($this->columnGroup) && (count($this->columnGroup) == count($this->columns)))
        {
            foreach ($this->columnGroup as $col)
                if ($col !== 0)
                    echo '<col width="'.$col.'" />';
                else
                    echo '<col />';
        }
    }

    /**
     * Creates a {@link CDataColumn} based on a shortcut column specification string.
     * @param string $text the column specification string
     * @return CDataColumn the column instance
     */
    protected function createDataColumn($text)
    {
        if(!preg_match('/^([\w\.]+)(:(\w*))?(:(.*))?$/',$text,$matches))
            throw new CException(Yii::t('zii','The column must be specified in the format of "Name:Type:Label", where "Type" and "Label" are optional.'));
        $column=new DataColumn($this);
        $column->name=$matches[1];
        if(isset($matches[3]) && $matches[3]!=='')
            $column->type=$matches[3];
        if(isset($matches[5]))
            $column->header=$matches[5];
        return $column;
    }

    public function renderSummary()
    {

        if(($count=$this->dataProvider->getItemCount())<=0)
            return;

        echo '<div class="'.$this->summaryCssClass.'">';
        if($this->enablePagination)
        {
            if(($summaryText=$this->summaryText)==='')
                $summaryText=Yii::t('backend','grid.summary');
            $pagination=$this->dataProvider->getPagination();
            $total=$this->dataProvider->getTotalItemCount();
            $start=$pagination->currentPage*$pagination->pageSize+1;
            $end=$start+$count-1;
            if($end>$total)
            {
                $end=$total;
                $start=$end-$count+1;
            }
            echo strtr($summaryText,array(
                '{start}'=>$start,
                '{end}'=>$end,
                '{count}'=>$total,
                '{page}'=>$pagination->currentPage+1,
                '{pages}'=>$pagination->pageCount,
            ));
        }
        else
        {
            if(($summaryText=$this->summaryText)===null)
                $summaryText=Yii::t('zii','Total {count} result(s).');
            echo strtr($summaryText,array(
                '{count}'=>$count,
                '{start}'=>1,
                '{end}'=>$count,
                '{page}'=>1,
                '{pages}'=>1,
            ));
        }
        echo '<span class="pull-right">
                    <select class="selectpicker" data-style="btn-default btn-small span3">
						'.$this->array_option_page_show.'
					</select>
				</span>';
        echo '</div>';
    }

    public function renderTableRow($row)
    {
        $htmlOptions=array();
        if($this->rowHtmlOptionsExpression!==null)
        {
            $data=$this->dataProvider->data[$row];
            $options=$this->evaluateExpression($this->rowHtmlOptionsExpression,array('row'=>$row,'data'=>$data));
            if(is_array($options))
                $htmlOptions = $options;
        }

        if($this->rowCssClassExpression!==null)
        {
            $data=$this->dataProvider->data[$row];
            $class=$this->evaluateExpression($this->rowCssClassExpression,array('row'=>$row,'data'=>$data));
        }
        elseif(is_array($this->rowCssClass) && ($n=count($this->rowCssClass))>0)
            $class=$this->rowCssClass[$row%$n];

        if(!empty($class))
        {
            if(isset($htmlOptions['class']))
                $htmlOptions['class'].=' '.$class;
            else
                $htmlOptions['class']=$class;
        }
        $htmlOptions['class']='selectable';
        //$htmlOptions['onMouseOut']="this.className='selectable'" ;
        //$htmlOptions['onMouseOver']="this.className='selectable selected'" ;
        echo CHtml::openTag('tr', $htmlOptions)."\n";
        if($this->showCheckBox)
        {
            echo '<td class="center">'
                .'<span><input name="check_form[]" type="checkbox" value="'.$this->dataProvider->data[$row][$this->valueFiledCheckBox].'"></span>'
                .'</td>';
        }
        if($this->showNo)
        {
            $pagination=$this->dataProvider->getPagination();
            echo '<td class="center">'.(($row+1)+($this->myPageSize*($pagination->currentPage))).'</td>';
        }
        foreach($this->columns as $column)
            $column->renderDataCell($row);
        echo "</tr>\n";
    }
    public function renderItems()
    {
        if($this->dataProvider->getItemCount()>0 || $this->showTableOnEmpty)
        {
            echo "<table align=\"center\" class=\"{$this->itemsCssClass}\">\n";
            $this->renderTableHeader();
            ob_start();
            $this->renderTableBody();
            $body=ob_get_clean();
            $this->renderTableFooter();
            echo $body; // TFOOT must appear before TBODY according to the standard.
            echo "</table>";
        }
        else
            $this->renderEmptyText();
    }
}
<?php

class LinkPager extends CLinkPager
{
  public $callback='';
  public $header = '';
  public $cssFile = false;
	const CSS_FIRST_PAGE='';
	const CSS_LAST_PAGE='';
	const CSS_PREVIOUS_PAGE='';
	const CSS_NEXT_PAGE='';
	const CSS_INTERNAL_PAGE='';
	const CSS_HIDDEN_PAGE='disabled';
	const CSS_SELECTED_PAGE='active';

  public function run()
	{
		$this->registerClientScript();
		$buttons=$this->createPageButtons();
		if(empty($buttons))
			return;
		echo $this->header;
		echo implode($buttons);
		echo $this->footer;
	}

	protected function createPageButton($label,$page,$class,$hidden,$selected)
	{
		if($hidden || $selected)
			$class.=' '.($hidden ? self::CSS_HIDDEN_PAGE : self::CSS_SELECTED_PAGE);
		if(empty($this->callback))
			return '<li class="'.$class.'">'.CHtml::link($label,$this->createPageUrl($page)).'</li>';
		else
			return '<li class="'.$class.'">'.CHtml::link($label,'javascript:void(0)',array('p'=>$page,'onclick'=>$this->callback)).'</li>';
	}

  /**
	 * Creates the page buttons.
	 * @return array a list of page buttons (in HTML code).
	 */
	protected function createPageButtons()
	{
		if(($pageCount=$this->getPageCount())<=1)
			return array();

		list($beginPage,$endPage)=$this->getPageRange();
		$currentPage=$this->getCurrentPage(false); // currentPage is calculated in getPageRange()
		$buttons=array();

		// first page
		$buttons[]=$this->createPageButton($this->firstPageLabel,0,self::CSS_FIRST_PAGE,$currentPage<=0,false);

		// prev page
		if(($page=$currentPage-1)<0)
			$page=0;
		$buttons[]=$this->createPageButton($this->prevPageLabel,$page,self::CSS_PREVIOUS_PAGE,$currentPage<=0,false);

        if($beginPage>0){
            $buttons[]=$this->createPageButton('..',$beginPage-1,self::CSS_INTERNAL_PAGE,false,($beginPage-1)==$currentPage);
        }


		// internal pages
		for($i=$beginPage;$i<=$endPage;++$i)
			$buttons[]=$this->createPageButton($i+1,$i,self::CSS_INTERNAL_PAGE,false,$i==$currentPage);


        if($endPage<$pageCount-1){
            $buttons[]=$this->createPageButton('..',$endPage+1,self::CSS_INTERNAL_PAGE,false,($endPage+1)==$currentPage);
        }
		// next page
		if(($page=$currentPage+1)>=$pageCount-1)
			$page=$pageCount-1;
		$buttons[]=$this->createPageButton($this->nextPageLabel,$page,self::CSS_NEXT_PAGE,$currentPage>=$pageCount-1,false);

		// last page
		$buttons[]=$this->createPageButton($this->lastPageLabel,$pageCount-1,self::CSS_LAST_PAGE,$currentPage>=$pageCount-1,false);

		return $buttons;
	}
}
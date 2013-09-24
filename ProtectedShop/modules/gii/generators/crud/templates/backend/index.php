<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Manage',
);\n";
?>

$this->menu=array(
array('label'=>'List <?php echo $this->modelClass; ?>', 'url'=>array('index')),
array('label'=>'Create <?php echo $this->modelClass; ?>', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#<?php echo $this->class2id($this->modelClass); ?>_grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>
<div class="separator bottom"></div>
<div class="heading-buttons">
    <h3><?php echo "<?php echo Yii::t('backend','title.manager').' '.Yii::t('backend','db.tbl$this->modelClass')  ?>"; ?></h3>
    <div class="buttons pull-right">
        <a class="btn btn-primary btn-icon glyphicons circle_plus" href=""><i></i>
            <?php echo "<?php echo Yii::t('backend','title.add').' '.Yii::t('backend','db.tbl$this->modelClass')  ?>"; ?>
        </a>
    </div>
</div>
<div class="separator bottom"></div>

<div class="innerLR">
    <div class="widget">
        <div class="widget-head"><h4 class="heading glyphicons list"><i></i><?php echo "<?php echo Yii::t('backend','title.list').\" \".Yii::t('backend','db.tbl$this->modelClass') ?>"?> </h4></div>
        <div class="widget-body">
            <div id="<?php echo $this->class2id($this->modelClass); ?>_grid_mess">
                <?php echo "<?php echo Yii::app()->user->getFlash('mess'); ?>"?>
            </div>
            <!-- search-form -->
            <?php echo "<?php \$change_title=\"changeTitle('\".'<i></i>'.Yii::t('backend','btn.search.show').\"','\".'<i></i>'.Yii::t('backend','btn.search.hide').\"',this);\"; ?>"?>
            <?php echo "<?php echo CHtml::link('<i></i>'.Yii::t('backend','btn.search.show'),'#',array('class'=>'glyphicons search search-button btn btn-small btn-primary','onclick'=>\$change_title)); ?>"?>
            <div class="separator bottom"></div>
            <div class="search-form" style="display:none">
                <div class="widget">
                    <div class="widget-head"><h4 class="heading glyphicons search"><i></i><?php echo "<?php echo Yii::t('backend','title.search') ?>"?></h4></div>
                    <div class="widget-body">
                        <?php echo "<?php \$this->renderPartial('_search',array(
	                        'model'=>\$model,
                        )); ?>\n"; ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end search-form -->
            <form name="frm_grid_<?php echo $this->class2id($this->modelClass); ?>" method="post" action="<?php Yii::app()->createUrl('<?php echo $this->class2id($this->modelClass); ?>/deleteSelected') ?>">
<?php echo "<?php"?>
                $value_cookie = Yii::app()->request->cookies->contains('page_show') ?
                    Yii::app()->request->cookies['page_show']->value : Yii::app()->params['grid.page_row_show'];
                $params_option=Yii::app()->params['grid.array_option_page_show'];
                $array_option_page_show='';
                foreach($params_option as $value){
                    $selected='';
                    if($value==$value_cookie){
                        $selected='selected=\"selected\"';
                    }
                    $array_option_page_show.='<option '.$selected.' value=\"'.$value.'\">'.$value.'</option>';
                }
                ?>

<?php echo "<?php"; ?> $this->widget('application.modules.backend.extensions.widgets.AdminGridView', array(
'id'=>'<?php echo $this->class2id($this->modelClass); ?>_grid',
'dataProvider'=>$model->search(),
'pagerCssClass'=>'pagination pagination-small pull-right',
'summaryCssClass'=>'separator bottom form-inline small',
'ajaxUpdate'=>true,
'emptyText'=>Yii::t('backend','grid.row_empty'),
'urlPageShow'=>Yii::app()->createUrl('<?php echo $this->class2id($this->modelClass); ?>/pageShow'),
'array_option_page_show'=>$array_option_page_show,
'pager'=> array(
'cssFile'=>false,
'class'=>'application.modules.backend.extensions.widgets.LinkPager',
'header'=>'<ul>',
'footer'=>'</ul>',
'nextPageLabel'=>'»',
'prevPageLabel'=>'«',
'htmlOptions'=>array(
'class'=>'pagination pagination-small pull-right'),
),
'myPageSize'=>$value_cookie,
'itemsCssClass'=>'table table-bordered table-condensed table-striped table-primary table-vertical-center table-fixed',
'showNo'=>true,
'showCheckBox'=>true,
'valueFiledCheckBox'=>'<?php echo $this->tableSchema->primaryKey ?>',
'nameForm'=>'frm_grid_<?php echo $this->class2id($this->modelClass); ?>',
'afterAjaxUpdate'=>'function(){$("#<?php echo $this->class2id($this->modelClass); ?>_grid_table").fixedTable();}',
'columns'=>array(
<?php
$count=0;
foreach($this->tableSchema->columns as $column)
{
    if(++$count==7)
        echo "\t\t/*\n";
    echo "array('header'=>Yii::t('backend','db.tbl".$this->class2id($this->modelClass).".".$column->name."'),".
                 "'type' => 'raw',".
                 "'name'=>'password',".
                 "'value'=>'CHtml::encode(\$data[\"".$column->name."\"])',),";
}
if($count>=7)
    echo "\t\t*/\n";
?>
array(
'class'=>'application.modules.backend.extensions.widgets.AdminCButtonColumn',
'viewButtonOptions'=>array('class'=>'btn-action glyphicons eye_open btn-info'),
'updateButtonOptions'=>array('class'=>'btn-action glyphicons pencil btn-success'),
'deleteButtonOptions'=>array('class'=>'btn-action glyphicons remove_2 btn-danger'),
'afterDelete'=>'function(control,flag,data){$("#<?php echo $this->class2id($this->modelClass); ?>_grid_mess").html(data)}',
'htmlOptions'=>array('class'=>'center','style'=>'width: 100px;')
),
),
)); ?>
    <?php echo "<?php" ?>
                if(Yii::app()->request->enableCsrfValidation)
                {
                    $csrfTokenName = Yii::app()->request->csrfTokenName;
                    $csrfToken = Yii::app()->request->csrfToken;
                    $csrf = ",{ '$csrfTokenName':'$csrfToken' }";
                }
                else
                    $csrf = '';
                ?>
                <div style="width: 120px;" class="separator pull-left checkboxs_actions " >
                    <div class="row-fluid">
                        <select onchange="verifyCheck('<?php echo $this->class2id($this->modelClass); ?>_grid','frm_grid_<?php echo $this->class2id($this->modelClass); ?>','<?php echo "<?php"?> echo Yii::t('backend','alert.title') ?>','<?php echo "<?php"?> echo Yii::t('backend','grid.action.mess.confirm.delete') ?>','<?php echo "<?php" ?> echo Yii::t('backend','grid.not.row.select') ?>',this.value<?php echo "<?php"?> echo $csrf; ?>);" class="selectpicker span12" data-style="btn-default btn-small ">
                            <option value="<?php echo "<?php" ?> echo Yii::app()->createUrl('<?php echo $this->class2id($this->modelClass); ?>/deleteCheck')?>"><?php echo "<?php" ?> echo Yii::t('backend','grid.action.delete') ?></option>
                        </select>
                    </div>
                </div>
                <div class="clearfix" style="clear: both; "></div>
            </form>
        </div>
    </div>
</div>

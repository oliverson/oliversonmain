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
echo "?>";
?>
<h3><?php echo "<?php echo Yii::t('backend','title.update').' '.Yii::t('backend','db.tbl$this->modelClass').\$model->{$this->tableSchema->primaryKey};  ?>"; ?></h3>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
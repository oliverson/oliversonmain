<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="content">
    <ul class="breadcrumb">
        <li>
            <a class="glyphicons home" href="index.html?lang=en">
                <i></i>
                <?php echo Yii::t('backend','template.home') ?>
            </a>
        </li>
        <li class="divider"></li>
        <li>Dashboard</li>
    </ul>
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>
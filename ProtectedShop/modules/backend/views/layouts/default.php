<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="content">
    <ul class="breadcrumb">
        <?php
        $first=true;
        foreach($this->breadcrumbs as $id=>$value)
        {
            if(!$first){
                echo '<li class="divider"></li>';
            }
        ?>
            <li>
                <?php
                if(isset($value['url']) && $value['url']!='')
                {
                    ?>
                    <a class="<?php echo $value["class"]; ?>" href="<?php echo $value["url"]; ?>">
                    <?php
                    if($value["icon"]){echo "<i></i>";}
                    echo $value["text"];
                    ?>
                    </a>
                <?php
                }
                else
                {
                    echo $value["text"];
                }
                ?>
            </li>
        <?php
            $first=false;
        }
        ?>
    </ul>
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>
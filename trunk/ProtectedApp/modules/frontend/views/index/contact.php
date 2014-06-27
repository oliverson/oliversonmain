<?php
/**
 * Created by PhpStorm.
 * User: pt.son
 * Date: 6/27/14
 * Time: 11:37 AM
 */
$feed_class = new GetFeed();
$feed_class->feedUrl="http://vnexpress.net/rss/thoi-su.rss";
$feed=$feed_class->getFeeds();
$item=$feed[0];
$str_description=$feed_class->getAsXMLContent($item->description);
$img=explode('src',$str_description);
if(isset($img[1])){
    $img=explode('"',$img[1]);
    if(isset($img[1])){
        $img=explode('"',$img[1]);
    }
    $img=$img[0];
    $rootPath = pathinfo(Yii::app()->request->scriptFile);
    $file_name=explode("/",$img);
    copy($img, $rootPath['dirname'].'/upload/'.$file_name[count($file_name)-1]);
}
$content = file_get_contents($item->link);
$title=explode('<div class="title_news">',$content);
$title=explode('</div>',$title[1]);
echo $title[0];
$detail=explode('<div class="fck_detail width_common">',$content);
$detail=explode('<div id="social_like"',$detail[1]);
$detail=explode('<script type="text/javascript">',$detail[0]);
echo "<div>".$detail[0];
?>
<div class="clearfix"></div>

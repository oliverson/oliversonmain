<?php
/**
 * Created by PhpStorm.
 * User: oliverson
 * Date: 6/26/14
 * Time: 8:24 PM
 */
class IndexController extends FrontendController
{
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }
    public function actionContact()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('Contact');
    }
    public  function actionGetArticle(){
        $feed_class = new GetFeed();
        $feed_class->feedUrl="http://vnexpress.net/rss/doi-song.rss";
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
        echo $title[0].Yii::app()->params["dir.upload"];
        $detail=explode('<div class="fck_detail width_common">',$content);
        $detail=explode('<div id="social_like"',$detail[1]);
        $detail=explode('<script type="text/javascript">',$detail[0]);
        echo "<div>".$detail[0];
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: oliverson
 * Date: 6/26/14
 * Time: 8:25 PM
 */
?>

<div class="row">
    <div class="col-md-4">
        <h2 class="h2-title">
            Thời sự
        </h2>
        <div class="ct">
            <?php
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

            ?>
            <div class="img col-sm-4 col-md-12 clear-padding">
                <div class="thumbnail margin-bottom-10">
                <img class="img-t" src="<?php echo $img; ?>" style="width: 179px; height: 100px;" >
                </div>
            </div>
            <div class="dt col-sm-7 col-md-12 clear-padding right">
                <h2 class="dt-title">
                   <a><?php echo $item->title ?></a>
                </h2>
                <ul>
                    <li>
                        <?php echo $feed[1]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[2]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[3]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[4]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[5]->title ?>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-md-4 ">
        <h2 class="h2-title">
            Đời sống
        </h2>
        <div class="ct">
            <?php
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
            }

            ?>
            <div class="img col-sm-4 col-md-12 clear-padding">
                <div class="thumbnail margin-bottom-10">
                    <img class="img-t" src="<?php echo $img; ?>" style="width: 179px; height: 100px;" >
                </div>
            </div>
            <div class="dt col-sm-7 col-md-12 clear-padding right">
                <h2 class="dt-title">
                    <a><?php echo $item->title ?></a>
                </h2>
                <ul>
                    <li>
                        <?php echo $feed[1]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[2]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[3]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[4]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[5]->title ?>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-md-4 ">
        <h2 class="h2-title">
            Thế giới
        </h2>
        <div class="ct">
            <?php
            $feed_class = new GetFeed();
            $feed_class->feedUrl="http://vnexpress.net/rss/the-gioi.rss";
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
            }

            ?>
            <div class="img col-sm-4 col-md-12 clear-padding">
                <div class="thumbnail margin-bottom-10">
                    <img class="img-t" src="<?php echo $img; ?>" style="width: 179px; height: 100px;" >
                </div>
            </div>
            <div class="dt col-sm-7 col-md-12 clear-padding right">
                <h2 class="dt-title">
                    <a><?php echo $item->title ?></a>
                </h2>
                <ul>
                    <li>
                        <?php echo $feed[1]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[2]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[3]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[4]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[5]->title ?>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-4 ">
        <h2 class="h2-title">
            Pháp luật
        </h2>
        <div class="ct">
            <?php
            $feed_class = new GetFeed();
            $feed_class->feedUrl="http://vnexpress.net/rss/phap-luat.rss";
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
            }

            ?>
            <div class="img col-sm-4 col-md-12 clear-padding">
                <div class="thumbnail margin-bottom-10">
                    <img class="img-t" src="<?php echo $img; ?>" style="width: 179px; height: 100px;" >
                </div>
            </div>
            <div class="dt col-sm-7 col-md-12 clear-padding right">
                <h2 class="dt-title">
                    <a><?php echo $item->title ?></a>
                </h2>
                <ul>
                    <li>
                        <?php echo $feed[1]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[2]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[3]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[4]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[5]->title ?>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-md-4 ">
        <h2 class="h2-title">
            Thể thao
        </h2>
        <div class="ct">
            <?php
            $feed_class = new GetFeed();
            $feed_class->feedUrl="http://vnexpress.net/rss/the-thao.rss";
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
            }

            ?>
            <div class="img col-sm-4 col-md-12 clear-padding">
                <div class="thumbnail margin-bottom-10">
                    <img class="img-t" src="<?php echo $img; ?>" style="width: 179px; height: 100px;" >
                </div>
            </div>
            <div class="dt col-sm-7 col-md-12 clear-padding right">
                <h2 class="dt-title">
                    <a><?php echo $item->title ?></a>
                </h2>
                <ul>
                    <li>
                        <?php echo $feed[1]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[2]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[3]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[4]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[5]->title ?>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-md-4 ">
        <h2 class="h2-title">
            Giải trí
        </h2>
        <div class="ct">
            <?php
            $feed_class = new GetFeed();
            $feed_class->feedUrl="http://vnexpress.net/rss/giai-tri.rss";
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
            }

            ?>
            <div class="img col-sm-4 col-md-12 clear-padding">
                <div class="thumbnail margin-bottom-10">
                    <img class="img-t" src="<?php echo $img; ?>" style="width: 179px; height: 100px;" >
                </div>
            </div>
            <div class="dt col-sm-7 col-md-12 clear-padding right">
                <h2 class="dt-title">
                    <a><?php echo $item->title ?></a>
                </h2>
                <ul>
                    <li>
                        <?php echo $feed[1]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[2]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[3]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[4]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[5]->title ?>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-4 ">
        <h2 class="h2-title">
            Khoa học
        </h2>
        <div class="ct">
            <?php
            $feed_class = new GetFeed();
            $feed_class->feedUrl="http://vnexpress.net/rss/khoa-hoc.rss";
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
            }

            ?>
            <div class="img col-sm-4 col-md-12 clear-padding">
                <div class="thumbnail margin-bottom-10">
                    <img class="img-t" src="<?php echo $img; ?>" style="width: 179px; height: 100px;" >
                </div>
            </div>
            <div class="dt col-sm-7 col-md-12 clear-padding right">
                <h2 class="dt-title">
                    <a><?php echo $item->title ?></a>
                </h2>
                <ul>
                    <li>
                        <?php echo $feed[1]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[2]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[3]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[4]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[5]->title ?>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-md-4 ">
        <h2 class="h2-title">
            Tâm Sự
        </h2>
        <div class="ct">
            <?php
            $feed_class = new GetFeed();
            $feed_class->feedUrl="http://vnexpress.net/rss/tam-su.rss";
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
            }

            ?>
            <div class="img col-sm-4 col-md-12 clear-padding">
                <div class="thumbnail margin-bottom-10">
                    <img class="img-t" src="<?php echo $img; ?>" style="width: 179px; height: 100px;" >
                </div>
            </div>
            <div class="dt col-sm-7 col-md-12 clear-padding right">
                <h2 class="dt-title">
                    <a><?php echo $item->title ?></a>
                </h2>
                <ul>
                    <li>
                        <?php echo $feed[1]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[2]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[3]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[4]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[5]->title ?>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-md-4 ">
        <h2 class="h2-title">
            Cộng Đồng
        </h2>
        <div class="ct">
            <?php
            $feed_class = new GetFeed();
            $feed_class->feedUrl="http://vnexpress.net/rss/cong-dong.rss";
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
            }

            ?>
            <div class="img col-sm-4 col-md-12 clear-padding">
                <div class="thumbnail margin-bottom-10">
                    <img class="img-t" src="<?php echo $img; ?>" style="width: 179px; height: 100px;" >
                </div>
            </div>
            <div class="dt col-sm-7 col-md-12 clear-padding right">
                <h2 class="dt-title">
                    <a><?php echo $item->title ?></a>
                </h2>
                <ul>
                    <li>
                        <?php echo $feed[1]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[2]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[3]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[4]->title ?>
                    </li>
                    <li>
                        <?php echo $feed[5]->title ?>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
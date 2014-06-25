<?php
/**
 * Created by JetBrains PhpStorm.
 * User: phanthanhson
 * Date: 4/15/13
 * Time: 10:34 AM
 * To change this template use File | Settings | File Templates.
 */
//------------------------chạy chương trình----------------------------------------
class Program
{
    public static function run()
    {
        $run_app="App";
        if(($sd = explode('/',$_SERVER["REQUEST_URI"])) && $sd[1] == 'admin')
        {
            $yii=dirname(__FILE__).'/../framework/yii.php';
            $config=dirname(__FILE__).'/../Protected'.$run_app.'/config/backend.php';

// remove the following lines when in production mode
            defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
            defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

            require_once($yii);
            Yii::createWebApplication($config)->runEnd('backend');
        }
        else
        {
            $yii=dirname(__FILE__).'/../framework/yii.php';
            $config=dirname(__FILE__).'/../Protected'.$run_app.'/config/frontend.php';

// remove the following lines when in production mode
            defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
            defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

            require_once($yii);
            Yii::createWebApplication($config)->runEnd('frontend');
        }
    }
}
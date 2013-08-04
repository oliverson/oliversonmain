<?php

// change the following paths if necessary
$sd = explode('/',$_SERVER["REQUEST_URI"]);
echo $_SERVER["REQUEST_URI"];
if(($sd = explode('/',$_SERVER["REQUEST_URI"])) && $sd[1] == 'admin')
    echo $sd[1];
else
{
    $yii=dirname(__FILE__).'/../framework/yii.php';
    $config=dirname(__FILE__).'/../ProtectedShop/config/frontend.php';

// remove the following lines when in production mode
    defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

    require_once($yii);
    Yii::createWebApplication($config)->runEnd('frontend');
}

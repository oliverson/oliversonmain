<?php

// change the following paths if necessary
if($_SERVER["HTTP_HOST"]!='yii-web3s.local')
{
    defined('BASE_PATH')
    || define('BASE_PATH', realpath(dirname(__FILE__) . '/../'));

    include_once BASE_PATH.'/RunApp/Program.php';
    Program::run();
}

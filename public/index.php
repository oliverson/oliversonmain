<?php

// change the following paths if necessary
defined('BASE_PATH')
|| define('BASE_PATH', realpath(dirname(__FILE__) . '/../'));

include_once BASE_PATH.'/RunApp/Program.php';
Program::run();

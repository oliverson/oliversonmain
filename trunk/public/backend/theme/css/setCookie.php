<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 9/10/13
 * Time: 4:30 PM
 * To change this template use File | Settings | File Templates.
 */
session_start();
setcookie("primaryColor",$_POST['primaryColor'], time()+3600*24*30*12);

<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 8/5/13
 * Time: 3:19 PM
 * To change this template use File | Settings | File Templates.
 */
class UsersController extends BackendController
{
    public function actionIndex()
    {
        echo 123;
    }
    public function actionLogin()
    {
        echo 456;
        $this->render('login');
    }
}
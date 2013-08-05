<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 8/5/13
 * Time: 2:56 PM
 * To change this template use File | Settings | File Templates.
 */
class ErrorController extends BackendController
{
    public function actionIndex()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
        echo 123;
    }
}
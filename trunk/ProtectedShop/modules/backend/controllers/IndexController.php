<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 8/6/13
 * Time: 10:57 AM
 * To change this template use File | Settings | File Templates.
 */
class IndexController extends BackendController
{
    public function actionIndex()
    {
        $this->render('index');
    }
    public function actionLogin()
    {
        $this->layout='//layouts/login';
        if(isset(Yii::app()->user->loginType) && Yii::app()->user->loginType=="admin"){
            $this->redirect(Yii::app()->createUrl('index/index'));
        }else{
            $model=new LoginForm;

            // if it is ajax validation request
            if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }

            // collect user input data
            if(isset($_POST['LoginForm']))
            {
                $model->attributes=$_POST['LoginForm'];
                // validate user input and redirect to the previous page if valid
                if($model->validate() && $model->login())
                    $this->redirect(Yii::app()->createUrl('index/index'));
            }
            // display the login form
            $this->render('login',array('model'=>$model));
        }
    }
    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->createUrl('index/login'));
    }
}
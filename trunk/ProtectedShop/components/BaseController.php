<?php
/**
 * Created by JetBrains PhpStorm.
 * User: oliverson
 * Date: 6/26/13
 * Time: 10:23 PM
 * To change this template use File | Settings | File Templates.
 */
class BaseController extends CController
{

    // Flash Disclaimer
    public function setNotice($message)
    {
        return Yii::app()->user->setFlash('notice', $message);
    }

    // Flush the error to the user
    public function setError($message)
    {
        return Yii::app()->user->setFlash('error', $message);
    }

}
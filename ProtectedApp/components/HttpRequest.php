<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 8/13/13
 * Time: 9:14 AM
 * To change this template use File | Settings | File Templates.
 */
class HttpRequest extends CHttpRequest
{
    private $_csrfToken;

    public function getCsrfToken()
    {
        if($this->_csrfToken===null)
        {
            $session = Yii::app()->session;
            $csrfToken=$session->itemAt($this->csrfTokenName);
            if($csrfToken===null)
            {
                $csrfToken = sha1(uniqid(mt_rand(),true));
                $session->add($this->csrfTokenName, $csrfToken);
            }
            $this->_csrfToken = $csrfToken;
        }

        return $this->_csrfToken;
    }

    public function validateCsrfToken($event)
    {
        if($this->getIsPostRequest())
        {
            // only validate POST requests
            $session=Yii::app()->session;
            if($session->contains($this->csrfTokenName) && isset($_POST[$this->csrfTokenName]))
            {
                $tokenFromSession=$session->itemAt($this->csrfTokenName);
                $tokenFromPost=$_POST[$this->csrfTokenName];
                $valid=$tokenFromSession===$tokenFromPost;
            }
            else
                $valid=false;
            if(!$valid)
                throw new CHttpException(400,Yii::t('yii','The CSRF token could not be verified.'));
        }
    }
}
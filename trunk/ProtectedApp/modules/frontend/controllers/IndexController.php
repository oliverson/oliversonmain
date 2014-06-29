<?php
/**
 * Created by PhpStorm.
 * User: oliverson
 * Date: 6/26/14
 * Time: 8:24 PM
 */
class IndexController extends FrontendController
{
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }
    public function actionContact()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('Contact');
    }
    public  function actionGetArticle(){

    }
}
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: oliverson
 * Date: 6/26/13
 * Time: 10:18 PM
 * To change this template use File | Settings | File Templates.
 */
class BackendController extends BaseController
{

    // Layout
    public  $layout='//layouts/main';

    // Menu
    public $menu = array();

    // Crumbs
    public $breadcrumbs = array();


    /*
        Filters
    */
    public function filters()
    {
        return array(
            'accessControl',
        );
    }


    /*
        Permissions
    */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'contact' actions
                'actions'=>array('login','error'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'delete' and 'update' actions
                'users'=>array('@'),
                'expression'=>'!isset(Yii::app()->user->loginType) || Yii::app()->user->loginType=="admin"',
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }
}
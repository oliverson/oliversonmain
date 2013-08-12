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
            array('allow',
                'actions' => array('login', 'logout', 'error'),
                'users'=>array('*'),
            ),
            array('allow',
                'users'=>array('*'),
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }
}
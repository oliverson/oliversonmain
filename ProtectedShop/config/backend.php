<?php
/**
 * Created by JetBrains PhpStorm.
 * User: oliverson
 * Date: 6/26/13
 * Time: 10:44 PM
 * To change this template use File | Settings | File Templates.
 */
return CMap::mergeArray(

    require_once(dirname(__FILE__).'/main.php'),

    array(

        // autoloading model and component classes
        'import'=>array(
            'application.modules.backend.models.*',
            'application.modules.backend.components.*',
        ),
        // Default controller
        'defaultController' => 'index/index',

        // Components
        'components'=>array(
            // User
            'user'=>array(
                'loginUrl'=>array('/admin/login.html'),
                'stateKeyPrefix'=>md5('backend-web3s')
            ),
            // uncomment the following to enable URLs in path-format
            'urlManager'=>array(
                'urlFormat'=>'path',
                'rules'=>array(
                    'admin/index.html'=>'index/index',
                    'admin/login.html'=>'users/login',
                    'admin/logout.html'=>'users/logout',
                    'admin/<controller:\w+>/<id:\d+>'=>'<controller>/view',
                    'admin/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                    'admin/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                ),
                'showScriptName'=>false,
            ),
            'db' => include(dirname(__FILE__) . '/db.php'),
            'errorHandler'=>array(
                // use 'site/error' action to display errors
                'errorAction'=>'error/index',
            ),
            'log'=>array(
                'class'=>'CLogRouter',
                'routes'=>array(
                    array(
                        'class'=>'CFileLogRoute',
                        'levels'=>'error, warning',
                    ),
                    // uncomment the following to show log messages on web pages
                    /*
                    array(
                        'class'=>'CWebLogRoute',
                    ),
                    */
                ),
            ),
        ),
    )
);
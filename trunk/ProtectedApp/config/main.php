<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

    'components' => array(
        'session' => array(
            'timeout' => 86400,
        ),
        'request' => array(
            'class' => 'application.components.HttpRequest',
            'enableCsrfValidation' => true,
        ),
    ),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'application.modules.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

    //Used by the application behavior
    'behaviors'=>array(
        'runEnd'=>array(
            'class'=>'application.behaviors.WebApplicationEndBehavior',
        ),
    ),

    'sourceLanguage' => 'en-en',
    'language' => 'vi',
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
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


        // Default controller
        'defaultController' => 'posts',

        // Components
        'components'=>array(

            // User
            'user'=>array(
                'loginUrl'=>array('/users/login'),
            ),

            // mailer
            'mailer'=>array(
                'pathViews' => 'application.views.backend.email',
                'pathLayouts' => 'application.views.email.backend.layouts'
            ),

        ),
    )
);
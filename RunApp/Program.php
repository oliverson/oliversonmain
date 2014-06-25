<?php
/**
 * Created by JetBrains PhpStorm.
 * User: phanthanhson
 * Date: 4/15/13
 * Time: 10:34 AM
 * To change this template use File | Settings | File Templates.
 */
//------------------------chạy chương trình----------------------------------------
class Program
{

    public static function checkDomain(){
        require_once 'DataProvider.php';
        $db=array(
            'host'=>'localhost',
            'database'=>'web3s_system',
            'id'=>'root',
            'password'=>''
        );
        // --------------------Đường dẫn thư mục ứng dụng--------------------------------
        $dataProvider=new DataProvider($db);
        $sql="Select * From domain where domain_name='".$_SERVER["HTTP_HOST"]."' limit 1;";
        $domain=$dataProvider->ExecuteQuery($sql);

        if(count($domain)==1){
            foreach($domain as $value){
                if(strtotime(date($value["domain_expiration_date"]))<time()){
                    echo "Page Found!";
                    exit;
                }else{
                    define('DOMAIN_KEY_SWITCH',$value["domain_key_switch"]);

                    unset($dataProvider);
                    unset($domain);
                    if($value["domain_run_app"]==""){
                        echo "Page Found!";
                        exit;
                    }
                    return $value["domain_run_app"];
                }
            }
        }else{
            echo "Page Found!";
            exit;
        }
    }
    public static function run()
    {
        //$run_app=Program::checkDomain();
        if(($sd = explode('/',$_SERVER["REQUEST_URI"])) && $sd[1] == 'admin')
        {
            $yii=dirname(__FILE__).'/../framework/yii.php';
            $config=dirname(__FILE__).'/../Protected'.$run_app.'/config/backend.php';

// remove the following lines when in production mode
            defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
            defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

            require_once($yii);
            Yii::createWebApplication($config)->runEnd('backend');
        }
        else
        {
            $yii=dirname(__FILE__).'/../framework/yii.php';
            $config=dirname(__FILE__).'/../Protected'.$run_app.'/config/frontend.php';

// remove the following lines when in production mode
            defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
            defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

            require_once($yii);
            Yii::createWebApplication($config)->runEnd('frontend');
        }
    }
}
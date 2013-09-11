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
    public function actionSetCookies(){
        foreach($_POST as $key=>$value){
            $cookie = new CHttpCookie($key, $value);
            $cookie->expire = time()+60*60*24*180;
            Yii::app()->request->cookies[$key] = $cookie;
        }
    }

    public function actionStyle(){
        $primaryColor='#47759e';
        if(Yii::app()->request->cookies["primaryColor"])
        {
            $primaryColor=Yii::app()->request->cookies["primaryColor"];
        }
        header("Content-Type: text/css");
        echo <<<LESS
@primaryColor: {$primaryColor};
.btn-primary,
.navbar.main,
.navbar.main .btn-navbar,
#flotTip,
.btn-group.open .btn-primary.dropdown-toggle, .btn-primary.disabled, .btn-primary[disabled], .btn-primary:hover,
#menu > ul > li.active > a,
.label-primary,
.table-primary thead th,
.pagination ul > .active > a, .pagination ul > .active > span,
.gallery ul li .thumb,
.widget-activity ul.filters li.glyphicons.active i,
.ui-slider-wrap .slider-primary .ui-slider-range,
.accordion-heading .accordion-toggle,
.ui-widget-header,
.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active,
.fc-event-skin,
#external-events li,
.notyfy_wrapper.notyfy_primary,
.progress.progress-primary .bar,
.alert.alert-primary,
.pagination ul > li > a:hover, .pagination ul > li.primary > a
{
	background: @primaryColor;
}

a, p a,
.breadcrumb .glyphicons i:before,
.widget .widget-body.list ul li .count,
.breadcrumb .glyphicons i:before,
.breadcrumb .glyphicons, .breadcrumb a,
.widget-stats .txt strong,
.widget-activity ul.activities li.highlight .activity-icon i:before,
.glyphicons.single i:before,
.glyphicons.single,
.table-primary tbody td.important,
.widget.widget-3 .widget-body.large.cancellations span span:first-child,
.widget .widget-footer a:hover, .widget .widget-footer a:hover i:before,
.widget.widget-3 .widget-footer a:hover, .widget.widget-3 .widget-footer a:hover i:before,
blockquote small,
#menu .profile span a
{
	color: @primaryColor;
}

.btn-primary,
.ui-slider-wrap .slider-primary .ui-slider-handle,
#flotTip,
.widget.widget-2.primary .widget-head,
.widget .widget-body.list.list-2 ul li.active a i:before,
.table-primary thead th,
.pagination ul > .active > a, .pagination ul > .active > span,
.widget.widget-4 .widget-head .heading,
.ui-widget-header,
.fc-event-skin,
.alert.alert-primary,
.pagination ul > li > a:hover, .pagination ul > li.primary > a
{
	border-color: @primaryColor;
}

.table-primary tbody td
{
	background-color: lighten(@primaryColor, 50%);
}

.table-primary tbody tr.selected td, .table-primary tbody tr.selectable:hover td
{
	background-color: lighten(@primaryColor, 40%);
}

.table-primary.table-bordered tbody td, .table-primary, .pagination ul > .disabled > a, .pagination ul > .disabled > span
{
	border-color: lighten(@primaryColor, 50%);
}

.navbar.main .appbrand
{
	background: darken(@primaryColor, 10%);
	border-color: lighten(@primaryColor, 10%);
}

.navbar.main .appbrand span
{
	border-color: darken(@primaryColor, 15%);
}

.navbar.main .btn-navbar .icon-bar
{
	background: lighten(@primaryColor, 20%);
}

.navbar.main .topnav
{
	border-color: darken(@primaryColor, 15%);
}

.navbar.main .topnav > li
{
	border-right-color: darken(@primaryColor, 15%);
	border-left-color: lighten(@primaryColor, 15%);
}

.navbar.main .btn-navbar
{
	border-right-color: darken(@primaryColor, 15%);
}

#menu > ul > li.active
{
	border-top-color: darken(@primaryColor, 10%);
}

#menu > ul > li.active > a
{
	border-bottom-color: darken(@primaryColor, 10%);
	border-top-color: lighten(@primaryColor, 10%);
}

.navbar.main .topnav > li > a.glyphicons i:before, .navbar.main .topnav > li .notif li > a.glyphicons i:before,
.navbar.main .topnav > li > a, .navbar.main .topnav > li .notif li > a
{
	color: lighten(@primaryColor, 30%);
}

#menu > ul > li.active .count
{
	background: darken(@primaryColor, 20%);
}

.widget-activity ul.activities li.highlight
{
	background-color: fade(@primaryColor, 10%);
	border-color: fade(@primaryColor, 20%);
}

.widget-activity ul.activities li.highlight .activity-icon
{
	border-color: fade(@primaryColor, 20%);
}

.widget .widget-body.list.list-2 ul li
{
	&.active { border-color: lighten(@primaryColor, 20%); }
	a { color: lighten(@primaryColor, 20%); i:before { background: lighten(@primaryColor, 50%); color: lighten(@primaryColor, 10%); border-color: lighten(@primaryColor, 20%); } }
}
LESS;
    }
}
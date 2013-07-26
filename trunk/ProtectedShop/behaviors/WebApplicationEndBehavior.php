<?php
/**
 * Created by JetBrains PhpStorm.
 * User: oliverson
 * Date: 6/26/13
 * Time: 10:39 PM
 * To change this template use File | Settings | File Templates.
 */
class WebApplicationEndBehavior extends CBehavior
{

    // Name of the desired part of the site to us
    private $_endName;

    // Getter $_endName;
    public function getEndName()
    {
        return $this->_endName;
    }

    // Run the application
    public function runEnd($name)
    {
        $this->_endName = $name;

        // Event handler onModuleCreate
        $this->onModuleCreate = array($this, 'changeModulePaths');
        $this->onModuleCreate(new CEvent ($this->owner));

        $this->owner->run();
    }

    // Substitute file paths
    public function onModuleCreate($event)
    {
        $this->raiseEvent('onModuleCreate', $event);
    }

    // Add the name of the site (frontend or backend) in the way in which framework will look for controllers and damper
    protected function changeModulePaths($event)
    {
        // change path controller and view
        $event->sender->controllerPath .= DIRECTORY_SEPARATOR.$this->_endName;
        print_r($event->sender->basePath);
        $event->sender->viewPath .= DIRECTORY_SEPARATOR.$this->_endName;
    }

}
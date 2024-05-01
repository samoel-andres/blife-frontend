<?php

class FrontController
{
    static function main()
    {
        require 'config/Config.php';
        // require db config?
        require 'resources/View.php';

        $config = Config::singleton();

        // controllers
        if (!empty($_POST['controller'])) {
            $controllerName = $_POST['controller'] . 'Controller';
        } else {
            $controllerName = 'IndexController';
        }

        // actions 
        if (!empty($_POST['action'])) {
            $actionName = $_POST['action'];
        } else {
            $actionName = 'index';
        }

        // define path
        $controllerPath = $config->get('controllers') . $controllerName . '.php';

        // load files
        if (is_file($controllerPath)) {
            require $controllerPath;
        } else {
            die('404 Not Found');
        }

        // if not found the class and action
        if (is_callable($controllerName, $actionName) == false) {
            trigger_error($controllerName . ' -> ' . $actionName . ' not found', E_USER_NOTICE);
            return false;
        }

        // if all its ok
        $controller = new $controllerName();
        $controller->$actionName();
    }
}

<?php

class View
{
    public static function view($template, $variables = array())
    {
        $config = Config::singleton();

        $path = $config->get('views') . $template;

        if (file_exists($path) == false) {
            trigger_error('Template ' . $path . ' does not exist',  E_USER_NOTICE);
            return false;
        }

        include($path);
    }
}

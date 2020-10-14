<?php
    spl_autoload_register(function ($class_name) {
        $absolutepath = dirname(dirname(realpath(__FILE__)));
        $classes = array(
            $absolutepath . "/" ."app/" . $class_name . ".php",
            $absolutepath . "/" ."framework/" . $class_name . ".php",
            $absolutepath . "/" ."data/" . $class_name . ".php",
            $absolutepath . "/" ."tpl/" . $class_name . ".php"
        );
        foreach($classes as $class)
        {
            if(file_exists($class))
            {
                
                require $class;
            } 
        }
    });
?>
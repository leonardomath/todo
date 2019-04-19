<?php

$autolaod = function($class) {
    if(file_exists('classes/'.$class.'.php')) {
        require_once'classes/'.$class.'.php';
    }
};

spl_autoload_register($autolaod);


define('PATH','http://localhost/todo/');

define('HOST','localhost');
define('DATABASE','todo');
define('USER','root');
define('PASS','');


?>
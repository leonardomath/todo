<?php

require_once'config.php';

    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    if(file_exists('pages/'.$url.'.php')) {
        require_once('pages/'.$url.'.php');
    } else {
        require_once('pages/erro404.php');
    }
?>
<?php

include_once __DIR__ . "/config.php";

if ($_SERVER['REQUEST_URI'] == '/') {
    $page = "index";
    $module = 'index';
} else {

    $URI_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ;



}



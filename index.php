<?php

include_once __DIR__ . "/config.php";

session_start();

@$db = new mysqli(HOST, LOGIN, PASSWORD, DBNAME);
if(mysqli_connect_errno()){
    echo "Не удалось установить соединение";
    exit;
}



/**/

if ($_SERVER['REQUEST_URI'] == '/') {
    $Page = 'index';
    $Module = 'index';
} else {
    $URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $URL_Parts = explode('/', trim($URL_Path, ' /'));
    $Page = array_shift($URL_Parts);
    $Module = array_shift($URL_Parts);


    if (!empty($Module)) {
        $Param = array();
        for ($i = 0; $i < count($URL_Parts); $i++) {
            $Param[$URL_Parts[$i]] = $URL_Parts[++$i];
        }
    }
}

if($Page == 'index' and $Module == 'index'){
    echo 'Главная страница';
}elseif($Page == 'photo'){
    echo "Фотогаллерея";
}elseif($Page == 'register'){
    include_once __DIR__ . "/page/register.php";
}elseif ($Page == 'login'){
    include_once __DIR__ . "/page/login.php";
}




<?php
require_once "view/basic.view.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//inicio las clases
    $view= new Viewbasic();


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}



$params = explode('/', $action);
switch ($params[0]) {

    case "home" :
        $view->home();
        break;
    case "informacion" :
        $view->informacion();
        break;
    
    default: 
        echo('es defaul');
        break;
}
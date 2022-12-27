<?php

// determine action

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'home';
}

// determin valid action
$controllers = scandir('./controller');
$actions = [];
foreach($controllers as $controller){
    if(str_ends_with($controller, '.php')){
        array_push($actions, substr($controller, 0, strlen($controller) - strlen('Controller.php')));
    }
}

if(array_search($action, $actions) !== false){
    include('./controller/' . $action . 'Controller.php');
    include('./view/' . $action . 'View.php');
}else{
    echo 'Invalid action!';
}
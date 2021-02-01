<?php
//this is my controller

ini_set('display_errors',1);
error_reporting(E_ALL);

//Start a session
session_start();

//require the autoload file
require_once('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//default root
$f3->route('GET /', function(){
    //echo "My Pets";
    $view = new Template();
    echo $view->render('views/pet-home.html');

});

//order route
$f3->route('GET /order', function(){
    //echo "Order Page";
    $view = new Template();
    echo $view->render('views/pet-order.html');
});

//order2 route
$f3->route('POST /order2', function(){
    //echo "Order Page 2";
    //var_dump($_POST);

    $view = new Template();
    echo $view->render('views/pet-order2.html');
});


//run fat free
$f3->run();
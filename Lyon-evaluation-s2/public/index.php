<?php
    session_start();
    define('SRC',__DIR__.'/../src/');
    define('CONTROLLER',__DIR__.'/../src/Controllers/');
    define('MODEL',__DIR__.'/../src/Models/');
    define('VIEW',__DIR__.'/../src/Views/');
    
    define('USER', 'root');
    define('DATABASE','Portfolio');
    define('PASSWORD','root');
    
    require '../vendor/autoload.php';
    
    $bdd = new PDO('mysql:host=127.0.0.1;dbname='. DATABASE . ';charset=utf8', USER, PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $router = new Portfolio\Router();
    $router->run();
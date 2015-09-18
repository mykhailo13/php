<?php

// web/index.php
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

//Providers
//twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

//doctrine 
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_mysql',
        'dbname' => 'db12',
        'host' => 'localhost',
        'user' => 'root',
        'password' => 'usbw',
        'port' => '3307',
    ),
));

//=======================================================================
//====================================================================

//Home Page
$app->get('/', function() use ($app) {
    // return 'Hello World';
    $name = 'John Doe';
    return $app['twig']->render('index.twig', array(
        'name' => $name,
        'age' => 19,
    ));
});


//contact page 
$app->get('/contact', function() use ($app) {
     return $app['twig']->render('concatc.twig');
});



$app->get('/hello/{name}', function ($name) use ($app) {
    return $app['twig']->render('hello.twig', array(
        'name' => $name,
    ));
});

// users 
$app->get('/users', function () use ($app) {


    $conn = $app['db'];
    $users = $conn->fetchAll("SELECT * FROM users");
    $twig = $app['twig'];

    return $twig->render('users.twig', array(
    		'users' => $users
    	));
});




$app->run();
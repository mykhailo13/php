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
})->bind('homepage');


//contact page 
$app->get('/contact', function() use ($app) {
     return $app['twig']->render('concatc.twig');
})->bind('contact');



$app->get('/hello/{name}', function ($name) use ($app) {
    return $app['twig']->render('hello.twig', array(
        'name' => $name,
    ));
});
//Blog page
$app->get('/blog', function () use ($app) {
    $conn = $app['db'];
    $posts = $conn->fetchAll("SELECT * FROM posts");
    $twig = $app['twig'];

         return $app['twig']->render('blog/index.twig', array('posts'=>$posts));
})->bind('blog');

//Add post
$app->get('/blog/add_post', function () use ($app) {
    
    $twig = $app['twig'];

         return $app['twig']->render('blog/add_post.twig');
})->bind('add_post');

$app->post('/blog/add_post', function (Symfony\Component\HttpFoundation\Request $request) use ($app) {
    $twig = $app['twig'];
    $conn = $app['db'];
    $post = $conn->insert("posts", array("heading"=>$request->get('heading'),
     "content"=>$request->get('content')));
    $error = 0;
    if ($error) {
        return $twig->render('blog/add_post.twig', array('error'=>$error));
    }


         return $app->redirect($app['url_generator']->generate('add_post'));
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


//URL Generator
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());





$app->run();
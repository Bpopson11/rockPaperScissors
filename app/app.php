<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/firstpick", function() use ($app){
     $new_game = new RockPaperScissors;
     $first_player = $new_game->playGame($_GET['input']);
     return $app['twig']->render('second.html.twig', array('result' => $first_player));
  });


    return $app;
?>

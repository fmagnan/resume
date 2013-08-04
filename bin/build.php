#!/usr/bin/php

<?php

$projectRootPath = __DIR__ . '/../';

require $projectRootPath . 'vendor/autoload.php';

function importData($path)
{
    return require $path . 'inc/config.inc.php';
}

function getView($path)
{
    $loader = new Twig_Loader_Filesystem($path . 'views');
    $view = new Twig_Environment($loader, array(
        'auto_reload' => true,
        'cache' => false,
    ));
    return $view;
}

$data = importData($projectRootPath);
$view = getView($projectRootPath);
$resume = $view->render('main.twig', $data);

file_put_contents($projectRootPath . 'index.html', $resume);
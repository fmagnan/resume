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
$modes = array('web', 'raw');

foreach ($modes as $mode) {
    $data['mode'] = $mode;
    $resume = $view->render('main.twig', $data);
    $outputFilePath = $projectRootPath . 'output/' . $mode . '/resume.html';

    $isFileWritten = file_put_contents($outputFilePath, $resume);

    if (false === $isFileWritten) {
        $result = 'failure';
    } else {
        $result = 'success';
    }
    echo $result . ' on writing output file ' . $outputFilePath . PHP_EOL;
}
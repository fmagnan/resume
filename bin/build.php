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

$mode = 'raw';

if ('raw' == $mode) {
    $mainTemplate = 'raw/main.twig';
    $outputFile = 'resume.txt';
} else {
    $mainTemplate = 'main.twig';
    $outputFile = 'index.html';
}

$data = importData($projectRootPath);
$view = getView($projectRootPath);
$resume = $view->render($mainTemplate, $data);
$outputFilePath = $projectRootPath . $outputFile;

$isFileWritten = file_put_contents($outputFilePath, $resume);

if (false === $isFileWritten) {
    $result = 'failure';
} else {
    $result = 'success';
}
echo $result . ' on writing output file ' . $outputFilePath . PHP_EOL;
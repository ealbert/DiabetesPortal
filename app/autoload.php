<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

$baseDir = dirname(__DIR__);
$loader->add("pChart_", $baseDir.'/libs/pchart/lib');
$loader->add("", $baseDir.'/libs/pchart/lib/pChart/src/class');
set_include_path($baseDir.'/libs/pchart/lib'.PATH_SEPARATOR.get_include_path());
$loader->add("fPdf_", $baseDir.'/libs/fPdf/lib');
$loader->add("", $baseDir.'/libs/fpdf/lib/pPdf/src');
set_include_path($baseDir.'/libs/fpdf/lib'.PATH_SEPARATOR.get_include_path());
$loader->setUseIncludePath(true);

$loader->addClassMap(
    array(
        'pDraw' => $baseDir.'/libs/pchart/lib/pChart/src/class/pDraw.class.php',
        'fPdf' => $baseDir.'/libs/fpdf/lib/fPdf/src/fpdf.php',
    ));

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
//var_dump($loader);

return $loader;

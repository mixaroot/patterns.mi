<?php
// Here you can initialize variables that will be available to your tests
$loader = new \Composer\Autoload\ClassLoader();
$loader->add('', __DIR__ . '/../../../');
$loader->register();
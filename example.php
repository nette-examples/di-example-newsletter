<?php

require __DIR__ . '/vendor/autoload.php';


// create DI container
$loader = new Nette\DI\ContainerLoader(__DIR__ . '/temp', TRUE);
$class = $loader->load(function($compiler) {
    $compiler->loadConfig(__DIR__ . '/config.neon');
});
$container = new $class;


// my application
$manager = $container->getByType('NewsletterManager');
$manager->distribute(['john@example.com']);

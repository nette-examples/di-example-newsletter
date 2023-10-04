<?php

require __DIR__ . '/vendor/autoload.php';


// Set up the Dependency Injection container with auto-rebuild enabled
// The auto-rebuild feature ensures the container is regenerated when changes are detected
$loader = new Nette\DI\ContainerLoader(__DIR__ . '/temp', autoRebuild: true);

// Load the configuration and create the DI container class
$class = $loader->load(function($compiler) {
	$compiler->loadConfig(__DIR__ . '/config.neon');
});


// Instantiate the DI container
$container = new $class;


// Fetch the 'NewsletterManager' service from the DI container and run the distribution
$manager = $container->getByType(NewsletterManager::class);
$manager->distribute(['john@example.com']);

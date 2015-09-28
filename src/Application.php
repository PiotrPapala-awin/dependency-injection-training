<?php

namespace DependencyInjectionTraining;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class Application
{
    /** @var ContainerBuilder */
    private $container;

    /**
     * Constructor is to create dependency injection container for this application
     * and load configuration into that container.
     */
    public function __construct()
    {
        // create new container builder
        $this->container = new ContainerBuilder();

        // load dependency configuration from yml file
        $loader = new YamlFileLoader($this->container, new FileLocator(__DIR__ . '/../config'));
        $loader->load('services.yml');
    }

    /**
     * This function starts the application.
     */
    public function start()
    {
        echo "Application started.\n";
    }
}
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
     * This is to get dependency injection container, so you may use it anywhere you want.
     * @return ContainerBuilder
     */
    public function getDependencyInjectionContainer()
    {
        return $this->container;
    }

    /**
     * This function starts the application.
     */
    public function start()
    {
        echo "Application started.\n";

        // create Process object using dependency injection container
        // It will load EmailNotifier automatically and use it to construct object of Process class.
        $process = $this->getDependencyInjectionContainer()->get('process');

        // just run some function
        $process->doSomething();
    }
}
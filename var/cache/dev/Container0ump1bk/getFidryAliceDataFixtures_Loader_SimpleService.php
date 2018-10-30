<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fidry_alice_data_fixtures.loader.simple' shared service.

include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/Loader/SimpleLoader.php';

if ($lazyLoad) {
    return $this->privates['fidry_alice_data_fixtures.loader.simple'] = $this->createProxy('SimpleLoader_4473cb1', function () {
        return \SimpleLoader_4473cb1::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getFidryAliceDataFixtures_Loader_SimpleService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Fidry\AliceDataFixtures\Loader\SimpleLoader(($this->services['nelmio_alice.files_loader'] ?? $this->load('getNelmioAlice_FilesLoaderService.php')), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

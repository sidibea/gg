<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.factory.api_client' shared service.

return $this->services['sylius.factory.api_client'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Bundle\\AdminApiBundle\\Model\\Client');
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.factory.admin_user' shared service.

return $this->services['sylius.factory.admin_user'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\AdminUser');
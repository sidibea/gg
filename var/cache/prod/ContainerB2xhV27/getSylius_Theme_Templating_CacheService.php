<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.theme.templating.cache' shared service.

return $this->services['sylius.theme.templating.cache'] = new \Doctrine\Common\Cache\ArrayCache();
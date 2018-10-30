<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.shipping_methods_resolver.default' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Resolver/ShippingMethodsResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Resolver/ShippingMethodsResolver.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Checker/ShippingMethodEligibilityCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Checker/ShippingMethodEligibilityChecker.php';

return $this->services['sylius.shipping_methods_resolver.default'] = new \Sylius\Component\Shipping\Resolver\ShippingMethodsResolver(($this->services['sylius.repository.shipping_method'] ?? $this->load('getSylius_Repository_ShippingMethodService.php')), ($this->services['sylius.shipping_eligibility_checker'] ?? $this->services['sylius.shipping_eligibility_checker'] = new \Sylius\Component\Shipping\Checker\ShippingMethodEligibilityChecker()));
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.shipping_calculator' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Calculator/DelegatingCalculatorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Calculator/DelegatingCalculator.php';

return $this->services['sylius.shipping_calculator'] = new \Sylius\Component\Shipping\Calculator\DelegatingCalculator(($this->services['sylius.registry.shipping_calculator'] ?? $this->load('getSylius_Registry_ShippingCalculatorService.php')));

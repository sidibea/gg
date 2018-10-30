<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.payment_method_resolver.default' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Payment/Resolver/DefaultPaymentMethodResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Resolver/DefaultPaymentMethodResolver.php';

return $this->services['sylius.payment_method_resolver.default'] = new \Sylius\Component\Core\Resolver\DefaultPaymentMethodResolver(($this->services['sylius.repository.payment_method'] ?? $this->load('getSylius_Repository_PaymentMethodService.php')));

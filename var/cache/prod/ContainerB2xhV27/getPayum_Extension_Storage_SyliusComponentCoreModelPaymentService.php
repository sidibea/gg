<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.extension.storage.sylius_component_core_model_payment' shared service.

include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Extension/ExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Extension/StorageExtension.php';

return $this->services['payum.extension.storage.sylius_component_core_model_payment'] = new \Payum\Core\Extension\StorageExtension(($this->services['payum.storage.sylius_component_core_model_payment'] ?? $this->load('getPayum_Storage_SyliusComponentCoreModelPaymentService.php')));

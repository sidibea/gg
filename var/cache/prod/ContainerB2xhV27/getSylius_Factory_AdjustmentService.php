<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.factory.adjustment' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Order/Factory/AdjustmentFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Order/Factory/AdjustmentFactory.php';

return $this->services['sylius.factory.adjustment'] = new \Sylius\Component\Order\Factory\AdjustmentFactory(new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Order\\Model\\Adjustment'));
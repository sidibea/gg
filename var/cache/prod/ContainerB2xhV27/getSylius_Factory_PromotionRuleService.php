<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.factory.promotion_rule' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Factory/PromotionRuleFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Factory/PromotionRuleFactory.php';

return $this->services['sylius.factory.promotion_rule'] = new \Sylius\Component\Core\Factory\PromotionRuleFactory(new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Promotion\\Model\\PromotionRule'));
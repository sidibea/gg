<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.promotion_rule.contains_product_configuration' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/Promotion/Rule/ContainsProductConfigurationType.php';

return $this->services['sylius.form.type.promotion_rule.contains_product_configuration'] = new \Sylius\Bundle\CoreBundle\Form\Type\Promotion\Rule\ContainsProductConfigurationType(($this->services['sylius.repository.product'] ?? $this->load('getSylius_Repository_ProductService.php')));

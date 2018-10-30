<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.product_generate_variants' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Form/Type/ProductGenerateVariantsType.php';

return $this->services['sylius.form.type.product_generate_variants'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductGenerateVariantsType('AppBundle\\Entity\\Product', $this->parameters['sylius.form.type.product_generate_variants.validation_groups'], ($this->services['sylius.form.event_subscriber.product_variant_generator'] ?? $this->load('getSylius_Form_EventSubscriber_ProductVariantGeneratorService.php')));

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'loevgaard_sylius_brand.form.type.brand_image' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/ImageType.php';
include_once $this->targetDirs[3].'/vendor/loevgaard/sylius-brand-plugin/src/Form/Type/BrandImageType.php';

return $this->privates['loevgaard_sylius_brand.form.type.brand_image'] = new \Loevgaard\SyliusBrandPlugin\Form\Type\BrandImageType('Loevgaard\\SyliusBrandPlugin\\Entity\\BrandImage');
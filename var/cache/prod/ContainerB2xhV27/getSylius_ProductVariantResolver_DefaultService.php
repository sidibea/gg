<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.product_variant_resolver.default' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Product/Resolver/ProductVariantResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Product/Resolver/DefaultProductVariantResolver.php';

return $this->services['sylius.product_variant_resolver.default'] = new \Sylius\Component\Product\Resolver\DefaultProductVariantResolver();

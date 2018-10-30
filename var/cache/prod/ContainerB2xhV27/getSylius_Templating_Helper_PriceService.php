<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.templating.helper.price' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/Helper/HelperInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/Helper/Helper.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Templating/Helper/PriceHelper.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Calculator/ProductVariantPriceCalculatorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Calculator/ProductVariantPriceCalculator.php';

if ($lazyLoad) {
    return $this->services['sylius.templating.helper.price'] = $this->createProxy('PriceHelper_2012e62', function () {
        return \PriceHelper_2012e62::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getSylius_Templating_Helper_PriceService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Sylius\Bundle\CoreBundle\Templating\Helper\PriceHelper(($this->services['sylius.calculator.product_variant_price'] ?? $this->services['sylius.calculator.product_variant_price'] = new \Sylius\Component\Core\Calculator\ProductVariantPriceCalculator()));

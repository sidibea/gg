<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.templating.helper.convert_money' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/Helper/HelperInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/Helper/Helper.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Templating/Helper/ConvertMoneyHelperInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Templating/Helper/ConvertMoneyHelper.php';

if ($lazyLoad) {
    return $this->services['sylius.templating.helper.convert_money'] = $this->createProxy('ConvertMoneyHelper_be8e0b7', function () {
        return \ConvertMoneyHelper_be8e0b7::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getSylius_Templating_Helper_ConvertMoneyService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Sylius\Bundle\MoneyBundle\Templating\Helper\ConvertMoneyHelper(($this->services['sylius.currency_converter'] ?? $this->load('getSylius_CurrencyConverterService.php')));

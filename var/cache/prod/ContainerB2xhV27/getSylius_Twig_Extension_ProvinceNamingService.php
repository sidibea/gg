<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.twig.extension.province_naming' shared service.

include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Twig/ProvinceNamingExtension.php';

return $this->services['sylius.twig.extension.province_naming'] = new \Sylius\Bundle\AddressingBundle\Twig\ProvinceNamingExtension(($this->services['sylius.province_naming_provider'] ?? $this->load('getSylius_ProvinceNamingProviderService.php')), '');

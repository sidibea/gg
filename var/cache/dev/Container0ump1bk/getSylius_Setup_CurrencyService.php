<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.setup.currency' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Setup/CurrencySetupInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Setup/CurrencySetup.php';

return $this->services['sylius.setup.currency'] = new \Sylius\Bundle\CoreBundle\Installer\Setup\CurrencySetup(($this->services['sylius.repository.currency'] ?? $this->load('getSylius_Repository_CurrencyService.php')), ($this->services['sylius.factory.currency'] ?? $this->services['sylius.factory.currency'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Currency\\Model\\Currency')));

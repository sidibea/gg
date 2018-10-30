<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.requirements' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Requirement/RequirementCollection.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Requirement/SettingsRequirements.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Requirement/ExtensionsRequirements.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Requirement/FilesystemRequirements.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Requirement/SyliusRequirements.php';

$a = ($this->services['translator'] ?? $this->getTranslatorService());

return $this->services['sylius.requirements'] = new \Sylius\Bundle\CoreBundle\Installer\Requirement\SyliusRequirements(array(0 => new \Sylius\Bundle\CoreBundle\Installer\Requirement\SettingsRequirements($a), 1 => new \Sylius\Bundle\CoreBundle\Installer\Requirement\ExtensionsRequirements($a), 2 => new \Sylius\Bundle\CoreBundle\Installer\Requirement\FilesystemRequirements($a, $this->targetDirs[0], ($this->targetDirs[2].'/logs'))));

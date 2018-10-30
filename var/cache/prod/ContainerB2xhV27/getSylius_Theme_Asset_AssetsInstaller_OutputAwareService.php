<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.theme.asset.assets_installer.output_aware' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Asset/Installer/AssetsInstallerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Asset/Installer/AssetsInstaller.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Asset/Installer/OutputAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Asset/Installer/OutputAwareAssetsInstaller.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Asset/PathResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Asset/PathResolver.php';

return $this->services['sylius.theme.asset.assets_installer.output_aware'] = new \Sylius\Bundle\ThemeBundle\Asset\Installer\OutputAwareAssetsInstaller(new \Sylius\Bundle\ThemeBundle\Asset\Installer\AssetsInstaller(($this->services['filesystem'] ?? $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem()), ($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->services['sylius.repository.theme'] ?? $this->getSylius_Repository_ThemeService()), ($this->privates['sylius.theme.hierarchy_provider'] ?? $this->privates['sylius.theme.hierarchy_provider'] = new \Sylius\Bundle\ThemeBundle\HierarchyProvider\ThemeHierarchyProvider()), ($this->privates['sylius.theme.asset.path_resolver'] ?? $this->privates['sylius.theme.asset.path_resolver'] = new \Sylius\Bundle\ThemeBundle\Asset\PathResolver())));

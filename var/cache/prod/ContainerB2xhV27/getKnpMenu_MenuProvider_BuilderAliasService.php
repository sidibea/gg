<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.menu_provider.builder_alias' shared service.

include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Provider/MenuProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src/Provider/BuilderAliasProvider.php';

return $this->privates['knp_menu.menu_provider.builder_alias'] = new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider(($this->services['kernel'] ?? $this->get('kernel', 1)), $this, ($this->services['knp_menu.factory'] ?? $this->load('getKnpMenu_FactoryService.php')));

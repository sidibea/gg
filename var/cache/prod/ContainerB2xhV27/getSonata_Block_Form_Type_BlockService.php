<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.block.form.type.block' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Form/Type/ServiceListType.php';

return $this->privates['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType(($this->services['sonata.block.manager'] ?? $this->load('getSonata_Block_ManagerService.php')));

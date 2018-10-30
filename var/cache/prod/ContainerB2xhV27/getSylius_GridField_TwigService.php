<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.grid_field.twig' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Grid/FieldTypes/FieldTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/GridBundle/FieldTypes/TwigFieldType.php';

return $this->services['sylius.grid_field.twig'] = new \Sylius\Bundle\GridBundle\FieldTypes\TwigFieldType(($this->services['sylius.grid.data_extractor.property_access'] ?? $this->load('getSylius_Grid_DataExtractor_PropertyAccessService.php')), ($this->services['twig'] ?? $this->load('getTwigService.php')));

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.attribute_type_choice' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Form/Type/AttributeTypeChoiceType.php';

return $this->services['sylius.form.type.attribute_type_choice'] = new \Sylius\Bundle\AttributeBundle\Form\Type\AttributeTypeChoiceType($this->parameters['sylius.attribute.attribute_types']);
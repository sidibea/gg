<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.country_code_choice' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Form/Type/CountryCodeChoiceType.php';

return $this->services['sylius.form.type.country_code_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\CountryCodeChoiceType(($this->services['sylius.repository.country'] ?? $this->load('getSylius_Repository_CountryService.php')));

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.customer_guest' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/Customer/CustomerGuestType.php';

return $this->services['sylius.form.type.customer_guest'] = new \Sylius\Bundle\CoreBundle\Form\Type\Customer\CustomerGuestType('Sylius\\Component\\Core\\Model\\Customer', $this->parameters['sylius.form.type.customer_guest.validation_groups'], ($this->services['sylius.repository.customer'] ?? $this->load('getSylius_Repository_CustomerService.php')), ($this->services['sylius.factory.customer'] ?? $this->services['sylius.factory.customer'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\Customer')));

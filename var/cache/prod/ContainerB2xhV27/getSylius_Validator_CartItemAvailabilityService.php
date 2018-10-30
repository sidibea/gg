<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.validator.cart_item_availability' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Validator/Constraints/CartItemAvailabilityValidator.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Inventory/Checker/AvailabilityCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Inventory/Checker/AvailabilityChecker.php';

return $this->services['sylius.validator.cart_item_availability'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\CartItemAvailabilityValidator(($this->services['sylius.availability_checker.default'] ?? $this->services['sylius.availability_checker.default'] = new \Sylius\Component\Inventory\Checker\AvailabilityChecker()));

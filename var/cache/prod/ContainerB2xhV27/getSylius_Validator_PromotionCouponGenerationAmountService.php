<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.validator.promotion_coupon_generation_amount' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Validator/CouponGenerationAmountValidator.php';

return $this->services['sylius.validator.promotion_coupon_generation_amount'] = new \Sylius\Bundle\PromotionBundle\Validator\CouponGenerationAmountValidator(($this->services['sylius.promotion_coupon_generator.percentage_policy'] ?? $this->load('getSylius_PromotionCouponGenerator_PercentagePolicyService.php')));

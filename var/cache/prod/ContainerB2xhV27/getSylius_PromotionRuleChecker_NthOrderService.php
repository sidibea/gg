<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.promotion_rule_checker.nth_order' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Rule/RuleCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Checker/Rule/NthOrderRuleChecker.php';

return $this->services['sylius.promotion_rule_checker.nth_order'] = new \Sylius\Component\Core\Promotion\Checker\Rule\NthOrderRuleChecker(($this->services['sylius.repository.order'] ?? $this->getSylius_Repository_OrderService()));

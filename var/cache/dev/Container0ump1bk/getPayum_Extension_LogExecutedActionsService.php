<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.extension.log_executed_actions' shared service.

include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Bridge/Psr/Log/LogExecutedActionsExtension.php';

return $this->services['payum.extension.log_executed_actions'] = new \Payum\Core\Bridge\Psr\Log\LogExecutedActionsExtension(($this->privates['monolog.logger.payum'] ?? $this->load('getMonolog_Logger_PayumService.php')));

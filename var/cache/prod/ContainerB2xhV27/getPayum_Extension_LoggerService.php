<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.extension.logger' shared service.

include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Extension/ExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Bridge/Psr/Log/LoggerExtension.php';

return $this->services['payum.extension.logger'] = new \Payum\Core\Bridge\Psr\Log\LoggerExtension(($this->privates['monolog.logger.payum'] ?? $this->load('getMonolog_Logger_PayumService.php')));

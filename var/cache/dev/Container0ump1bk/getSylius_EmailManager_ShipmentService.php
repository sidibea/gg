<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.email_manager.shipment' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/EmailManager/ShipmentEmailManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/EmailManager/ShipmentEmailManager.php';

return $this->services['sylius.email_manager.shipment'] = new \Sylius\Bundle\AdminBundle\EmailManager\ShipmentEmailManager(($this->services['sylius.email_sender'] ?? $this->load('getSylius_EmailSenderService.php')));

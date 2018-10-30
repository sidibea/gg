<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.intl.timezone_detector.chain' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/intl-bundle/src/Timezone/TimezoneDetectorInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/intl-bundle/src/Timezone/ChainTimezoneDetector.php';

$this->services['sonata.intl.timezone_detector.chain'] = $instance = new \Sonata\IntlBundle\Timezone\ChainTimezoneDetector('Africa/Bamako');

$instance->addDetector(($this->services['sonata.intl.timezone_detector.locale'] ?? $this->load('getSonata_Intl_TimezoneDetector_LocaleService.php')));

return $instance;

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.intl.locale_detector.request_stack' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/intl-bundle/src/Locale/LocaleDetectorInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/intl-bundle/src/Locale/RequestStackDetector.php';

return $this->services['sonata.intl.locale_detector.request_stack'] = new \Sonata\IntlBundle\Locale\RequestStackDetector(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), 'en_US');

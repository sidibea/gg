<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/TemplateController.php';

return $this->services['Symfony\Bundle\FrameworkBundle\Controller\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->load('getTwigService.php')), ($this->services['templating'] ?? $this->load('getTemplatingService.php')));

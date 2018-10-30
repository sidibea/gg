<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hateoas.helper.link' shared service.

include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Helper/LinkHelper.php';

return $this->services['hateoas.helper.link'] = new \Hateoas\Helper\LinkHelper(($this->privates['hateoas.link_factory'] ?? $this->load('getHateoas_LinkFactoryService.php')), ($this->privates['hateoas.configuration.relations_repository'] ?? $this->load('getHateoas_Configuration_RelationsRepositoryService.php')));

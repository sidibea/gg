<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'liip_imagine.cache.signer' shared service.

include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Imagine/Cache/SignerInterface.php';
include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Imagine/Cache/Signer.php';

return $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('SYLIUS_SECRET'));

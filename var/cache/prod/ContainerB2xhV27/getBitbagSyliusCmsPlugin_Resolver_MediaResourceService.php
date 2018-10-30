<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'bitbag_sylius_cms_plugin.resolver.media_resource' shared service.

include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resolver/MediaResourceResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resolver/MediaResourceResolver.php';

return $this->services['bitbag_sylius_cms_plugin.resolver.media_resource'] = new \BitBag\SyliusCmsPlugin\Resolver\MediaResourceResolver(($this->services['bitbag_sylius_cms_plugin.repository.media'] ?? $this->load('getBitbagSyliusCmsPlugin_Repository_MediaService.php')), ($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), ($this->privates['monolog.logger'] ?? $this->load('getMonolog_LoggerService.php')));

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'bitbag_sylius_cms_plugin.event_listener.media_upload' shared service.

include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/EventListener/MediaUploadListener.php';

return $this->privates['bitbag_sylius_cms_plugin.event_listener.media_upload'] = new \BitBag\SyliusCmsPlugin\EventListener\MediaUploadListener(($this->services['bitbag_sylius_cms_plugin.resolver.media_provider'] ?? $this->load('getBitbagSyliusCmsPlugin_Resolver_MediaProviderService.php')));

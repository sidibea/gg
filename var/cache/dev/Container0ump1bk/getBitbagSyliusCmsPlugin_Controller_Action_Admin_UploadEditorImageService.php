<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'bitbag_sylius_cms_plugin.controller.action.admin.upload_editor_image' shared service.

include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Controller/Action/Admin/UploadEditorImageAction.php';

return $this->services['bitbag_sylius_cms_plugin.controller.action.admin.upload_editor_image'] = new \BitBag\SyliusCmsPlugin\Controller\Action\Admin\UploadEditorImageAction(($this->services['bitbag_sylius_cms_plugin.resolver.media_provider'] ?? $this->getBitbagSyliusCmsPlugin_Resolver_MediaProviderService()), ($this->services['bitbag_sylius_cms_plugin.repository.media'] ?? $this->getBitbagSyliusCmsPlugin_Repository_MediaService()), ($this->services['bitbag_sylius_cms_plugin.factory.media'] ?? $this->services['bitbag_sylius_cms_plugin.factory.media'] = new \Sylius\Component\Resource\Factory\Factory('BitBag\\SyliusCmsPlugin\\Entity\\Media')));

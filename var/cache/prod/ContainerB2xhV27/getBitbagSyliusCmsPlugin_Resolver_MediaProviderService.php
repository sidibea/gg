<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'bitbag_sylius_cms_plugin.resolver.media_provider' shared service.

include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/FilesystemInterface.php';
include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Filesystem.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Uploader/MediaUploaderInterface.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Uploader/MediaUploader.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/MediaProvider/ProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/MediaProvider/GenericProvider.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Registry/ServiceRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Registry/ServiceRegistry.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resolver/MediaProviderResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resolver/MediaProviderResolver.php';

$a = ($this->services['templating'] ?? $this->load('getTemplatingService.php'));

$b = new \BitBag\SyliusCmsPlugin\Uploader\MediaUploader(($this->services['knp_gaufrette.filesystem_map'] ?? $this->load('getKnpGaufrette_FilesystemMapService.php'))->get('bitbag_sylius_cms_plugin_media'));

$c = new \Sylius\Component\Registry\ServiceRegistry('BitBag\\SyliusCmsPlugin\\MediaProvider\\ProviderInterface', 'Media provider');
$c->register('image', new \BitBag\SyliusCmsPlugin\MediaProvider\GenericProvider($b, $a, '@BitBagSyliusCmsPlugin/Shop/Media/Show/image.html.twig', 'media/image'));
$c->register('video', new \BitBag\SyliusCmsPlugin\MediaProvider\GenericProvider($b, $a, '@BitBagSyliusCmsPlugin/Shop/Media/Show/video.html.twig', 'media/video'));
$c->register('file', new \BitBag\SyliusCmsPlugin\MediaProvider\GenericProvider($b, $a, '@BitBagSyliusCmsPlugin/Shop/Media/Show/file.html.twig', 'media/file'));

return $this->services['bitbag_sylius_cms_plugin.resolver.media_provider'] = new \BitBag\SyliusCmsPlugin\Resolver\MediaProviderResolver($c);

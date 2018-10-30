<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hateoas.configuration.relations_repository' shared service.

include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/DriverInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/AdvancedDriverInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/AbstractFileDriver.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/Metadata/Driver/YamlDriver.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/Metadata/Driver/XmlDriver.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/Metadata/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/Metadata/Driver/ExtensionDriver.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/DriverChain.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Cache/CacheInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Cache/FileCache.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/MetadataFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/AdvancedMetadataFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/MetadataFactory.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/Provider/Resolver/RelationProviderResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/Provider/Resolver/MethodResolver.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/Provider/Resolver/StaticMethodResolver.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/Provider/Resolver/SymfonyContainerResolver.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/Provider/Resolver/ChainResolver.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/Provider/RelationProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/Provider/RelationProvider.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Configuration/RelationsRepository.php';

$a = ($this->privates['jms_serializer.metadata.file_locator'] ?? $this->load('getJmsSerializer_Metadata_FileLocatorService.php'));

$b = new \Metadata\MetadataFactory(new \Metadata\Driver\DriverChain(array(0 => new \Hateoas\Configuration\Metadata\Driver\YamlDriver($a), 1 => new \Hateoas\Configuration\Metadata\Driver\XmlDriver($a), 2 => new \Hateoas\Configuration\Metadata\Driver\ExtensionDriver(new \Hateoas\Configuration\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))))), 'Metadata\\ClassHierarchyMetadata', true);
$b->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/hateoas')));

return $this->privates['hateoas.configuration.relations_repository'] = new \Hateoas\Configuration\RelationsRepository($b, new \Hateoas\Configuration\Provider\RelationProvider($b, new \Hateoas\Configuration\Provider\Resolver\ChainResolver(array(0 => new \Hateoas\Configuration\Provider\Resolver\MethodResolver(), 1 => new \Hateoas\Configuration\Provider\Resolver\StaticMethodResolver(), 2 => new \Hateoas\Configuration\Provider\Resolver\SymfonyContainerResolver($this)))));
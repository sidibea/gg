<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.metadata.file_locator' shared service.

include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/FileLocatorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/AdvancedFileLocatorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/FileLocator.php';

return $this->privates['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator(array('Sylius\\Bundle\\OrderBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/config/serializer'), 'Sylius\\Bundle\\CurrencyBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/config/serializer'), 'Sylius\\Bundle\\LocaleBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/config/serializer'), 'Sylius\\Bundle\\ProductBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/serializer'), 'Sylius\\Bundle\\ChannelBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/config/serializer'), 'Sylius\\Bundle\\AttributeBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/config/serializer'), 'Sylius\\Bundle\\TaxationBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/config/serializer'), 'Sylius\\Bundle\\ShippingBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/config/serializer'), 'Sylius\\Bundle\\PaymentBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/config/serializer'), 'Sylius\\Bundle\\PromotionBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/config/serializer'), 'Sylius\\Bundle\\AddressingBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/config/serializer'), 'Sylius\\Bundle\\InventoryBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/InventoryBundle/Resources/config/serializer'), 'Sylius\\Bundle\\TaxonomyBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/config/serializer'), 'Sylius\\Bundle\\UserBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/config/serializer'), 'Sylius\\Bundle\\CustomerBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/config/serializer'), 'Sonata\\BlockBundle' => ($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/config/serializer'), 'Sylius\\Bundle\\AdminApiBundle' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle/Resources/config/serializer'), 'BitBag\\SyliusCmsPlugin' => ($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/config/serializer'), 'Sylius\\Component\\Addressing' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/config/serializer'), 'Sylius\\Component\\Attribute' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/config/serializer'), 'Sylius\\Component\\Channel' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/config/serializer'), 'Sylius\\Component\\Currency' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/config/serializer'), 'Sylius\\Component\\Customer' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/config/serializer'), 'Sylius\\Component\\Inventory' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/InventoryBundle/Resources/config/serializer'), 'Sylius\\Component\\Locale' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/config/serializer'), 'Sylius\\Component\\Order' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/config/serializer'), 'Sylius\\Component\\Payment' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/config/serializer'), 'Sylius\\Component\\Product' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/serializer'), 'Sylius\\Component\\Promotion' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/config/serializer'), 'Sylius\\Component\\Shipping' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/config/serializer'), 'Sylius\\Component\\Taxation' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/config/serializer'), 'Sylius\\Component\\Taxonomy' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/config/serializer'), 'Sylius\\Component\\User' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/config/serializer'), 'Sylius\\Component\\Core' => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle/Resources/config/serializer')));

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.builder' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ObjectInitializerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Doctrine/Validator/DoctrineInitializer.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Validation.php';

$this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

$instance->setConstraintValidatorFactory(($this->privates['validator.validator_factory'] ?? $this->load('getValidator_ValidatorFactoryService.php')));
$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
$instance->setTranslationDomain('validators');
$instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/config/validation/Order.xml'), 2 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Resources/config/validation/OrderItem.xml'), 3 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/config/validation/Currency.xml'), 4 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Resources/config/validation/ExchangeRate.xml'), 5 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Resources/config/validation/Locale.xml'), 6 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/validation/Product.xml'), 7 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/validation/ProductAssociationType.xml'), 8 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/validation/ProductAssociationTypeTranslation.xml'), 9 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/validation/ProductOption.xml'), 10 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/validation/ProductOptionTranslation.xml'), 11 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/validation/ProductOptionValue.xml'), 12 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/validation/ProductOptionValueTranslation.xml'), 13 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/validation/ProductTranslation.xml'), 14 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Resources/config/validation/ProductVariant.xml'), 15 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/config/validation/Channel.xml'), 16 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/config/validation/Attribute.xml'), 17 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/config/validation/AttributeTranslation.xml'), 18 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/config/validation/AttributeValue.xml'), 19 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/config/validation/TaxCategory.xml'), 20 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Resources/config/validation/TaxRate.xml'), 21 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/config/validation/Shipment.xml'), 22 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/config/validation/ShippingCategory.xml'), 23 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/config/validation/ShippingMethod.xml'), 24 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Resources/config/validation/ShippingMethodTranslation.xml'), 25 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/config/validation/Payment.xml'), 26 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/config/validation/PaymentMethod.xml'), 27 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Resources/config/validation/PaymentMethodTranslation.xml'), 28 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/config/validation/Promotion.xml'), 29 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/config/validation/PromotionAction.xml'), 30 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/config/validation/PromotionCoupon.xml'), 31 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/config/validation/PromotionCouponGeneratorInstruction.xml'), 32 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Resources/config/validation/PromotionRule.xml'), 33 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/config/validation/Address.xml'), 34 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/config/validation/Country.xml'), 35 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/config/validation/Province.xml'), 36 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/config/validation/Zone.xml'), 37 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Resources/config/validation/ZoneMember.xml'), 38 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/config/validation/Taxon.xml'), 39 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/TaxonomyBundle/Resources/config/validation/TaxonTranslation.xml'), 40 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/config/validation/ChangePassword.xml'), 41 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/config/validation/PasswordReset.xml'), 42 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/config/validation/PasswordResetRequest.xml'), 43 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Resources/config/validation/User.xml'), 44 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/config/validation/Customer.xml'), 45 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Resources/config/validation/CustomerGroup.xml'), 46 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Resources/config/validation/Review.xml'), 47 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/AddToCartCommand.xml'), 48 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/AdminUser.xml'), 49 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/Channel.xml'), 50 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/ChannelPricing.xml'), 51 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/Customer.xml'), 52 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/Order.xml'), 53 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/OrderItem.xml'), 54 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/PaymentMethod.xml'), 55 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/Product.xml'), 56 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/ProductImage.xml'), 57 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/ProductReview.xml'), 58 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/ProductVariant.xml'), 59 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/ShippingMethod.xml'), 60 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/TaxRate.xml'), 61 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/Taxon.xml'), 62 => ($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/config/validation/TaxonImage.xml'), 63 => ($this->targetDirs[3].'/vendor/payum/payum-bundle/Resources/config/validation.xml'), 64 => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/config/validation.xml')));
$instance->addYamlMappings(array(0 => ($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/config/validation/Block.yml'), 1 => ($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/config/validation/BlockTranslation.yml'), 2 => ($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/config/validation/FrequentlyAskedQuestion.yml'), 3 => ($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/config/validation/FrequentlyAskedQuestionTranslation.yml'), 4 => ($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/config/validation/Media.yml'), 5 => ($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/config/validation/MediaTranslation.yml'), 6 => ($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/config/validation/Page.yml'), 7 => ($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/config/validation/PageTranslation.yml'), 8 => ($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/config/validation/Section.yml'), 9 => ($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/config/validation/SectionTranslation.yml')));
$instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
$instance->addMethodMapping('loadValidatorMetadata');
$instance->addObjectInitializers(array(0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->load('getDoctrineService.php'))), 1 => ($this->services['sylius.validator.customer_initializer'] ?? $this->load('getSylius_Validator_CustomerInitializerService.php'))));

return $instance;

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.translatable_entity_locale_assigner' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Resource/Translation/TranslatableEntityLocaleAssignerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Translation/TranslatableEntityLocaleAssigner.php';

return $this->services['sylius.translatable_entity_locale_assigner'] = new \Sylius\Component\Core\Translation\TranslatableEntityLocaleAssigner(($this->services['sylius.context.locale'] ?? $this->getSylius_Context_LocaleService()), ($this->services['sylius.translation_locale_provider.admin'] ?? $this->load('getSylius_TranslationLocaleProvider_AdminService.php')));
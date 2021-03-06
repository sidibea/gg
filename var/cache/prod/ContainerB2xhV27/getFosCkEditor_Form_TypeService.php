<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_ck_editor.form.type' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ConfigManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ConfigManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/PluginManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/PluginManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/StylesSetManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/StylesSetManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/TemplateManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/TemplateManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ToolbarManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Model/ToolbarManager.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Form/Type/CKEditorType.php';

return $this->privates['fos_ck_editor.form.type'] = new \FOS\CKEditorBundle\Form\Type\CKEditorType(new \FOS\CKEditorBundle\Model\ConfigManager(), new \FOS\CKEditorBundle\Model\PluginManager(), new \FOS\CKEditorBundle\Model\StylesSetManager(), new \FOS\CKEditorBundle\Model\TemplateManager(), new \FOS\CKEditorBundle\Model\ToolbarManager());

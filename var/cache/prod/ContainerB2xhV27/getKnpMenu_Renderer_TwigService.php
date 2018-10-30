<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.renderer.twig' shared service.

include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererInterface.php';
include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/TwigRenderer.php';

return $this->privates['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer(($this->services['twig'] ?? $this->load('getTwigService.php')), '@KnpMenu/menu.html.twig', ($this->services['knp_menu.matcher'] ?? $this->load('getKnpMenu_MatcherService.php')), array());

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pagerfanta.convert_not_valid_current_page_to_not_found_listener' shared service.

include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/EventListener/ConvertNotValidCurrentPageToNotFoundListener.php';

return $this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener();

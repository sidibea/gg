<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'gaufrette.sylius_image_filesystem' shared service.

include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter.php';
include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/StreamFactory.php';
include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/ChecksumCalculator.php';
include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/SizeCalculator.php';
include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/MimeTypeProvider.php';
include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Adapter/Local.php';
include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/FilesystemInterface.php';
include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Filesystem.php';

return $this->services['gaufrette.sylius_image_filesystem'] = new \Gaufrette\Filesystem(new \Gaufrette\Adapter\Local(($this->targetDirs[3].'/web/media/image'), true));

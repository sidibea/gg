<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.fos_oauth_server.create_client_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Command/CreateClientCommand.php';

return $this->services['console.command.public_alias.fos_oauth_server.create_client_command'] = new \FOS\OAuthServerBundle\Command\CreateClientCommand(($this->services['sylius.oauth_server.client_manager'] ?? $this->load('getSylius_OauthServer_ClientManagerService.php')));

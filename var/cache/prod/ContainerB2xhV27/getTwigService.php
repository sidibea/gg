<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'twig' shared service.

include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExistsLoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/SourceContextLoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Loader/Filesystem.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Loader/FilesystemLoader.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Twig/ThemeFilesystemLoader.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/CsrfExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/LogoutUrlExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/SecurityExtension.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Profiler/Profile.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Profiler.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/ProfilerExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/TranslationExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/VersionStrategy/VersionStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/VersionStrategy/EmptyVersionStrategy.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Context/ContextInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Context/RequestStackContext.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/PackageInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Package.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/PathPackage.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Asset/Package/PathPackage.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Packages.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/AssetExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/CodeExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/RoutingExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/YamlExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/StopwatchExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/ExpressionExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/HttpKernelExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/HttpFoundationExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/FormExtension.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Twig/Extension/RenderBlockExtension.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Twig/Extension/RenderMediaExtension.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Twig/Extension/RenderProductPagesExtension.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Twig/Parser/ContentParserInterface.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Twig/Parser/ContentParser.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Twig/Extension/RenderContentExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Twig/ConvertMoneyExtension.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Debug.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Twig/AggregateAdjustmentsExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/MoneyBundle/Twig/FormatMoneyExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CurrencyBundle/Twig/CurrencyExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/LocaleBundle/Twig/LocaleExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/InventoryBundle/Twig/InventoryExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Twig/PercentageExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Twig/SortByExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Twig/PriceExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Twig/VariantResolverExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Twig/ProductVariantsPricesExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Twig/CheckoutStepsExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/GridBundle/Twig/GridExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/GridBundle/Twig/BulkActionGridExtension.php';
include_once $this->targetDirs[3].'/vendor/winzou/state-machine/src/SM/Extension/Twig/SMExtension.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/GlobalsInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/FormTypeExtension.php';
include_once $this->targetDirs[3].'/vendor/twig/extensions/lib/Twig/Extensions/Extension/Text.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/DeprecatedTextExtension.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/StatusExtension.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/DeprecatedTemplateExtension.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/TemplateExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/Helper/HelperInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Templating/Helper/Helper.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Templating/Helper/BlockHelper.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Twig/Extension/BlockExtension.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/intl-bundle/src/Twig/Extension/LocaleExtension.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/intl-bundle/src/Twig/Extension/NumberExtension.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/intl-bundle/src/Twig/Extension/DateTimeExtension.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Twig/Extension/LinkExtension.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Twig/SerializerRuntimeExtension.php';
include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Renderer/PsrProvider.php';
include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Util/MenuManipulator.php';
include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Twig/Helper.php';
include_once $this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Twig/MenuExtension.php';
include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Templating/FilterTrait.php';
include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Templating/FilterExtension.php';
include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/ViewInterface.php';
include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/DefaultView.php';
include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/TranslatedView.php';
include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/DefaultTranslatedView.php';
include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/TwitterBootstrapView.php';
include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/TwitterBootstrap3View.php';
include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/TwitterBootstrap4View.php';
include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/SemanticUiView.php';
include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrapTranslatedView.php';
include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap4TranslatedView.php';
include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap3TranslatedView.php';
include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/SemanticUiTranslatedView.php';
include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/ViewFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/ViewFactory.php';
include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Twig/PagerfantaExtension.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Builder/JsonBuilder.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Renderer/CKEditorRendererInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Renderer/CKEditorRenderer.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Twig/CKEditorExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/AppVariable.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/RuntimeLoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ContainerRuntimeLoader.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Twig/GlobalVariables.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Environment.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Asset/PathResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Asset/PathResolver.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Twig/CountryNameExtension.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Twig/Extension/FlashMessageExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Twig/NotificationWidgetExtension.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Twig/ShopExtension.php';

$a = ($this->privates['sylius.theme.templating.file_locator'] ?? $this->load('getSylius_Theme_Templating_FileLocatorService.php'));
$b = ($this->privates['sylius.theme.templating.name_parser'] ?? $this->load('getSylius_Theme_Templating_NameParserService.php'));

if (isset($this->services['twig'])) {
    return $this->services['twig'];
}

$c = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($a, $b, $this->targetDirs[3]);
$c->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));
$c->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
$c->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '!Framework');
$c->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
$c->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '!Security');
$c->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
$c->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
$c->addPath(($this->targetDirs[3].'/app/Resources/TwigBundle/views'), 'Twig');
$c->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
$c->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '!Twig');
$c->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
$c->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/views'), 'SyliusChannel');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Resources/views'), '!SyliusChannel');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views'), 'SyliusAttribute');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views'), '!SyliusAttribute');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views'), 'SyliusUi');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views'), '!SyliusUi');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/views'), 'SyliusCore');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Resources/views'), '!SyliusCore');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Resources/views'), 'SyliusResource');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Resources/views'), '!SyliusResource');
$c->addPath(($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/views'), 'SonataCore');
$c->addPath(($this->targetDirs[3].'/vendor/sonata-project/core-bundle/src/Resources/views'), '!SonataCore');
$c->addPath(($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/views'), 'SonataBlock');
$c->addPath(($this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Resources/views'), '!SonataBlock');
$c->addPath(($this->targetDirs[3].'/vendor/sonata-project/intl-bundle/src/Resources/views'), 'SonataIntl');
$c->addPath(($this->targetDirs[3].'/vendor/sonata-project/intl-bundle/src/Resources/views'), '!SonataIntl');
$c->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), 'KnpMenu');
$c->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/src/Resources/views'), '!KnpMenu');
$c->addPath(($this->targetDirs[3].'/vendor/liip/imagine-bundle/Resources/views'), 'LiipImagine');
$c->addPath(($this->targetDirs[3].'/vendor/liip/imagine-bundle/Resources/views'), '!LiipImagine');
$c->addPath(($this->targetDirs[3].'/vendor/payum/payum-bundle/Resources/views'), 'Payum');
$c->addPath(($this->targetDirs[3].'/vendor/payum/payum-bundle/Resources/views'), '!Payum');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/views'), 'SyliusPayum');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/views'), '!SyliusPayum');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Resources/views'), 'SyliusTheme');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ThemeBundle/Resources/views'), '!SyliusTheme');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views'), 'SyliusAdmin');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views'), '!SyliusAdmin');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views'), 'SyliusShop');
$c->addPath(($this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views'), '!SyliusShop');
$c->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/views'), 'FOSOAuthServer');
$c->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/views'), '!FOSOAuthServer');
$c->addPath(($this->targetDirs[3].'/vendor/loevgaard/sylius-brand-plugin/src/Resources/views'), 'LoevgaardSyliusBrandPlugin');
$c->addPath(($this->targetDirs[3].'/vendor/loevgaard/sylius-brand-plugin/src/Resources/views'), '!LoevgaardSyliusBrandPlugin');
$c->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views'), 'FOSCKEditor');
$c->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views'), '!FOSCKEditor');
$c->addPath(($this->targetDirs[3].'/vendor/stefandoorn/sitemap-plugin/src/Resources/views'), 'SitemapPlugin');
$c->addPath(($this->targetDirs[3].'/vendor/stefandoorn/sitemap-plugin/src/Resources/views'), '!SitemapPlugin');
$c->addPath(($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/views'), 'BitBagSyliusCmsPlugin');
$c->addPath(($this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resources/views'), '!BitBagSyliusCmsPlugin');
$c->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

$this->services['twig'] = $instance = new \Twig\Environment(new \Sylius\Bundle\ThemeBundle\Twig\ThemeFilesystemLoader($c, $a, $b), array('paths' => array(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views') => NULL), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception::showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

$d = ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true));
$e = ($this->services['translator'] ?? $this->getTranslatorService());
$f = ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());
$g = ($this->services['router'] ?? $this->getRouterService());
$h = ($this->services['templating'] ?? $this->load('getTemplatingService.php'));
$i = ($this->services['knp_menu.matcher'] ?? $this->load('getKnpMenu_MatcherService.php'));

$j = new \Symfony\Component\Asset\Packages(new \Sylius\Bundle\ThemeBundle\Asset\Package\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ($this->privates['sylius.theme.context.channel_based'] ?? $this->getSylius_Theme_Context_ChannelBasedService()), ($this->privates['sylius.theme.asset.path_resolver'] ?? $this->privates['sylius.theme.asset.path_resolver'] = new \Sylius\Bundle\ThemeBundle\Asset\PathResolver()), new \Symfony\Component\Asset\Context\RequestStackContext($f, '', false)), array());

$k = new \Knp\Menu\Util\MenuManipulator();

$l = new \Pagerfanta\View\DefaultView();

$m = new \Pagerfanta\View\TwitterBootstrapView();

$n = new \Pagerfanta\View\TwitterBootstrap3View();

$o = new \Pagerfanta\View\TwitterBootstrap4View();

$p = new \Pagerfanta\View\SemanticUiView();

$q = new \Pagerfanta\View\ViewFactory();
$q->add(array('default' => $l, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($l, $e), 'twitter_bootstrap' => $m, 'twitter_bootstrap3' => $n, 'twitter_bootstrap4' => $o, 'semantic_ui' => $p, 'twitter_bootstrap4_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap4TranslatedView($o, $e), 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($n, $e), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($m, $e), 'semantic_ui_translated' => new \WhiteOctober\PagerfantaBundle\View\SemanticUiTranslatedView($p, $e)));

$r = new \Symfony\Bridge\Twig\AppVariable();
$r->setEnvironment('prod');
$r->setDebug(true);
if ($this->has('security.token_storage')) {
    $r->setTokenStorage(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()));
}
if ($this->has('request_stack')) {
    $r->setRequestStack($f);
}

$instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(new \Twig\Profiler\Profile(), $d));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($e));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($j));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)), ($this->targetDirs[3].'/app'), 'UTF-8'));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($g));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($d, true));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($f, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
$instance->addExtension(new \BitBag\SyliusCmsPlugin\Twig\Extension\RenderBlockExtension(($this->services['bitbag_sylius_cms_plugin.repository.block'] ?? $this->load('getBitbagSyliusCmsPlugin_Repository_BlockService.php')), ($this->services['bitbag_sylius_cms_plugin.resolver.block_resource'] ?? $this->load('getBitbagSyliusCmsPlugin_Resolver_BlockResourceService.php')), $h));
$instance->addExtension(new \BitBag\SyliusCmsPlugin\Twig\Extension\RenderMediaExtension(($this->services['bitbag_sylius_cms_plugin.resolver.media_provider'] ?? $this->load('getBitbagSyliusCmsPlugin_Resolver_MediaProviderService.php')), ($this->services['bitbag_sylius_cms_plugin.resolver.media_resource'] ?? $this->load('getBitbagSyliusCmsPlugin_Resolver_MediaResourceService.php'))));
$instance->addExtension(new \BitBag\SyliusCmsPlugin\Twig\Extension\RenderProductPagesExtension(($this->services['bitbag_sylius_cms_plugin.repository.page'] ?? $this->load('getBitbagSyliusCmsPlugin_Repository_PageService.php')), ($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), $h));
$instance->addExtension(new \BitBag\SyliusCmsPlugin\Twig\Extension\RenderContentExtension(new \BitBag\SyliusCmsPlugin\Twig\Parser\ContentParser($instance, $this->parameters['bitbag_cms.twig.admin_functions'])));
$instance->addExtension(new \Sylius\Bundle\MoneyBundle\Twig\ConvertMoneyExtension(($this->services['sylius.templating.helper.convert_money'] ?? $this->load('getSylius_Templating_Helper_ConvertMoneyService.php'))));
$instance->addExtension(new \Twig\Extension\DebugExtension());
$instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
$instance->addExtension(new \Sylius\Bundle\OrderBundle\Twig\AggregateAdjustmentsExtension(($this->services['sylius.templating.helper.adjustment'] ?? $this->load('getSylius_Templating_Helper_AdjustmentService.php'))));
$instance->addExtension(new \Sylius\Bundle\MoneyBundle\Twig\FormatMoneyExtension(($this->services['sylius.templating.helper.format_money'] ?? $this->load('getSylius_Templating_Helper_FormatMoneyService.php'))));
$instance->addExtension(new \Sylius\Bundle\CurrencyBundle\Twig\CurrencyExtension(($this->services['sylius.templating.helper.currency'] ?? $this->load('getSylius_Templating_Helper_CurrencyService.php'))));
$instance->addExtension(new \Sylius\Bundle\LocaleBundle\Twig\LocaleExtension(($this->services['sylius.templating.helper.locale'] ?? $this->load('getSylius_Templating_Helper_LocaleService.php'))));
$instance->addExtension(($this->services['sylius.twig.extension.country_name'] ?? $this->services['sylius.twig.extension.country_name'] = new \Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension('')));
$instance->addExtension(($this->services['sylius.twig.extension.province_naming'] ?? $this->load('getSylius_Twig_Extension_ProvinceNamingService.php')));
$instance->addExtension(new \Sylius\Bundle\InventoryBundle\Twig\InventoryExtension(($this->services['sylius.templating.helper.inventory'] ?? $this->load('getSylius_Templating_Helper_InventoryService.php'))));
$instance->addExtension(new \Sylius\Bundle\UiBundle\Twig\PercentageExtension());
$instance->addExtension(new \Sylius\Bundle\UiBundle\Twig\SortByExtension());
$instance->addExtension(new \Sylius\Bundle\CoreBundle\Twig\PriceExtension(($this->services['sylius.templating.helper.price'] ?? $this->load('getSylius_Templating_Helper_PriceService.php'))));
$instance->addExtension(new \Sylius\Bundle\CoreBundle\Twig\VariantResolverExtension(($this->services['sylius.templating.helper.variant_resolver'] ?? $this->load('getSylius_Templating_Helper_VariantResolverService.php'))));
$instance->addExtension(new \Sylius\Bundle\CoreBundle\Twig\ProductVariantsPricesExtension(($this->services['sylius.templating.helper.product_variants_prices'] ?? $this->load('getSylius_Templating_Helper_ProductVariantsPricesService.php'))));
$instance->addExtension(new \Sylius\Bundle\CoreBundle\Twig\CheckoutStepsExtension(($this->services['sylius.templating.helper.checkout_steps'] ?? $this->load('getSylius_Templating_Helper_CheckoutStepsService.php'))));
$instance->addExtension(new \Sylius\Bundle\GridBundle\Twig\GridExtension(($this->services['sylius.templating.helper.grid'] ?? $this->load('getSylius_Templating_Helper_GridService.php'))));
$instance->addExtension(new \Sylius\Bundle\GridBundle\Twig\BulkActionGridExtension(($this->services['sylius.templating.helper.bulk_action_grid'] ?? $this->load('getSylius_Templating_Helper_BulkActionGridService.php'))));
$instance->addExtension(new \SM\Extension\Twig\SMExtension(($this->services['sm.factory'] ?? $this->getSm_FactoryService())));
$instance->addExtension(($this->services['sonata.core.flashmessage.twig.extension'] ?? $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension()));
$instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\FormTypeExtension('standard'));
$instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\DeprecatedTextExtension());
$instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\StatusExtension());
$instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\DeprecatedTemplateExtension());
$instance->addExtension(new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(true, $e, ($this->services['sonata.core.model.adapter.chain'] ?? $this->load('getSonata_Core_Model_Adapter_ChainService.php'))));
$instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension(new \Sonata\BlockBundle\Templating\Helper\BlockHelper(($this->services['sonata.block.manager'] ?? $this->load('getSonata_Block_ManagerService.php')), $this->parameters['sonata_block.cache_blocks'], ($this->services['sonata.block.renderer.default'] ?? $this->load('getSonata_Block_Renderer_DefaultService.php')), ($this->services['sonata.block.context_manager.default'] ?? $this->load('getSonata_Block_ContextManager_DefaultService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['sonata.block.cache.handler.default'] ?? $this->privates['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler()), $d)));
$instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\LocaleExtension(($this->services['sonata.intl.templating.helper.locale'] ?? $this->load('getSonata_Intl_Templating_Helper_LocaleService.php'))));
$instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\NumberExtension(($this->services['sonata.intl.templating.helper.number'] ?? $this->load('getSonata_Intl_Templating_Helper_NumberService.php'))));
$instance->addExtension(new \Sonata\IntlBundle\Twig\Extension\DateTimeExtension(($this->services['sonata.intl.templating.helper.datetime'] ?? $this->load('getSonata_Intl_Templating_Helper_DatetimeService.php'))));
$instance->addExtension(new \Hateoas\Twig\Extension\LinkExtension(($this->services['hateoas.helper.link'] ?? $this->load('getHateoas_Helper_LinkService.php'))));
$instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
$instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper(new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(array('list' => function () {
    return ($this->privates['knp_menu.renderer.list'] ?? $this->load('getKnpMenu_Renderer_ListService.php'));
}, 'twig' => function () {
    return ($this->privates['knp_menu.renderer.twig'] ?? $this->load('getKnpMenu_Renderer_TwigService.php'));
})), 'twig'), ($this->privates['knp_menu.menu_provider.chain'] ?? $this->load('getKnpMenu_MenuProvider_ChainService.php')), $k, $i), $i, $k));
$instance->addExtension(new \Liip\ImagineBundle\Templating\FilterExtension(($this->services['liip_imagine.cache.manager'] ?? $this->load('getLiipImagine_Cache_ManagerService.php'))));
$instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension('default', $q, $g, $f));
$instance->addExtension(($this->services['sylius.twig.extension.widget.admin_notification'] ?? $this->services['sylius.twig.extension.widget.admin_notification'] = new \Sylius\Bundle\AdminBundle\Twig\NotificationWidgetExtension(true, 60)));
$instance->addExtension(($this->services['sylius.twig.extension.shop'] ?? $this->services['sylius.twig.extension.shop'] = new \Sylius\Bundle\AdminBundle\Twig\ShopExtension(true)));
$instance->addExtension(new \FOS\CKEditorBundle\Twig\CKEditorExtension(new \FOS\CKEditorBundle\Renderer\CKEditorRenderer(new \FOS\CKEditorBundle\Builder\JsonBuilder(($this->privates['property_accessor'] ?? $this->load('getPropertyAccessorService.php'))), $g, $j, $f, (($this->has("twig")) ? ($this->get("twig")) : ($this->get("templating"))), (($this->hasParameter("locale")) ? ($this->getParameter("locale")) : (null)))));
$instance->addGlobal('app', $r);
$instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => function () {
    return ($this->services['jms_serializer.twig_extension.serializer_runtime_helper'] ?? $this->load('getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php'));
}, 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageRuntime' => function () {
    return ($this->privates['sonata.core.flashmessage.twig.runtime'] ?? $this->load('getSonata_Core_Flashmessage_Twig_RuntimeService.php'));
}, 'Sonata\\CoreBundle\\Twig\\Extension\\StatusRuntime' => function () {
    return ($this->privates['sonata.core.twig.status_runtime'] ?? $this->load('getSonata_Core_Twig_StatusRuntimeService.php'));
}, 'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => function () {
    return ($this->privates['twig.runtime.security_csrf'] ?? $this->load('getTwig_Runtime_SecurityCsrfService.php'));
}, 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
    return ($this->privates['twig.runtime.httpkernel'] ?? $this->load('getTwig_Runtime_HttpkernelService.php'));
}, 'Symfony\\Component\\Form\\FormRenderer' => function () {
    return ($this->privates['twig.form.renderer'] ?? $this->load('getTwig_Form_RendererService.php'));
}))));
$instance->addGlobal('sylius', ($this->services['sylius.context.shopper'] ?? $this->getSylius_Context_ShopperService()));
$instance->addGlobal('sylius_base_locale', 'en_US');
$instance->addGlobal('sylius_meta', array('version' => '1.2.6'));
$instance->addGlobal('sonata_block', new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => '@SonataBlock/Block/block_base.html.twig', 'block_container' => '@SonataBlock/Block/block_container.html.twig')));
(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

return $instance;

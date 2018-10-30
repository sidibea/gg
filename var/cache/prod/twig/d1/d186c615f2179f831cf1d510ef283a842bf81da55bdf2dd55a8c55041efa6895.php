<?php

/* @SyliusShop/layout.html.twig */
class __TwigTemplate_44824e6178706bb260e913221ddec4e5ffde81d78e51618077859e851dc01081 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sheets' => array($this, 'block_sheets'),
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "locale", array()), 0, 2), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 12
        $this->displayBlock('metatags', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 47
        echo "    ";
        $this->displayBlock('style', $context, $blocks);
        // line 48
        echo "
    ";
        // line 49
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.head"));
        echo "
</head>

<body class=\"pushable\">

    <!-- Menu Mobile -->
    <div class=\"menu-mobile-left-content\">
        <ul>
            <li><a href=\"#\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_hot.png"), "html", null, true);
        echo "\" alt=\"Icon Hot Deals\" /> <p>Hot Deals</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_food.png"), "html", null, true);
        echo "\" alt=\"Icon Food\" /> <p>Food</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_mobile.png"), "html", null, true);
        echo "\" alt=\"Icon Mobile & Tablet\" /> <p>Mobile & Tablet</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_electric.png"), "html", null, true);
        echo "\" alt=\"Icon Electric Appliances\" /> <p>Electric Appliances</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_computer.png"), "html", null, true);
        echo "\" alt=\"Icon Electronics & Technology\" /> <p>Electronics & Technology</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_fashion.png"), "html", null, true);
        echo "\" alt=\"Icon Fashion\" /> <p>Fashion</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_health.png"), "html", null, true);
        echo "\" alt=\"Icon Health & Beauty\" /> <p>Health & Beauty</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_mother.png"), "html", null, true);
        echo "\" alt=\"Icon Mother & Baby\" /> <p>Mother & Baby</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_book.png"), "html", null, true);
        echo "\" alt=\"Icon Books & Stationery\" /> <p>Books & Stationery</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_tablet.png"), "html", null, true);
        echo "\" alt=\"Icon Home & Life\" /> <p>Home & Life</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_sport.png"), "html", null, true);
        echo "\" alt=\"Icon Sports & Outdoors\" /> <p>Sports & Outdoors</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_auto.png"), "html", null, true);
        echo "\" alt=\"Icon Auto & Moto\" /> <p>Auto & Moto</p></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_voucher.png"), "html", null, true);
        echo "\" alt=\"Icon Voucher Service\" /> <p>Voucher Service</p></a></li>
        </ul>
    </div>
    <!-- Header Box -->
    <div class=\"wrappage\">
        <header class=\"relative full-width box-shadow\">
            ";
        // line 75
        $this->loadTemplate("@SyliusShop/_header.html.twig", "@SyliusShop/layout.html.twig", 75)->display($context);
        // line 76
        echo "
            ";
        // line 77
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_header"));
        echo "



        </header>

        <!-- Content Box -->
        <div class=\"relative clearfix full-width\">
            <div class=\"container\">
                ";
        // line 86
        $this->loadTemplate("@SyliusShop/_flashes.html.twig", "@SyliusShop/layout.html.twig", 86)->display($context);
        // line 87
        echo "            </div>
            ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "        </div>

        <!-- Footer Box -->
        <footer class=\"relative full-width\">
            <div class=\" top-footer full-width\">
                <div class=\"clearfix container-web relative\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-9 col-sm-12 clear-padding col-xs-12\">
                                <div class=\"clearfix text-subscribe text-subscribe\">
                                    <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
                                    <p>";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.newsletter_description"), "html", null, true);
        echo "</p>
                                    <p>";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.getupdate"), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"clearfix form-subscribe\">
                                    <input type=\"text\" name=\"email-subscribe\" placeholder=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.enter_email"), "html", null, true);
        echo "\">
                                    <button class=\"animate-default button-hover-red\">";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.subscribe"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                            <div class=\"clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right\">
                                <a href=\"#\"><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/social_tw-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Twiter\"></a>
                                <a href=\"#\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/social_fa-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Facebook\"></a>
                                <a href=\"#\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/social_int-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Instagram\"></a>
                                <a href=\"#\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/social_yt-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Youtube\" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix container-web relative\">
                <div class=\" container clear-padding\">
                    <div class=\"row\">
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.my_account"), "html", null, true);
        echo "</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">My Account</a></li>
                                <li><a href=\"#\">Login</a></li>
                                <li><a href=\"#\">My Cart</a></li>
                                <li><a href=\"#\">My Wishlist</a></li>
                                <li><a href=\"#\">My Compare</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>information</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">Information</a></li>
                                <li><a href=\"#\">Orders History</a></li>
                                <li><a href=\"#\">My Wishlist</a></li>
                                <li><a href=\"#\">Privacy Policy</a></li>
                                <li><a href=\"#\">Site Map</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>our services</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">Product Recall</a></li>
                                <li><a href=\"#\">Gift Vouchers</a></li>
                                <li><a href=\"#\">Returns And Exchanges</a></li>
                                <li><a href=\"#\">Shipping Options</a></li>
                                <li><a href=\"#\">Terms Of Use</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.menu.shop.ui.contact_us"), "html", null, true);
        echo "</p>
                            <ul class=\"icon-footer\">
                                <li><i class=\"fa fa-home\" aria-hidden=\"true\"></i> 262 Milacina Mrest, Behansed, Paris</li>
                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> contact@yourcompany.com</li>
                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 070-7782-9137</li>
                                <li><i class=\"fa fa-fax\" aria-hidden=\"true\"></i> 070-7782-9138</li>
                                <li><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> 09:00 AM - 18:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\" bottom-footer full-width\">
                <div class=\"clearfix container-web\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-7 clear-padding copyright\">
                                <p>Copyright © 2018 by Ginco Group. All Rights Reserved. <span class=\"float-right\">Designed by: <a href=\"\">InfoSys</a> </span></p>
                            </div>
                            <div class=\"clearfix footer-icon-bottom col-md-5 float-right clear-padding\">
                                <div class=\"icon_logo_footer float-right\">
                                    <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/image_payment_footer-min.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




    </div>

    <!-- End Footer Box -->
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/bootstrap.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/multirange.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/slick.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
";
        // line 192
        $this->displayBlock('scripts', $context, $blocks);
        // line 193
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/owl.carousel.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/owl.carousel.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/js/scripts.js"), "html", null, true);
        echo "\" defer=\"\"></script>

    ";
        // line 197
        $this->displayBlock('javascripts', $context, $blocks);
        // line 202
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ginco Marketplace";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/icon-font-linea.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/multirange.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/themify-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/effect.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/product.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/slick.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/slick-theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/category.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/cartpage.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/contact.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/owl.theme.default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/owl.carousel.min.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/home.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/css/responsive.css"), "html", null, true);
        echo "\">
    ";
        // line 40
        $this->displayBlock('sheets', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.stylesheets"));
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_sheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

        // line 41
        echo "        ";
        $this->loadTemplate("@SyliusUi/_stylesheets.html.twig", "@SyliusShop/layout.html.twig", 41)->display(array_merge($context, array("path" => "assets/shop/css/style.css")));
        // line 42
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_style($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 88
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 192
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 197
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        echo "        ";
        $this->loadTemplate("@SyliusUi/_javascripts.html.twig", "@SyliusShop/layout.html.twig", 198)->display(array_merge($context, array("path" => "assets/shop/js/app.js")));
        // line 199
        echo "
        ";
        // line 200
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.javascripts"));
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 200,  521 => 199,  518 => 198,  512 => 197,  500 => 192,  488 => 88,  477 => 47,  469 => 42,  466 => 41,  460 => 40,  451 => 45,  448 => 44,  446 => 40,  442 => 39,  438 => 38,  433 => 36,  429 => 35,  425 => 34,  421 => 33,  417 => 32,  413 => 31,  409 => 30,  405 => 29,  401 => 28,  397 => 27,  393 => 26,  389 => 25,  385 => 24,  381 => 23,  377 => 22,  373 => 21,  366 => 16,  360 => 15,  353 => 13,  347 => 12,  335 => 8,  326 => 202,  324 => 197,  319 => 195,  315 => 194,  310 => 193,  308 => 192,  304 => 191,  300 => 190,  296 => 189,  292 => 188,  274 => 173,  250 => 152,  217 => 122,  204 => 112,  200 => 111,  196 => 110,  192 => 109,  185 => 105,  181 => 104,  175 => 101,  171 => 100,  158 => 89,  156 => 88,  153 => 87,  151 => 86,  139 => 77,  136 => 76,  134 => 75,  125 => 69,  121 => 68,  117 => 67,  113 => 66,  109 => 65,  105 => 64,  101 => 63,  97 => 62,  93 => 61,  89 => 60,  85 => 59,  81 => 58,  77 => 57,  66 => 49,  63 => 48,  60 => 47,  58 => 15,  55 => 14,  53 => 12,  46 => 8,  38 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"{{ app.request.locale|slice(0, 2) }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% block title %}Ginco Marketplace{% endblock %}</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    {% block metatags %}
    {% endblock %}

    {% block stylesheets %}
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/icon-font-linea.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/multirange.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/bootstrap-theme.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/themify-icons.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/style.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/effect.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/product.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/slick.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/slick-theme.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/category.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/cartpage.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/contact.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/owl.theme.default.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/owl.carousel.min.css') }}\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/home.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/syliusshop/css/responsive.css') }}\">
    {% block sheets %}
        {% include '@SyliusUi/_stylesheets.html.twig' with {'path': 'assets/shop/css/style.css'} %}

    {% endblock %}

        {{ sonata_block_render_event('sylius.shop.layout.stylesheets') }}
    {% endblock %}
    {% block style %}{% endblock %}

    {{ sonata_block_render_event('sylius.shop.layout.head') }}
</head>

<body class=\"pushable\">

    <!-- Menu Mobile -->
    <div class=\"menu-mobile-left-content\">
        <ul>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_hot.png') }}\" alt=\"Icon Hot Deals\" /> <p>Hot Deals</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_food.png') }}\" alt=\"Icon Food\" /> <p>Food</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_mobile.png') }}\" alt=\"Icon Mobile & Tablet\" /> <p>Mobile & Tablet</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_electric.png') }}\" alt=\"Icon Electric Appliances\" /> <p>Electric Appliances</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_computer.png') }}\" alt=\"Icon Electronics & Technology\" /> <p>Electronics & Technology</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_fashion.png') }}\" alt=\"Icon Fashion\" /> <p>Fashion</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_health.png') }}\" alt=\"Icon Health & Beauty\" /> <p>Health & Beauty</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_mother.png') }}\" alt=\"Icon Mother & Baby\" /> <p>Mother & Baby</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_book.png') }}\" alt=\"Icon Books & Stationery\" /> <p>Books & Stationery</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_tablet.png') }}\" alt=\"Icon Home & Life\" /> <p>Home & Life</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_sport.png') }}\" alt=\"Icon Sports & Outdoors\" /> <p>Sports & Outdoors</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_auto.png') }}\" alt=\"Icon Auto & Moto\" /> <p>Auto & Moto</p></a></li>
            <li><a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/icon_voucher.png') }}\" alt=\"Icon Voucher Service\" /> <p>Voucher Service</p></a></li>
        </ul>
    </div>
    <!-- Header Box -->
    <div class=\"wrappage\">
        <header class=\"relative full-width box-shadow\">
            {% include '@SyliusShop/_header.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.layout.after_header') }}



        </header>

        <!-- Content Box -->
        <div class=\"relative clearfix full-width\">
            <div class=\"container\">
                {% include '@SyliusShop/_flashes.html.twig' %}
            </div>
            {% block content %} {% endblock %}
        </div>

        <!-- Footer Box -->
        <footer class=\"relative full-width\">
            <div class=\" top-footer full-width\">
                <div class=\"clearfix container-web relative\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-9 col-sm-12 clear-padding col-xs-12\">
                                <div class=\"clearfix text-subscribe text-subscribe\">
                                    <i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
                                    <p>{{ 'sylius.menu.shop.ui.newsletter_description'|trans }}</p>
                                    <p>{{ 'sylius.menu.shop.ui.getupdate'|trans }}</p>
                                </div>
                                <div class=\"clearfix form-subscribe\">
                                    <input type=\"text\" name=\"email-subscribe\" placeholder=\"{{ 'sylius.menu.shop.ui.enter_email'|trans }}\">
                                    <button class=\"animate-default button-hover-red\">{{ 'sylius.menu.shop.ui.subscribe'|trans }}</button>
                                </div>
                            </div>
                            <div class=\"clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right\">
                                <a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/social_tw-min.png') }}\" alt=\"Icon Social Twiter\"></a>
                                <a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/social_fa-min.png') }}\" alt=\"Icon Social Facebook\"></a>
                                <a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/social_int-min.png') }}\" alt=\"Icon Social Instagram\"></a>
                                <a href=\"#\"><img src=\"{{ asset('bundles/syliusshop/img/social_yt-min.png') }}\" alt=\"Icon Social Youtube\" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix container-web relative\">
                <div class=\" container clear-padding\">
                    <div class=\"row\">
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>{{ 'sylius.menu.shop.ui.my_account'|trans }}</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">My Account</a></li>
                                <li><a href=\"#\">Login</a></li>
                                <li><a href=\"#\">My Cart</a></li>
                                <li><a href=\"#\">My Wishlist</a></li>
                                <li><a href=\"#\">My Compare</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>information</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">Information</a></li>
                                <li><a href=\"#\">Orders History</a></li>
                                <li><a href=\"#\">My Wishlist</a></li>
                                <li><a href=\"#\">Privacy Policy</a></li>
                                <li><a href=\"#\">Site Map</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>our services</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">Product Recall</a></li>
                                <li><a href=\"#\">Gift Vouchers</a></li>
                                <li><a href=\"#\">Returns And Exchanges</a></li>
                                <li><a href=\"#\">Shipping Options</a></li>
                                <li><a href=\"#\">Terms Of Use</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>{{ 'sylius.menu.shop.ui.contact_us'|trans }}</p>
                            <ul class=\"icon-footer\">
                                <li><i class=\"fa fa-home\" aria-hidden=\"true\"></i> 262 Milacina Mrest, Behansed, Paris</li>
                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> contact@yourcompany.com</li>
                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 070-7782-9137</li>
                                <li><i class=\"fa fa-fax\" aria-hidden=\"true\"></i> 070-7782-9138</li>
                                <li><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> 09:00 AM - 18:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\" bottom-footer full-width\">
                <div class=\"clearfix container-web\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-7 clear-padding copyright\">
                                <p>Copyright © 2018 by Ginco Group. All Rights Reserved. <span class=\"float-right\">Designed by: <a href=\"\">InfoSys</a> </span></p>
                            </div>
                            <div class=\"clearfix footer-icon-bottom col-md-5 float-right clear-padding\">
                                <div class=\"icon_logo_footer float-right\">
                                    <img src=\"{{ asset('bundles/syliusshop/img/image_payment_footer-min.png') }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




    </div>

    <!-- End Footer Box -->
    <script src=\"{{ asset('bundles/syliusshop/js/jquery-3.3.1.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('bundles/syliusshop/js/bootstrap.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('bundles/syliusshop/js/multirange.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('bundles/syliusshop/js/slick.min.js') }}\" defer=\"\"></script>
{% block scripts %} {% endblock %}
    <script src=\"{{ asset('bundles/syliusshop/js/owl.carousel.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('bundles/syliusshop/js/owl.carousel.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('bundles/syliusshop/js/scripts.js') }}\" defer=\"\"></script>

    {% block javascripts %}
        {% include '@SyliusUi/_javascripts.html.twig' with {'path': 'assets/shop/js/app.js'} %}

        {{ sonata_block_render_event('sylius.shop.layout.javascripts') }}
    {% endblock %}
</body>
</html>
", "@SyliusShop/layout.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/layout.html.twig");
    }
}

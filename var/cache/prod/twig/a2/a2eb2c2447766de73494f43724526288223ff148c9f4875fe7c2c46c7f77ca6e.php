<?php

/* @SyliusShop/Cart/_widget.html.twig */
class __TwigTemplate_41b8558eb8c5fbbbc34b630170593887b2ad0e5aaf2ad5d4ef7e6ae2a124f6e6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/_widget.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Cart/_widget.html.twig", 1);
        // line 2
        echo "
    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.before_widget_content", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 3, $this->source); })()))));
        echo "


<div class=\"clearfix cart-website absolute\" onclick=\"showCartBoxDetail()\">
    <img alt=\"Icon Cart\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/syliusshop/img/icon_cart.png"), "html", null, true);
        echo "\" />
    <p class=\"count-total-shopping absolute\"> ";
        // line 8
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 8, $this->source); })()), "itemsTotal", array()));
        echo "</p>
</div>
";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.after_widget_content", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 10, $this->source); })()))));
        echo "

<div class=\"cart-detail-header border\">
    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 13, $this->source); })()), "empty", array())) {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_cart_is_empty"), "html", null, true);
            echo ".
    ";
        } else {
            // line 16
            echo "    <div class=\"relative\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 17, $this->source); })()), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "
            <div class=\"product-cart-son clearfix\">

                <div class=\"info-product-cart float-left\">
                    <p class=\"title-product title-hover-black\"><a class=\"animate-default\" href=\"#\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product", array()), "html", null, true);
                echo "</a></p>
                    <p class=\"clearfix price-product\">";
                // line 23
                echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, $context["item"], "unitPrice", array()));
                echo " <span class=\"total-product-cart-son\">(x";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", array()), "html", null, true);
                echo ")</span></p>
                </div>
            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
        </div>
    </div>

    <div class=\"relative border no-border-l no-border-r total-cart-header\">
        <p class=\"bold clear-margin\">Subtotal:</p>
        <p class=\" clear-margin bold\">\$700</p>
    </div>
    <div class=\"relative btn-cart-header\">
        <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_summary");
            echo "\" class=\"uppercase bold animate-default\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_and_edit_cart"), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_start");
            echo "\" class=\"uppercase bold button-hover-red animate-default\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.checkout"), "html", null, true);
            echo "</a>
    </div>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.after_popup_content", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 42, $this->source); })()))));
        echo "
</div>
<div class=\"mask-search absolute clearfix\" onclick=\"hiddenBoxSearchMobile()\"></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  116 => 41,  108 => 38,  102 => 37,  91 => 28,  78 => 23,  74 => 22,  68 => 18,  64 => 17,  61 => 16,  55 => 14,  53 => 13,  47 => 10,  42 => 8,  38 => 7,  31 => 3,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.before_widget_content', {'cart': cart}) }}


<div class=\"clearfix cart-website absolute\" onclick=\"showCartBoxDetail()\">
    <img alt=\"Icon Cart\" src=\"{{ asset('bundles/syliusshop/img/icon_cart.png') }}\" />
    <p class=\"count-total-shopping absolute\"> {{ money.convertAndFormat(cart.itemsTotal) }}</p>
</div>
{{ sonata_block_render_event('sylius.shop.partial.cart.summary.after_widget_content', {'cart': cart}) }}

<div class=\"cart-detail-header border\">
    {% if cart.empty %}
    {{ 'sylius.ui.your_cart_is_empty'|trans }}.
    {% else %}
    <div class=\"relative\">
        {% for item in cart.items %}

            <div class=\"product-cart-son clearfix\">

                <div class=\"info-product-cart float-left\">
                    <p class=\"title-product title-hover-black\"><a class=\"animate-default\" href=\"#\">{{ item.product }}</a></p>
                    <p class=\"clearfix price-product\">{{ money.convertAndFormat(item.unitPrice) }} <span class=\"total-product-cart-son\">(x{{ item.quantity }})</span></p>
                </div>
            </div>

        {% endfor %}

        </div>
    </div>

    <div class=\"relative border no-border-l no-border-r total-cart-header\">
        <p class=\"bold clear-margin\">Subtotal:</p>
        <p class=\" clear-margin bold\">\$700</p>
    </div>
    <div class=\"relative btn-cart-header\">
        <a href=\"{{ path('sylius_shop_cart_summary') }}\" class=\"uppercase bold animate-default\">{{ 'sylius.ui.view_and_edit_cart'|trans }}</a>
        <a href=\"{{ path('sylius_shop_checkout_start') }}\" class=\"uppercase bold button-hover-red animate-default\">{{ 'sylius.ui.checkout'|trans }}</a>
    </div>
    {% endif %}

    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.after_popup_content', {'cart': cart}) }}
</div>
<div class=\"mask-search absolute clearfix\" onclick=\"hiddenBoxSearchMobile()\"></div>", "@SyliusShop/Cart/_widget.html.twig", "/Applications/MAMP/htdocs/gincomarket/app/themes/GincoTheme/SyliusShopBundle/views/Cart/_widget.html.twig");
    }
}

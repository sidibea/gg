<?php

/* @SyliusAdmin/Macro/breadcrumb.html.twig */
class __TwigTemplate_a00b20e37419c22eab4ce74ed155d0c4db649d919a95eb6af7ecec1dab25f51b extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Macro/breadcrumb.html.twig"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_crumble($__crumbs__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "crumbs" => $__crumbs__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            // line 2
            echo "    ";
            $context["_breadcrumb"] = $this->loadTemplate("@SyliusUi/Macro/breadcrumb.html.twig", "@SyliusAdmin/Macro/breadcrumb.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            echo $context["_breadcrumb"]->macro_crumble((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new Twig_Error_Runtime('Variable "crumbs" does not exist.', 4, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration"));
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Macro/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  49 => 3,  46 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro crumble(crumbs = {}) %}
    {% import '@SyliusUi/Macro/breadcrumb.html.twig' as _breadcrumb %}

    {{ _breadcrumb.crumble(crumbs, path('sylius_admin_dashboard'), 'sylius.ui.administration'|trans) }}
{% endmacro %}
", "@SyliusAdmin/Macro/breadcrumb.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Macro/breadcrumb.html.twig");
    }
}

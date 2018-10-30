<?php

/* @SyliusUi/Macro/flags.html.twig */
class __TwigTemplate_1b8ba722a5b0bbaceabca6c0d8bb9704150d9ff21899dbdb03814939755feb2e extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/flags.html.twig"));

        // line 4
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_fromCountryCode($__country_code__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "country_code" => $__country_code__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromCountryCode"));

            // line 2
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["country_code"]) || array_key_exists("country_code", $context) ? $context["country_code"] : (function () { throw new Twig_Error_Runtime('Variable "country_code" does not exist.', 2, $this->source); })())), "html", null, true);
            echo " flag\"></i>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_fromLocaleCode($__locale_code__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "locale_code" => $__locale_code__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromLocaleCode"));

            // line 6
            echo "    ";
            $context["flags"] = $this;
            // line 7
            echo "    ";
            echo $context["flags"]->macro_fromCountryCode(twig_slice($this->env, (isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new Twig_Error_Runtime('Variable "locale_code" does not exist.', 7, $this->source); })()),  -2));
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
        return "@SyliusUi/Macro/flags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 7,  79 => 6,  64 => 5,  49 => 2,  34 => 1,  26 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro fromCountryCode(country_code) %}
    <i class=\"{{ country_code|lower }} flag\"></i>
{% endmacro %}

{% macro fromLocaleCode(locale_code) %}
    {% import _self as flags %}
    {{ flags.fromCountryCode(locale_code|slice(-2)) }}
{% endmacro %}", "@SyliusUi/Macro/flags.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/flags.html.twig");
    }
}
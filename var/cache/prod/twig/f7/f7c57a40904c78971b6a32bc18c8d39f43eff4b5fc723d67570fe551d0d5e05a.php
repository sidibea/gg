<?php

/* SyliusUiBundle:Macro:headers.html.twig */
class __TwigTemplate_6182b261731f995f0b139ac9aa0da41a21f7c327c85ee93f623768165958bdb0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:headers.html.twig"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_default($__header__ = null, $__icon__ = null, $__subheader__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "header" => $__header__,
            "icon" => $__icon__,
            "subheader" => $__subheader__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            echo "<h3 class=\"ui header\">
    ";
            // line 3
            if ( !twig_test_empty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 3, $this->source); })()))) {
                // line 4
                echo "    <i class=\"circular ";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 4, $this->source); })()), "html", null, true);
                echo " icon\"></i>
    ";
            }
            // line 6
            echo "    <div class=\"content\">
        ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "
        ";
            // line 8
            if ( !twig_test_empty((isset($context["subheader"]) || array_key_exists("subheader", $context) ? $context["subheader"] : (function () { throw new Twig_Error_Runtime('Variable "subheader" does not exist.', 8, $this->source); })()))) {
                // line 9
                echo "        <div class=\"sub header\">";
                echo twig_escape_filter($this->env, (isset($context["subheader"]) || array_key_exists("subheader", $context) ? $context["subheader"] : (function () { throw new Twig_Error_Runtime('Variable "subheader" does not exist.', 9, $this->source); })()), "html", null, true);
                echo "</div>
        ";
            }
            // line 11
            echo "    </div>
</h3>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  68 => 9,  66 => 8,  62 => 7,  59 => 6,  53 => 4,  51 => 3,  48 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro default(header, icon, subheader) %}
<h3 class=\"ui header\">
    {% if icon is not empty %}
    <i class=\"circular {{ icon }} icon\"></i>
    {% endif %}
    <div class=\"content\">
        {{ header }}
        {% if subheader is not empty %}
        <div class=\"sub header\">{{ subheader }}</div>
        {% endif %}
    </div>
</h3>
{% endmacro %}
", "SyliusUiBundle:Macro:headers.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Macro/headers.html.twig");
    }
}

<?php

/* @BitBagSyliusCmsPlugin/Shop/Media/Show/image.html.twig */
class __TwigTemplate_fe8fa4f7baa70be31017d8e81613bf709a370f9525700e5da1e2737b67c32163 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Shop/Media/Show/image.html.twig"));

        // line 1
        echo "<img  src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new Twig_Error_Runtime('Variable "media" does not exist.', 1, $this->source); })()), "path", array()), "html", null, true);
        echo "\" />
<a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new Twig_Error_Runtime('Variable "media" does not exist.', 2, $this->source); })()), "alt", array()), "html", null, true);
        echo "\"></a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Shop/Media/Show/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<img  src=\"{{ media.path }}\" />
<a href=\"{{ media.alt }}\"></a>

", "@BitBagSyliusCmsPlugin/Shop/Media/Show/image.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/bitbag/cms-plugin/src/Resources/views/Shop/Media/Show/image.html.twig");
    }
}

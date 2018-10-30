<?php

/* @BitBagSyliusCmsPlugin/Grid/Form/_importForm.html.twig */
class __TwigTemplate_205d0fba362cd687986bec624dcf0208b2bf2e97ed1b937985973cd73695dc2b extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Grid/Form/_importForm.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->source); })()), array(0 => "@BitBagSyliusCmsPlugin/Form/theme.html.twig"), true);
        // line 2
        echo "<div class=\"bitbag-cms-import \">
    <form method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_admin_import_data", array("resourceName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "get", array(0 => "resourceName"), "method"))), "html", null, true);
        echo "\" novalidate=\"novalidate\" class=\"ui form\">

        <div class=\"ui action input\">
            <input type=\"text\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bitbag_sylius_cms_plugin.ui.csv_file"), "html", null, true);
        echo "\" readonly>

            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "file", array()), 'widget');
        echo "

            <button class=\"ui teal left labeled icon button\">
                <i class=\"upload icon\"></i>
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bitbag_sylius_cms_plugin.ui.import"), "html", null, true);
        echo "
            </button>
        </div>

        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "_token", array()), 'widget');
        echo "
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Grid/Form/_importForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  49 => 12,  42 => 8,  37 => 6,  31 => 3,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@BitBagSyliusCmsPlugin/Form/theme.html.twig' %}
<div class=\"bitbag-cms-import \">
    <form method=\"POST\" enctype=\"multipart/form-data\" action=\"{{ path('bitbag_sylius_cms_plugin_admin_import_data', {'resourceName': app.request.get('resourceName')}) }}\" novalidate=\"novalidate\" class=\"ui form\">

        <div class=\"ui action input\">
            <input type=\"text\" placeholder=\"{{ 'bitbag_sylius_cms_plugin.ui.csv_file'|trans }}\" readonly>

            {{ form_widget(form.file) }}

            <button class=\"ui teal left labeled icon button\">
                <i class=\"upload icon\"></i>
                {{ 'bitbag_sylius_cms_plugin.ui.import'|trans }}
            </button>
        </div>

        {{ form_widget(form._token) }}
    </form>
</div>
", "@BitBagSyliusCmsPlugin/Grid/Form/_importForm.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/bitbag/cms-plugin/src/Resources/views/Grid/Form/_importForm.html.twig");
    }
}

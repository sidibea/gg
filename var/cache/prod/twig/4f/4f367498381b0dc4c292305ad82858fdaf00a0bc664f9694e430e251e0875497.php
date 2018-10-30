<?php

/* @BitBagSyliusCmsPlugin/Form/theme.html.twig */
class __TwigTemplate_2e15583bfea7d4284f24f22c31c28890f7ce640d47efbddba56093af085960aa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "@BitBagSyliusCmsPlugin/Form/theme.html.twig", 1);
        $this->blocks = array(
            'bitbag_section_autocomplete_choice_row' => array($this, 'block_bitbag_section_autocomplete_choice_row'),
            'sylius_product_autocomplete_choice_row' => array($this, 'block_sylius_product_autocomplete_choice_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Form/theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bitbag_section_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bitbag_section_autocomplete_choice_row"));

        // line 4
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), 'row', array("remote_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_admin_ajax_section_by_name_phrase"), "load_edit_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_admin_ajax_section_by_code")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_sylius_product_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_autocomplete_choice_row"));

        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'row', array("remote_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_admin_ajax_product_by_name_phrase"), "load_edit_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_by_code")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Form/theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  55 => 7,  45 => 4,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Form/theme.html.twig' %}

{% block bitbag_section_autocomplete_choice_row %}
    {{ form_row(form, {'remote_url': path('bitbag_sylius_cms_plugin_admin_ajax_section_by_name_phrase'), 'load_edit_url': path('bitbag_sylius_cms_plugin_admin_ajax_section_by_code')}) }}
{% endblock %}

{% block sylius_product_autocomplete_choice_row %}
    {{ form_row(form, {'remote_url': path('bitbag_sylius_cms_plugin_admin_ajax_product_by_name_phrase'), 'load_edit_url': path('sylius_admin_ajax_product_by_code')}) }}
{% endblock %}
", "@BitBagSyliusCmsPlugin/Form/theme.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/bitbag/cms-plugin/src/Resources/views/Form/theme.html.twig");
    }
}

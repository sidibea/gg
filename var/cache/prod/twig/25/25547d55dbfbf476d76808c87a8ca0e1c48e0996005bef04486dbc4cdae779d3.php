<?php

/* @BitBagSyliusCmsPlugin/Modal/_resourcePreview.html.twig */
class __TwigTemplate_355ed94ca639f836bc75c1f46708a633705f1c53c17ff3a6aa7c46949ee354cb extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Modal/_resourcePreview.html.twig"));

        // line 1
        echo "<div class=\"ui longer fullscreen modal scrolling\" id=\"bitbag-cms-resource-preview-modal\">
    <div class=\"ui header form\">
        <div class=\"two fields\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_partial_channel_index", array("template" => "@BitBagSyliusCmsPlugin/Modal/_channelSwitch.html.twig")));
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("bitbag_sylius_cms_plugin_admin_partial_locale_index", array("template" => "@BitBagSyliusCmsPlugin/Modal/_localeSwitch.html.twig")));
        echo "
        </div>
    </div>
    <div class=\"content ui loadable form loading\">
        <iframe frameBorder=\"0\"></iframe>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Modal/_resourcePreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 4,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui longer fullscreen modal scrolling\" id=\"bitbag-cms-resource-preview-modal\">
    <div class=\"ui header form\">
        <div class=\"two fields\">
            {{ render(url('sylius_admin_partial_channel_index', {'template': '@BitBagSyliusCmsPlugin/Modal/_channelSwitch.html.twig'})) }}
            {{ render(url('bitbag_sylius_cms_plugin_admin_partial_locale_index', {'template': '@BitBagSyliusCmsPlugin/Modal/_localeSwitch.html.twig'})) }}
        </div>
    </div>
    <div class=\"content ui loadable form loading\">
        <iframe frameBorder=\"0\"></iframe>
    </div>
</div>
", "@BitBagSyliusCmsPlugin/Modal/_resourcePreview.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/bitbag/cms-plugin/src/Resources/views/Modal/_resourcePreview.html.twig");
    }
}

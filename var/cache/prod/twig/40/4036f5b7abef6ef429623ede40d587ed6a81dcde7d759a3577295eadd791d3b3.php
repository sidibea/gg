<?php

/* @SyliusAdmin/_notification.html.twig */
class __TwigTemplate_db501aedc976ef79c4ee2d056de30369993d08dac6b0cae9f4b6f16b7051e084 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/_notification.html.twig"));

        // line 1
        echo "<div class=\"ui floated simple dropdown icon item\" id=\"sylius-version-notification\" data-frequency=\"";
        echo twig_escape_filter($this->env, (isset($context["frequency"]) || array_key_exists("frequency", $context) ? $context["frequency"] : (function () { throw new Twig_Error_Runtime('Variable "frequency" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" data-url=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_get_version");
        echo "\" data-current-version=\"";
        echo twig_escape_filter($this->env, (isset($context["currentVersion"]) || array_key_exists("currentVersion", $context) ? $context["currentVersion"] : (function () { throw new Twig_Error_Runtime('Variable "currentVersion" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <i class=\"outline bell icon\"></i>
    <div class=\"menu\">
        <div class=\"ui message\" id=\"no-notifications\">
            <span>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_new_notifications"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"ui message\" id=\"notifications\">
            <span>
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.there_is_a_new_version_of_sylius_available"), "html", null, true);
        echo "
                <i class=\"remove link icon\" data-dismiss style=\"margin-left: 1em; margin-right: -0.5em;\"></i>
            </span>
            <br/>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.contact_your_technician_to_upgrade"), "html", null, true);
        echo "</span>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/_notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  45 => 9,  38 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui floated simple dropdown icon item\" id=\"sylius-version-notification\" data-frequency=\"{{ frequency }}\" data-url=\"{{ path('sylius_admin_ajax_get_version') }}\" data-current-version=\"{{ currentVersion }}\">
    <i class=\"outline bell icon\"></i>
    <div class=\"menu\">
        <div class=\"ui message\" id=\"no-notifications\">
            <span>{{ 'sylius.ui.no_new_notifications'|trans }}</span>
        </div>
        <div class=\"ui message\" id=\"notifications\">
            <span>
                {{ 'sylius.ui.there_is_a_new_version_of_sylius_available'|trans }}
                <i class=\"remove link icon\" data-dismiss style=\"margin-left: 1em; margin-right: -0.5em;\"></i>
            </span>
            <br/>
            <span>{{ 'sylius.ui.contact_your_technician_to_upgrade'|trans }}</span>
        </div>
    </div>
</div>
", "@SyliusAdmin/_notification.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/_notification.html.twig");
    }
}

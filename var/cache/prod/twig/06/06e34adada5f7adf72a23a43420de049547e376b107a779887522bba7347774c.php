<?php

/* @SyliusAdmin/_search.html.twig */
class __TwigTemplate_c12722535b534aeb16a9c6aed123c1ae7992fa21d71e967891364f80b37486f4 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/_search.html.twig"));

        // line 1
        echo "<div class=\"item\">
    <form method=\"get\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_index");
        echo "\">
        <div class=\"ui inverted transparent icon input\">
            <input type=\"text\" name=\"criteria[search][value]\" placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.search_products"), "html", null, true);
        echo "...\">
            <i class=\"search link icon\"></i>
        </div>
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"item\">
    <form method=\"get\" action=\"{{ path('sylius_admin_product_index') }}\">
        <div class=\"ui inverted transparent icon input\">
            <input type=\"text\" name=\"criteria[search][value]\" placeholder=\"{{ 'sylius.ui.search_products'|trans }}...\">
            <i class=\"search link icon\"></i>
        </div>
    </form>
</div>
", "@SyliusAdmin/_search.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/_search.html.twig");
    }
}

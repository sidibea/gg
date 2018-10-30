<?php

/* @BitBagSyliusCmsPlugin/Modal/_localeSwitch.html.twig */
class __TwigTemplate_ac4b1e1ddfd884c641669cb4e3afa39f5621d9bd00e31774a1ddd666870e563c extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Modal/_localeSwitch.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            echo "    ";
            $context["selected"] = twig_first($this->env, (isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 2, $this->source); })()));
            // line 3
            echo "    ";
            $context["code"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "locale", 1 => twig_get_attribute($this->env, $this->source, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new Twig_Error_Runtime('Variable "selected" does not exist.', 3, $this->source); })()), "code", array())), "method");
            // line 4
            echo "
    <div class=\"field\">
        <label for=\"bitbag_sylius_cms_plugin_locale_switch\" class=\"required\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.locale"), "html", null, true);
            echo "
        </label>
        <select id=\"bitbag_sylius_cms_plugin_locale_switch\" class=\" ui dropdown\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 11
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "code", array()), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, $context["locale"], "code", array()) === (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new Twig_Error_Runtime('Variable "code" does not exist.', 11, $this->source); })()))) ? ("selected") : (""));
                echo ">
                    ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", array()), "html", null, true);
                echo "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </select>
    </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Modal/_localeSwitch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  56 => 12,  49 => 11,  45 => 10,  39 => 7,  34 => 4,  31 => 3,  28 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if locales|length > 0 %}
    {% set selected = locales|first %}
    {% set code = app.request.query.get('locale', selected.code) %}

    <div class=\"field\">
        <label for=\"bitbag_sylius_cms_plugin_locale_switch\" class=\"required\">
            {{ 'sylius.ui.locale'|trans }}
        </label>
        <select id=\"bitbag_sylius_cms_plugin_locale_switch\" class=\" ui dropdown\">
            {% for locale in locales %}
                <option value=\"{{ locale.code }}\" {{ locale.code is same as(code) ? 'selected' : '' }}>
                    {{ locale.name }}
                </option>
            {% endfor %}
        </select>
    </div>
{% endif %}
", "@BitBagSyliusCmsPlugin/Modal/_localeSwitch.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/bitbag/cms-plugin/src/Resources/views/Modal/_localeSwitch.html.twig");
    }
}

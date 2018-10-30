<?php

/* @BitBagSyliusCmsPlugin/Macro/translationForm.html.twig */
class __TwigTemplate_35f4aa594a39314fa6047b5eb84e1c9b84a1ec4095e3058b913814691962b83c extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig"));

        // line 27
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_translationForm($__translations__ = null, $__resource__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "translations" => $__translations__,
            "resource" => $__resource__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationForm"));

            // line 2
            echo "    ";
            $context["image"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", 2);
            // line 3
            echo "    ";
            $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", 3);
            // line 4
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new Twig_Error_Runtime('Variable "translations" does not exist.', 6, $this->source); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
                // line 7
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 8
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 10
                echo $context["flags"]->macro_fromLocaleCode($context["locale"]);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"])), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 12
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 14
                    echo "
                        ";
                    // line 15
                    if (("image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "name", array()))) {
                        // line 16
                        echo "                            ";
                        echo $context["image"]->macro_imageWidget($context["field"]);
                        echo "
                        ";
                    } else {
                        // line 18
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                        ";
                    }
                    // line 20
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                </div>
            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 28
    public function macro_translationFormWithSlug($__translations__ = null, $__slugFieldTemplate__ = null, $__resource__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "translations" => $__translations__,
            "slugFieldTemplate" => $__slugFieldTemplate__,
            "resource" => $__resource__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationFormWithSlug"));

            // line 29
            echo "    ";
            $context["image"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", 29);
            // line 30
            echo "    ";
            $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", 30);
            // line 31
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new Twig_Error_Runtime('Variable "translations" does not exist.', 33, $this->source); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
                // line 34
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 35
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 37
                echo $context["flags"]->macro_fromLocaleCode($context["locale"]);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"])), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 39
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 41
                    echo "
                        ";
                    // line 42
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "name", array()) == "slug")) {
                        // line 43
                        echo "                            ";
                        $this->loadTemplate((isset($context["slugFieldTemplate"]) || array_key_exists("slugFieldTemplate", $context) ? $context["slugFieldTemplate"] : (function () { throw new Twig_Error_Runtime('Variable "slugFieldTemplate" does not exist.', 43, $this->source); })()), "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", 43)->display(array_merge($context, array("slugField" => twig_get_attribute($this->env, $this->source, $context["translationForm"], "slug", array()), "resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 43, $this->source); })()))));
                        // line 44
                        echo "                        ";
                    } elseif (("image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "name", array()))) {
                        // line 45
                        echo "                            ";
                        echo $context["image"]->macro_imageWidget($context["field"]);
                        echo "
                        ";
                    } else {
                        // line 47
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                        ";
                    }
                    // line 49
                    echo "
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                </div>
            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 54,  283 => 51,  268 => 49,  262 => 47,  256 => 45,  253 => 44,  250 => 43,  248 => 42,  245 => 41,  228 => 40,  222 => 39,  215 => 37,  208 => 35,  203 => 34,  186 => 33,  182 => 31,  179 => 30,  176 => 29,  159 => 28,  146 => 25,  130 => 22,  123 => 20,  117 => 18,  111 => 16,  109 => 15,  106 => 14,  102 => 13,  96 => 12,  89 => 10,  82 => 8,  77 => 7,  60 => 6,  56 => 4,  53 => 3,  50 => 2,  34 => 1,  26 => 27,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro translationForm(translations, resource) %}
    {% import '@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig' as image %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui styled fluid accordion\">
        {% for locale, translationForm in translations %}
            <div data-locale=\"{{ locale }}\">
                <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
                    <i class=\"dropdown icon\"></i>
                    {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
                </div>
                <div class=\"ui content{% if 0 == loop.index0 %} active{% endif %}\">
                    {% for field in translationForm %}

                        {% if 'image' == field.vars.name %}
                            {{ image.imageWidget(field) }}
                        {% else %}
                            {{ form_row(field) }}
                        {% endif %}

                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro translationFormWithSlug(translations, slugFieldTemplate, resource) %}
    {% import '@BitBagSyliusCmsPlugin/Macro/imageWidget.html.twig' as image %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui styled fluid accordion\">
        {% for locale, translationForm in translations %}
            <div data-locale=\"{{ locale }}\">
                <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
                    <i class=\"dropdown icon\"></i>
                    {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
                </div>
                <div class=\"ui content{% if 0 == loop.index0 %} active{% endif %}\">
                    {% for field in translationForm %}

                        {% if field.vars.name == 'slug' %}
                            {% include slugFieldTemplate with { 'slugField': translationForm.slug, 'resource': resource } %}
                        {% elseif 'image' == field.vars.name %}
                            {{ image.imageWidget(field) }}
                        {% else %}
                            {{ form_row(field) }}
                        {% endif %}

                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}", "@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", "/Applications/MAMP/htdocs/gincomarket/vendor/bitbag/cms-plugin/src/Resources/views/Macro/translationForm.html.twig");
    }
}

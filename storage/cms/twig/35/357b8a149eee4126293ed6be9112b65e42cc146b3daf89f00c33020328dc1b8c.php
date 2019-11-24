<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Users/alexandrefoisy/web sites/alexcorp/plugins/individuart/work/components/worklist/default.htm */
class __TwigTemplate_88db85df2b00fa5d26a20cad0b10f0aa050235a0c6327e0fbe28823c4acea76a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categories", [], "any", false, false, false, 1);
        // line 2
        $context["works"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "works", [], "any", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        if ( !twig_test_empty(($context["categories"] ?? null))) {
            // line 5
            echo "<div class=\"work-categories\">
    <div class=\"work-category selected\" id=\"cat-0\">all categories</div>
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 8
                echo "    <div class=\"work-category\" id=\"cat-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 8), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 8), "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</div>
";
        }
        // line 12
        echo "
<div class=\"work-list\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["works"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            echo "<div class=\"work ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "css_categories", [], "any", false, false, false, 14), "html", null, true);
            echo "\" id=\"work";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
        <img class=\"work__background\" src=\"";
            // line 15
            echo "plugins/individuart/work/assets/images/fnd-work.gif";
            echo "\" alt=\"\">
        <img class=\"work__image\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["work"], "featured_image", [], "any", false, false, false, 16), "path", [], "any", false, false, false, 16), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
        <div class=\"work__info\">
            <div class=\"work__infotable\">
                <div class=\"work__infocell\">
                    <h2 class=\"work__title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</h2>
                    <h3 class=\"work__subtitle\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "</h3>
                    <a href=\"#view-work/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "slug", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"work__button\">view project</a>
                </div>
            </div>
    </div>

    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>

<div id=\"workdetail\"></div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/alexcorp/plugins/individuart/work/components/worklist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  102 => 22,  98 => 21,  94 => 20,  85 => 16,  81 => 15,  71 => 14,  67 => 12,  63 => 10,  52 => 8,  48 => 7,  44 => 5,  42 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set categories = __SELF__.categories %}
{% set works = __SELF__.works %}

{% if categories is not empty %}
<div class=\"work-categories\">
    <div class=\"work-category selected\" id=\"cat-0\">all categories</div>
    {% for cat in categories %}
    <div class=\"work-category\" id=\"cat-{{cat.id}}\">{{cat.name}}</div>
    {% endfor %}
</div>
{% endif %}

<div class=\"work-list\">
    {% for work in works %}<div class=\"work {{work.css_categories}}\" id=\"work{{work.id}}\">
        <img class=\"work__background\" src=\"{{ 'plugins/individuart/work/assets/images/fnd-work.gif'}}\" alt=\"\">
        <img class=\"work__image\" src=\"{{work.featured_image.path}}\" alt=\"{{work.name}}\">
        <div class=\"work__info\">
            <div class=\"work__infotable\">
                <div class=\"work__infocell\">
                    <h2 class=\"work__title\">{{ work.name}}</h2>
                    <h3 class=\"work__subtitle\">{{work.description}}</h3>
                    <a href=\"#view-work/{{work.id}}/{{ work.slug }}\" class=\"work__button\">view project</a>
                </div>
            </div>
    </div>

    </div>{% endfor %}
</div>

<div id=\"workdetail\"></div>", "/Users/alexandrefoisy/web sites/alexcorp/plugins/individuart/work/components/worklist/default.htm", "");
    }
}

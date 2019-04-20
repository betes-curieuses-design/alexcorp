<?php

/* /Volumes/External HD/Clients/www/alexcorp/plugins/individuart/work/components/worklist/default.htm */
class __TwigTemplate_87e86e7edaa922aa72f3d0c1d784eacaaa75068fd512bfb6bd76bc1d194628b7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categories", []);
        // line 2
        $context["works"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "works", []);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", []), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "css_categories", []), "html", null, true);
            echo "\" id=\"work";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", []), "html", null, true);
            echo "\">
        <img class=\"work__background\" src=\"";
            // line 15
            echo "plugins/individuart/work/assets/images/fnd-work.gif";
            echo "\" alt=\"\">
        <img class=\"work__image\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["work"], "featured_image", []), "path", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "name", []), "html", null, true);
            echo "\">
        <div class=\"work__info\">
            <div class=\"work__infotable\">
                <div class=\"work__infocell\">
                    <h2 class=\"work__title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "name", []), "html", null, true);
            echo "</h2>
                    <h3 class=\"work__subtitle\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "description", []), "html", null, true);
            echo "</h3>
                    <a href=\"#view-work/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "id", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["work"], "slug", []), "html", null, true);
            echo "\" class=\"work__button\">Visualisez</a>
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
        return "/Volumes/External HD/Clients/www/alexcorp/plugins/individuart/work/components/worklist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  90 => 22,  86 => 21,  82 => 20,  73 => 16,  69 => 15,  59 => 14,  55 => 12,  51 => 10,  40 => 8,  36 => 7,  32 => 5,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categories = __SELF__.categories %}
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
                    <a href=\"#view-work/{{work.id}}/{{ work.slug }}\" class=\"work__button\">Visualisez</a>
                </div>
            </div>
    </div>

    </div>{% endfor %}
</div>

<div id=\"workdetail\"></div>", "/Volumes/External HD/Clients/www/alexcorp/plugins/individuart/work/components/worklist/default.htm", "");
    }
}

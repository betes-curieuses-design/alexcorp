<?php

/* /Volumes/External HD/Clients/www/alexcorp/plugins/individuart/work/components/worklist/default.htm */
class __TwigTemplate_3c0236cbffd769f9d52c8106c5ad6d89eeeb3afe7bd53bea0db1cb59eb88fef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["categories"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "categories", array());
        // line 2
        $context["works"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "works", array());
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "name", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "css_categories", array()), "html", null, true);
            echo " wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"1s\" id=\"work";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "id", array()), "html", null, true);
            echo "\">
        <img class=\"work__background\" src=\"";
            // line 15
            echo "plugins/individuart/work/assets/images/fnd-work.gif";
            echo "\" alt=\"\">
        <img class=\"work__image\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "featured_image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "name", array()), "html", null, true);
            echo "\">
        <div class=\"work__info\">
            <div class=\"work__infotable\">
                <div class=\"work__infocell\">
                    <h2 class=\"work__title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "name", array()), "html", null, true);
            echo "</h2>
                    <h3 class=\"work__subtitle\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "description", array()), "html", null, true);
            echo "</h3>
                    <a href=\"#view-work/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "slug", array()), "html", null, true);
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
        return array (  100 => 28,  86 => 22,  82 => 21,  78 => 20,  69 => 16,  65 => 15,  55 => 14,  51 => 12,  47 => 10,  36 => 8,  32 => 7,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
    {% for work in works %}<div class=\"work {{work.css_categories}} wow bounceIn\" data-wow-duration=\"1s\" data-wow-delay=\"1s\" id=\"work{{work.id}}\">
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

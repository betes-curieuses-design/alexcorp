<?php

/* /Volumes/External HD/Clients/www/alexcorp/plugins/individuart/work/components/worklist/workdetail.htm */
class __TwigTemplate_9403ddc73b7f75ea7711023b2e84126ccbaab0da5c50ed9da35f75d49fb62cb2 extends Twig_Template
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
        $context["work"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "work", []);
        // line 2
        echo "<div class=\"work-background\">
    <div class=\"work-info\">
        <img src=\"";
        // line 4
        echo "plugins/individuart/work/assets/images/btn-close.svg";
        echo "\" class=\"work-close\">
        <h1 class=\"work-detail__title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "name", []), "html", null, true);
        echo "</h1>
        <h2 class=\"work-detail__subtitle\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "description", []), "html", null, true);
        echo "</h2>
        ";
        // line 7
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "lst_categories", []))) {
            // line 8
            echo "        <h3 class=\"work-detail__categories\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "lst_categories", []), "html", null, true);
            echo "</h3>
        ";
        }
        // line 10
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "long_description", [])) {
            // line 11
            echo "        <div class=\"work-detail__longdesc\">
            ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "long_description", []);
            echo "
        </div>
        ";
        }
        // line 15
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "url", [])) {
            // line 16
            echo "        <a class=\"work-detail__link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "url", []), "html", null, true);
            echo "\" onclick=\"window.open(this.href);return false;\">Visitez le site Web</a>
        ";
        }
        // line 18
        echo "

    </div>
    <div class=\"work-detail\">
        <div class=\"work-detail__content\">";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "content", []);
        echo "</div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/alexcorp/plugins/individuart/work/components/worklist/workdetail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 12,  52 => 11,  49 => 10,  43 => 8,  41 => 7,  37 => 6,  33 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set work = __SELF__.work %}
<div class=\"work-background\">
    <div class=\"work-info\">
        <img src=\"{{ 'plugins/individuart/work/assets/images/btn-close.svg'}}\" class=\"work-close\">
        <h1 class=\"work-detail__title\">{{work.name}}</h1>
        <h2 class=\"work-detail__subtitle\">{{work.description}}</h2>
        {% if work.lst_categories is not empty %}
        <h3 class=\"work-detail__categories\">{{work.lst_categories}}</h3>
        {% endif %}
        {% if work.long_description %}
        <div class=\"work-detail__longdesc\">
            {{work.long_description | raw}}
        </div>
        {% endif %}
        {% if work.url %}
        <a class=\"work-detail__link\" href=\"{{work.url}}\" onclick=\"window.open(this.href);return false;\">Visitez le site Web</a>
        {% endif %}


    </div>
    <div class=\"work-detail\">
        <div class=\"work-detail__content\">{{work.content | raw}}</div>
    </div>
</div>
", "/Volumes/External HD/Clients/www/alexcorp/plugins/individuart/work/components/worklist/workdetail.htm", "");
    }
}

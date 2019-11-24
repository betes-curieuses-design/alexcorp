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

/* /Users/alexandrefoisy/web sites/alexcorp/plugins/individuart/work/components/worklist/workdetail.htm */
class __TwigTemplate_ef60d96f413d95e66f18a76aa38fdc6891d94262099c344b8f44b3c483b6628e extends \Twig\Template
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
        $context["work"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "work", [], "any", false, false, false, 1);
        // line 2
        echo "<div class=\"work-background\">
    <div class=\"work-info\">
        <img src=\"";
        // line 4
        echo "plugins/individuart/work/assets/images/btn-close.svg";
        echo "\" class=\"work-close\">
        <h1 class=\"work-detail__title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>
        <h2 class=\"work-detail__subtitle\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "description", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
        ";
        // line 7
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "lst_categories", [], "any", false, false, false, 7))) {
            // line 8
            echo "        <h3 class=\"work-detail__categories\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "lst_categories", [], "any", false, false, false, 8), "html", null, true);
            echo "</h3>
        ";
        }
        // line 10
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "long_description", [], "any", false, false, false, 10)) {
            // line 11
            echo "        <div class=\"work-detail__longdesc\">
            ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "long_description", [], "any", false, false, false, 12);
            echo "
        </div>
        ";
        }
        // line 15
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "url", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <a class=\"work-detail__link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "url", [], "any", false, false, false, 16), "html", null, true);
            echo "\" onclick=\"window.open(this.href);return false;\">ir al proyecto</a>
        ";
        }
        // line 18
        echo "

    </div>
    <div class=\"work-detail\">
        <div class=\"work-detail__content\">";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["work"] ?? null), "content", [], "any", false, false, false, 22);
        echo "</div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/alexcorp/plugins/individuart/work/components/worklist/workdetail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  82 => 18,  76 => 16,  73 => 15,  67 => 12,  64 => 11,  61 => 10,  55 => 8,  53 => 7,  49 => 6,  45 => 5,  41 => 4,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set work = __SELF__.work %}
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
        <a class=\"work-detail__link\" href=\"{{work.url}}\" onclick=\"window.open(this.href);return false;\">ir al proyecto</a>
        {% endif %}


    </div>
    <div class=\"work-detail\">
        <div class=\"work-detail__content\">{{work.content | raw}}</div>
    </div>
</div>
", "/Users/alexandrefoisy/web sites/alexcorp/plugins/individuart/work/components/worklist/workdetail.htm", "");
    }
}

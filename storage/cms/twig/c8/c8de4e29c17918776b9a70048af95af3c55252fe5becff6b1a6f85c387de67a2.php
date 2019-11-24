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

/* /Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/pages/home.htm */
class __TwigTemplate_72642b4c15b5683f0a55f52984b5391da5111bd513b82eb6aa809be7146397e5 extends \Twig\Template
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
        echo "<section id=\"portfolio\" class=\"miniporfolio\">
    <div class=\"container\">
        <h2 class=\"h2-responsive text-underline text-primary text-center mb-5 wow fadeInDown\">
            Mes créations
        </h2>
        ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Worklist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "    </div>
</section>
<section id=\"aboutme\" class=\"intro\">
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/features"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</section>
<section id=\"skills\" class=\"skills\">
    ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/skills"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "</section>

<section id=\"testimonial\">
    <div class=\"container wow fadeInDown\">
        ";
        // line 18
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("testimonials"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 19
        echo "    </div>
</section>
<section id=\"contact\" class=\"contact\">
    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 22,  73 => 19,  69 => 18,  63 => 14,  59 => 13,  55 => 11,  51 => 10,  46 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"portfolio\" class=\"miniporfolio\">
    <div class=\"container\">
        <h2 class=\"h2-responsive text-underline text-primary text-center mb-5 wow fadeInDown\">
            Mes créations
        </h2>
        {% component 'Worklist' %}
    </div>
</section>
<section id=\"aboutme\" class=\"intro\">
    {% partial \"home/features\" %}
</section>
<section id=\"skills\" class=\"skills\">
    {% partial \"home/skills\" %}
</section>

<section id=\"testimonial\">
    <div class=\"container wow fadeInDown\">
        {% component 'testimonials' %}
    </div>
</section>
<section id=\"contact\" class=\"contact\">
    {% partial 'home/contact' %}
</section>", "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/pages/home.htm", "");
    }
}

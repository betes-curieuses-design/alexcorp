<?php

/* /Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/pages/home.htm */
class __TwigTemplate_0900b55aa0b7e8c8037d31b5f4cf67724e6b05e3930e2bed9c33f03952c2491e extends Twig_Template
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
        return "/Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  62 => 22,  57 => 19,  53 => 18,  47 => 14,  43 => 13,  39 => 11,  35 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"portfolio\" class=\"miniporfolio\">
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
</section>", "/Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/pages/home.htm", "");
    }
}

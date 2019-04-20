<?php

/* /Volumes/External HD/Clients/www/alexcorp/themes/jtherczeg-corlate/pages/home.htm */
class __TwigTemplate_fbcb5425a6779e7c06cd98815595a6c79c518897e18beebc6b697450d34bbc9c extends Twig_Template
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
        echo "<section id=\"_home\" class=\"no-margin\">
\t";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ShowImages"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</section>

<section id=\"_about\">
\t";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</section>

<section id=\"_competance\">
    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "</section>

<section id=\"_portfolio\">
\t<div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2 style=\"padding-top: 40px ;\">Portfolio</h2>
            </div>
";
        // line 18
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Worklist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 19
        echo "        </div><!--/.container-->
</section>

<section id=\"testimonial\">
    <div class=\"container\">
    ";
        // line 24
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("testimonials"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 25
        echo "</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/alexcorp/themes/jtherczeg-corlate/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  68 => 24,  61 => 19,  57 => 18,  48 => 11,  44 => 10,  39 => 7,  35 => 6,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"_home\" class=\"no-margin\">
\t{% component 'ShowImages' %}
</section>

<section id=\"_about\">
\t{% partial \"features\" %}
</section>

<section id=\"_competance\">
    {% partial \"services\" %}
</section>

<section id=\"_portfolio\">
\t<div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2 style=\"padding-top: 40px ;\">Portfolio</h2>
            </div>
{% component 'Worklist' %}
        </div><!--/.container-->
</section>

<section id=\"testimonial\">
    <div class=\"container\">
    {% component 'testimonials' %}
</div>
</section>", "/Volumes/External HD/Clients/www/alexcorp/themes/jtherczeg-corlate/pages/home.htm", "");
    }
}

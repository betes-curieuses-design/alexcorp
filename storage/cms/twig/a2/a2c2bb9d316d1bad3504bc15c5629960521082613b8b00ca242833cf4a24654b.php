<?php

/* /home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/pages/home.htm */
class __TwigTemplate_17b295425b1d057f8ff1244ceb2c916d3fe12e1407cfaab08ac375371867a23e extends Twig_Template
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
        return "/home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  64 => 24,  57 => 19,  53 => 18,  44 => 11,  40 => 10,  35 => 7,  31 => 6,  26 => 3,  22 => 2,  19 => 1,);
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
</section>", "/home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/pages/home.htm", "");
    }
}

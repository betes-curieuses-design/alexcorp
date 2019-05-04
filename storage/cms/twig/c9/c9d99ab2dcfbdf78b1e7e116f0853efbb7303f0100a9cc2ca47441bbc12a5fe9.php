<?php

/* /Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/partials/home/contact.htm */
class __TwigTemplate_9b1c7241cb7237164040bd715e221872b03453b4d59f3eecfbfb712f00d0cf95 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-12 col-md-8 col-lg-6 wow flipInX\">
                <h3 class=\"text-center\">Allons prendre un café</h3>
                ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("simpleContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/partials/home/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-12 col-md-8 col-lg-6 wow flipInX\">
                <h3 class=\"text-center\">Allons prendre un café</h3>
                {% component 'simpleContact' %}
        </div>
    </div>
</div>", "/Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/partials/home/contact.htm", "");
    }
}

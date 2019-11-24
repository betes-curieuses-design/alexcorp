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

/* /Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/home/contact.htm */
class __TwigTemplate_51702dc217711bcd7ba3003d50d41dd76b60020f82563a11ff778e7e0d5f1ffe extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-12 col-md-8 col-lg-6 wow flipInX\">
                <h3 class=\"text-center\">Allons prendre un café</h3>
                ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mycontact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/home/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-12 col-md-8 col-lg-6 wow flipInX\">
                <h3 class=\"text-center\">Allons prendre un café</h3>
                {% component 'mycontact' %}
        </div>
    </div>
</div>", "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/home/contact.htm", "");
    }
}

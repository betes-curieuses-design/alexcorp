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

/* /Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/navbar.htm */
class __TwigTemplate_31223022b586cc8affe06de18a79b0a0d7b5d7c2bd5040a956b8d029caa28db4 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-md fixed-top navbar-light\">
    <div class=\"container\">
    <a href=\"#portfolio\" class=\"navbar-brand d-flex w-50 mr-auto d-block d-md-none smooth\">
        <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/alexfoisy-logo.svg");
        echo "\" title=\"Alexandre Foisy Logo\" class=\"img-fluid\" style=\"width: 150px; height: 60px\">
    </a>
    <div class=\"hamburger hamburger--spring d-flexmr-auto d-md-none float-right\"  data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
        <div class=\"hamburger-box\">
            <div class=\"hamburger-inner\"></div>
        </div>
    </div>
    <div class=\"navbar-collapse collapse\" id=\"navbarCollapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link smooth\" href=\"#portfolio\">Portfolio</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link smooth\" href=\"#aboutme\">À Propos</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav mx-auto d-none d-sm-none d-md-block\">
            <li class=\"nav-item\"><a href=\"#portfolio\" class=\"smooth\">
                <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/alexfoisy-logo.svg");
        echo "\" title=\"Alexandre Foisy Logo\" class=\"img-fluid\" style=\"width: 120px;\">
            </a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link smooth\" href=\"#skills\">Compétences</a>
            </li>
            <li class=\"nav-item mx-auto\">
                <a class=\"nav-link smooth\" href=\"#contact\">Contact</a>
            </li>
        </ul>
    </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 22,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md fixed-top navbar-light\">
    <div class=\"container\">
    <a href=\"#portfolio\" class=\"navbar-brand d-flex w-50 mr-auto d-block d-md-none smooth\">
        <img src=\"{{ 'assets/images/alexfoisy-logo.svg'|theme }}\" title=\"Alexandre Foisy Logo\" class=\"img-fluid\" style=\"width: 150px; height: 60px\">
    </a>
    <div class=\"hamburger hamburger--spring d-flexmr-auto d-md-none float-right\"  data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
        <div class=\"hamburger-box\">
            <div class=\"hamburger-inner\"></div>
        </div>
    </div>
    <div class=\"navbar-collapse collapse\" id=\"navbarCollapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link smooth\" href=\"#portfolio\">Portfolio</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link smooth\" href=\"#aboutme\">À Propos</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav mx-auto d-none d-sm-none d-md-block\">
            <li class=\"nav-item\"><a href=\"#portfolio\" class=\"smooth\">
                <img src=\"{{ 'assets/images/alexfoisy-logo.svg'|theme }}\" title=\"Alexandre Foisy Logo\" class=\"img-fluid\" style=\"width: 120px;\">
            </a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link smooth\" href=\"#skills\">Compétences</a>
            </li>
            <li class=\"nav-item mx-auto\">
                <a class=\"nav-link smooth\" href=\"#contact\">Contact</a>
            </li>
        </ul>
    </div>
    </div>
</nav>", "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/navbar.htm", "");
    }
}

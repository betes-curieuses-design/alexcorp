<?php

/* /Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/partials/navbar.htm */
class __TwigTemplate_b9656aaf7e674adf7dd6c9925285129857a5f12e3ff6b0e94dede7b35d8498be extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-md fixed-top navbar-light\">
    <div class=\"container\">
    <a href=\"#portfolio\" class=\"navbar-brand d-flex w-50 mr-auto d-block d-md-none smooth\">
        <img src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/alexfoisy-logo.svg");
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
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/alexfoisy-logo.svg");
        echo "\" title=\"Alexandre Foisy Logo\" class=\"img-fluid\" style=\"width: 250px;\">
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
        return "/Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 22,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-md fixed-top navbar-light\">
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
                <img src=\"{{ 'assets/images/alexfoisy-logo.svg'|theme }}\" title=\"Alexandre Foisy Logo\" class=\"img-fluid\" style=\"width: 250px;\">
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
</nav>", "/Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/partials/navbar.htm", "");
    }
}

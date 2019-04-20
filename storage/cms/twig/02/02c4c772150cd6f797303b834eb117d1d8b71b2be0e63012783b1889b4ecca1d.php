<?php

/* /home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/partials/nav.htm */
class __TwigTemplate_79c2263f104f5f0982560448d14c255640d2028bf736ba5f8df8c234ca458aaa extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/alexfoisy_logo.png");
        echo "\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"#_home\"> Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#_about\"> À Propos</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#_competance\"> Compétances</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#_portfolio\"> Portfolio</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#_contact\"> Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->";
    }

    public function getTemplateName()
    {
        return "/home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/images/alexfoisy_logo.png'|theme }}\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"#_home\"> Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#_about\"> À Propos</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#_competance\"> Compétances</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#_portfolio\"> Portfolio</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#_contact\"> Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->", "/home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/partials/nav.htm", "");
    }
}

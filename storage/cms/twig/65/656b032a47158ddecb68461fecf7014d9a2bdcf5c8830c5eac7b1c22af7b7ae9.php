<?php

/* /home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/pages/404.htm */
class __TwigTemplate_bcc82f2d2e9234312f1b3b7dc2f6ff9b56ca7d3e2857499c21342389074ff584 extends Twig_Template
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
        echo "<section id=\"error\" class=\"container text-center\" style=\"margin-top:100px;\">
        <h1>STAY CALM AND DON'T FREAK OUT!!</h1>
        <p>The page you are looking for doesn't exist or another error occurred.</p>
        <a class=\"btn btn-primary\" href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->";
    }

    public function getTemplateName()
    {
        return "/home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"error\" class=\"container text-center\" style=\"margin-top:100px;\">
        <h1>STAY CALM AND DON'T FREAK OUT!!</h1>
        <p>The page you are looking for doesn't exist or another error occurred.</p>
        <a class=\"btn btn-primary\" href=\"{{ 'home'|page }}\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->", "/home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/pages/404.htm", "");
    }
}

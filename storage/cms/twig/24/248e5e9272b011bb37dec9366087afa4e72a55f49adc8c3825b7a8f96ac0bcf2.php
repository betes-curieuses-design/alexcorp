<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/pages/404.htm */
class __TwigTemplate_a4213095afa0ab5de678ecd88e40609f946c874631d66a1ba3665cbe50ce9e5b extends Twig_Template
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
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"error\" class=\"container text-center\" style=\"margin-top:100px;\">
        <h1>STAY CALM AND DON'T FREAK OUT!!</h1>
        <p>The page you are looking for doesn't exist or another error occurred.</p>
        <a class=\"btn btn-primary\" href=\"{{ 'home'|page }}\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->", "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/pages/404.htm", "");
    }
}

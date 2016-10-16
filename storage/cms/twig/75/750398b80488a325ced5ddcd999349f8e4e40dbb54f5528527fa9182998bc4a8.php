<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/pages/404.htm */
class __TwigTemplate_112e5fbb8400c431f365bc308f9012d98fff7b0d02e12fcf218753013e2e6ef8 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFilter("home");
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
}
/* <section id="error" class="container text-center" style="margin-top:100px;">*/
/*         <h1>STAY CALM AND DON'T FREAK OUT!!</h1>*/
/*         <p>The page you are looking for doesn't exist or another error occurred.</p>*/
/*         <a class="btn btn-primary" href="{{ 'home'|page }}">GO BACK TO THE HOMEPAGE</a>*/
/*     </section><!--/#error-->*/

<?php

/* /Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/partials/footer.htm */
class __TwigTemplate_7cef11875b792f9bebc142ca2fcf4d392ac9858b719fd73676e056d7540bb12d extends Twig_Template
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
        echo "<section id=\"footer\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 text-center text-white\">
            <p style=\"display: inline-block\">
                Me suivre sur :
            </p>&nbsp;&nbsp;&nbsp;
            <a href=\"https://www.facebook.com/AfoisyGraphiste\" class=\"text-white\" target=\"_blank\">
                <i class=\"fa fa-facebook fa-lg\" aria-hidden=\"true\"></i>
            </a>&nbsp;&nbsp;&nbsp;
            <a href=\"https://www.linkedin.com/in/alexandre-foisy\" class=\"text-white\" target=\"_blank\">
            <i class=\"fa fa-linkedin fa-lg\" aria-hidden=\"true\"></i>
            </a>&nbsp;&nbsp;
            <a href=\"http://pinterest.com/alexfoisy/\" class=\"text-white\" target=\"_blank\">
                <i class=\"fa fa-pinterest fa-lg\" aria-hidden=\"true\"></i>
            </a>
        </div>
        <div class=\"col-12 text-center text-white\">
            <p>&copy; Alexandre Foisy, 2012 - ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
        </div>
    </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 19,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"footer\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 text-center text-white\">
            <p style=\"display: inline-block\">
                Me suivre sur :
            </p>&nbsp;&nbsp;&nbsp;
            <a href=\"https://www.facebook.com/AfoisyGraphiste\" class=\"text-white\" target=\"_blank\">
                <i class=\"fa fa-facebook fa-lg\" aria-hidden=\"true\"></i>
            </a>&nbsp;&nbsp;&nbsp;
            <a href=\"https://www.linkedin.com/in/alexandre-foisy\" class=\"text-white\" target=\"_blank\">
            <i class=\"fa fa-linkedin fa-lg\" aria-hidden=\"true\"></i>
            </a>&nbsp;&nbsp;
            <a href=\"http://pinterest.com/alexfoisy/\" class=\"text-white\" target=\"_blank\">
                <i class=\"fa fa-pinterest fa-lg\" aria-hidden=\"true\"></i>
            </a>
        </div>
        <div class=\"col-12 text-center text-white\">
            <p>&copy; Alexandre Foisy, 2012 - {{ \"now\"|date(\"Y\") }}</p>
        </div>
    </div>
    </div>
</section>", "/Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/partials/footer.htm", "");
    }
}

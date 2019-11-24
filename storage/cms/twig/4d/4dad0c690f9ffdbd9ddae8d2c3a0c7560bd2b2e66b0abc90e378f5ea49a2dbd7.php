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

/* /Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/footer.htm */
class __TwigTemplate_5240fc03b8a79a73b093859e5ed0944f3ae865caaaff08f04999494b8d34f0c7 extends \Twig\Template
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
        echo "<section id=\"footer\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 text-center text-white\">
            <p style=\"display: inline-block\">
                Me suivre sur :
            </p>
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
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
        </div>
    </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 text-center text-white\">
            <p style=\"display: inline-block\">
                Me suivre sur :
            </p>
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
</section>", "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/footer.htm", "");
    }
}

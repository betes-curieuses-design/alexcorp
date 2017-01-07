<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/footer.htm */
class __TwigTemplate_22bd555a1774f77f9ddc49dc192611edc970815721ae9f3d8a5c958f1b30fa36 extends Twig_Template
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
    <div class=\"row\">
        <!-- Social Medias -->
        <div class=\"hidden-xs\">
            <div class=\"col-sm-8\">
                <ul>
                    <li>Me suivre sur :</li>
                    <li><a href=\"https://www.facebook.com/AfoisyGraphiste\" target=\"new\" class=\"fa solo fa-facebook\"></a>
                    </li>
                    <li><a href=\"https://twitter.com/spectralshard\" target=\"new\" class=\"fa solo fa-twitter\"></a></li>
                    <li><a href=\"http://pinterest.com/alexfoisy/\" target=\"new\" class=\"fa solo fa-pinterest\"></a></li>
                </ul>
            </div>
        </div>
        <div class=\"hidden-sm hidden-lg\">
            <div class=\"ccol-xs-12 center\">
                <ul>
                    <li><a href=\"https://www.facebook.com/AfoisyGraphiste\" target=\"new\" class=\"fa solo fa-facebook\"></a>
                    </li>
                    <li><a href=\"https://twitter.com/spectralshard\" target=\"new\" class=\"fa solo fa-twitter\"></a></li>
                    <li><a href=\"http://pinterest.com/alexfoisy/\" target=\"new\" class=\"fa solo fa-pinterest\"></a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class=\"hidden-xs\">
            <div class=\"col-sm-4 col-xs-12 text-right\">
                &copy; Alexandre Foisy, 2012 - ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"hidden-sm hidden-lg\">
            <div class=\"col-sm-4 col-xs-12 center little-top-buffer\">
                &copy; Alexandre Foisy, 2012 - ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 34,  49 => 29,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row\">
        <!-- Social Medias -->
        <div class=\"hidden-xs\">
            <div class=\"col-sm-8\">
                <ul>
                    <li>Me suivre sur :</li>
                    <li><a href=\"https://www.facebook.com/AfoisyGraphiste\" target=\"new\" class=\"fa solo fa-facebook\"></a>
                    </li>
                    <li><a href=\"https://twitter.com/spectralshard\" target=\"new\" class=\"fa solo fa-twitter\"></a></li>
                    <li><a href=\"http://pinterest.com/alexfoisy/\" target=\"new\" class=\"fa solo fa-pinterest\"></a></li>
                </ul>
            </div>
        </div>
        <div class=\"hidden-sm hidden-lg\">
            <div class=\"ccol-xs-12 center\">
                <ul>
                    <li><a href=\"https://www.facebook.com/AfoisyGraphiste\" target=\"new\" class=\"fa solo fa-facebook\"></a>
                    </li>
                    <li><a href=\"https://twitter.com/spectralshard\" target=\"new\" class=\"fa solo fa-twitter\"></a></li>
                    <li><a href=\"http://pinterest.com/alexfoisy/\" target=\"new\" class=\"fa solo fa-pinterest\"></a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class=\"hidden-xs\">
            <div class=\"col-sm-4 col-xs-12 text-right\">
                &copy; Alexandre Foisy, 2012 - {{ \"now\"|date(\"Y\") }}
            </div>
        </div>
        <div class=\"hidden-sm hidden-lg\">
            <div class=\"col-sm-4 col-xs-12 center little-top-buffer\">
                &copy; Alexandre Foisy, 2012 - {{ \"now\"|date(\"Y\") }}
            </div>
        </div>

    </div>
</div>", "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/footer.htm", "");
    }
}

<?php

/* /home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/partials/footer.htm */
class __TwigTemplate_264e64d04e8d986be2a31971a6e331cd8c2d58d72f99d659ec3e8998e8a9a9f7 extends Twig_Template
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
        return "/home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 34,  49 => 29,  19 => 1,);
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
</div>", "/home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/partials/footer.htm", "");
    }
}

<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/footer.htm */
class __TwigTemplate_8be49e6eb117b3e17508475d1f8ea028f0390f1f8558108fd641b6daf75f9d5a extends Twig_Template
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
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <!-- Social Medias -->*/
/*         <div class="hidden-xs">*/
/*             <div class="col-sm-8">*/
/*                 <ul>*/
/*                     <li>Me suivre sur :</li>*/
/*                     <li><a href="https://www.facebook.com/AfoisyGraphiste" target="new" class="fa solo fa-facebook"></a>*/
/*                     </li>*/
/*                     <li><a href="https://twitter.com/spectralshard" target="new" class="fa solo fa-twitter"></a></li>*/
/*                     <li><a href="http://pinterest.com/alexfoisy/" target="new" class="fa solo fa-pinterest"></a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="hidden-sm hidden-lg">*/
/*             <div class="ccol-xs-12 center">*/
/*                 <ul>*/
/*                     <li><a href="https://www.facebook.com/AfoisyGraphiste" target="new" class="fa solo fa-facebook"></a>*/
/*                     </li>*/
/*                     <li><a href="https://twitter.com/spectralshard" target="new" class="fa solo fa-twitter"></a></li>*/
/*                     <li><a href="http://pinterest.com/alexfoisy/" target="new" class="fa solo fa-pinterest"></a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Copyright -->*/
/*         <div class="hidden-xs">*/
/*             <div class="col-sm-4 col-xs-12 text-right">*/
/*                 &copy; Alexandre Foisy, 2012 - {{ "now"|date("Y") }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="hidden-sm hidden-lg">*/
/*             <div class="col-sm-4 col-xs-12 center little-top-buffer">*/
/*                 &copy; Alexandre Foisy, 2012 - {{ "now"|date("Y") }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/

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

/* /Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/home/features.htm */
class __TwigTemplate_8af9b366eb16df22b61c55f6ee28470668cbb8bc6b63eac2fbeaa509ef6ec715 extends \Twig\Template
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
        echo "<div class=\"container wow fadeInRight\">
    <div class=\"center\">
        <div class=\"row\">
            <div class=\"clearfix\">
                <div id=\"content-box\" class=\"col-sm-12 col-md-8 col-lg-6 float-right bg-primary\">
                    <h2>À propos de moi</h2>
                    <p>Passionné par les nouvelles technologies, j'exerce mes compétences dans l'industrie de l'édition et du Web.
                    </p>
                    <p>On dit de moi que je suis quelqu'un de fiable, de ponctuel et de constamment positif.
                    <p> J'adore dépasser mes limites et avoir de nouveaux défis.</p>
                    <p>J'ai obtenu mon diplôme en design graphique au collège Marie-Victorin en 2012 et j'exerce ce métier avec
                        passion et dynamisme.</p>

                    <p>Référence :<br/>
                        <a href=\"http://archives.paxmagazine.ca/digital/2017/06/fr/#page/3\"
                           target=\"_blank\" class=\"text-white\">
                           PAX magazine
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/home/features.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container wow fadeInRight\">
    <div class=\"center\">
        <div class=\"row\">
            <div class=\"clearfix\">
                <div id=\"content-box\" class=\"col-sm-12 col-md-8 col-lg-6 float-right bg-primary\">
                    <h2>À propos de moi</h2>
                    <p>Passionné par les nouvelles technologies, j'exerce mes compétences dans l'industrie de l'édition et du Web.
                    </p>
                    <p>On dit de moi que je suis quelqu'un de fiable, de ponctuel et de constamment positif.
                    <p> J'adore dépasser mes limites et avoir de nouveaux défis.</p>
                    <p>J'ai obtenu mon diplôme en design graphique au collège Marie-Victorin en 2012 et j'exerce ce métier avec
                        passion et dynamisme.</p>

                    <p>Référence :<br/>
                        <a href=\"http://archives.paxmagazine.ca/digital/2017/06/fr/#page/3\"
                           target=\"_blank\" class=\"text-white\">
                           PAX magazine
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/partials/home/features.htm", "");
    }
}

<?php

/* /Volumes/External HD/Clients/www/alexcorp/themes/jtherczeg-corlate/layouts/default.htm */
class __TwigTemplate_9c8c4338b7a8c51673f0ee4456a64abf9ecebf641f910a26f989a02edc6ecaaf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "meta_description", []), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Alexandre Foisy\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</title>
\t
\t<!-- core CSS -->
\t";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 13
        echo "\t<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/style.css", 4 => "assets/css/responsive.css"]);
        // line 18
        echo "\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico/apple-touch-icon-precomposed.png");
        echo "\">
</head><!--/head-->

<body class=\"homepage\">

<header id=\"header\">
        ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "</header><!--/header-->

    ";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 30
        echo "
<!--Contact form-->
<section id=\"_contact\">
    <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 col-sm-12\">
                <div class=\"widget\">
                    <h3 class=\"text-center\">Allons prendre un café</h3>
                    ";
        // line 38
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("simpleContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
</section><!--/#bottom-->

<footer id=\"footer\">
\t";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "</footer><!--/#footer-->
<a id=\"scrollUp\" href=\"#_home\" title=\"Retour vers le haut de la page\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>

<!-- Scripts -->
<script type=\"text/javascript\" src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/html5shiv.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/respond.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<script>
    //Smoothscroll
    \$(function() {
        \$('a[href*=\"#_\"]:not([href=\"#_\"])').click(function() {
            if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'') && location.hostname == this.hostname) {
                var target = \$(this.hash);
                target = target.length ? target : \$('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    \$('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
";
        // line 75
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 76
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        echo "             
         
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/alexcorp/themes/jtherczeg-corlate/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 76,  152 => 75,  131 => 57,  127 => 56,  123 => 55,  119 => 54,  115 => 53,  111 => 52,  107 => 51,  101 => 47,  97 => 46,  88 => 39,  84 => 38,  74 => 30,  72 => 29,  68 => 27,  64 => 26,  55 => 20,  51 => 19,  48 => 18,  45 => 13,  42 => 12,  36 => 9,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"author\" content=\"Alexandre Foisy\">
    <title>{{ this.page.title }}</title>
\t
\t<!-- core CSS -->
\t{% styles %}
\t<link href=\"{{ ['assets/css/bootstrap.min.css',
\t\t'assets/css/font-awesome.min.css',
\t\t'assets/css/animate.min.css',
\t\t'assets/css/style.css',
\t\t'assets/css/responsive.css',
\t]|theme }}\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/ico/favicon.ico'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ 'assets/images/ico/apple-touch-icon-precomposed.png'|theme }}\">
</head><!--/head-->

<body class=\"homepage\">

<header id=\"header\">
        {% partial \"nav\" %}
</header><!--/header-->

    {% page %}

<!--Contact form-->
<section id=\"_contact\">
    <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 col-sm-12\">
                <div class=\"widget\">
                    <h3 class=\"text-center\">Allons prendre un café</h3>
                    {% component 'simpleContact' %}
                </div>
            </div>
        </div>
    </div>
</section><!--/#bottom-->

<footer id=\"footer\">
\t{% partial \"footer\" %}
</footer><!--/#footer-->
<a id=\"scrollUp\" href=\"#_home\" title=\"Retour vers le haut de la page\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>

<!-- Scripts -->
<script type=\"text/javascript\" src=\"{{ 'assets/js/html5shiv.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/respond.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.isotope.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/main.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
<script>
    //Smoothscroll
    \$(function() {
        \$('a[href*=\"#_\"]:not([href=\"#_\"])').click(function() {
            if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'') && location.hostname == this.hostname) {
                var target = \$(this.hash);
                target = target.length ? target : \$('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    \$('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
{% framework extras %}
{% scripts %}             
         
</body>
</html>", "/Volumes/External HD/Clients/www/alexcorp/themes/jtherczeg-corlate/layouts/default.htm", "");
    }
}

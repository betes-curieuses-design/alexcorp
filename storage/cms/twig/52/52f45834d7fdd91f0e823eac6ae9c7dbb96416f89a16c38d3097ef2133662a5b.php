<?php

/* /home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/layouts/default.htm */
class __TwigTemplate_09d99430b81d8e52be578072a98e8fba506fe9a799291ada3d15d8aed019e4d6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Alexandre Foisy\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
\t
\t<!-- core CSS -->
\t";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 13
        echo "\t<link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/style.css", 4 => "assets/css/responsive.css"));
        // line 18
        echo "\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/apple-touch-icon-precomposed.png");
        echo "\">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-70359045-5\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-70359045-5');
</script>
</head><!--/head-->

<body class=\"homepage\">

<header id=\"header\">
        ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "</header><!--/header-->

    ";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 39
        echo "
<!--Contact form-->
<section id=\"_contact\">
    <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 col-sm-12\">
                <div class=\"widget\">
                    <h3 class=\"text-center\">Allons prendre un café</h3>
                    ";
        // line 47
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("simpleContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 48
        echo "                </div>
            </div>
        </div>
    </div>
</section><!--/#bottom-->

<footer id=\"footer\">
\t";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "</footer><!--/#footer-->
<a id=\"scrollUp\" href=\"#_home\" title=\"Retour vers le haut de la page\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>

<!-- Scripts -->
<script type=\"text/javascript\" src=\"";
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/html5shiv.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 61
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/respond.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 62
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 63
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 64
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 65
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/main.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/wow.min.js");
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
        // line 85
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 86
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        echo "             
         
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 86,  158 => 85,  136 => 66,  132 => 65,  128 => 64,  124 => 63,  120 => 62,  116 => 61,  112 => 60,  106 => 56,  102 => 55,  93 => 48,  89 => 47,  79 => 39,  77 => 38,  73 => 36,  69 => 35,  51 => 20,  47 => 19,  44 => 18,  41 => 13,  38 => 12,  32 => 9,  27 => 7,  19 => 1,);
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-70359045-5\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-70359045-5');
</script>
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
</html>", "/home/betescur/public_html/alexcorp.ca/themes/jtherczeg-corlate/layouts/default.htm", "");
    }
}

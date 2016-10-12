<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/layouts/default.htm */
class __TwigTemplate_dedd5f51ead1e1b8cad821cabe694153bbf7538398473337097f16e8d2a09748 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Alexandre Foisy\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
\t
\t<!-- core CSS -->
\t";
        // line 12
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 13
        echo "\t<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/prettyPhoto.css", 4 => "assets/css/style.css", 5 => "assets/css/responsive.css"));
        // line 19
        echo "\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">
</head><!--/head-->

<body class=\"homepage\">

<header id=\"header\">
        ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "</header><!--/header-->

    ";
        // line 33
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 34
        echo "
<!--Contact form-->
<section id=\"bottom\">
    <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3 col-sm-12\">
                <div class=\"widget\">
                    <h3>Me contacter</h3>
                    ";
        // line 42
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("simpleContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 43
        echo "                </div>
            </div>
        </div>
    </div>
</section><!--/#bottom-->

<footer id=\"footer\">
\t";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "</footer><!--/#footer-->
<a id=\"scrollUp\" href=\"#main-slider\" title=\"Retour vers le haut de la page\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>

<!-- Scripts -->
<script type=\"text/javascript\" src=\"";
        // line 55
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/html5shiv.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 56
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/respond.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 57
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 58
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 59
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 60
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 61
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/main.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 62
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<script>
    //Smoothscroll
    \$(function() {
        \$('a[href*=\"#\"]:not([href=\"#\"])').click(function() {
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
        // line 80
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 81
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        echo "             
         
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 81,  164 => 80,  143 => 62,  139 => 61,  135 => 60,  131 => 59,  127 => 58,  123 => 57,  119 => 56,  115 => 55,  109 => 51,  105 => 50,  96 => 43,  92 => 42,  82 => 34,  80 => 33,  76 => 31,  72 => 30,  63 => 24,  59 => 23,  55 => 22,  51 => 21,  47 => 20,  44 => 19,  41 => 13,  38 => 12,  32 => 9,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/* 	<meta http-equiv="content-type" content="text/html; charset=utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="{{ this.page.meta_description }}">*/
/*     <meta name="author" content="Alexandre Foisy">*/
/*     <title>{{ this.page.title }}</title>*/
/* 	*/
/* 	<!-- core CSS -->*/
/* 	{% styles %}*/
/* 	<link href="{{ ['assets/css/bootstrap.min.css',*/
/* 		'assets/css/font-awesome.min.css',*/
/* 		'assets/css/animate.min.css',*/
/* 		'assets/css/prettyPhoto.css',*/
/* 		'assets/css/style.css',*/
/* 		'assets/css/responsive.css',*/
/* 	]|theme }}" rel="stylesheet">*/
/*     <link rel="shortcut icon" href="{{ 'assets/images/ico/favicon.ico'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ 'assets/images/ico/apple-touch-icon-144-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ 'assets/images/ico/apple-touch-icon-114-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ 'assets/images/ico/apple-touch-icon-72-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" href="{{ 'assets/images/ico/apple-touch-icon-57-precomposed.png'|theme }}">*/
/* </head><!--/head-->*/
/* */
/* <body class="homepage">*/
/* */
/* <header id="header">*/
/*         {% partial "nav" %}*/
/* </header><!--/header-->*/
/* */
/*     {% page %}*/
/* */
/* <!--Contact form-->*/
/* <section id="bottom">*/
/*     <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">*/
/*         <div class="row">*/
/*             <div class="col-md-6 col-md-offset-3 col-sm-12">*/
/*                 <div class="widget">*/
/*                     <h3>Me contacter</h3>*/
/*                     {% component 'simpleContact' %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section><!--/#bottom-->*/
/* */
/* <footer id="footer">*/
/* 	{% partial "footer" %}*/
/* </footer><!--/#footer-->*/
/* <a id="scrollUp" href="#main-slider" title="Retour vers le haut de la page"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>*/
/* */
/* <!-- Scripts -->*/
/* <script type="text/javascript" src="{{ 'assets/js/html5shiv.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/respond.min.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/jquery.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/bootstrap.min.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/jquery.prettyPhoto.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/jquery.isotope.min.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/main.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/wow.min.js'|theme }}"></script>*/
/* <script>*/
/*     //Smoothscroll*/
/*     $(function() {*/
/*         $('a[href*="#"]:not([href="#"])').click(function() {*/
/*             if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {*/
/*                 var target = $(this.hash);*/
/*                 target = target.length ? target : $('[name=' + this.hash.slice(1) +']');*/
/*                 if (target.length) {*/
/*                     $('html, body').animate({*/
/*                         scrollTop: target.offset().top*/
/*                     }, 1000);*/
/*                     return false;*/
/*                 }*/
/*             }*/
/*         });*/
/*     });*/
/*     </script>*/
/* {% framework extras %}*/
/* {% scripts %}             */
/*          */
/* </body>*/
/* </html>*/

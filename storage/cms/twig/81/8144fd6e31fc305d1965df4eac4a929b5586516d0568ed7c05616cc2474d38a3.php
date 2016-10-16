<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/pages/offline.htm */
class __TwigTemplate_38f9a28a09e8936184bc00b2c0c19b84014c5083228205fc595fe384a1ca36d3 extends Twig_Template
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
<meta charset=\"UTF-8\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<meta name=\"description\" content=\"Corlate Maintenance\">
<meta name=\"keywords\" content=\"business, corporate, portfolio, blog, responsive, bootstrap\">
<meta name=\"author\" content=\"JoomShaper and József Tamás Herczeg\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
<title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</title>
<link href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/offline.css"));
        echo "\" rel=\"stylesheet\">
<!-- favicon -->
<link rel=\"shortcut icon\" href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 14
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">
</head>
<body>
<div id=\"border\">
<div>
\t<img src=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/alexfoisy_logo.png");
        echo "\" alt=\"logo\"><br/>
</div>\t
<h2>Maintenance en cours!</h2>
\t<p>Ce site Web est actuellement en maintenance<br>Revenez très bientôt!</p>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/pages/offline.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  36 => 11,  30 => 10,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* <meta charset="UTF-8">*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/* <meta name="description" content="Corlate Maintenance">*/
/* <meta name="keywords" content="business, corporate, portfolio, blog, responsive, bootstrap">*/
/* <meta name="author" content="JoomShaper and József Tamás Herczeg">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/* <title>{{ this.page.title }} | {{ this.theme.site_name }}</title>*/
/* <link href="{{ ['assets/css/offline.css']|theme }}" rel="stylesheet">*/
/* <!-- favicon -->*/
/* <link rel="shortcut icon" href="{{ 'assets/images/ico/favicon.ico'|theme }}">*/
/* <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ 'assets/images/ico/apple-touch-icon-144-precomposed.png'|theme }}">*/
/* <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ 'assets/images/ico/apple-touch-icon-114-precomposed.png'|theme }}">*/
/* <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ 'assets/images/ico/apple-touch-icon-72-precomposed.png'|theme }}">*/
/* <link rel="apple-touch-icon-precomposed" href="{{ 'assets/images/ico/apple-touch-icon-57-precomposed.png'|theme }}">*/
/* </head>*/
/* <body>*/
/* <div id="border">*/
/* <div>*/
/* 	<img src="{{ 'assets/images/alexfoisy_logo.png'|theme }}" alt="logo"><br/>*/
/* </div>	*/
/* <h2>Maintenance en cours!</h2>*/
/* 	<p>Ce site Web est actuellement en maintenance<br>Revenez très bientôt!</p>*/
/* </div>*/
/* </body>*/
/* </html>*/

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

/* /Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/layouts/default.htm */
class __TwigTemplate_c7bcb01da9f24ae5ffbedf211e3589222abca695a043259f4d5620941a3a2f85 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-70359045-5\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-70359045-5');
    </script>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "meta_title", [], "any", false, false, false, 13), "html", null, true);
        echo "</title>
    <meta name=\"google-site-verification\" content=\"r9dMKr9Xx2ryKMGP6Wg20WTKsjJYjMZsa2CJxCWXRyk\" />
    <meta name=\"description\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "meta_description", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "meta_title", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Alexandre Foisy\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\"/>
    <meta property=\"og:title\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "meta_title", [], "any", false, false, false, 20), "html", null, true);
        echo "\" />
    <meta property=\"og:description\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 21), "settings", [], "any", false, false, false, 21), "meta_description", [], "any", false, false, false, 21), "html", null, true);
        echo "\" />
    <meta property=\"og:url\" content=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:image\" content=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/share.jpg");
        echo "\"/>
    <meta property=\"og:site_name\" content=\"Portfolio d'Alexandre Foisy\" />
    <meta name=\"twitter:title\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 27), "meta_title", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
    <meta name=\"twitter:description\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 28), "meta_description", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
    <meta name=\"twitter:image\" content=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/share.jpg");
        echo "\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\"/>
    <link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon.png");
        echo "\" rel=\"apple-touch-icon\">
    <link href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/theme.css", 1 => "assets/vendor/animate/animate.min.css"]);
        // line 38
        echo "\" rel=\"stylesheet\">
    ";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 40
        echo "</head>
<body>
<header>
    ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "</header>
<main id=\"page\">
    ";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 47
        echo "</main>
<footer>
    ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "</footer>
<a id=\"scrollUp\" class=\"smooth\" href=\"#portfolio\" title=\"Retour vers le haut de la page\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 52
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 53
                echo "<span id=\"flash\" data-type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "\"></span>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 55
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/jquery-3.4.1.min.js", 1 => "assets/vendor/popper/popper.min.js", 2 => "assets/vendor/wow/dist/wow.min.js", 3 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 4 => "assets/js/main.min.js"]);
        // line 61
        echo "\"></script>
";
        // line 62
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
        // line 63
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 64
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 64,  181 => 63,  166 => 62,  163 => 61,  160 => 55,  151 => 53,  148 => 52,  144 => 50,  140 => 49,  136 => 47,  134 => 46,  130 => 44,  126 => 43,  121 => 40,  118 => 39,  115 => 38,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  95 => 29,  91 => 28,  87 => 27,  82 => 25,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  58 => 16,  54 => 15,  49 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-70359045-5\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-70359045-5');
    </script>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{{ this.page.meta_title }}</title>
    <meta name=\"google-site-verification\" content=\"r9dMKr9Xx2ryKMGP6Wg20WTKsjJYjMZsa2CJxCWXRyk\" />
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"Alexandre Foisy\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"{{ ''|page }}\"/>
    <meta property=\"og:title\" content=\"{{ this.page.meta_title }}\" />
    <meta property=\"og:description\" content=\"{{ this.page.settings.meta_description }}\" />
    <meta property=\"og:url\" content=\"{{ ''|page }}\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:image\" content=\"{{'assets/images/share.jpg'|theme}}\"/>
    <meta property=\"og:site_name\" content=\"Portfolio d'Alexandre Foisy\" />
    <meta name=\"twitter:title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"twitter:description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"twitter:image\" content=\"{{'assets/images/share.jpg'|theme}}\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"{{ 'assets/images/favicon.png'|theme }}\"/>
    <link href=\"{{ 'assets/images/apple-touch-icon.png'|theme }}\" rel=\"apple-touch-icon\">
    <link href=\"{{ 'assets/images/apple-touch-icon-precomposed.png'|theme }}\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"{{ [
    'assets/css/theme.css',
    'assets/vendor/animate/animate.min.css',
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}
</head>
<body>
<header>
    {% partial 'navbar' %}
</header>
<main id=\"page\">
    {% page %}
</main>
<footer>
    {% partial 'footer' %}
</footer>
<a id=\"scrollUp\" class=\"smooth\" href=\"#portfolio\" title=\"Retour vers le haut de la page\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>
{% flash %}
<span id=\"flash\" data-type=\"{{ type }}\" data-message=\"{{ message }}\"></span>
{% endflash %}
<script src=\"{{ [
'assets/vendor/jquery/jquery-3.4.1.min.js',
'assets/vendor/popper/popper.min.js',
'assets/vendor/wow/dist/wow.min.js',
'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
'assets/js/main.min.js',
]|theme }}\"></script>
{% framework extras %}
{% scripts %}
</body>
</html>", "/Users/alexandrefoisy/web sites/alexcorp/themes/alexcorp/layouts/default.htm", "");
    }
}

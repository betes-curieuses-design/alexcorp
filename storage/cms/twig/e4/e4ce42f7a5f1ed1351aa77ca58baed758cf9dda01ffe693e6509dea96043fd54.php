<?php

/* /Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/layouts/default.htm */
class __TwigTemplate_28489c007ef0e130b260df22a26803a2d4f6d71ec56d84569a8cef48533a1e1c extends Twig_Template
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
    <title>Portfolio d'Alexandre Foisy - ";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array())));
        echo "</title>
    <meta name=\"google-site-verification\" content=\"r9dMKr9Xx2ryKMGP6Wg20WTKsjJYjMZsa2CJxCWXRyk\" />
    <meta name=\"description\" content=\"";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "description", array())));
        echo "\">
    <meta name=\"title\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Alexandre Foisy\">
    <meta name=\"robots\" content=\"index,follow\">
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:image\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "og_image", array()), "html", null, true);
        echo "\" />
    <meta property=\"og:title\" content=\"Etfy Design - ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "\" />
    <meta property=\"og:url\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "url", array()), "html", null, true);
        echo "\" />
    <meta property=\"og:site_name\" content=\"Portfolio d'Alexandre Foisy\" />
    <meta property=\"og:description\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "settings", array()), "meta_description", array()), "html", null, true);
        echo "\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.png");
        echo "\"/>
    <link href=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/apple-touch-icon.png");
        echo "\" rel=\"apple-touch-icon\">
    <link href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/apple-touch-icon-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/theme.css", 1 => "assets/vendor/animate/animate.min.css"));
        // line 33
        echo "\" rel=\"stylesheet\">
    ";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 35
        echo "</head>
<body>
<header>
    ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "</header>
<main id=\"page\">
    ";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 42
        echo "</main>
<footer>
    ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "</footer>
<a id=\"scrollUp\" class=\"smooth\" href=\"#portfolio\" title=\"Retour vers le haut de la page\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 47
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 48
                echo "<span id=\"flash\" data-type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "\"></span>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 50
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/vendor/wow/dist/wow.js", 1 => "assets/vendor/popper/popper.js", 2 => "assets/vendor/tether/dist/js/tether.min.js", 3 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 4 => "assets/js/main.js"));
        // line 57
        echo "\"></script>
<script>
    \$(document).ready(function(){
        \$(\".smooth\").on('click', function(event) {
            if (this.hash !== \"\") {
                event.preventDefault();
                var hash = this.hash;
                \$('html, body').animate({
                    scrollTop: \$(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
            }
        });
    });
</script>
";
        // line 73
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 75
        echo "</body>";
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 75,  157 => 74,  150 => 73,  132 => 57,  130 => 51,  127 => 50,  118 => 48,  115 => 47,  111 => 45,  107 => 44,  103 => 42,  101 => 41,  97 => 39,  93 => 38,  88 => 35,  85 => 34,  82 => 33,  80 => 30,  76 => 29,  72 => 28,  68 => 27,  63 => 25,  58 => 23,  54 => 22,  50 => 21,  43 => 17,  39 => 16,  34 => 14,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
    <title>Portfolio d'Alexandre Foisy - {{ this.page.title|_ }}</title>
    <meta name=\"google-site-verification\" content=\"r9dMKr9Xx2ryKMGP6Wg20WTKsjJYjMZsa2CJxCWXRyk\" />
    <meta name=\"description\" content=\"{{ this.page.description|_ }}\">
    <meta name=\"title\" content=\"{{ this.page.title }}\">
    <meta name=\"author\" content=\"Alexandre Foisy\">
    <meta name=\"robots\" content=\"index,follow\">
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:image\" content=\"{{ this.page.og_image }}\" />
    <meta property=\"og:title\" content=\"Etfy Design - {{ this.page.title }}\" />
    <meta property=\"og:url\" content=\"{{ this.page.url }}\" />
    <meta property=\"og:site_name\" content=\"Portfolio d'Alexandre Foisy\" />
    <meta property=\"og:description\" content=\"{{ this.page.settings.meta_description }}\" />
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
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"{{ [
'assets/vendor/wow/dist/wow.js',
'assets/vendor/popper/popper.js',
'assets/vendor/tether/dist/js/tether.min.js',
'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
'assets/js/main.js',
]|theme }}\"></script>
<script>
    \$(document).ready(function(){
        \$(\".smooth\").on('click', function(event) {
            if (this.hash !== \"\") {
                event.preventDefault();
                var hash = this.hash;
                \$('html, body').animate({
                    scrollTop: \$(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
            }
        });
    });
</script>
{% framework extras %}
{% scripts %}
</body>", "/Volumes/External HD/Clients/www/alexcorp/themes/alexcorp/layouts/default.htm", "");
    }
}

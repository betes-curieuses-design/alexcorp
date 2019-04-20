<?php

/* /Volumes/External HD/Clients/www/alexcorp/plugins/betescurieuses/slider/components/showimages/default.htm */
class __TwigTemplate_971c588b17f9aacbb7caf3a10f305225811a086f57f5cdfe5233cfa0e105a717 extends Twig_Template
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
        echo "<div id=\"carousel\" class=\"carousel slide hidden-xs\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sliders"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 5
            echo "            <li data-target=\"#carousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) - 1), "html", null, true);
            echo "\"
                class=\"";
            // line 6
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) == 1)) ? ("active") : (""));
            echo "\"></li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sliders"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 13
            echo "            <div class=\"item ";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) == 1)) ? ("active") : (""));
            echo "\" style=\"width: 100%;\">
                ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["slider"], "link", [])) {
                // line 15
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "link", []), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "target", []), "html", null, true);
                echo "\">
                    ";
            }
            // line 17
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slider"], "image", []), "path", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "name", []), "html", null, true);
            echo "\"
                         class=\"img-responsive center-block\"
                            ";
            // line 19
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["slider"], "map_id", [])) ? (("usemap=\"#" . twig_get_attribute($this->env, $this->source, $context["slider"], "map_id", []))) : ("")), "html", null, true);
            echo ">
                    ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["slider"], "link", [])) {
                // line 21
                echo "                </a>
                ";
            }
            // line 23
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["slider"], "caption", [])) {
                // line 24
                echo "                    <div class=\"carousel-caption\">
                        ";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["slider"], "caption", []);
                echo "
                    </div>
                ";
            }
            // line 28
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["slider"], "map_code", [])) {
                // line 29
                echo "                    <map name=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["slider"], "map_id", [])) ? (twig_get_attribute($this->env, $this->source, $context["slider"], "map_id", [])) : ("")), "html", null, true);
                echo "\">
                        ";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["slider"], "map_code", []);
                echo "
                    </map>
                ";
            }
            // line 33
            echo "            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"fa fa-chevron-left icon-prev\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
        <span class=\"fa fa-chevron-right icon-next\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/alexcorp/plugins/betescurieuses/slider/components/showimages/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 35,  148 => 33,  142 => 30,  137 => 29,  134 => 28,  128 => 25,  125 => 24,  122 => 23,  118 => 21,  116 => 20,  112 => 19,  104 => 17,  96 => 15,  94 => 14,  89 => 13,  72 => 12,  66 => 8,  50 => 6,  45 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"carousel\" class=\"carousel slide hidden-xs\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        {% for slider in sliders %}
            <li data-target=\"#carousel\" data-slide-to=\"{{ loop.index-1 }}\"
                class=\"{{ loop.index == 1 ? 'active':'' }}\"></li>
        {% endfor %}
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        {% for slider in sliders %}
            <div class=\"item {{ loop.index == 1 ? 'active':'' }}\" style=\"width: 100%;\">
                {% if slider.link %}
                <a href=\"{{ slider.link }}\" target=\"{{ slider.target }}\">
                    {% endif %}
                    <img src=\"{{ slider.image.path }}\" alt=\"{{ slider.name }}\"
                         class=\"img-responsive center-block\"
                            {{ slider.map_id ? 'usemap=\"#'~ slider.map_id:'' }}>
                    {% if slider.link %}
                </a>
                {% endif %}
                {% if slider.caption %}
                    <div class=\"carousel-caption\">
                        {{ slider.caption|raw }}
                    </div>
                {% endif %}
                {% if slider.map_code %}
                    <map name=\"{{ slider.map_id ? slider.map_id:'' }}\">
                        {{ slider.map_code|raw }}
                    </map>
                {% endif %}
            </div>
        {% endfor %}
    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"fa fa-chevron-left icon-prev\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
        <span class=\"fa fa-chevron-right icon-next\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>
", "/Volumes/External HD/Clients/www/alexcorp/plugins/betescurieuses/slider/components/showimages/default.htm", "");
    }
}

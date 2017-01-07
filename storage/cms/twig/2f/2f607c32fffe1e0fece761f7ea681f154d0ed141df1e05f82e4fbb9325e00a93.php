<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/plugins/betescurieuses/slider/components/showimages/default.htm */
class __TwigTemplate_ceb0f584e1bdac31fb26bd7c1e3312f753b28bfa988a6071ea83ce633fc2d0ea extends Twig_Template
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
        echo "<div id=\"carousel\" class=\"carousel slide hidden-xs\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
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
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
            echo "\"
                class=\"";
            // line 6
            echo ((($this->getAttribute($context["loop"], "index", array()) == 1)) ? ("active") : (""));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
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
            echo ((($this->getAttribute($context["loop"], "index", array()) == 1)) ? ("active") : (""));
            echo "\" style=\"width: 100%;\">
                ";
            // line 14
            if ($this->getAttribute($context["slider"], "link", array())) {
                // line 15
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "link", array()), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "target", array()), "html", null, true);
                echo "\">
                    ";
            }
            // line 17
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slider"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "name", array()), "html", null, true);
            echo "\"
                         class=\"img-responsive center-block\"
                            ";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute($context["slider"], "map_id", array())) ? (("usemap=\"#" . $this->getAttribute($context["slider"], "map_id", array()))) : ("")), "html", null, true);
            echo ">
                    ";
            // line 20
            if ($this->getAttribute($context["slider"], "link", array())) {
                // line 21
                echo "                </a>
                ";
            }
            // line 23
            echo "                ";
            if ($this->getAttribute($context["slider"], "caption", array())) {
                // line 24
                echo "                    <div class=\"carousel-caption\">
                        ";
                // line 25
                echo $this->getAttribute($context["slider"], "caption", array());
                echo "
                    </div>
                ";
            }
            // line 28
            echo "                ";
            if ($this->getAttribute($context["slider"], "map_code", array())) {
                // line 29
                echo "                    <map name=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["slider"], "map_id", array())) ? ($this->getAttribute($context["slider"], "map_id", array())) : ("")), "html", null, true);
                echo "\">
                        ";
                // line 30
                echo $this->getAttribute($context["slider"], "map_code", array());
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
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/plugins/betescurieuses/slider/components/showimages/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 35,  144 => 33,  138 => 30,  133 => 29,  130 => 28,  124 => 25,  121 => 24,  118 => 23,  114 => 21,  112 => 20,  108 => 19,  100 => 17,  92 => 15,  90 => 14,  85 => 13,  68 => 12,  62 => 8,  46 => 6,  41 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "/Users/alexandrefoisy/Sites/alexcorp-v2/plugins/betescurieuses/slider/components/showimages/default.htm", "");
    }
}

<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/Testimonials/default.htm */
class __TwigTemplate_1a2bab9c9d2525feba5bfda153f8022c69b72d0c4fadc355ef4acf250e0da17a extends Twig_Template
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
        echo "<div id=\"carousel-betescurieuses\" class=\"carousel slide\" data-ride=\"carousel\">
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
            echo "            <li data-target=\"#carousel-betescurieuses\" data-slide-to=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
            echo "\"
                class=\"";
            // line 6
            echo ((($this->getAttribute($context["loop"], "index", array()) == 2)) ? ("active") : (""));
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
    <div class=\"carousel-inner mobile-top-buffer\" role=\"listbox\" style=\"padding-top: 200px;\">
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
            if ($this->getAttribute($context["slider"], "description", array())) {
                // line 15
                echo "                    <img src=\"";
                echo $this->env->getExtension('CMS')->themeFilter("assets/images/testimonials.png");
                echo "\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <div class=\"row\">
                            <div class=\"col-md-1 hidden-sm\">  </div>
                            <div class=\"col-md-9 col-sm-12 col-xs-12 mobile-top-buffer\">
                            ";
                // line 20
                if ($this->getAttribute($this->getAttribute($context["slider"], "image", array()), "count", array())) {
                    // line 21
                    echo "                            <div class=\"col-sm-4\">
                                <img class=\"img-responsive round-image\"
                                     data-src=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slider"], "image", array()), "filename", array()), "html", null, true);
                    echo "\"
                                     src=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slider"], "image", array()), "thumb", array(0 => 140, 1 => 140), "method"), "html", null, true);
                    echo "\"
                                     alt=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slider"], "image", array()), "description", array()), "html", null, true);
                    echo "\"/>
                            </div>
                            ";
                }
                // line 28
                echo "                            <div class=\"col-sm-";
                echo (($this->getAttribute($this->getAttribute($context["slider"], "image", array()), "count", array())) ? ("8") : ("12"));
                echo " text-left\">
                                <p style=\"color: #fff; font-size: 18px;\">";
                // line 29
                echo $this->getAttribute($context["slider"], "description", array());
                echo "</p>
                                <p style=\"color: #ccc; font-size: 16px;\"> <em>- ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "author", array()), "html", null, true);
                echo "</em></p>
                            </div>
                                </div>
                        </div>
                        </div>
                    </div>
                ";
            }
            // line 37
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
        // line 39
        echo "    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/Testimonials/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 39,  140 => 37,  130 => 30,  126 => 29,  121 => 28,  115 => 25,  111 => 24,  107 => 23,  103 => 21,  101 => 20,  92 => 15,  90 => 14,  85 => 13,  68 => 12,  62 => 8,  46 => 6,  41 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div id="carousel-betescurieuses" class="carousel slide" data-ride="carousel">*/
/*     <!-- Indicators -->*/
/*     <ol class="carousel-indicators">*/
/*         {% for slider in sliders %}*/
/*             <li data-target="#carousel-betescurieuses" data-slide-to="{{ loop.index-1 }}"*/
/*                 class="{{ loop.index == 2 ? 'active':'' }}"></li>*/
/*         {% endfor %}*/
/*     </ol>*/
/* */
/*     <!-- Wrapper for slides -->*/
/*     <div class="carousel-inner mobile-top-buffer" role="listbox" style="padding-top: 200px;">*/
/*         {% for slider in sliders %}*/
/*             <div class="item {{ loop.index == 1 ? 'active':'' }}" style="width: 100%;">*/
/*                 {% if slider.description %}*/
/*                     <img src="{{ 'assets/images/testimonials.png'|theme }}" alt="">*/
/*                     <div class="carousel-caption">*/
/*                         <div class="row">*/
/*                             <div class="col-md-1 hidden-sm">  </div>*/
/*                             <div class="col-md-9 col-sm-12 col-xs-12 mobile-top-buffer">*/
/*                             {% if slider.image.count %}*/
/*                             <div class="col-sm-4">*/
/*                                 <img class="img-responsive round-image"*/
/*                                      data-src="{{ slider.image.filename }}"*/
/*                                      src="{{ slider.image.thumb(140,140) }}"*/
/*                                      alt="{{ slider.image.description }}"/>*/
/*                             </div>*/
/*                             {% endif %}*/
/*                             <div class="col-sm-{{ slider.image.count? '8':'12' }} text-left">*/
/*                                 <p style="color: #fff; font-size: 18px;">{{ slider.description|raw }}</p>*/
/*                                 <p style="color: #ccc; font-size: 16px;"> <em>- {{ slider.author }}</em></p>*/
/*                             </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/* </div>*/

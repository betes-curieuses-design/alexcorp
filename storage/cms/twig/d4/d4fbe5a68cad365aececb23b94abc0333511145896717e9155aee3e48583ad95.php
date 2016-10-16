<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/testimonials/default.htm */
class __TwigTemplate_36178a6e1d6cc30314e4bb40221a235ff793fdbacc33e34235249c4b87301433 extends Twig_Template
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
        echo "<div class=\"row testimonial\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testimonials"]) ? $context["testimonials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 3
            echo "        <div class=\"col-lg-offset-2 col-lg-10 col-sm-offset-2 col-sm-10 col-xs-offset-0 col-xs-12 all-top-buffer\">
            <div class=\"col-sm-offset-0 col-sm-3 col-xs-offset-3 col-xs-6\">
                <img class=\"img-responsive round-image\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "avatar", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\">
            </div>
            <div class=\"col-lg-6 col-sm-6 col-xs-12\">
                ";
            // line 8
            echo $this->getAttribute($context["testimonial"], "content", array());
            echo "
                ";
            // line 9
            if ($this->getAttribute($context["testimonial"], "author", array())) {
                // line 10
                echo "                <p class=\"who\">- ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "author", array()), "html", null, true);
                echo "</p>
                ";
            }
            // line 12
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/testimonials/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  48 => 12,  42 => 10,  40 => 9,  36 => 8,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="row testimonial">*/
/*     {% for testimonial in testimonials %}*/
/*         <div class="col-lg-offset-2 col-lg-10 col-sm-offset-2 col-sm-10 col-xs-offset-0 col-xs-12 all-top-buffer">*/
/*             <div class="col-sm-offset-0 col-sm-3 col-xs-offset-3 col-xs-6">*/
/*                 <img class="img-responsive round-image" src="{{ testimonial.avatar.path }}" alt="">*/
/*             </div>*/
/*             <div class="col-lg-6 col-sm-6 col-xs-12">*/
/*                 {{ testimonial.content|raw }}*/
/*                 {% if testimonial.author %}*/
/*                 <p class="who">- {{ testimonial.author }}</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/

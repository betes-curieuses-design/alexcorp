<?php

/* /home/betescur/public_html/alexcorp.ca/plugins/mja/testimonials/components/testimonials/default.htm */
class __TwigTemplate_0f047b99ca60d3a69a1599a6d48502ce69bd59673564c806518984e98eb198c6 extends Twig_Template
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
        $context["testimonials"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "testimonials", array());
        // line 2
        echo "
<div class=\"row testimonial\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 5
            echo "    <div class=\"col-lg-offset-2 col-lg-10 col-sm-offset-2 col-sm-10 col-xs-offset-0 col-xs-12 all-top-buffer\">
        <div class=\"col-sm-offset-0 col-sm-3 col-xs-offset-3 col-xs-6\">
            <img class=\"img-responsive round-image\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["testimonial"], "avatar", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\">
        </div>
        <div class=\"col-lg-6 col-sm-6 col-xs-12\">
            ";
            // line 10
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["testimonial"], "content", array());
            echo "
            ";
            // line 11
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["testimonial"], "author", array())) {
                // line 12
                echo "            <p class=\"who\">- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["testimonial"], "author", array()), "html", null, true);
                echo "</p>
            ";
            }
            // line 14
            echo "        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "/home/betescur/public_html/alexcorp.ca/plugins/mja/testimonials/components/testimonials/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  51 => 14,  45 => 12,  43 => 11,  39 => 10,  33 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set testimonials =  __SELF__.testimonials %}

<div class=\"row testimonial\">
    {% for testimonial in testimonials %}
    <div class=\"col-lg-offset-2 col-lg-10 col-sm-offset-2 col-sm-10 col-xs-offset-0 col-xs-12 all-top-buffer\">
        <div class=\"col-sm-offset-0 col-sm-3 col-xs-offset-3 col-xs-6\">
            <img class=\"img-responsive round-image\" src=\"{{ testimonial.avatar.path }}\" alt=\"\">
        </div>
        <div class=\"col-lg-6 col-sm-6 col-xs-12\">
            {{ testimonial.content|raw }}
            {% if testimonial.author %}
            <p class=\"who\">- {{ testimonial.author }}</p>
            {% endif %}
        </div>
    </div>
    {% endfor %}
</div>

", "/home/betescur/public_html/alexcorp.ca/plugins/mja/testimonials/components/testimonials/default.htm", "");
    }
}

<?php

/* /Volumes/External HD/Clients/www/alexcorp/plugins/mja/testimonials/components/testimonials/default.htm */
class __TwigTemplate_4d03d5efabe557b984f8b324b46369b51148ef3fb97c2781e04ce88637c260b9 extends Twig_Template
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
        $context["testimonials"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "testimonials", []);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["testimonial"], "avatar", []), "path", []), "html", null, true);
            echo "\" alt=\"\">
        </div>
        <div class=\"col-lg-6 col-sm-6 col-xs-12\">
            ";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "content", []);
            echo "
            ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "author", [])) {
                // line 12
                echo "            <p class=\"who\">- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "author", []), "html", null, true);
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
        return "/Volumes/External HD/Clients/www/alexcorp/plugins/mja/testimonials/components/testimonials/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  55 => 14,  49 => 12,  47 => 11,  43 => 10,  37 => 7,  33 => 5,  29 => 4,  25 => 2,  23 => 1,);
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

", "/Volumes/External HD/Clients/www/alexcorp/plugins/mja/testimonials/components/testimonials/default.htm", "");
    }
}

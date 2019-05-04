<?php

/* /Volumes/External HD/Clients/www/alexcorp/plugins/mja/testimonials/components/testimonials/default.htm */
class __TwigTemplate_8459eb902951d6183cf0316f644d28f6fcd7320fab08ee833f86b995a5f9586f extends Twig_Template
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
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 4
            echo "    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-sm-12 col-lg-2 text-center\">
            <img class=\"rounded-circle\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["testimonial"], "avatar", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\">
        </div>
        <div class=\"col-sm-12 col-lg-6\">
            <p>";
            // line 9
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["testimonial"], "content", array());
            echo "
            ";
            // line 10
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["testimonial"], "author", array())) {
                echo "</p>
            <small class=\"white\">- ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["testimonial"], "author", array()), "html", null, true);
                echo "</small>
            ";
            }
            // line 13
            echo "        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
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
        return array (  59 => 16,  51 => 13,  46 => 11,  42 => 10,  38 => 9,  32 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set testimonials =  __SELF__.testimonials %}

    {% for testimonial in testimonials %}
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-sm-12 col-lg-2 text-center\">
            <img class=\"rounded-circle\" src=\"{{ testimonial.avatar.path }}\" alt=\"\">
        </div>
        <div class=\"col-sm-12 col-lg-6\">
            <p>{{ testimonial.content|raw }}
            {% if testimonial.author %}</p>
            <small class=\"white\">- {{ testimonial.author }}</small>
            {% endif %}
        </div>
    </div>
    {% endfor %}

", "/Volumes/External HD/Clients/www/alexcorp/plugins/mja/testimonials/components/testimonials/default.htm", "");
    }
}

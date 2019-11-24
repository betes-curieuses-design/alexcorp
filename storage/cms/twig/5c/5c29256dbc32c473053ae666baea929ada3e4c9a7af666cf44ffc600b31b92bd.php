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

/* /Users/alexandrefoisy/web sites/alexcorp/plugins/mja/testimonials/components/testimonials/default.htm */
class __TwigTemplate_bab911c110c26f7d077121b30678aaaaa66d5c10c4a36861a4f899ffd58843c2 extends \Twig\Template
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
        $context["testimonials"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "testimonials", [], "any", false, false, false, 1);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["testimonial"], "avatar", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), "html", null, true);
            echo "\" alt=\"\">
        </div>
        <div class=\"col-sm-12 col-lg-6\">
            <p>";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "content", [], "any", false, false, false, 9);
            echo "
            ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "author", [], "any", false, false, false, 10)) {
                echo "</p>
            <small class=\"white\">- ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "author", [], "any", false, false, false, 11), "html", null, true);
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
        return "/Users/alexandrefoisy/web sites/alexcorp/plugins/mja/testimonials/components/testimonials/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  67 => 13,  62 => 11,  58 => 10,  54 => 9,  48 => 6,  44 => 4,  40 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set testimonials =  __SELF__.testimonials %}

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

", "/Users/alexandrefoisy/web sites/alexcorp/plugins/mja/testimonials/components/testimonials/default.htm", "");
    }
}

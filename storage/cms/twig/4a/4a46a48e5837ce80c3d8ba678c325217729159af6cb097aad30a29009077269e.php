<?php

/* /Volumes/External HD/Clients/www/alexcorp/plugins/zainab/simplecontact/components/simplecontact/flashMessage.htm */
class __TwigTemplate_00cdc6c8b6a0a46b08f7a49f0e01b1c65dca8309cad1bd654cad186f4256513d extends Twig_Template
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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 1
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 2
            echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
    ";
            // line 4
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
</div>
";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 7
        echo "
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 8
        $context["type"] = "error"        ;        foreach (Flash::error        () as $message) {
            $context["message"] = $message;            // line 9
            echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
";
            // line 11
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "properties", array()), "detailedErrors", array()) == 1)) {
                // line 12
                echo "    <ul>
    ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 14
                    echo "        <li>";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "    </ul>
";
            } else {
                // line 18
                echo "    ";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
";
            }
            // line 20
            echo "</div>
";
        }
        $context["type"] = $_type;        $context["message"] = $_message;    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/alexcorp/plugins/zainab/simplecontact/components/simplecontact/flashMessage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  62 => 18,  58 => 16,  49 => 14,  45 => 13,  42 => 12,  40 => 11,  36 => 9,  34 => 8,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% flash success %}
<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
    {{ message }}
</div>
{% endflash %}

{% flash error %}
<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
{% if(__SELF__.properties.detailedErrors == 1) %}
    <ul>
    {% for error in errors %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% else %}
    {{ message }}
{% endif %}
</div>
{% endflash %}", "/Volumes/External HD/Clients/www/alexcorp/plugins/zainab/simplecontact/components/simplecontact/flashMessage.htm", "");
    }
}

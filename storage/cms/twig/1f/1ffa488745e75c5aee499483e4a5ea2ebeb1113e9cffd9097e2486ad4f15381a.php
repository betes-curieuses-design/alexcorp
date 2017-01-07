<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/plugins/zainab/simplecontact/components/simplecontact/default.htm */
class __TwigTemplate_4be4af5bbb2b0d7596a6c5d7fc3549341d068dc9fc75bb20b29e3067d70897cb extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "settings", array()), "text_top_form", array());
        echo "

<form id=\"simpleContactForm\" data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onFormSubmit\">

    <div id=\"simple_contact_flash_message\"></div>


    <div class=\"row\">
        <div class=\"form-group col-sm-12\">
            <label for=\"name\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "nameLabel", array()), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-6 col-xs-12\">
            <label for=\"email\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "emailLabel", array()), "html", null, true);
        echo "</label>
            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
        </div>

        ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "phoneEnabled", array())) {
            // line 21
            echo "        <div class=\"form-group col-sm-6 col-xs-12\">
            <label for=\"phone\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "phoneLabel", array()), "html", null, true);
            echo "</label>
            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\"  >
        </div>
        ";
        }
        // line 26
        echo "    </div>

    <div class=\"form-group\">
        <label for=\"subject\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "subjectLabel", array()), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\"  >
    </div>

    <div class=\"form-group\">
        <label for=\"message\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "messageLabel", array()), "html", null, true);
        echo "</label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\"></textarea>
    </div>

    <!-- Injecting reCaptcha if enabled -->
    ";
        // line 39
        if ($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "settings", array()), "recaptcha_enabled", array())) {
            // line 40
            echo "    <div class=\"form-group\">
        <label for=\"message\"></label>
        <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "settings", array()), "recaptcha_site_key", array()), "html", null, true);
            echo "\"></div>
    </div>
    ";
        }
        // line 45
        echo "    <!-- End reCaptcha -->

    <button id=\"simpleContactSubmitButton\"
            type=\"submit\" class=\"btn btn-primary pull-right\">
        ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "buttonText", array()), "html", null, true);
        echo "
    </button>

</form>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/plugins/zainab/simplecontact/components/simplecontact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 49,  95 => 45,  89 => 42,  85 => 40,  83 => 39,  75 => 34,  67 => 29,  62 => 26,  55 => 22,  52 => 21,  50 => 20,  43 => 16,  34 => 10,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ __SELF__.settings.text_top_form|raw}}

<form id=\"simpleContactForm\" data-request=\"{{ __SELF__ }}::onFormSubmit\">

    <div id=\"simple_contact_flash_message\"></div>


    <div class=\"row\">
        <div class=\"form-group col-sm-12\">
            <label for=\"name\">{{__SELF__.properties.nameLabel}}</label>
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-6 col-xs-12\">
            <label for=\"email\">{{__SELF__.properties.emailLabel}}</label>
            <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
        </div>

        {% if(__SELF__.properties.phoneEnabled) %}
        <div class=\"form-group col-sm-6 col-xs-12\">
            <label for=\"phone\">{{__SELF__.properties.phoneLabel}}</label>
            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\"  >
        </div>
        {% endif %}
    </div>

    <div class=\"form-group\">
        <label for=\"subject\">{{__SELF__.properties.subjectLabel}}</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\"  >
    </div>

    <div class=\"form-group\">
        <label for=\"message\">{{__SELF__.properties.messageLabel}}</label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\"></textarea>
    </div>

    <!-- Injecting reCaptcha if enabled -->
    {% if(__SELF__.settings.recaptcha_enabled) %}
    <div class=\"form-group\">
        <label for=\"message\"></label>
        <div class=\"g-recaptcha\" data-sitekey=\"{{__SELF__.settings.recaptcha_site_key}}\"></div>
    </div>
    {% endif %}
    <!-- End reCaptcha -->

    <button id=\"simpleContactSubmitButton\"
            type=\"submit\" class=\"btn btn-primary pull-right\">
        {{__SELF__.properties.buttonText}}
    </button>

</form>", "/Users/alexandrefoisy/Sites/alexcorp-v2/plugins/zainab/simplecontact/components/simplecontact/default.htm", "");
    }
}

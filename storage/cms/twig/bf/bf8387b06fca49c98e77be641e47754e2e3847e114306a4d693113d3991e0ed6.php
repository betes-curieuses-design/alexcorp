<?php

/* /home/betescur/public_html/alexcorp.ca/plugins/zainab/simplecontact/components/simplecontact/default.htm */
class __TwigTemplate_8c7d3a2614fc46f927317d43d3808c3c016dbae865984817cb68540872e7fd11 extends Twig_Template
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
        echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "settings", array()), "text_top_form", array());
        echo "

<form id=\"simpleContactForm\" data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    <div id=\"simple_contact_flash_message\"></div>


    <div class=\"form-group\">
        <label for=\"name\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "properties", array()), "nameLabel", array()), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
    </div>

    <div class=\"form-group\">
        <label for=\"email\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "properties", array()), "emailLabel", array()), "html", null, true);
        echo "</label>
        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
    </div>

    ";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "properties", array()), "phoneEnabled", array())) {
            // line 19
            echo "        <div class=\"form-group\">
            <label for=\"phone\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "properties", array()), "phoneLabel", array()), "html", null, true);
            echo "</label>
            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" required>
        </div>
    ";
        }
        // line 24
        echo "
    <div class=\"form-group\">
        <label for=\"subject\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "properties", array()), "subjectLabel", array()), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" required>
    </div>

    <div class=\"form-group\">
        <label for=\"message\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "properties", array()), "messageLabel", array()), "html", null, true);
        echo "</label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\" required></textarea>
    </div>

    <!-- Injecting reCaptcha if enabled -->
    ";
        // line 36
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "settings", array()), "recaptcha_enabled", array())) {
            // line 37
            echo "        <div class=\"form-group\">
            <label for=\"message\"></label>
            <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "settings", array()), "recaptcha_site_key", array()), "html", null, true);
            echo "\"></div>
        </div>
    ";
        }
        // line 42
        echo "    <!-- End reCaptcha -->

    <button id=\"simpleContactSubmitButton\"
            type=\"submit\" class=\"btn btn-default\">
        ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "properties", array()), "buttonText", array()), "html", null, true);
        echo "
    </button>

</form>";
    }

    public function getTemplateName()
    {
        return "/home/betescur/public_html/alexcorp.ca/plugins/zainab/simplecontact/components/simplecontact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 46,  92 => 42,  86 => 39,  82 => 37,  80 => 36,  72 => 31,  64 => 26,  60 => 24,  53 => 20,  50 => 19,  48 => 18,  41 => 14,  33 => 9,  24 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ __SELF__.settings.text_top_form|raw}}

<form id=\"simpleContactForm\" data-request=\"{{ __SELF__ }}::onFormSubmit\">

    <div id=\"simple_contact_flash_message\"></div>


    <div class=\"form-group\">
        <label for=\"name\">{{__SELF__.properties.nameLabel}}</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
    </div>

    <div class=\"form-group\">
        <label for=\"email\">{{__SELF__.properties.emailLabel}}</label>
        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
    </div>

    {% if(__SELF__.properties.phoneEnabled) %}
        <div class=\"form-group\">
            <label for=\"phone\">{{__SELF__.properties.phoneLabel}}</label>
            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" required>
        </div>
    {% endif %}

    <div class=\"form-group\">
        <label for=\"subject\">{{__SELF__.properties.subjectLabel}}</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" required>
    </div>

    <div class=\"form-group\">
        <label for=\"message\">{{__SELF__.properties.messageLabel}}</label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\" required></textarea>
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
            type=\"submit\" class=\"btn btn-default\">
        {{__SELF__.properties.buttonText}}
    </button>

</form>", "/home/betescur/public_html/alexcorp.ca/plugins/zainab/simplecontact/components/simplecontact/default.htm", "");
    }
}

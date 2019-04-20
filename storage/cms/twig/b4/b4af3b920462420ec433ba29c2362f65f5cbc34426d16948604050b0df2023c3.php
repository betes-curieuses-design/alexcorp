<?php

/* /Volumes/External HD/Clients/www/alexcorp/plugins/zainab/simplecontact/components/simplecontact/default.htm */
class __TwigTemplate_fe7194307d0e5d072dedcab57b4370b835abe1892ce50a34fefbcb7ca7ea37f1 extends Twig_Template
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
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", []), "text_top_form", []);
        echo "

<form id=\"simpleContactForm\" data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    <div id=\"simple_contact_flash_message\"></div>


    <div class=\"form-group\">
        <label for=\"name\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", []), "nameLabel", []), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
    </div>

    <div class=\"form-group\">
        <label for=\"email\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", []), "emailLabel", []), "html", null, true);
        echo "</label>
        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
    </div>

    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", []), "phoneEnabled", [])) {
            // line 19
            echo "        <div class=\"form-group\">
            <label for=\"phone\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", []), "phoneLabel", []), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", []), "subjectLabel", []), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" required>
    </div>

    <div class=\"form-group\">
        <label for=\"message\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", []), "messageLabel", []), "html", null, true);
        echo "</label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\" required></textarea>
    </div>

    <!-- Injecting reCaptcha if enabled -->
    ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", []), "recaptcha_enabled", [])) {
            // line 37
            echo "        <div class=\"form-group\">
            <label for=\"message\"></label>
            <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", []), "recaptcha_site_key", []), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", []), "buttonText", []), "html", null, true);
        echo "
    </button>

</form>";
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/alexcorp/plugins/zainab/simplecontact/components/simplecontact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 46,  96 => 42,  90 => 39,  86 => 37,  84 => 36,  76 => 31,  68 => 26,  64 => 24,  57 => 20,  54 => 19,  52 => 18,  45 => 14,  37 => 9,  28 => 3,  23 => 1,);
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

</form>", "/Volumes/External HD/Clients/www/alexcorp/plugins/zainab/simplecontact/components/simplecontact/default.htm", "");
    }
}

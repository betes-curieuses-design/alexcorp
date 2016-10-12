<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/simpleContact/default.htm */
class __TwigTemplate_9e72a396edf79c92ea7a90f8268132e0da5bed4bdca647608ff1d90a123710a2 extends Twig_Template
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

<form id=\"simpleContactForm\">

    <div id=\"simple_contact_flash_message\"></div>

    <div class=\"row\">
        <div class=\"form-group col-sm-12\">
            <label for=\"name\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "nameLabel", array()), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
        </div>
        </div>
    <div class=\"row\">
    <div class=\"form-group col-sm-6 col-xs-12\">
        <label for=\"email\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "emailLabel", array()), "html", null, true);
        echo "</label>
        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
    </div>

    ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "phoneEnabled", array())) {
            // line 20
            echo "        <div class=\"form-group col-sm-6 col-xs-12\">
            <label for=\"phone\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "phoneLabel", array()), "html", null, true);
            echo "</label>
            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\"  >
        </div>
    ";
        }
        // line 25
        echo "    </div>

    <div class=\"form-group\">
        <label for=\"subject\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "subjectLabel", array()), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\"  >
    </div>

    <div class=\"form-group\">
        <label for=\"message\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "properties", array()), "messageLabel", array()), "html", null, true);
        echo "</label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\"></textarea>
    </div>

    <!-- Injecting reCaptcha if enabled -->
    ";
        // line 38
        if ($this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "settings", array()), "recaptcha_enabled", array())) {
            // line 39
            echo "        <div class=\"form-group\">
            <label for=\"message\"></label>
            <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "settings", array()), "recaptcha_site_key", array()), "html", null, true);
            echo "\"></div>
        </div>
    ";
        }
        // line 44
        echo "    <!-- End reCaptcha -->

    <button id=\"simpleContactSubmitButton\"
            data-request=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onFormSubmit\"
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
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/simpleContact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 49,  96 => 47,  91 => 44,  85 => 41,  81 => 39,  79 => 38,  71 => 33,  63 => 28,  58 => 25,  51 => 21,  48 => 20,  46 => 19,  39 => 15,  30 => 9,  19 => 1,);
    }
}
/* {{ __SELF__.settings.text_top_form|raw}}*/
/* */
/* <form id="simpleContactForm">*/
/* */
/*     <div id="simple_contact_flash_message"></div>*/
/* */
/*     <div class="row">*/
/*         <div class="form-group col-sm-12">*/
/*             <label for="name">{{__SELF__.properties.nameLabel}}</label>*/
/*             <input type="text" id="name" name="name" class="form-control" required >*/
/*         </div>*/
/*         </div>*/
/*     <div class="row">*/
/*     <div class="form-group col-sm-6 col-xs-12">*/
/*         <label for="email">{{__SELF__.properties.emailLabel}}</label>*/
/*         <input type="email" id="email" name="email" class="form-control" required >*/
/*     </div>*/
/* */
/*     {% if(__SELF__.properties.phoneEnabled) %}*/
/*         <div class="form-group col-sm-6 col-xs-12">*/
/*             <label for="phone">{{__SELF__.properties.phoneLabel}}</label>*/
/*             <input type="text" id="phone" name="phone" class="form-control"  >*/
/*         </div>*/
/*     {% endif %}*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         <label for="subject">{{__SELF__.properties.subjectLabel}}</label>*/
/*         <input type="text" id="subject" name="subject" class="form-control"  >*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         <label for="message">{{__SELF__.properties.messageLabel}}</label>*/
/*         <textarea id="message" name="message" class="form-control"></textarea>*/
/*     </div>*/
/* */
/*     <!-- Injecting reCaptcha if enabled -->*/
/*     {% if(__SELF__.settings.recaptcha_enabled) %}*/
/*         <div class="form-group">*/
/*             <label for="message"></label>*/
/*             <div class="g-recaptcha" data-sitekey="{{__SELF__.settings.recaptcha_site_key}}"></div>*/
/*         </div>*/
/*     {% endif %}*/
/*     <!-- End reCaptcha -->*/
/* */
/*     <button id="simpleContactSubmitButton"*/
/*             data-request="{{ __SELF__ }}::onFormSubmit"*/
/*             type="submit" class="btn btn-primary pull-right">*/
/*         {{__SELF__.properties.buttonText}}*/
/*     </button>*/
/* */
/* </form>*/

<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/Worklist/workdetail.htm */
class __TwigTemplate_4bada52785136f7b69a0f0f5be2c280aab935a723e3724533c82c2321d38a65a extends Twig_Template
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
        $context["work"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "work", array());
        // line 2
        echo "<div class=\"work-background\">
    <div class=\"work-info\">
        <img src=\"";
        // line 4
        echo "plugins/individuart/work/assets/images/btn-close.svg";
        echo "\" class=\"work-close\">
        <h1 class=\"work-detail__title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "name", array()), "html", null, true);
        echo "</h1>
        <h2 class=\"work-detail__subtitle\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "description", array()), "html", null, true);
        echo "</h2>
        ";
        // line 7
        if ( !twig_test_empty($this->getAttribute((isset($context["work"]) ? $context["work"] : null), "lst_categories", array()))) {
            // line 8
            echo "        <h3 class=\"work-detail__categories\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "lst_categories", array()), "html", null, true);
            echo "</h3>
        ";
        }
        // line 10
        echo "        ";
        if ($this->getAttribute((isset($context["work"]) ? $context["work"] : null), "long_description", array())) {
            // line 11
            echo "        <div class=\"work-detail__longdesc\">
            ";
            // line 12
            echo $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "long_description", array());
            echo "
        </div>
        ";
        }
        // line 15
        echo "        ";
        if ($this->getAttribute((isset($context["work"]) ? $context["work"] : null), "url", array())) {
            // line 16
            echo "        <a class=\"work-detail__link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "url", array()), "html", null, true);
            echo "\" onclick=\"window.open(this.href);return false;\">ir al proyecto</a>
        ";
        }
        // line 18
        echo "

    </div>
    <div class=\"work-detail\">
        <div class=\"work-detail__content\">";
        // line 22
        echo $this->getAttribute((isset($context["work"]) ? $context["work"] : null), "content", array());
        echo "</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/Worklist/workdetail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  66 => 18,  60 => 16,  57 => 15,  51 => 12,  48 => 11,  45 => 10,  39 => 8,  37 => 7,  33 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set work = __SELF__.work %}*/
/* <div class="work-background">*/
/*     <div class="work-info">*/
/*         <img src="{{ 'plugins/individuart/work/assets/images/btn-close.svg'}}" class="work-close">*/
/*         <h1 class="work-detail__title">{{work.name}}</h1>*/
/*         <h2 class="work-detail__subtitle">{{work.description}}</h2>*/
/*         {% if work.lst_categories is not empty %}*/
/*         <h3 class="work-detail__categories">{{work.lst_categories}}</h3>*/
/*         {% endif %}*/
/*         {% if work.long_description %}*/
/*         <div class="work-detail__longdesc">*/
/*             {{work.long_description | raw}}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if work.url %}*/
/*         <a class="work-detail__link" href="{{work.url}}" onclick="window.open(this.href);return false;">ir al proyecto</a>*/
/*         {% endif %}*/
/* */
/* */
/*     </div>*/
/*     <div class="work-detail">*/
/*         <div class="work-detail__content">{{work.content | raw}}</div>*/
/*     </div>*/
/* </div>*/

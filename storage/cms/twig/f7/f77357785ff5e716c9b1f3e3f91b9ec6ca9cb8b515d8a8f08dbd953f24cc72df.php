<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/pages/home.htm */
class __TwigTemplate_3caadc866cfe89fdabe12d242d6611aa2164ae6fe921ce87d08597526d281c88 extends Twig_Template
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
        echo "<section id=\"main-slider\" class=\"no-margin\">
\t";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("carousel"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section>

<section id=\"feature\">
\t";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("features"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "</section>

<section id=\"services\" class=\"service-item\">
    ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "</section>

<section id=\"recent-works\">
\t<div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Recent Works</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("Worklist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "        </div><!--/.container-->
</section>

<section id=\"testimonial\">
            ";
        // line 30
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("Testimonials"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 31
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 31,  70 => 30,  64 => 26,  60 => 25,  50 => 17,  46 => 16,  41 => 13,  37 => 12,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section id="main-slider" class="no-margin">*/
/* 	{% partial "carousel" %}*/
/*     <a class="prev hidden-xs" href="#main-slider" data-slide="prev">*/
/*         <i class="fa fa-chevron-left"></i>*/
/*     </a>*/
/*     <a class="next hidden-xs" href="#main-slider" data-slide="next">*/
/*         <i class="fa fa-chevron-right"></i>*/
/*     </a>*/
/* </section>*/
/* */
/* <section id="feature">*/
/* 	{% partial "features" %}*/
/* </section>*/
/* */
/* <section id="services" class="service-item">*/
/*     {% partial "services" %}*/
/* </section>*/
/* */
/* <section id="recent-works">*/
/* 	<div class="container">*/
/*             <div class="center wow fadeInDown">*/
/*                 <h2>Recent Works</h2>*/
/*                 <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>*/
/*             </div>*/
/* {% component 'Worklist' %}*/
/*         </div><!--/.container-->*/
/* </section>*/
/* */
/* <section id="testimonial">*/
/*             {% component 'Testimonials' %}*/
/* </section>*/

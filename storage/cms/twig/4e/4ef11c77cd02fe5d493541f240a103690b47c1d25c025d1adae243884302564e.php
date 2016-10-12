<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/carousel.htm */
class __TwigTemplate_e592e084eba50f9f428c3c9292fceadcd657dd744ede417d40483049bce39ee6 extends Twig_Template
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
        echo "<div class=\"carousel slide\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">

                <div class=\"item active\" style=\"background-image: url(";
        // line 9
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/bg1.jpg");
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/img1.png");
        echo "\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class=\"item\" style=\"background-image: url(";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/bg2.jpg");
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>

                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"";
        // line 43
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/img2.png");
        echo "\" class=\"img-responsive\">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class=\"item\" style=\"background-image: url(";
        // line 51
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/bg3.jpg");
        echo ")\">
                    <div class=\"container\">
                        <div class=\"row slide-margin\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h1 class=\"animation animated-item-1\">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class=\"animation animated-item-2\">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class=\"btn-slide animation animated-item-3\" href=\"#\">Read More</a>
                                </div>
                            </div>
                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"slider-img\">
                                    <img src=\"";
        // line 63
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/img3.png");
        echo "\" class=\"img-responsive\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/carousel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 63,  83 => 51,  72 => 43,  56 => 30,  45 => 22,  29 => 9,  19 => 1,);
    }
}
/* <div class="carousel slide">*/
/*             <ol class="carousel-indicators">*/
/*                 <li data-target="#main-slider" data-slide-to="0" class="active"></li>*/
/*                 <li data-target="#main-slider" data-slide-to="1"></li>*/
/*                 <li data-target="#main-slider" data-slide-to="2"></li>*/
/*             </ol>*/
/*             <div class="carousel-inner">*/
/* */
/*                 <div class="item active" style="background-image: url({{ 'assets/images/slider/bg1.jpg'|theme }})">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>*/
/*                                     <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="#">Read More</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="col-sm-6 hidden-xs animation animated-item-4">*/
/*                                 <div class="slider-img">*/
/*                                     <img src="{{ 'assets/images/slider/img1.png'|theme }}" class="img-responsive">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.item-->*/
/* */
/*                 <div class="item" style="background-image: url({{ 'assets/images/slider/bg2.jpg'|theme }})">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>*/
/*                                     <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="#">Read More</a>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="col-sm-6 hidden-xs animation animated-item-4">*/
/*                                 <div class="slider-img">*/
/*                                     <img src="{{ 'assets/images/slider/img2.png'|theme }}" class="img-responsive">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.item-->*/
/* */
/*                 <div class="item" style="background-image: url({{ 'assets/images/slider/bg3.jpg'|theme }})">*/
/*                     <div class="container">*/
/*                         <div class="row slide-margin">*/
/*                             <div class="col-sm-6">*/
/*                                 <div class="carousel-content">*/
/*                                     <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>*/
/*                                     <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>*/
/*                                     <a class="btn-slide animation animated-item-3" href="#">Read More</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-sm-6 hidden-xs animation animated-item-4">*/
/*                                 <div class="slider-img">*/
/*                                     <img src="{{ 'assets/images/slider/img3.png'|theme }}" class="img-responsive">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--/.item-->*/
/*             </div><!--/.carousel-inner-->*/
/*         </div><!--/.carousel-->*/

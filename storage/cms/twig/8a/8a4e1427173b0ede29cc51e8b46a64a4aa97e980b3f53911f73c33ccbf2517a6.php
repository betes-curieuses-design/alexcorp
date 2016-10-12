<?php

/* /Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/nav.htm */
class __TwigTemplate_f0c5cfe4443814fc637c278c420fb5d60adb20d38849fa0af4a65ec33814e6b3 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/alexfoisy_logo.png");
        echo "\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"#main-slider\"> Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#feature\"> À Propos</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#services\"> Compétances</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#recent-works\"> Portfolio</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#conatcat-info\"> Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/Sites/alexcorp-v2/themes/jtherczeg-corlate/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
/* <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">*/
/* 	<div class="container">*/
/* 		<div class="navbar-header">*/
/* 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/* 			<span class="sr-only">Toggle navigation</span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			</button>*/
/* 			<a class="navbar-brand" href="{{ 'home'|page }}"><img src="{{ 'assets/images/alexfoisy_logo.png'|theme }}" alt="logo"></a>*/
/* 		</div>*/
/* 		<div class="collapse navbar-collapse navbar-right">*/
/* 			<ul class="nav navbar-nav">*/
/*                 <li>*/
/*                     <a href="#main-slider"> Accueil</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="#feature"> À Propos</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="#services"> Compétances</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="#recent-works"> Portfolio</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="#conatcat-info"> Contact</a>*/
/* 				</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </nav><!--/nav-->*/

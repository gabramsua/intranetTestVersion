<?php

/* intranetBundle:Default:landing.html.twig */
class __TwigTemplate_a63da794e0356ecb1966962c01fc74332886fc7dcda4b3136910d56f8dd69a90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:landing.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e316c518750e1d398dde0cb7e872c53a62c1c5391653cb8c6cf4fa4f6fe1d41f = $this->env->getExtension("native_profiler");
        $__internal_e316c518750e1d398dde0cb7e872c53a62c1c5391653cb8c6cf4fa4f6fe1d41f->enter($__internal_e316c518750e1d398dde0cb7e872c53a62c1c5391653cb8c6cf4fa4f6fe1d41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e316c518750e1d398dde0cb7e872c53a62c1c5391653cb8c6cf4fa4f6fe1d41f->leave($__internal_e316c518750e1d398dde0cb7e872c53a62c1c5391653cb8c6cf4fa4f6fe1d41f_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1530e6e5f89c153ee5277fefc321c51094de8813be4ef156efc03c1d3abb3ad1 = $this->env->getExtension("native_profiler");
        $__internal_1530e6e5f89c153ee5277fefc321c51094de8813be4ef156efc03c1d3abb3ad1->enter($__internal_1530e6e5f89c153ee5277fefc321c51094de8813be4ef156efc03c1d3abb3ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 5
        echo "<h2> LANDING PAGE   </h2>
";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("This is Landing Page", array(), "messages");
        // line 7
        echo "<hr>
Menu not visible for all => indicate routes?<br><br>
\t<b>Login\t </b>  /<i>language</i>/intranet_logout<br>
\t<b>Channel</b>  /<i>language</i>/channels<br>
\t<b>News\t  </b> /<i>language</i>/news<br>
\t<b>Tasks\t </b>  /<i>language</i>/tasks<br>
  <b>User Management\t </b>  /<i>language</i>/userManagement<br>
<br>The language can be /es/, /en/ or /fr/
";
        
        $__internal_1530e6e5f89c153ee5277fefc321c51094de8813be4ef156efc03c1d3abb3ad1->leave($__internal_1530e6e5f89c153ee5277fefc321c51094de8813be4ef156efc03c1d3abb3ad1_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block contenido %}*/
/* <h2> LANDING PAGE   </h2>*/
/* {% trans %} This is Landing Page {% endtrans %}*/
/* <hr>*/
/* Menu not visible for all => indicate routes?<br><br>*/
/* 	<b>Login	 </b>  /<i>language</i>/intranet_logout<br>*/
/* 	<b>Channel</b>  /<i>language</i>/channels<br>*/
/* 	<b>News	  </b> /<i>language</i>/news<br>*/
/* 	<b>Tasks	 </b>  /<i>language</i>/tasks<br>*/
/*   <b>User Management	 </b>  /<i>language</i>/userManagement<br>*/
/* <br>The language can be /es/, /en/ or /fr/*/
/* {% endblock %}*/
/* */

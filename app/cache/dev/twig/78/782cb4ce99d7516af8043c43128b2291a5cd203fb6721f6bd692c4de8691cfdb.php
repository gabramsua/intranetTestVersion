<?php

/* intranetBundle:Default:landing.html.twig */
class __TwigTemplate_6c4d20148c1b5dfd47f77defb8b47c94f2f29c592ce9997bb19e71f8eef0d18a extends Twig_Template
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
        $__internal_ad8f688ebda3cbab600071b9b4ecff8e922860814fef75944df37b00a8863965 = $this->env->getExtension("native_profiler");
        $__internal_ad8f688ebda3cbab600071b9b4ecff8e922860814fef75944df37b00a8863965->enter($__internal_ad8f688ebda3cbab600071b9b4ecff8e922860814fef75944df37b00a8863965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:landing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad8f688ebda3cbab600071b9b4ecff8e922860814fef75944df37b00a8863965->leave($__internal_ad8f688ebda3cbab600071b9b4ecff8e922860814fef75944df37b00a8863965_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2ce406f0eb3340998be2cbd6d1067db783fd0dd26b8e590ad9529319868163e7 = $this->env->getExtension("native_profiler");
        $__internal_2ce406f0eb3340998be2cbd6d1067db783fd0dd26b8e590ad9529319868163e7->enter($__internal_2ce406f0eb3340998be2cbd6d1067db783fd0dd26b8e590ad9529319868163e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_2ce406f0eb3340998be2cbd6d1067db783fd0dd26b8e590ad9529319868163e7->leave($__internal_2ce406f0eb3340998be2cbd6d1067db783fd0dd26b8e590ad9529319868163e7_prof);

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

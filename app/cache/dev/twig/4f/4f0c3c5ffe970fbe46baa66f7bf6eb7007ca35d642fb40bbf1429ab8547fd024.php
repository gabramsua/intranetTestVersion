<?php

/* intranetBundle:Default:formHours.html.twig */
class __TwigTemplate_9af2beacd0b03947cab7212f318f122b6e105d1a10548e19a04f51ae5c3e2d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formHours.html.twig", 1);
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
        $__internal_589bcc90c0266f7a7746135aeb1fd747967ad42130ef53ee5e0c366093f51b89 = $this->env->getExtension("native_profiler");
        $__internal_589bcc90c0266f7a7746135aeb1fd747967ad42130ef53ee5e0c366093f51b89->enter($__internal_589bcc90c0266f7a7746135aeb1fd747967ad42130ef53ee5e0c366093f51b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formHours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_589bcc90c0266f7a7746135aeb1fd747967ad42130ef53ee5e0c366093f51b89->leave($__internal_589bcc90c0266f7a7746135aeb1fd747967ad42130ef53ee5e0c366093f51b89_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_35572fe40de337079626129b10b9298156b748fdb9a4c2006bd7d79313e1e937 = $this->env->getExtension("native_profiler");
        $__internal_35572fe40de337079626129b10b9298156b748fdb9a4c2006bd7d79313e1e937->enter($__internal_35572fe40de337079626129b10b9298156b748fdb9a4c2006bd7d79313e1e937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>HOURS</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Number of hours: </label><input type='number' name=\"numhours\" id=\"numhours\" min=\"1\" max=\"50\"><i>min:1, max:50</i><BR>
        <label>Between: </label><input type='date' id=\"betw\" name=\"betw\"><BR>
        <label>and: </label><input type='date' id=\"and\" name=\"and\">
        <i>default: 1 WEEK, max 3 months</i><BR>
                                     <input type=\"submit\" value=\"Modify\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"hours\">
   </form>


";
        
        $__internal_35572fe40de337079626129b10b9298156b748fdb9a4c2006bd7d79313e1e937->leave($__internal_35572fe40de337079626129b10b9298156b748fdb9a4c2006bd7d79313e1e937_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formHours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>HOURS</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Number of hours: </label><input type='number' name="numhours" id="numhours" min="1" max="50"><i>min:1, max:50</i><BR>*/
/*         <label>Between: </label><input type='date' id="betw" name="betw"><BR>*/
/*         <label>and: </label><input type='date' id="and" name="and">*/
/*         <i>default: 1 WEEK, max 3 months</i><BR>*/
/*                                      <input type="submit" value="Modify">*/
/*                                      <input type="hidden" name="typeF" value="hours">*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */

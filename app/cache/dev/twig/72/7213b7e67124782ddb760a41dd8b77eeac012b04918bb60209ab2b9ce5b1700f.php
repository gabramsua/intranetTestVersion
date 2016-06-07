<?php

/* intranetBundle:Default:formRequest.html.twig */
class __TwigTemplate_3913b435e6455d4aa7ea4cb1e824172154f72b4cb6a2e8b490b2df86851d47ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formRequest.html.twig", 1);
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
        $__internal_8d44670f665c672b783dced976fc3bd922e00b8ebed1c3b61771489f8bfe4b85 = $this->env->getExtension("native_profiler");
        $__internal_8d44670f665c672b783dced976fc3bd922e00b8ebed1c3b61771489f8bfe4b85->enter($__internal_8d44670f665c672b783dced976fc3bd922e00b8ebed1c3b61771489f8bfe4b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formRequest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d44670f665c672b783dced976fc3bd922e00b8ebed1c3b61771489f8bfe4b85->leave($__internal_8d44670f665c672b783dced976fc3bd922e00b8ebed1c3b61771489f8bfe4b85_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_92d313bf6e02fba551869c96fa8a82539fbde725d8d6982690ced1b7eeee7c54 = $this->env->getExtension("native_profiler");
        $__internal_92d313bf6e02fba551869c96fa8a82539fbde725d8d6982690ced1b7eeee7c54->enter($__internal_92d313bf6e02fba551869c96fa8a82539fbde725d8d6982690ced1b7eeee7c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>REQUEST BUSINESS TRIP</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
         <label>From: </label><input type='date' id=\"from\" name=\"from\"><BR>
         <label>to: </label><input type='date' id=\"to\" name=\"to\"><BR>
         <label>Where:</label><input type=\"text\" name=\"where\"><br>
         <label>Congress<i>if any</i>:</label><input type=\"text\" name=\"congress\"><br>
         <label>Reason:</label><input type=\"textarea\" name=\"reason\"><br>
                                      <input type=\"submit\" value=\"Modify\">
                                      <input type=\"hidden\" name=\"typeF\" value=\"businessRequest\">
    </form>



";
        
        $__internal_92d313bf6e02fba551869c96fa8a82539fbde725d8d6982690ced1b7eeee7c54->leave($__internal_92d313bf6e02fba551869c96fa8a82539fbde725d8d6982690ced1b7eeee7c54_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formRequest.html.twig";
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
/* <h3>REQUEST BUSINESS TRIP</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*          <label>From: </label><input type='date' id="from" name="from"><BR>*/
/*          <label>to: </label><input type='date' id="to" name="to"><BR>*/
/*          <label>Where:</label><input type="text" name="where"><br>*/
/*          <label>Congress<i>if any</i>:</label><input type="text" name="congress"><br>*/
/*          <label>Reason:</label><input type="textarea" name="reason"><br>*/
/*                                       <input type="submit" value="Modify">*/
/*                                       <input type="hidden" name="typeF" value="businessRequest">*/
/*     </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */

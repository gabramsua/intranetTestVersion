<?php

/* intranetBundle:Default:formHome.html.twig */
class __TwigTemplate_55d7bc92c44ed31fc0d39c19b0fd47e4a98e60a12c13f5662f546397e8bbf2ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formHome.html.twig", 1);
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
        $__internal_fdfce82deda431693a30aa56c8af9bf63e275fbe0141b91a19f73c9886d7c4ca = $this->env->getExtension("native_profiler");
        $__internal_fdfce82deda431693a30aa56c8af9bf63e275fbe0141b91a19f73c9886d7c4ca->enter($__internal_fdfce82deda431693a30aa56c8af9bf63e275fbe0141b91a19f73c9886d7c4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formHome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdfce82deda431693a30aa56c8af9bf63e275fbe0141b91a19f73c9886d7c4ca->leave($__internal_fdfce82deda431693a30aa56c8af9bf63e275fbe0141b91a19f73c9886d7c4ca_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_6b1155c28a45229c3c17f4007c522929edb86326ed16a2057a3f940985c11c7f = $this->env->getExtension("native_profiler");
        $__internal_6b1155c28a45229c3c17f4007c522929edb86326ed16a2057a3f940985c11c7f->enter($__internal_6b1155c28a45229c3c17f4007c522929edb86326ed16a2057a3f940985c11c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>WORK AT HOME</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid; width: 500px;\">
       <label>Date:</label><input type='date' id=\"from\" name=\"from\"><BR>
       <label>Reasons: </label><input type='text' id=\"reasons\" name=\"reasons\" ><br>
       <label>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Timing", array(), "messages");
        echo "</label>
                 <input type='radio' id=\"myTiming\" name=\"myTiming\" value=\"1\" checked  ><label for=\"myTiming\">Whole Day</label>
                 <input type='radio' id=\"myTiming2\" name=\"myTiming\" value=\"0\" ><label for=\"myTiming2\">Half Day</label><br>
       <BR>
                                    <input type=\"submit\" value=\"Modify\">
                                    <input type=\"hidden\" name=\"typeF\" value=\"Home\">
  </form>




";
        
        $__internal_6b1155c28a45229c3c17f4007c522929edb86326ed16a2057a3f940985c11c7f->leave($__internal_6b1155c28a45229c3c17f4007c522929edb86326ed16a2057a3f940985c11c7f_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>WORK AT HOME</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid; width: 500px;">*/
/*        <label>Date:</label><input type='date' id="from" name="from"><BR>*/
/*        <label>Reasons: </label><input type='text' id="reasons" name="reasons" ><br>*/
/*        <label>{% trans %}Timing{% endtrans %}</label>*/
/*                  <input type='radio' id="myTiming" name="myTiming" value="1" checked  ><label for="myTiming">Whole Day</label>*/
/*                  <input type='radio' id="myTiming2" name="myTiming" value="0" ><label for="myTiming2">Half Day</label><br>*/
/*        <BR>*/
/*                                     <input type="submit" value="Modify">*/
/*                                     <input type="hidden" name="typeF" value="Home">*/
/*   </form>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */

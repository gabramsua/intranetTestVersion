<?php

/* intranetBundle:Default:formExpenses.html.twig */
class __TwigTemplate_5cfa8db474dcf916b2a4fa17a80de29bf775725e25c61cb9da4fcd9f1c591bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formExpenses.html.twig", 1);
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
        $__internal_62a95252ebe3f995fb46c664d707a0af2e14c21d40d02108e0a60ab60ad9d195 = $this->env->getExtension("native_profiler");
        $__internal_62a95252ebe3f995fb46c664d707a0af2e14c21d40d02108e0a60ab60ad9d195->enter($__internal_62a95252ebe3f995fb46c664d707a0af2e14c21d40d02108e0a60ab60ad9d195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formExpenses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a95252ebe3f995fb46c664d707a0af2e14c21d40d02108e0a60ab60ad9d195->leave($__internal_62a95252ebe3f995fb46c664d707a0af2e14c21d40d02108e0a60ab60ad9d195_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ff9d6e0b65f34fbfa569fea02c0bfa8e38352fbbec2f700b88c14d9abf55eccf = $this->env->getExtension("native_profiler");
        $__internal_ff9d6e0b65f34fbfa569fea02c0bfa8e38352fbbec2f700b88c14d9abf55eccf->enter($__internal_ff9d6e0b65f34fbfa569fea02c0bfa8e38352fbbec2f700b88c14d9abf55eccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>EXPENSES</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
        <label>Company:</label><input type=\"text\" name=\"company\"><br>
        <label>Importe:</label><input type=\"number\" step=\"any\" name=\"amount\"> €<br>
        <label>Earlier than: </label><input type='date' id=\"earlier\" name=\"earlier\"><BR>
        <input type=\"textarea\" name=\"concept\"> <BR>
                                     <input type=\"submit\" value=\"Modify\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"expenses\">
   </form>


";
        
        $__internal_ff9d6e0b65f34fbfa569fea02c0bfa8e38352fbbec2f700b88c14d9abf55eccf->leave($__internal_ff9d6e0b65f34fbfa569fea02c0bfa8e38352fbbec2f700b88c14d9abf55eccf_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formExpenses.html.twig";
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
/* <h3>EXPENSES</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*         <label>Company:</label><input type="text" name="company"><br>*/
/*         <label>Importe:</label><input type="number" step="any" name="amount"> €<br>*/
/*         <label>Earlier than: </label><input type='date' id="earlier" name="earlier"><BR>*/
/*         <input type="textarea" name="concept"> <BR>*/
/*                                      <input type="submit" value="Modify">*/
/*                                      <input type="hidden" name="typeF" value="expenses">*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */

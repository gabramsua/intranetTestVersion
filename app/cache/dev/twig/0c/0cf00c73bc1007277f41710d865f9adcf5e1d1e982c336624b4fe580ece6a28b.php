<?php

/* intranetBundle:Default:formVacations.html.twig */
class __TwigTemplate_2ec3a067b380a23d805f7004d05898e813a77285f6558c13efe0c888e5e16d95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:formVacations.html.twig", 1);
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
        $__internal_856b5da1eff628f090653657161c0dd2a72bfd9ceeb9097576e22304d43c3c5c = $this->env->getExtension("native_profiler");
        $__internal_856b5da1eff628f090653657161c0dd2a72bfd9ceeb9097576e22304d43c3c5c->enter($__internal_856b5da1eff628f090653657161c0dd2a72bfd9ceeb9097576e22304d43c3c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:formVacations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_856b5da1eff628f090653657161c0dd2a72bfd9ceeb9097576e22304d43c3c5c->leave($__internal_856b5da1eff628f090653657161c0dd2a72bfd9ceeb9097576e22304d43c3c5c_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1671a1398a32da6e7be01dcf46f2e1ff4bbbbd511a0c330049d22b597cfb9df4 = $this->env->getExtension("native_profiler");
        $__internal_1671a1398a32da6e7be01dcf46f2e1ff4bbbbd511a0c330049d22b597cfb9df4->enter($__internal_1671a1398a32da6e7be01dcf46f2e1ff4bbbbd511a0c330049d22b597cfb9df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>VACATIONS</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_f");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
       <label>From:</label><input type='date' id=\"from\" name=\"from\"><BR>
       <label>to: </label><input type='date' id=\"to\" name=\"to\" >
       <BR>
                                    <input type=\"submit\" value=\"Modify\">
                                    <input type=\"hidden\" name=\"typeF\" value=\"vacation\">
  </form>




";
        
        $__internal_1671a1398a32da6e7be01dcf46f2e1ff4bbbbd511a0c330049d22b597cfb9df4->leave($__internal_1671a1398a32da6e7be01dcf46f2e1ff4bbbbd511a0c330049d22b597cfb9df4_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:formVacations.html.twig";
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
/* <h3>VACATIONS</h3><br>*/
/*  <form action="{{ path('intranet_f') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*        <label>From:</label><input type='date' id="from" name="from"><BR>*/
/*        <label>to: </label><input type='date' id="to" name="to" >*/
/*        <BR>*/
/*                                     <input type="submit" value="Modify">*/
/*                                     <input type="hidden" name="typeF" value="vacation">*/
/*   </form>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */

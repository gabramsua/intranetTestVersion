<?php

/* intranetBundle:Default:index.html.twig */
class __TwigTemplate_06e0bf7a085e059c90fc14a0b337018f5c2567e2b881efe7e2ae9c8688c8db3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout2.html.twig", "intranetBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d761a7b49d302a255d8f1bfa994dcc3520860db51009b151f3665b740e055f7c = $this->env->getExtension("native_profiler");
        $__internal_d761a7b49d302a255d8f1bfa994dcc3520860db51009b151f3665b740e055f7c->enter($__internal_d761a7b49d302a255d8f1bfa994dcc3520860db51009b151f3665b740e055f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d761a7b49d302a255d8f1bfa994dcc3520860db51009b151f3665b740e055f7c->leave($__internal_d761a7b49d302a255d8f1bfa994dcc3520860db51009b151f3665b740e055f7c_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_eefefa41688a8fdee2ae4a3aff947fc82b5341d12498c6157a8feb6f4110610f = $this->env->getExtension("native_profiler");
        $__internal_eefefa41688a8fdee2ae4a3aff947fc82b5341d12498c6157a8feb6f4110610f->enter($__internal_eefefa41688a8fdee2ae4a3aff947fc82b5341d12498c6157a8feb6f4110610f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<!--<h1>Inicio</h1>-->
<h3> Copyright (c) 2016 Copyright Holder All Rights Reserved.<br>Login de LDAP   </h3>
<hr>
<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("intranet_login");
        echo "\" method=\"post\">
  <label>Introduzca su login de LDAP:</label>
<input type=\"text\" name=\"login\" style=\"margin-left: 50px;\"> <br>
  <label>Por favor introduzca la contrasena: </label>
<input type=\"password\" name=\"pass\" style=\"margin-left: 10px;\"><br>
<input type=\"submit\" value=\"Click to login\">
</form>




";
        
        $__internal_eefefa41688a8fdee2ae4a3aff947fc82b5341d12498c6157a8feb6f4110610f->leave($__internal_eefefa41688a8fdee2ae4a3aff947fc82b5341d12498c6157a8feb6f4110610f_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout2.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <!--<h1>Inicio</h1>-->*/
/* <h3> Copyright (c) 2016 Copyright Holder All Rights Reserved.<br>Login de LDAP   </h3>*/
/* <hr>*/
/* <form action="{{ path('intranet_login')}}" method="post">*/
/*   <label>Introduzca su login de LDAP:</label>*/
/* <input type="text" name="login" style="margin-left: 50px;"> <br>*/
/*   <label>Por favor introduzca la contrasena: </label>*/
/* <input type="password" name="pass" style="margin-left: 10px;"><br>*/
/* <input type="submit" value="Click to login">*/
/* </form>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */

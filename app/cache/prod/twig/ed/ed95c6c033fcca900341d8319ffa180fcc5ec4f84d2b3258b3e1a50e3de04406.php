<?php

/* ::menu.html.twig */
class __TwigTemplate_a7ae296539f35cebc5b4268062db06e139ed8724c67958dd4a82fa652a86e171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::menu.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "  <nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("intranet_homepage");
        echo "\">WebCuisine</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Forms <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("intranet_formHours");
        echo "\">Overtime Hours</a></li>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("intranet_formVacations");
        echo "\">Vacation</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("intranet_formExpenses");
        echo "\">Expenses</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("intranet_formRequest");
        echo "\">Request Business Trip</a></li>
          </ul>
        </li>
        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("intranet_bookRoom");
        echo "\">Book a room</a></li>
      ";
        // line 27
        echo "              <li><a href='";
        echo $this->env->getExtension('routing')->getPath("intranet_tasks");
        echo "'>Task -<i>Only for internships</i></a></li>\"
      ";
        // line 29
        echo "      ";
        // line 30
        echo "              <li><a href='";
        echo $this->env->getExtension('routing')->getPath("intranet_userManagement");
        echo "'>User Management -<i>Only for admins</i></a></li>
      ";
        // line 32
        echo "      ";
        // line 33
        echo "              <li><a href='";
        echo $this->env->getExtension('routing')->getPath("intranet_news");
        echo "'>News Feed -<i>Only for BÜOs</i></a></li>
      ";
        // line 35
        echo "      ";
        // line 36
        echo "          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">Form Management -<i>Only for BÜOs</i><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href='";
        // line 39
        echo $this->env->getExtension('routing')->getPath("intranet_incomingForms");
        echo "'>Incoming Forms</a></li>
              <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("intranet_oldForms");
        echo "\">Old Forms</a></li>
            </ul>
          </li>";
        // line 43
        echo "      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\"><b>HOLA <?php echo \$_SESSION[\"usuario\"]; ?></b></a></li>
        <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("intranet_settings");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Settings</a></li>
        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("intranet_logout");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      </ul>
    </div>
  </div>
  </nav>
  ";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 47,  113 => 46,  108 => 43,  103 => 40,  99 => 39,  94 => 36,  92 => 35,  87 => 33,  85 => 32,  80 => 30,  78 => 29,  73 => 27,  69 => 25,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/*   {% block menu %}*/
/*   <nav class="navbar navbar-inverse">*/
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="{{ path('intranet_homepage')}}">WebCuisine</a>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="myNavbar">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="dropdown">*/
/*           <a class="dropdown-toggle" data-toggle="dropdown">Forms <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('intranet_formHours')}}">Overtime Hours</a></li>*/
/*             <li><a href="{{ path('intranet_formVacations')}}">Vacation</a></li>*/
/*             <li><a href="{{ path('intranet_formExpenses')}}">Expenses</a></li>*/
/*             <li><a href="{{ path('intranet_formRequest')}}">Request Business Trip</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li><a href="{{ path('intranet_bookRoom')}}">Book a room</a></li>*/
/*       {# if user.rol=="internship"#}*/
/*               <li><a href='{{ path('intranet_tasks')}}'>Task -<i>Only for internships</i></a></li>"*/
/*       {# endif #}*/
/*       {# if user.rol=="admin"#}*/
/*               <li><a href='{{ path('intranet_userManagement')}}'>User Management -<i>Only for admins</i></a></li>*/
/*       {# endif #}*/
/*       {# if user.rol=="buo"#}*/
/*               <li><a href='{{ path('intranet_news')}}'>News Feed -<i>Only for BÜOs</i></a></li>*/
/*       {# endif #}*/
/*       {# if user.rol=="buo"#}*/
/*           <li class="dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown">Form Management -<i>Only for BÜOs</i><span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*               <li><a href='{{ path('intranet_incomingForms')}}'>Incoming Forms</a></li>*/
/*               <li><a href="{{ path('intranet_oldForms')}}">Old Forms</a></li>*/
/*             </ul>*/
/*           </li>{# endif #}*/
/*       </ul>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="#"><b>HOLA <?php echo $_SESSION["usuario"]; ?></b></a></li>*/
/*         <li><a href="{{ path('intranet_settings')}}"><span class="glyphicon glyphicon-user"></span> Settings</a></li>*/
/*         <li><a href="{{ path('intranet_logout')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   </nav>*/
/*   {% endblock %}*/
/* */

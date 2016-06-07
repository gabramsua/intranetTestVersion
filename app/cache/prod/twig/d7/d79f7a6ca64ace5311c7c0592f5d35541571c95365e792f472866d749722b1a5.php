<?php

/* intranetBundle::macroMenu.html.twig */
class __TwigTemplate_c67ab7da27a21c5724b140e969da38ab5c9ac5b1170b1eb26bf564d39c20ebf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "intranetBundle::macroMenu.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->
 <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 12
    public function getuROL($__rol__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "rol" => $__rol__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "  <nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("intranet_homepage");
            echo "\">WebCuisine</a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
      <ul class=\"nav navbar-nav\">
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 26
            echo $this->env->getExtension('translator')->getTranslator()->trans("Forms", array(), "messages");
            echo "<span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("intranet_formHours");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Overtime Hours", array(), "messages");
            echo "</a></li>
            <li><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("intranet_formVacations");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Vacation", array(), "messages");
            echo "</a></li>
            <li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("intranet_formExpenses");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Expenses", array(), "messages");
            echo "</a></li>
            <li><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("intranet_formRequest");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Request Business Trip", array(), "messages");
            echo "</a></li>
          </ul>
        </li>
        <li><a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("intranet_bookRoom");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Book a room", array(), "messages");
            echo "</a></li>
      ";
            // line 35
            if (((isset($context["rol"]) ? $context["rol"] : null) == "internship")) {
                // line 36
                echo "              <li><a href='";
                echo $this->env->getExtension('routing')->getPath("intranet_tasks");
                echo "'>";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Task", array(), "messages");
                echo "-<i> internships</i></a></li>\"
      ";
            }
            // line 38
            echo "      ";
            if (((isset($context["rol"]) ? $context["rol"] : null) == "admin")) {
                // line 39
                echo "              <li><a href='";
                echo $this->env->getExtension('routing')->getPath("intranet_userManagement");
                echo "'>";
                echo $this->env->getExtension('translator')->getTranslator()->trans("User Management", array(), "messages");
                echo "-<i> admins</i></a></li>
      ";
            }
            // line 41
            echo "      ";
            if (((isset($context["rol"]) ? $context["rol"] : null) == "buo")) {
                // line 42
                echo "              <li><a href='";
                echo $this->env->getExtension('routing')->getPath("intranet_news");
                echo "'";
                echo $this->env->getExtension('translator')->getTranslator()->trans(">News Feed", array(), "messages");
                echo "-<i> BÜOs</i></a></li>
      ";
            }
            // line 44
            echo "      ";
            if (((isset($context["rol"]) ? $context["rol"] : null) == "buo")) {
                // line 45
                echo "          <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 46
                echo $this->env->getExtension('translator')->getTranslator()->trans("Form Management", array(), "messages");
                echo "-<i> BÜOs</i><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href='";
                // line 48
                echo $this->env->getExtension('routing')->getPath("intranet_incomingForms");
                echo "'>";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Incoming Forms", array(), "messages");
                echo "</a></li>
              <li><a href=\"";
                // line 49
                echo $this->env->getExtension('routing')->getPath("intranet_oldForms");
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Old Forms", array(), "messages");
                echo "</a></li>
            </ul>
          </li>
      ";
            }
            // line 53
            echo "      ";
            if ($this->env->getExtension('security')->isGranted("ROLE_BUO")) {
                echo " rolerole ";
            }
            // line 54
            echo "      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("intranet_translation");
            echo "\"><b>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Lang", array(), "messages");
            echo "</b></a></li>
        <li><a href=\"#\"><b>";
            // line 57
            echo $this->env->getExtension('translator')->getTranslator()->trans("Hello", array(), "messages");
            echo " <?php echo \$_SESSION[\"usuario\"]; ?></b></a></li>
        <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("intranet_settings");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Settings", array(), "messages");
            echo "</a></li>
        <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("intranet_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      </ul>
    </div>
  </div>
  </nav>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "intranetBundle::macroMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 59,  194 => 58,  190 => 57,  184 => 56,  180 => 54,  175 => 53,  166 => 49,  160 => 48,  155 => 46,  152 => 45,  149 => 44,  141 => 42,  138 => 41,  130 => 39,  127 => 38,  119 => 36,  117 => 35,  111 => 34,  103 => 31,  97 => 30,  91 => 29,  85 => 28,  80 => 26,  72 => 21,  62 => 13,  50 => 12,  45 => 11,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
/* <!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->*/
/*  <link href="{{ asset('bundles/alimentos/estilo.css') }}" type="text/css" rel="stylesheet" />*/
/*   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* <meta charset="UTF-8">*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* {% macro uROL(rol) %}*/
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
/*           <a class="dropdown-toggle" data-toggle="dropdown">{% trans %}Forms {% endtrans %}<span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="{{ path('intranet_formHours')}}">{% trans %}Overtime Hours{% endtrans %}</a></li>*/
/*             <li><a href="{{ path('intranet_formVacations')}}">{% trans %}Vacation{% endtrans %}</a></li>*/
/*             <li><a href="{{ path('intranet_formExpenses')}}">{% trans %}Expenses{% endtrans %}</a></li>*/
/*             <li><a href="{{ path('intranet_formRequest')}}">{% trans %}Request Business Trip{% endtrans %}</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li><a href="{{ path('intranet_bookRoom')}}">{% trans %}Book a room{% endtrans %}</a></li>*/
/*       {% if rol=="internship" %}*/
/*               <li><a href='{{ path('intranet_tasks')}}'>{% trans %}Task {% endtrans %}-<i> internships</i></a></li>"*/
/*       {% endif %}*/
/*       {% if rol=="admin" %}*/
/*               <li><a href='{{ path('intranet_userManagement')}}'>{% trans %}User Management {% endtrans %}-<i> admins</i></a></li>*/
/*       {% endif %}*/
/*       {% if rol=="buo" %}*/
/*               <li><a href='{{ path('intranet_news')}}'{% trans %}>News Feed {% endtrans %}-<i> BÜOs</i></a></li>*/
/*       {% endif %}*/
/*       {% if rol=="buo" %}*/
/*           <li class="dropdown">*/
/*             <a class="dropdown-toggle" data-toggle="dropdown">{% trans %}Form Management {% endtrans %}-<i> BÜOs</i><span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*               <li><a href='{{ path('intranet_incomingForms')}}'>{% trans %}Incoming Forms{% endtrans %}</a></li>*/
/*               <li><a href="{{ path('intranet_oldForms')}}">{% trans %}Old Forms{% endtrans %}</a></li>*/
/*             </ul>*/
/*           </li>*/
/*       {% endif %}*/
/*       {% if is_granted('ROLE_BUO') %} rolerole {% endif %}*/
/*       </ul>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="{{ path('intranet_translation')}}"><b>{% trans %}Lang{% endtrans %}</b></a></li>*/
/*         <li><a href="#"><b>{% trans %}Hello{% endtrans %} <?php echo $_SESSION["usuario"]; ?></b></a></li>*/
/*         <li><a href="{{ path('intranet_settings')}}"><span class="glyphicon glyphicon-user"></span> {% trans %}Settings{% endtrans %}</a></li>*/
/*         <li><a href="{{ path('intranet_logout')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   </nav>*/
/* {% endmacro %}*/
/* {% endblock %}*/
/* */

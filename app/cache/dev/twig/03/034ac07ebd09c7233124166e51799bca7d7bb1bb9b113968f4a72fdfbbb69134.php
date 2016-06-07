<?php

/* intranetBundle::macroMenu.html.twig */
class __TwigTemplate_22aebd3021d3718f40acc8ddb41583359321317f650bc81fe685e876c0331c98 extends Twig_Template
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
        $__internal_18bb1ca853c699b36d3fb4fe080e0b44f4b07d9361f16928eb4ac69f80ce8042 = $this->env->getExtension("native_profiler");
        $__internal_18bb1ca853c699b36d3fb4fe080e0b44f4b07d9361f16928eb4ac69f80ce8042->enter($__internal_18bb1ca853c699b36d3fb4fe080e0b44f4b07d9361f16928eb4ac69f80ce8042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::macroMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18bb1ca853c699b36d3fb4fe080e0b44f4b07d9361f16928eb4ac69f80ce8042->leave($__internal_18bb1ca853c699b36d3fb4fe080e0b44f4b07d9361f16928eb4ac69f80ce8042_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a774f42e12afdb946c660d0730351030e54e180f09554bed69bdf4b23b0253d = $this->env->getExtension("native_profiler");
        $__internal_9a774f42e12afdb946c660d0730351030e54e180f09554bed69bdf4b23b0253d->enter($__internal_9a774f42e12afdb946c660d0730351030e54e180f09554bed69bdf4b23b0253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9a774f42e12afdb946c660d0730351030e54e180f09554bed69bdf4b23b0253d->leave($__internal_9a774f42e12afdb946c660d0730351030e54e180f09554bed69bdf4b23b0253d_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b83cc14abb36b3c5d1ac1f5965b758d7512a18e1055fa5fff22713baa48465da = $this->env->getExtension("native_profiler");
        $__internal_b83cc14abb36b3c5d1ac1f5965b758d7512a18e1055fa5fff22713baa48465da->enter($__internal_b83cc14abb36b3c5d1ac1f5965b758d7512a18e1055fa5fff22713baa48465da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_b83cc14abb36b3c5d1ac1f5965b758d7512a18e1055fa5fff22713baa48465da->leave($__internal_b83cc14abb36b3c5d1ac1f5965b758d7512a18e1055fa5fff22713baa48465da_prof);

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
            $__internal_76ed033c0e3f31173c79b82b5b6e85ced851defdd8fdb415c3313f0d62a7b6ec = $this->env->getExtension("native_profiler");
            $__internal_76ed033c0e3f31173c79b82b5b6e85ced851defdd8fdb415c3313f0d62a7b6ec->enter($__internal_76ed033c0e3f31173c79b82b5b6e85ced851defdd8fdb415c3313f0d62a7b6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "uROL"));

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
            if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) == "internship")) {
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
            if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) == "admin")) {
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
            if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) == "buo")) {
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
            if (((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")) == "buo")) {
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
            
            $__internal_76ed033c0e3f31173c79b82b5b6e85ced851defdd8fdb415c3313f0d62a7b6ec->leave($__internal_76ed033c0e3f31173c79b82b5b6e85ced851defdd8fdb415c3313f0d62a7b6ec_prof);

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
        return array (  221 => 59,  215 => 58,  211 => 57,  205 => 56,  201 => 54,  196 => 53,  187 => 49,  181 => 48,  176 => 46,  173 => 45,  170 => 44,  162 => 42,  159 => 41,  151 => 39,  148 => 38,  140 => 36,  138 => 35,  132 => 34,  124 => 31,  118 => 30,  112 => 29,  106 => 28,  101 => 26,  93 => 21,  83 => 13,  68 => 12,  57 => 11,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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

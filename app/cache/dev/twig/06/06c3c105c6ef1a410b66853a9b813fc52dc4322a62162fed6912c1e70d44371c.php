<?php

/* intranetBundle:Default:userManagement.html.twig */
class __TwigTemplate_29bc6ad4d0306be453a8361f9868d33f484f9d838038d23e1bbe8dd64920566a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:userManagement.html.twig", 1);
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
        $__internal_d79a55de8feef5a31f98492e59d0e410689adc527623f03f6f1b9654e2e698b3 = $this->env->getExtension("native_profiler");
        $__internal_d79a55de8feef5a31f98492e59d0e410689adc527623f03f6f1b9654e2e698b3->enter($__internal_d79a55de8feef5a31f98492e59d0e410689adc527623f03f6f1b9654e2e698b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:userManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d79a55de8feef5a31f98492e59d0e410689adc527623f03f6f1b9654e2e698b3->leave($__internal_d79a55de8feef5a31f98492e59d0e410689adc527623f03f6f1b9654e2e698b3_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_248c3a301238e4d981a0f1c0440529ddf03baaa0d249fcd2215d30319c12cd36 = $this->env->getExtension("native_profiler");
        $__internal_248c3a301238e4d981a0f1c0440529ddf03baaa0d249fcd2215d30319c12cd36->enter($__internal_248c3a301238e4d981a0f1c0440529ddf03baaa0d249fcd2215d30319c12cd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<table border=1>
<tr >
    <th>name</th>
    <th>surname</th>
    <th>LOGIN</th>
    <th>photo</th>
</tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listUsers"]) ? $context["listUsers"] : $this->getContext($context, "listUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["intrauser"]) {
            // line 13
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">
        <form action='";
            // line 15
            echo $this->env->getExtension('routing')->getPath("intranet_settings");
            echo "' method='post'>
              <input type=\"submit\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "login", array()), "html", null, true);
            echo "\" name=\"login\">
              <input type=\"hidden\" value=\"webCuisine\" name=\"isAdmin\">
        </form>
    </td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "nameU", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "surnameu", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\"><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["intrauser"], "photo", array()), "html", null, true);
            echo "\"></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intrauser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>
<br><hr><br>
<form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("intranet_newuser");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
    <input type=\"submit\" name=\"newUser\" value=\"NEW USER\">
  </form>

";
        
        $__internal_248c3a301238e4d981a0f1c0440529ddf03baaa0d249fcd2215d30319c12cd36->leave($__internal_248c3a301238e4d981a0f1c0440529ddf03baaa0d249fcd2215d30319c12cd36_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:userManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  86 => 25,  77 => 22,  73 => 21,  69 => 20,  62 => 16,  58 => 15,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* <table border=1>*/
/* <tr >*/
/*     <th>name</th>*/
/*     <th>surname</th>*/
/*     <th>LOGIN</th>*/
/*     <th>photo</th>*/
/* </tr>*/
/* {% for intrauser in listUsers %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">*/
/*         <form action='{{ path('intranet_settings') }}' method='post'>*/
/*               <input type="submit" value="{{ intrauser.login }}" name="login">*/
/*               <input type="hidden" value="webCuisine" name="isAdmin">*/
/*         </form>*/
/*     </td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ intrauser.nameU }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ intrauser.surnameu }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;"><img src="{{ intrauser.photo }}"></td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* <br><hr><br>*/
/* <form action="{{ path('intranet_newuser')}}" method="post" style="border: 1px solid;width: 500px;">*/
/*     <input type="submit" name="newUser" value="NEW USER">*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */

<?php

/* ::news.html.twig */
class __TwigTemplate_357c16beb17259f8d36e2ce8ea448353eb56def7e667d30164fb56de712cdc8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_305b46353e29a0597fd5555cb6b8a40750a2ea27ee5bd00d012a610a354974f8 = $this->env->getExtension("native_profiler");
        $__internal_305b46353e29a0597fd5555cb6b8a40750a2ea27ee5bd00d012a610a354974f8->enter($__internal_305b46353e29a0597fd5555cb6b8a40750a2ea27ee5bd00d012a610a354974f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::news.html.twig"));

        // line 2
        echo "
 ";
        // line 3
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_305b46353e29a0597fd5555cb6b8a40750a2ea27ee5bd00d012a610a354974f8->leave($__internal_305b46353e29a0597fd5555cb6b8a40750a2ea27ee5bd00d012a610a354974f8_prof);

    }

    public function block_contenido($context, array $blocks = array())
    {
        $__internal_57d0d96d4a1153d638d008181d387654cd0b97dac2ab412d04e0f65846ee8f68 = $this->env->getExtension("native_profiler");
        $__internal_57d0d96d4a1153d638d008181d387654cd0b97dac2ab412d04e0f65846ee8f68->enter($__internal_57d0d96d4a1153d638d008181d387654cd0b97dac2ab412d04e0f65846ee8f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<table border=1>
<tr>
    <th>DATE</th>
    <th>HOUR</th>
    <th>TITLE</th>
    <th>CONTENT</th>
</tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 13
            echo "<tr>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "time", array()), "H:i"), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "title", array()), "html", null, true);
            echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">
          <form action='";
            // line 18
            echo $this->env->getExtension('routing')->getPath("intranet_crudnew");
            echo "' method='post'>
                <input type=\"submit\" value=\"VER\" >
                <input type=\"hidden\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "content", array()), "html", null, true);
            echo "\" name=\"content\">
          </form>
    </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>
";
        
        $__internal_57d0d96d4a1153d638d008181d387654cd0b97dac2ab412d04e0f65846ee8f68->leave($__internal_57d0d96d4a1153d638d008181d387654cd0b97dac2ab412d04e0f65846ee8f68_prof);

    }

    public function getTemplateName()
    {
        return "::news.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  73 => 20,  68 => 18,  63 => 16,  59 => 15,  55 => 14,  52 => 13,  48 => 12,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {# extends 'intranetBundle::layout.html.twig' #}*/
/* */
/*  {% block contenido %}*/
/* */
/* <table border=1>*/
/* <tr>*/
/*     <th>DATE</th>*/
/*     <th>HOUR</th>*/
/*     <th>TITLE</th>*/
/*     <th>CONTENT</th>*/
/* </tr>*/
/* {% for n in new %}*/
/* <tr>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ n.date|date('Y-m-d')  }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ n.time|date('H:i') }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ n.title }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">*/
/*           <form action='{{ path('intranet_crudnew') }}' method='post'>*/
/*                 <input type="submit" value="VER" >*/
/*                 <input type="hidden" value="{{ n.content }}" name="content">*/
/*           </form>*/
/*     </td>*/
/* </tr>*/
/* {% endfor %}*/
/* </table>*/
/* {% endblock %}*/
/* */

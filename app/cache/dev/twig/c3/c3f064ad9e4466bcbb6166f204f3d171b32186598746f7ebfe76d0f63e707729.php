<?php

/* ::news.html.twig */
class __TwigTemplate_3d487dd5352071e74de111cf37817a2b323c5bdae5907d2f78affa22b320d91e extends Twig_Template
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
        $__internal_6bdef456d7fd7da29ed5833c7b4150e88fd0c22fc6fc7c14e85e6d911d62be65 = $this->env->getExtension("native_profiler");
        $__internal_6bdef456d7fd7da29ed5833c7b4150e88fd0c22fc6fc7c14e85e6d911d62be65->enter($__internal_6bdef456d7fd7da29ed5833c7b4150e88fd0c22fc6fc7c14e85e6d911d62be65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::news.html.twig"));

        // line 2
        echo "
 ";
        // line 3
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_6bdef456d7fd7da29ed5833c7b4150e88fd0c22fc6fc7c14e85e6d911d62be65->leave($__internal_6bdef456d7fd7da29ed5833c7b4150e88fd0c22fc6fc7c14e85e6d911d62be65_prof);

    }

    public function block_contenido($context, array $blocks = array())
    {
        $__internal_894a75b5063efcfe7782a84bde76018e2e05d2c89829ada65915624c043144c6 = $this->env->getExtension("native_profiler");
        $__internal_894a75b5063efcfe7782a84bde76018e2e05d2c89829ada65915624c043144c6->enter($__internal_894a75b5063efcfe7782a84bde76018e2e05d2c89829ada65915624c043144c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_894a75b5063efcfe7782a84bde76018e2e05d2c89829ada65915624c043144c6->leave($__internal_894a75b5063efcfe7782a84bde76018e2e05d2c89829ada65915624c043144c6_prof);

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

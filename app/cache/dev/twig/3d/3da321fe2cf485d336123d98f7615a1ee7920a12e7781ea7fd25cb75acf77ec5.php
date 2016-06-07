<?php

/* intranetBundle:Default:myhistoricalforms.html.twig */
class __TwigTemplate_8750ed1b0112cce5311fcab7aafcd918c1bf4cf4d969990395f6f7e377110f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:myhistoricalforms.html.twig", 1);
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
        $__internal_31d18b6da50b0529bfb4c11b46eea119ea0830e4f4266574aa0cebbaeb1672f2 = $this->env->getExtension("native_profiler");
        $__internal_31d18b6da50b0529bfb4c11b46eea119ea0830e4f4266574aa0cebbaeb1672f2->enter($__internal_31d18b6da50b0529bfb4c11b46eea119ea0830e4f4266574aa0cebbaeb1672f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:myhistoricalforms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d18b6da50b0529bfb4c11b46eea119ea0830e4f4266574aa0cebbaeb1672f2->leave($__internal_31d18b6da50b0529bfb4c11b46eea119ea0830e4f4266574aa0cebbaeb1672f2_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2d2cb46e52afe31ed37c643b6f5192f879ace613c0266da58a9bc28e29af6a8a = $this->env->getExtension("native_profiler");
        $__internal_2d2cb46e52afe31ed37c643b6f5192f879ace613c0266da58a9bc28e29af6a8a->enter($__internal_2d2cb46e52afe31ed37c643b6f5192f879ace613c0266da58a9bc28e29af6a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<b>TABLA FORMULARIOS HORAS</b><br><br>
<table border=1>
<tr >
<th></th>
    <th>numHours</th>
    <th>Ticket</th>
    <th>TO</th>
</tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myHours"]) ? $context["myHours"] : $this->getContext($context, "myHours")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 14
                echo "<tr>
  \t<td><form action='";
                // line 15
                echo $this->env->getExtension('routing')->getPath("intranet_crudForm");
                echo "' method='post'><input type=\"hidden\" name=\"typeF\" value=\"hours\">
    <input type=\"hidden\" name=\"id\" value=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\"> <input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "numhours", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "ticket", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table>
<br>

";
        // line 26
        echo "
<br>
<b>TABLA FORMULARIOS Vacaciones</b><br>
<table border=1>
<tr >
<th></th>
    <th>SEND</th>
    <th>FROM</th>
    <th>TO</th>
</tr>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myVacations"]) ? $context["myVacations"] : $this->getContext($context, "myVacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 38
                echo "<tr>
  \t<td><form action='";
                // line 39
                echo $this->env->getExtension('routing')->getPath("intranet_crudForm");
                echo "' method='post'> <input type=\"hidden\" name=\"typeF\" value=\"vacations\">
    <input type=\"hidden\" name=\"id\" value=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\"><input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "send", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date2", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</table><br>

";
        // line 50
        echo "
<br>
<b>TABLA FORMULARIOS EXPENSES</b><br>
<table border=1>
<tr >
<th></th>
    <th>SEND</th>
    <th>Company</th>
    <th>Date</th>
    <th>Concept</th>
    <th>Amount</th>
</tr>
";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myExpenses"]) ? $context["myExpenses"] : $this->getContext($context, "myExpenses")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 64
                echo "<tr>
  \t<td><form action='";
                // line 65
                echo $this->env->getExtension('routing')->getPath("intranet_crudForm");
                echo "' method='post'><input type=\"hidden\" name=\"typeF\" value=\"expenses\">
    <input type=\"hidden\" name=\"id\" value=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\"> <input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "send", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "company", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "concept", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "amount", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</table><br>

";
        // line 78
        echo "
<br>
<b>TABLA FORMULARIOS TRIP</b><br>
<table border=1>
<tr >
<th></th>
    <th>SEND</th>
    <th>Place</th>
    <th>Name Congress</th>
    <th>Reasons</th>
    <th>From</th>
    <th>To</th>
</tr>
";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myTrips"]) ? $context["myTrips"] : $this->getContext($context, "myTrips")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 93
                echo "<tr>
  \t<td><form action='";
                // line 94
                echo $this->env->getExtension('routing')->getPath("intranet_crudForm");
                echo "' method='post'><input type=\"hidden\" name=\"typeF\" value=\"trip\">
    <input type=\"hidden\" name=\"id\" value=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\"> <input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "send", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "place", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nameCongress", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "reasons", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date2", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "</table>

";
        // line 108
        echo "
<br>
<b>TABLA FORMULARIOS WORK AT HOME</b><br>
<table border=1>
<tr >
  <th></th>
  <th>SEND</th>
  <th>DATE</th>
  <th>REASON</th>
  <th>WHOLE DAY</th>
</tr>
";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myHomes"]) ? $context["myHomes"] : $this->getContext($context, "myHomes")));
        foreach ($context['_seq'] as $context["_key"] => $context["forms"]) {
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 121
                echo "<tr>
  \t<td><form action='";
                // line 122
                echo $this->env->getExtension('routing')->getPath("intranet_crudForm");
                echo "' method='post'><input type=\"hidden\" name=\"typeF\" value=\"Home\">
    <input type=\"hidden\" name=\"id\" value=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
                echo "\"> <input type=\"submit\" value=\"VER\" ></form></td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "send", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "date1", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "reason", array()), "html", null, true);
                echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "wholeDay", array()), "html", null, true);
                echo "</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "</table>

";
        
        $__internal_2d2cb46e52afe31ed37c643b6f5192f879ace613c0266da58a9bc28e29af6a8a->leave($__internal_2d2cb46e52afe31ed37c643b6f5192f879ace613c0266da58a9bc28e29af6a8a_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:myhistoricalforms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 131,  328 => 127,  324 => 126,  320 => 125,  316 => 124,  312 => 123,  308 => 122,  305 => 121,  301 => 120,  297 => 119,  284 => 108,  280 => 105,  267 => 101,  263 => 100,  259 => 99,  255 => 98,  251 => 97,  247 => 96,  243 => 95,  239 => 94,  236 => 93,  232 => 92,  228 => 91,  213 => 78,  209 => 75,  196 => 71,  192 => 70,  188 => 69,  184 => 68,  180 => 67,  176 => 66,  172 => 65,  169 => 64,  165 => 63,  161 => 62,  147 => 50,  143 => 47,  130 => 43,  126 => 42,  122 => 41,  118 => 40,  114 => 39,  111 => 38,  107 => 37,  103 => 36,  91 => 26,  86 => 22,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  58 => 14,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <b>TABLA FORMULARIOS HORAS</b><br><br>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>numHours</th>*/
/*     <th>Ticket</th>*/
/*     <th>TO</th>*/
/* </tr>*/
/* {% for forms in myHours %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='{{ path('intranet_crudForm') }}' method='post'><input type="hidden" name="typeF" value="hours">*/
/*     <input type="hidden" name="id" value="{{f.id}}"> <input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.numhours }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.ticket }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table>*/
/* <br>*/
/* */
/* {##############################################################################}*/
/* */
/* <br>*/
/* <b>TABLA FORMULARIOS Vacaciones</b><br>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>SEND</th>*/
/*     <th>FROM</th>*/
/*     <th>TO</th>*/
/* </tr>*/
/* {% for forms in myVacations %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='{{ path('intranet_crudForm') }}' method='post'> <input type="hidden" name="typeF" value="vacations">*/
/*     <input type="hidden" name="id" value="{{f.id}}"><input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date2 }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table><br>*/
/* */
/* {##############################################################################}*/
/* */
/* <br>*/
/* <b>TABLA FORMULARIOS EXPENSES</b><br>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>SEND</th>*/
/*     <th>Company</th>*/
/*     <th>Date</th>*/
/*     <th>Concept</th>*/
/*     <th>Amount</th>*/
/* </tr>*/
/* {% for forms in myExpenses %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='{{ path('intranet_crudForm') }}' method='post'><input type="hidden" name="typeF" value="expenses">*/
/*     <input type="hidden" name="id" value="{{f.id}}"> <input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.company }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.concept }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.amount }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table><br>*/
/* */
/* {##############################################################################}*/
/* */
/* <br>*/
/* <b>TABLA FORMULARIOS TRIP</b><br>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>SEND</th>*/
/*     <th>Place</th>*/
/*     <th>Name Congress</th>*/
/*     <th>Reasons</th>*/
/*     <th>From</th>*/
/*     <th>To</th>*/
/* </tr>*/
/* {% for forms in myTrips %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='{{ path('intranet_crudForm') }}' method='post'><input type="hidden" name="typeF" value="trip">*/
/*     <input type="hidden" name="id" value="{{f.id}}"> <input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.place }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.nameCongress }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.reasons }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date2 }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table>*/
/* */
/* {##############################################################################}*/
/* */
/* <br>*/
/* <b>TABLA FORMULARIOS WORK AT HOME</b><br>*/
/* <table border=1>*/
/* <tr >*/
/*   <th></th>*/
/*   <th>SEND</th>*/
/*   <th>DATE</th>*/
/*   <th>REASON</th>*/
/*   <th>WHOLE DAY</th>*/
/* </tr>*/
/* {% for forms in myHomes %}*/
/* {% for f in forms %}*/
/* <tr>*/
/*   	<td><form action='{{ path('intranet_crudForm') }}' method='post'><input type="hidden" name="typeF" value="Home">*/
/*     <input type="hidden" name="id" value="{{f.id}}"> <input type="submit" value="VER" ></form></td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.date1 }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.reason }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ f.wholeDay }}</td>*/
/* </tr>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* </table>*/
/* */
/* {% endblock %}*/
/* */

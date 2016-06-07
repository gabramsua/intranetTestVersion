<?php

/* intranetBundle:Default:incomingForms.html.twig */
class __TwigTemplate_2815c28cff2a2b0b5908a11d313487de635161f2275b2ecb2e28149169a100bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:incomingForms.html.twig", 1);
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
        $__internal_1dc6d7ae77d482fe2fba7a7b835fd663e55eeb6cbf1541784575db9c99190333 = $this->env->getExtension("native_profiler");
        $__internal_1dc6d7ae77d482fe2fba7a7b835fd663e55eeb6cbf1541784575db9c99190333->enter($__internal_1dc6d7ae77d482fe2fba7a7b835fd663e55eeb6cbf1541784575db9c99190333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:incomingForms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dc6d7ae77d482fe2fba7a7b835fd663e55eeb6cbf1541784575db9c99190333->leave($__internal_1dc6d7ae77d482fe2fba7a7b835fd663e55eeb6cbf1541784575db9c99190333_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_9e4ed7379c7371b36fc527fde4761481b411f8aa6b983509b52c36a1f41003b9 = $this->env->getExtension("native_profiler");
        $__internal_9e4ed7379c7371b36fc527fde4761481b411f8aa6b983509b52c36a1f41003b9->enter($__internal_9e4ed7379c7371b36fc527fde4761481b411f8aa6b983509b52c36a1f41003b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<b>TABLA FORMULARIOS HORAS</b>
<table border=1>
<tr >
<th></th>
    <th>Type</th>
    <th>USER</th>
    <th>DATE</th>
    <th>READ</th>
    <th>STATUS</th>
</tr>
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsH"]) ? $context["listIncomingFormsH"] : $this->getContext($context, "listIncomingFormsH")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationHours"]) ? $context["relationHours"] : $this->getContext($context, "relationHours")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 16
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 17
                    echo "<tr>
  \t<td>
          <form action='";
                    // line 19
                    echo $this->env->getExtension('routing')->getPath("intranet_readForm");
                    echo "' method='post'>
                <input type=\"submit\" value=\"VER\">
                  <input type=\"hidden\" name=\"typeF\" value=\"hours\">
                  <input type=\"hidden\" name=\"id\" value=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "id", array()), "html", null, true);
                    echo "\">
          </form>
    </td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "type", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "isread", array()), "html", null, true);
                    echo "</td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table>

<hr>

<b>TABLA FORMULARIOS VACATIONS</b>
<table border=1>
<tr>
<th></th>
   <th>TYPE</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>FROM</th>
   <th>TO</th>
   <th>STATUS</th>
</tr>
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsV"]) ? $context["listIncomingFormsV"] : $this->getContext($context, "listIncomingFormsV")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationVacations"]) ? $context["relationVacations"] : $this->getContext($context, "relationVacations")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 50
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 51
                    echo "<tr>
   <td>
        <form action='";
                    // line 53
                    echo $this->env->getExtension('routing')->getPath("intranet_readForm");
                    echo "' method='post'>
              <input type=\"submit\" value=\"VER\">
                <input type=\"hidden\" name=\"typeF\" value=\"vacations\">
                <input type=\"hidden\" name=\"id\" value=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "id", array()), "html", null, true);
                    echo "\">
        </form>
   </td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "type", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "isread", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date1", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date2", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
</table>

<hr>

<b>TABLA FORMULARIOS EXPENSES</b>
<table border=1>
<tr>
<th></th>
   <th>TYPE</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>COMPANY</th>
   <th>CONCEPT</th>
   <th>AMOUNT</th>
   <th>STATUS</th>
</tr>
";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsE"]) ? $context["listIncomingFormsE"] : $this->getContext($context, "listIncomingFormsE")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationExpenses"]) ? $context["relationExpenses"] : $this->getContext($context, "relationExpenses")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 88
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 89
                    echo "<tr>
   <td>
        <form action='";
                    // line 91
                    echo $this->env->getExtension('routing')->getPath("intranet_readForm");
                    echo "' method='post'>
              <input type=\"submit\" value=\"VER\">
                <input type=\"hidden\" name=\"typeF\" value=\"expenses\">
                <input type=\"hidden\" name=\"id\" value=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "id", array()), "html", null, true);
                    echo "\">
        </form>
   </td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "type", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 98
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "isread", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "company", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "concept", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "amount", array()), "html", null, true);
                    echo " €</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
</table>

<hr>

<b>TABLA FORMULARIOS TRIPS</b>
<table border=1>
<tr>
<th></th>
   <th>TYPE</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>FROM</th>
   <th>TO</th>
   <th>PLACE</th>
   <th>REASON</th>
   <th>STATUS</th>
</tr>
";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsT"]) ? $context["listIncomingFormsT"] : $this->getContext($context, "listIncomingFormsT")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationTrips"]) ? $context["relationTrips"] : $this->getContext($context, "relationTrips")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 128
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 129
                    echo "<tr>
   <td>
        <form action='";
                    // line 131
                    echo $this->env->getExtension('routing')->getPath("intranet_readForm");
                    echo "' method='post'>
              <input type=\"submit\" value=\"VER\">
                <input type=\"hidden\" name=\"typeF\" value=\"trip\">
                <input type=\"hidden\" name=\"id\" value=\"";
                    // line 134
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "id", array()), "html", null, true);
                    echo "\">
        </form>
   </td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 137
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "type", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 138
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 140
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "isread", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date1", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date2", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "place", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "reasons", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 145
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>
</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "
</table>

<hr>

<b>TABLA FORMULARIOS WORK AT HOME</b>
<table border=1>
<tr>
<th></th>
   <th>TYPE</th>
   <th>LOGIN</th>
   <th>DATE</th>
   <th>READ</th>
   <th>DATE</th>
   <th>REASON</th>
   <th>WHOLE DAY</th>
   <th>STATUS</th>
</tr>
";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listIncomingFormsH"]) ? $context["listIncomingFormsH"] : $this->getContext($context, "listIncomingFormsH")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relationHomes"]) ? $context["relationHomes"] : $this->getContext($context, "relationHomes")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 168
                if (($this->getAttribute($context["u"], "idForm", array()) == $this->getAttribute($context["form"], "id", array()))) {
                    // line 169
                    echo "<tr>
   <td>
        <form action='";
                    // line 171
                    echo $this->env->getExtension('routing')->getPath("intranet_readForm");
                    echo "' method='post'>
              <input type=\"submit\" value=\"VER\">
                <input type=\"hidden\" name=\"typeF\" value=\"Home\">
                <input type=\"hidden\" name=\"id\" value=\"";
                    // line 174
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "id", array()), "html", null, true);
                    echo "\">
        </form>
   </td>
    <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 177
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "type", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 178
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "login", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 179
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "send", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 180
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "isread", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 181
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "date1", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 182
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "reason", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 183
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "wholeDay", array()), "html", null, true);
                    echo "</td>
   <td style=\"padding-left: 10px;padding-right: 10px;\">";
                    // line 184
                    echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "status", array()), "html", null, true);
                    echo "</td>

</tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "
</table>


";
        
        $__internal_9e4ed7379c7371b36fc527fde4761481b411f8aa6b983509b52c36a1f41003b9->leave($__internal_9e4ed7379c7371b36fc527fde4761481b411f8aa6b983509b52c36a1f41003b9_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:incomingForms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 188,  441 => 184,  437 => 183,  433 => 182,  429 => 181,  425 => 180,  421 => 179,  417 => 178,  413 => 177,  407 => 174,  401 => 171,  397 => 169,  395 => 168,  391 => 167,  387 => 166,  367 => 148,  354 => 145,  350 => 144,  346 => 143,  342 => 142,  338 => 141,  334 => 140,  330 => 139,  326 => 138,  322 => 137,  316 => 134,  310 => 131,  306 => 129,  304 => 128,  300 => 127,  296 => 126,  275 => 107,  262 => 104,  258 => 103,  254 => 102,  250 => 101,  246 => 100,  242 => 99,  238 => 98,  234 => 97,  228 => 94,  222 => 91,  218 => 89,  216 => 88,  212 => 87,  208 => 86,  188 => 68,  175 => 65,  171 => 64,  167 => 63,  163 => 62,  159 => 61,  155 => 60,  151 => 59,  145 => 56,  139 => 53,  135 => 51,  133 => 50,  129 => 49,  125 => 48,  107 => 32,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  72 => 22,  66 => 19,  62 => 17,  60 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <b>TABLA FORMULARIOS HORAS</b>*/
/* <table border=1>*/
/* <tr >*/
/* <th></th>*/
/*     <th>Type</th>*/
/*     <th>USER</th>*/
/*     <th>DATE</th>*/
/*     <th>READ</th>*/
/*     <th>STATUS</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsH %}*/
/* {% for u in relationHours %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*   	<td>*/
/*           <form action='{{ path('intranet_readForm')}}' method='post'>*/
/*                 <input type="submit" value="VER">*/
/*                   <input type="hidden" name="typeF" value="hours">*/
/*                   <input type="hidden" name="id" value="{{form.id}}">*/
/*           </form>*/
/*     </td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.type }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* </table>*/
/* */
/* <hr>*/
/* */
/* <b>TABLA FORMULARIOS VACATIONS</b>*/
/* <table border=1>*/
/* <tr>*/
/* <th></th>*/
/*    <th>TYPE</th>*/
/*    <th>LOGIN</th>*/
/*    <th>DATE</th>*/
/*    <th>READ</th>*/
/*    <th>FROM</th>*/
/*    <th>TO</th>*/
/*    <th>STATUS</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsV %}*/
/* {% for u in relationVacations %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*    <td>*/
/*         <form action='{{ path('intranet_readForm')}}' method='post'>*/
/*               <input type="submit" value="VER">*/
/*                 <input type="hidden" name="typeF" value="vacations">*/
/*                 <input type="hidden" name="id" value="{{form.id}}">*/
/*         </form>*/
/*    </td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.type }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date1 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date2 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* */
/* </table>*/
/* */
/* <hr>*/
/* */
/* <b>TABLA FORMULARIOS EXPENSES</b>*/
/* <table border=1>*/
/* <tr>*/
/* <th></th>*/
/*    <th>TYPE</th>*/
/*    <th>LOGIN</th>*/
/*    <th>DATE</th>*/
/*    <th>READ</th>*/
/*    <th>COMPANY</th>*/
/*    <th>CONCEPT</th>*/
/*    <th>AMOUNT</th>*/
/*    <th>STATUS</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsE %}*/
/* {% for u in relationExpenses %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*    <td>*/
/*         <form action='{{ path('intranet_readForm')}}' method='post'>*/
/*               <input type="submit" value="VER">*/
/*                 <input type="hidden" name="typeF" value="expenses">*/
/*                 <input type="hidden" name="id" value="{{form.id}}">*/
/*         </form>*/
/*    </td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.type }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.company }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.concept }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.amount }} €</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* */
/* </table>*/
/* */
/* <hr>*/
/* */
/* <b>TABLA FORMULARIOS TRIPS</b>*/
/* <table border=1>*/
/* <tr>*/
/* <th></th>*/
/*    <th>TYPE</th>*/
/*    <th>LOGIN</th>*/
/*    <th>DATE</th>*/
/*    <th>READ</th>*/
/*    <th>FROM</th>*/
/*    <th>TO</th>*/
/*    <th>PLACE</th>*/
/*    <th>REASON</th>*/
/*    <th>STATUS</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsT %}*/
/* {% for u in relationTrips %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*    <td>*/
/*         <form action='{{ path('intranet_readForm')}}' method='post'>*/
/*               <input type="submit" value="VER">*/
/*                 <input type="hidden" name="typeF" value="trip">*/
/*                 <input type="hidden" name="id" value="{{form.id}}">*/
/*         </form>*/
/*    </td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.type }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date1 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date2 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.place }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.reasons }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* */
/* </table>*/
/* */
/* <hr>*/
/* */
/* <b>TABLA FORMULARIOS WORK AT HOME</b>*/
/* <table border=1>*/
/* <tr>*/
/* <th></th>*/
/*    <th>TYPE</th>*/
/*    <th>LOGIN</th>*/
/*    <th>DATE</th>*/
/*    <th>READ</th>*/
/*    <th>DATE</th>*/
/*    <th>REASON</th>*/
/*    <th>WHOLE DAY</th>*/
/*    <th>STATUS</th>*/
/* </tr>*/
/* {% for form in listIncomingFormsH %}*/
/* {% for u in relationHomes %}*/
/* {% if u.idForm==form.id %}*/
/* <tr>*/
/*    <td>*/
/*         <form action='{{ path('intranet_readForm')}}' method='post'>*/
/*               <input type="submit" value="VER">*/
/*                 <input type="hidden" name="typeF" value="Home">*/
/*                 <input type="hidden" name="id" value="{{form.id}}">*/
/*         </form>*/
/*    </td>*/
/*     <td style="padding-left: 10px;padding-right: 10px;">{{ form.type }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ u.login }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.date1 }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.reason }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.wholeDay }}</td>*/
/*    <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/* */
/* </tr>{% endif %}*/
/* {% endfor %}{% endfor %}*/
/* */
/* </table>*/
/* */
/* */
/* {% endblock %}*/
/* */

<?php

/* intranetBundle:Default:readForm.html.twig */
class __TwigTemplate_c7cdef4a5c93ebe8b3be189b35e394fe92380b560d6714ded3e388a4db37a484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:readForm.html.twig", 1);
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
        $__internal_12d070426745ff6c4cd09a19aaa96b2fc1983eb343c5b1499019167c6d401348 = $this->env->getExtension("native_profiler");
        $__internal_12d070426745ff6c4cd09a19aaa96b2fc1983eb343c5b1499019167c6d401348->enter($__internal_12d070426745ff6c4cd09a19aaa96b2fc1983eb343c5b1499019167c6d401348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:readForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12d070426745ff6c4cd09a19aaa96b2fc1983eb343c5b1499019167c6d401348->leave($__internal_12d070426745ff6c4cd09a19aaa96b2fc1983eb343c5b1499019167c6d401348_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_31b32b7b9045926d22965cf48166fb7435c7e3738c6178820bc5251be9f1c718 = $this->env->getExtension("native_profiler");
        $__internal_31b32b7b9045926d22965cf48166fb7435c7e3738c6178820bc5251be9f1c718->enter($__internal_31b32b7b9045926d22965cf48166fb7435c7e3738c6178820bc5251be9f1c718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
";
        // line 5
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()) == "hours")) {
            // line 6
            echo "
      <table border=1>
          <tr >
              <th>Type</th>
              <th>DATE SEND</th>
              <th>Hours Requested</th>
              <th>From</th>
              <th>To</th>
              <th>READ</th>
              <th>STATUS</th>
          </tr>
          <tr>
              <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), "html", null, true);
            echo "</td>
              <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "send", array()), "html", null, true);
            echo "</td>
              <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numHours", array()), "html", null, true);
            echo "</td>
              <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date1", array()), "html", null, true);
            echo "</td>
              <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date2", array()), "html", null, true);
            echo "</td>
              <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isread", array()), "html", null, true);
            echo "</td>
              <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), "html", null, true);
            echo "</td>
          </tr>
      </table>
";
        }
        // line 28
        echo "
";
        // line 29
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()) == "vacation")) {
            // line 30
            echo "      <table border=1>
      <tr>
         <th>DATE</th>
         <th>READ</th>
         <th>FROM</th>
         <th>TO</th>
         <th>STATUS</th>
      </tr>
      <tr>
         <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "send", array()), "html", null, true);
            echo "</td>
         <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isread", array()), "html", null, true);
            echo "</td>
         <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date1", array()), "html", null, true);
            echo "</td>
         <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date2", array()), "html", null, true);
            echo "</td>
         <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), "html", null, true);
            echo "</td>
      </tr>
    </table>
";
        }
        // line 47
        echo "
";
        // line 48
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()) == "expenses")) {
            // line 49
            echo "      <table border=1>
          <tr>
          <th></th>
             <th>DATE</th>
             <th>READ</th>
             <th>COMPANY</th>
             <th>CONCEPT</th>
             <th>AMOUNT</th>
             <th>STATUS</th>
          </tr>
          <tr>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "send", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isread", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "concept", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amount", array()), "html", null, true);
            echo " €</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), "html", null, true);
            echo "</td>
          </tr>
        </table>
";
        }
        // line 69
        echo "
";
        // line 70
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()) == "trip")) {
            // line 71
            echo "      <table border=1>
          <tr>
          <th></th>
             <th>DATE</th>
             <th>READ</th>
             <th>FROM</th>
             <th>TO</th>
             <th>PLACE</th>
             <th>REASON</th>
             <th>STATUS</th>
          </tr>
          <tr>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "send", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isread", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date1", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date2", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reasons", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), "html", null, true);
            echo "</td>
          </tr>
      </table>
";
        }
        // line 93
        echo "
";
        // line 94
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()) == "Home")) {
            // line 95
            echo "      <table border=1>
          <tr>
             <th>DATE</th>
             <th>READ</th>
             <th>Reasons</th>
             <th>Whole_Day</th>
             <th>STATUS</th>
          </tr>
          <tr>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "send", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isread", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reason", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wholeday", array()), "html", null, true);
            echo "</td>
             <td style=\"padding-left: 10px;padding-right: 10px;\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), "html", null, true);
            echo "</td>
          </tr>
      </table>
";
        }
        // line 112
        echo "<form action='";
        echo $this->env->getExtension('routing')->getPath("intranet_statusForm");
        echo "' method='post'>
      <input type=\"submit\" value=\"accept\" name=\"status\">
      <input type=\"submit\" value=\"reject\" name=\"status\">
        <input type=\"hidden\" name=\"typeF\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), "html", null, true);
        echo "\">
</form>

";
        
        $__internal_31b32b7b9045926d22965cf48166fb7435c7e3738c6178820bc5251be9f1c718->leave($__internal_31b32b7b9045926d22965cf48166fb7435c7e3738c6178820bc5251be9f1c718_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:readForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 116,  270 => 115,  263 => 112,  256 => 108,  252 => 107,  248 => 106,  244 => 105,  240 => 104,  229 => 95,  227 => 94,  224 => 93,  217 => 89,  213 => 88,  209 => 87,  205 => 86,  201 => 85,  197 => 84,  193 => 83,  179 => 71,  177 => 70,  174 => 69,  167 => 65,  163 => 64,  159 => 63,  155 => 62,  151 => 61,  147 => 60,  134 => 49,  132 => 48,  129 => 47,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  95 => 30,  93 => 29,  90 => 28,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/* {% if form.type=="hours" %}*/
/* */
/*       <table border=1>*/
/*           <tr >*/
/*               <th>Type</th>*/
/*               <th>DATE SEND</th>*/
/*               <th>Hours Requested</th>*/
/*               <th>From</th>*/
/*               <th>To</th>*/
/*               <th>READ</th>*/
/*               <th>STATUS</th>*/
/*           </tr>*/
/*           <tr>*/
/*               <td style="padding-left: 10px;padding-right: 10px;">{{ form.type }}</td>*/
/*               <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*               <td style="padding-left: 10px;padding-right: 10px;">{{ form.numHours }}</td>*/
/*               <td style="padding-left: 10px;padding-right: 10px;">{{ form.date1 }}</td>*/
/*               <td style="padding-left: 10px;padding-right: 10px;">{{ form.date2 }}</td>*/
/*               <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*               <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/*           </tr>*/
/*       </table>*/
/* {% endif %}*/
/* */
/* {% if form.type=="vacation" %}*/
/*       <table border=1>*/
/*       <tr>*/
/*          <th>DATE</th>*/
/*          <th>READ</th>*/
/*          <th>FROM</th>*/
/*          <th>TO</th>*/
/*          <th>STATUS</th>*/
/*       </tr>*/
/*       <tr>*/
/*          <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*          <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*          <td style="padding-left: 10px;padding-right: 10px;">{{ form.date1 }}</td>*/
/*          <td style="padding-left: 10px;padding-right: 10px;">{{ form.date2 }}</td>*/
/*          <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/*       </tr>*/
/*     </table>*/
/* {% endif %}*/
/* */
/* {% if form.type=="expenses" %}*/
/*       <table border=1>*/
/*           <tr>*/
/*           <th></th>*/
/*              <th>DATE</th>*/
/*              <th>READ</th>*/
/*              <th>COMPANY</th>*/
/*              <th>CONCEPT</th>*/
/*              <th>AMOUNT</th>*/
/*              <th>STATUS</th>*/
/*           </tr>*/
/*           <tr>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.company }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.concept }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.amount }} €</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/*           </tr>*/
/*         </table>*/
/* {% endif %}*/
/* */
/* {% if form.type=="trip" %}*/
/*       <table border=1>*/
/*           <tr>*/
/*           <th></th>*/
/*              <th>DATE</th>*/
/*              <th>READ</th>*/
/*              <th>FROM</th>*/
/*              <th>TO</th>*/
/*              <th>PLACE</th>*/
/*              <th>REASON</th>*/
/*              <th>STATUS</th>*/
/*           </tr>*/
/*           <tr>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.date1 }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.date2 }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.place }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.reasons }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/*           </tr>*/
/*       </table>*/
/* {% endif %}*/
/* */
/* {% if form.type=="Home" %}*/
/*       <table border=1>*/
/*           <tr>*/
/*              <th>DATE</th>*/
/*              <th>READ</th>*/
/*              <th>Reasons</th>*/
/*              <th>Whole_Day</th>*/
/*              <th>STATUS</th>*/
/*           </tr>*/
/*           <tr>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.send }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.isread }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.reason }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.wholeday }}</td>*/
/*              <td style="padding-left: 10px;padding-right: 10px;">{{ form.status }}</td>*/
/*           </tr>*/
/*       </table>*/
/* {% endif %}*/
/* <form action='{{ path('intranet_statusForm') }}' method='post'>*/
/*       <input type="submit" value="accept" name="status">*/
/*       <input type="submit" value="reject" name="status">*/
/*         <input type="hidden" name="typeF" value="{{ form.type }}">*/
/*         <input type="hidden" name="id" value="{{form.id}}">*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */

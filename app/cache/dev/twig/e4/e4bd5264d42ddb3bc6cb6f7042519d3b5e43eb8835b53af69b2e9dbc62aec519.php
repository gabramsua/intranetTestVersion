<?php

/* intranetBundle:Default:editHome.html.twig */
class __TwigTemplate_d4da0febfa658bb92fb85cca984387afea19586fe0ac3f120dcd04c645c54d20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:editHome.html.twig", 1);
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
        $__internal_1df86bede503a711a8e3eae76f5aa87ee64cf9b3b13816d199e688c4ab934740 = $this->env->getExtension("native_profiler");
        $__internal_1df86bede503a711a8e3eae76f5aa87ee64cf9b3b13816d199e688c4ab934740->enter($__internal_1df86bede503a711a8e3eae76f5aa87ee64cf9b3b13816d199e688c4ab934740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:editHome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1df86bede503a711a8e3eae76f5aa87ee64cf9b3b13816d199e688c4ab934740->leave($__internal_1df86bede503a711a8e3eae76f5aa87ee64cf9b3b13816d199e688c4ab934740_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ccb6599b0a610442e67d0135f7081c5470fe5130c914fc1f8eb1dcf0ce2a27de = $this->env->getExtension("native_profiler");
        $__internal_ccb6599b0a610442e67d0135f7081c5470fe5130c914fc1f8eb1dcf0ce2a27de->enter($__internal_ccb6599b0a610442e67d0135f7081c5470fe5130c914fc1f8eb1dcf0ce2a27de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<h3>WORK AT HOME</h3><br>
 <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("intranet_editForm");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
       <label>Date:</label><input type='date' id=\"from\" name=\"date1\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date1", array()), "html", null, true);
        echo "\"><BR>
       <label>Reasons: </label><input type='text' id=\"reasons\" name=\"reasons\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "reason", array()), "html", null, true);
        echo "\"><br>
       <label>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Timing", array(), "messages");
        echo "</label>
       <input type='radio' id=\"myTiming\" name=\"myTiming\" value=\"1\" ";
        // line 9
        if (($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "wholeDay", array()) == 1)) {
            echo " checked ";
        }
        echo "><label for=\"myTiming\">Whole Day</label>
       <input type='radio' id=\"myTiming2\" name=\"myTiming\" value=\"0\"  ";
        // line 10
        if (($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "wholeDay", array()) == 0)) {
            echo " checked ";
        }
        echo " ><label for=\"myTiming2\">Half Day</label><br>
 <BR>
        ";
        // line 12
        if (($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "isread", array()) == 0)) {
            // line 13
            echo "                                     <input type=\"submit\" value=\"Delete\" name=\"delete\">
                                     <input type=\"hidden\" name=\"typeF\" value=\"Home\">
                                     <input type=\"hidden\" name=\"id\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "id", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 17
        echo "   </form>


";
        
        $__internal_ccb6599b0a610442e67d0135f7081c5470fe5130c914fc1f8eb1dcf0ce2a27de->leave($__internal_ccb6599b0a610442e67d0135f7081c5470fe5130c914fc1f8eb1dcf0ce2a27de_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:editHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  78 => 15,  74 => 13,  72 => 12,  65 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* <h3>WORK AT HOME</h3><br>*/
/*  <form action="{{ path('intranet_editForm') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*        <label>Date:</label><input type='date' id="from" name="date1" value="{{ f.date1 }}"><BR>*/
/*        <label>Reasons: </label><input type='text' id="reasons" name="reasons" value="{{ f.reason }}"><br>*/
/*        <label>{% trans %}Timing{% endtrans %}</label>*/
/*        <input type='radio' id="myTiming" name="myTiming" value="1" {% if f.wholeDay==1 %} checked {% endif %}><label for="myTiming">Whole Day</label>*/
/*        <input type='radio' id="myTiming2" name="myTiming" value="0"  {% if f.wholeDay==0 %} checked {% endif %} ><label for="myTiming2">Half Day</label><br>*/
/*  <BR>*/
/*         {% if f.isread==0 %}*/
/*                                      <input type="submit" value="Delete" name="delete">*/
/*                                      <input type="hidden" name="typeF" value="Home">*/
/*                                      <input type="hidden" name="id" value="{{ f.id }}">*/
/*         {% endif %}*/
/*    </form>*/
/* */
/* */
/* {% endblock %}*/
/* */

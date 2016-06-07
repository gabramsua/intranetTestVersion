<?php

/* intranetBundle:Default:landing.html.twig */
class __TwigTemplate_85d5b7b04c31757d016f45289a35b6033de9e95d7b70b716fd130369cc4213ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:landing.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Inicio</h1>
<h2> LANDING PAGE   </h2>
Esta es la pagina de aterrizaje
<hr>
";
        // line 8
        echo "        <li><a href='";
        echo $this->env->getExtension('routing')->getPath("intranet_news");
        echo "'>News Feed -<i>Only for BÜOs</i></a></li>
";
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 12
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "name", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  49 => 12,  45 => 11,  42 => 10,  37 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* {% block contenido %}*/
/* <h1>Inicio</h1>*/
/* <h2> LANDING PAGE   </h2>*/
/* Esta es la pagina de aterrizaje*/
/* <hr>*/
/* {# if user!="" #}*/
/*         <li><a href='{{ path('intranet_news')}}'>News Feed -<i>Only for BÜOs</i></a></li>*/
/* {# endif #}*/
/* */
/* {% for u in user %}*/
/*   {{ u.name }}*/
/* {% endfor %}*/
/* */
/* {% endblock %}*/
/* */

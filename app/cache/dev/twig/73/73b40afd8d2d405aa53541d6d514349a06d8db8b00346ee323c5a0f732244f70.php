<?php

/* intranetBundle:Default:landinga.html.twig */
class __TwigTemplate_df6bc2f222c1678aab9347744c81ce1dce0383532b263edb653329b92a2d2b6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout2.html.twig", "intranetBundle:Default:landinga.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c121f8976911b458b867f5980d36a7cafe3d38123717b39ce7f9f44393332417 = $this->env->getExtension("native_profiler");
        $__internal_c121f8976911b458b867f5980d36a7cafe3d38123717b39ce7f9f44393332417->enter($__internal_c121f8976911b458b867f5980d36a7cafe3d38123717b39ce7f9f44393332417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:landinga.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c121f8976911b458b867f5980d36a7cafe3d38123717b39ce7f9f44393332417->leave($__internal_c121f8976911b458b867f5980d36a7cafe3d38123717b39ce7f9f44393332417_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d0d77b5546a71b318eaa05e250a716bd515291dafb8c47a4cf30d578d6c3683c = $this->env->getExtension("native_profiler");
        $__internal_d0d77b5546a71b318eaa05e250a716bd515291dafb8c47a4cf30d578d6c3683c->enter($__internal_d0d77b5546a71b318eaa05e250a716bd515291dafb8c47a4cf30d578d6c3683c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<script>
    window.onload = function(){
          document.forms['form1'].submit();
    }
</script>
    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_homepage", array("_locale" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lang", array()))), "html", null, true);
        echo "\" method=\"post\" id=\"form1\"></form>
";
        
        $__internal_d0d77b5546a71b318eaa05e250a716bd515291dafb8c47a4cf30d578d6c3683c->leave($__internal_d0d77b5546a71b318eaa05e250a716bd515291dafb8c47a4cf30d578d6c3683c_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:landinga.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout2.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <script>*/
/*     window.onload = function(){*/
/*           document.forms['form1'].submit();*/
/*     }*/
/* </script>*/
/*     <form action="{{ path('intranet_homepage', {_locale: user.lang }) }}" method="post" id="form1"></form>*/
/* {% endblock %}*/
/* */

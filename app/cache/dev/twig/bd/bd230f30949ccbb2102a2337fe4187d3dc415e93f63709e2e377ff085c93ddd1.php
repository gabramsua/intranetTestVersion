<?php

/* intranetBundle::layout.html.twig */
class __TwigTemplate_1985b99c5aa795f795273f67ed5c0e4fa755313f2bdabcf6d3ed942e835844eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "intranetBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'newsfeed' => array($this, 'block_newsfeed'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc37b6e3f2032eb132c5d42e6cc5f06667ba7087c46649dc1051faaf8ebb5ec9 = $this->env->getExtension("native_profiler");
        $__internal_cc37b6e3f2032eb132c5d42e6cc5f06667ba7087c46649dc1051faaf8ebb5ec9->enter($__internal_cc37b6e3f2032eb132c5d42e6cc5f06667ba7087c46649dc1051faaf8ebb5ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout.html.twig"));

        // line 2
        $context["__internal_fe8932aef8130c7e83e5946dd6f08a486555653e7733fbff19915528d415a67a"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "intranetBundle::layout.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc37b6e3f2032eb132c5d42e6cc5f06667ba7087c46649dc1051faaf8ebb5ec9->leave($__internal_cc37b6e3f2032eb132c5d42e6cc5f06667ba7087c46649dc1051faaf8ebb5ec9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca7f2d3e5c495bf9135dac886051c9a6756426b7523c817ce6b63315e93b6b6f = $this->env->getExtension("native_profiler");
        $__internal_ca7f2d3e5c495bf9135dac886051c9a6756426b7523c817ce6b63315e93b6b6f->enter($__internal_ca7f2d3e5c495bf9135dac886051c9a6756426b7523c817ce6b63315e93b6b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->
 <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_ca7f2d3e5c495bf9135dac886051c9a6756426b7523c817ce6b63315e93b6b6f->leave($__internal_ca7f2d3e5c495bf9135dac886051c9a6756426b7523c817ce6b63315e93b6b6f_prof);

    }

    // line 14
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_c6a707bc32b941dc34fbd5e7aa49ae9f3e137e09dc498c9929486c2f12c5eb4f = $this->env->getExtension("native_profiler");
        $__internal_c6a707bc32b941dc34fbd5e7aa49ae9f3e137e09dc498c9929486c2f12c5eb4f->enter($__internal_c6a707bc32b941dc34fbd5e7aa49ae9f3e137e09dc498c9929486c2f12c5eb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 15
        echo "    <div id=\"cabecera\">
      <h1>Here will be the image</h1>
    </div>
";
        
        $__internal_c6a707bc32b941dc34fbd5e7aa49ae9f3e137e09dc498c9929486c2f12c5eb4f->leave($__internal_c6a707bc32b941dc34fbd5e7aa49ae9f3e137e09dc498c9929486c2f12c5eb4f_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d808686cd6b0848e4d20793208dcd58bb2aad520bf5b8f6f7de1f332207ca83 = $this->env->getExtension("native_profiler");
        $__internal_4d808686cd6b0848e4d20793208dcd58bb2aad520bf5b8f6f7de1f332207ca83->enter($__internal_4d808686cd6b0848e4d20793208dcd58bb2aad520bf5b8f6f7de1f332207ca83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "  ";
        // line 22
        echo "  ";
        // line 23
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:Menu:menu"));
        echo "
";
        
        $__internal_4d808686cd6b0848e4d20793208dcd58bb2aad520bf5b8f6f7de1f332207ca83->leave($__internal_4d808686cd6b0848e4d20793208dcd58bb2aad520bf5b8f6f7de1f332207ca83_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd77f646549e343a6843608a294241c0ed591203b07edc9ea3d457ee7a65945b = $this->env->getExtension("native_profiler");
        $__internal_fd77f646549e343a6843608a294241c0ed591203b07edc9ea3d457ee7a65945b->enter($__internal_fd77f646549e343a6843608a294241c0ed591203b07edc9ea3d457ee7a65945b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "
<div id=\"newsfeed\" style=\"width: 200px; float: right; margin-top: 100px; margin-right: 100px;\">
        ";
        // line 30
        $this->displayBlock('newsfeed', $context, $blocks);
        // line 33
        echo "    </div>

    <div id=\"contenido\">
        ";
        // line 36
        $this->displayBlock('contenido', $context, $blocks);
        // line 38
        echo "    </div>

    <div id=\"pie\">
        <hr/>
        <div align=\"center\">- pie de página -</div>
    </div>
";
        
        $__internal_fd77f646549e343a6843608a294241c0ed591203b07edc9ea3d457ee7a65945b->leave($__internal_fd77f646549e343a6843608a294241c0ed591203b07edc9ea3d457ee7a65945b_prof);

    }

    // line 30
    public function block_newsfeed($context, array $blocks = array())
    {
        $__internal_242b46513c4c829c500a3202b64bc7ed13b21d0515855d1f1b725768cb88036e = $this->env->getExtension("native_profiler");
        $__internal_242b46513c4c829c500a3202b64bc7ed13b21d0515855d1f1b725768cb88036e->enter($__internal_242b46513c4c829c500a3202b64bc7ed13b21d0515855d1f1b725768cb88036e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newsfeed"));

        // line 31
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:News:news"));
        echo "
        ";
        
        $__internal_242b46513c4c829c500a3202b64bc7ed13b21d0515855d1f1b725768cb88036e->leave($__internal_242b46513c4c829c500a3202b64bc7ed13b21d0515855d1f1b725768cb88036e_prof);

    }

    // line 36
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1d8a0e2038d8780736d326c9002c67ac346d8cb25fe685c13222b9a0b7a374a8 = $this->env->getExtension("native_profiler");
        $__internal_1d8a0e2038d8780736d326c9002c67ac346d8cb25fe685c13222b9a0b7a374a8->enter($__internal_1d8a0e2038d8780736d326c9002c67ac346d8cb25fe685c13222b9a0b7a374a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 37
        echo "        ";
        
        $__internal_1d8a0e2038d8780736d326c9002c67ac346d8cb25fe685c13222b9a0b7a374a8->leave($__internal_1d8a0e2038d8780736d326c9002c67ac346d8cb25fe685c13222b9a0b7a374a8_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 37,  148 => 36,  138 => 31,  132 => 30,  119 => 38,  117 => 36,  112 => 33,  110 => 30,  106 => 28,  100 => 27,  90 => 23,  88 => 22,  86 => 21,  80 => 20,  70 => 15,  64 => 14,  51 => 6,  48 => 5,  42 => 4,  35 => 1,  33 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% from 'intranetBundle::macroMenu.html.twig' import uROL %}*/
/* */
/* {% block stylesheets %}*/
/* <!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->*/
/*  <link href="{{ asset('bundles/alimentos/estilo.css') }}" type="text/css" rel="stylesheet" />*/
/*   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* <meta charset="UTF-8">*/
/* {% endblock %}*/
/* */
/* */
/* {% block cabecera %}*/
/*     <div id="cabecera">*/
/*       <h1>Here will be the image</h1>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*   {#{% include '::menu.html.twig' %}#}*/
/*   {# {{ uROL('buo') }} #}*/
/*   {{ render(controller('intranetBundle:Menu:menu')) }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* <div id="newsfeed" style="width: 200px; float: right; margin-top: 100px; margin-right: 100px;">*/
/*         {% block newsfeed %}*/
/*             {{ render(controller('intranetBundle:News:news')) }}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="contenido">*/
/*         {% block contenido %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="pie">*/
/*         <hr/>*/
/*         <div align="center">- pie de página -</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

<?php

/* intranetBundle::layout.html.twig */
class __TwigTemplate_f13ba7a49fd4bc2a472614f50a413c9e7f2b0c0cf68ea9543e8ff60b1bd7325a extends Twig_Template
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
        $__internal_66722793b20349a1b22ba0905337f79906a1be984d92754a0a285522875e84c6 = $this->env->getExtension("native_profiler");
        $__internal_66722793b20349a1b22ba0905337f79906a1be984d92754a0a285522875e84c6->enter($__internal_66722793b20349a1b22ba0905337f79906a1be984d92754a0a285522875e84c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout.html.twig"));

        // line 2
        $context["__internal_f8786e75d88fa7abd7df703c4bd28e9f96c29adea01b9190886e4a24ed7548a5"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "intranetBundle::layout.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66722793b20349a1b22ba0905337f79906a1be984d92754a0a285522875e84c6->leave($__internal_66722793b20349a1b22ba0905337f79906a1be984d92754a0a285522875e84c6_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_239d6184548fc5b1ab0518e064add9ca0d9e77f0d32137ffbd1564668a358e65 = $this->env->getExtension("native_profiler");
        $__internal_239d6184548fc5b1ab0518e064add9ca0d9e77f0d32137ffbd1564668a358e65->enter($__internal_239d6184548fc5b1ab0518e064add9ca0d9e77f0d32137ffbd1564668a358e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_239d6184548fc5b1ab0518e064add9ca0d9e77f0d32137ffbd1564668a358e65->leave($__internal_239d6184548fc5b1ab0518e064add9ca0d9e77f0d32137ffbd1564668a358e65_prof);

    }

    // line 14
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_ed6958bcfd678eddd034b5c5b1bcd00236cdb8e7e0aecd84ee46f1d76d156270 = $this->env->getExtension("native_profiler");
        $__internal_ed6958bcfd678eddd034b5c5b1bcd00236cdb8e7e0aecd84ee46f1d76d156270->enter($__internal_ed6958bcfd678eddd034b5c5b1bcd00236cdb8e7e0aecd84ee46f1d76d156270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 15
        echo "    <div id=\"cabecera\">
      <h1>Here will be the image</h1>
    </div>
";
        
        $__internal_ed6958bcfd678eddd034b5c5b1bcd00236cdb8e7e0aecd84ee46f1d76d156270->leave($__internal_ed6958bcfd678eddd034b5c5b1bcd00236cdb8e7e0aecd84ee46f1d76d156270_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8220c97300cd162f659e6ea36f6bf2658a3e6ea167a7846d22c5001562801730 = $this->env->getExtension("native_profiler");
        $__internal_8220c97300cd162f659e6ea36f6bf2658a3e6ea167a7846d22c5001562801730->enter($__internal_8220c97300cd162f659e6ea36f6bf2658a3e6ea167a7846d22c5001562801730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "  ";
        // line 22
        echo "  ";
        // line 23
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:Menu:menu"));
        echo "
";
        
        $__internal_8220c97300cd162f659e6ea36f6bf2658a3e6ea167a7846d22c5001562801730->leave($__internal_8220c97300cd162f659e6ea36f6bf2658a3e6ea167a7846d22c5001562801730_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_21731d88125b72355a552c1fe159310d5358537020a26fe440839cc9cd5360e1 = $this->env->getExtension("native_profiler");
        $__internal_21731d88125b72355a552c1fe159310d5358537020a26fe440839cc9cd5360e1->enter($__internal_21731d88125b72355a552c1fe159310d5358537020a26fe440839cc9cd5360e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_21731d88125b72355a552c1fe159310d5358537020a26fe440839cc9cd5360e1->leave($__internal_21731d88125b72355a552c1fe159310d5358537020a26fe440839cc9cd5360e1_prof);

    }

    // line 30
    public function block_newsfeed($context, array $blocks = array())
    {
        $__internal_36798d8e91fb81246c2be26a5f1fed17c9bce644167bee8809d264fb7aad7a68 = $this->env->getExtension("native_profiler");
        $__internal_36798d8e91fb81246c2be26a5f1fed17c9bce644167bee8809d264fb7aad7a68->enter($__internal_36798d8e91fb81246c2be26a5f1fed17c9bce644167bee8809d264fb7aad7a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newsfeed"));

        // line 31
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:News:news"));
        echo "
        ";
        
        $__internal_36798d8e91fb81246c2be26a5f1fed17c9bce644167bee8809d264fb7aad7a68->leave($__internal_36798d8e91fb81246c2be26a5f1fed17c9bce644167bee8809d264fb7aad7a68_prof);

    }

    // line 36
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_62d7a56330a67bfebee217799b44f4722e51e89332afc35c1a8fea553e806f73 = $this->env->getExtension("native_profiler");
        $__internal_62d7a56330a67bfebee217799b44f4722e51e89332afc35c1a8fea553e806f73->enter($__internal_62d7a56330a67bfebee217799b44f4722e51e89332afc35c1a8fea553e806f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 37
        echo "        ";
        
        $__internal_62d7a56330a67bfebee217799b44f4722e51e89332afc35c1a8fea553e806f73->leave($__internal_62d7a56330a67bfebee217799b44f4722e51e89332afc35c1a8fea553e806f73_prof);

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

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
        $__internal_93388c915b261442ebca3549df0ee783301348a1ede5d2b3f79c4832023d46dc = $this->env->getExtension("native_profiler");
        $__internal_93388c915b261442ebca3549df0ee783301348a1ede5d2b3f79c4832023d46dc->enter($__internal_93388c915b261442ebca3549df0ee783301348a1ede5d2b3f79c4832023d46dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout.html.twig"));

        // line 2
        $context["__internal_c05487c02d9ea833ee098c3f73482e7695b267b780f7877510e170175efee703"] = $this->loadTemplate("intranetBundle::macroMenu.html.twig", "intranetBundle::layout.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93388c915b261442ebca3549df0ee783301348a1ede5d2b3f79c4832023d46dc->leave($__internal_93388c915b261442ebca3549df0ee783301348a1ede5d2b3f79c4832023d46dc_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_addc122c3f505b17e54d31aae4da9bd1cdf970e29b24a3312d56857fc1e15e00 = $this->env->getExtension("native_profiler");
        $__internal_addc122c3f505b17e54d31aae4da9bd1cdf970e29b24a3312d56857fc1e15e00->enter($__internal_addc122c3f505b17e54d31aae4da9bd1cdf970e29b24a3312d56857fc1e15e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_addc122c3f505b17e54d31aae4da9bd1cdf970e29b24a3312d56857fc1e15e00->leave($__internal_addc122c3f505b17e54d31aae4da9bd1cdf970e29b24a3312d56857fc1e15e00_prof);

    }

    // line 14
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_004ef217d66dcc8617799dba4bbe125ac481d57145adc6402b96751f63707c96 = $this->env->getExtension("native_profiler");
        $__internal_004ef217d66dcc8617799dba4bbe125ac481d57145adc6402b96751f63707c96->enter($__internal_004ef217d66dcc8617799dba4bbe125ac481d57145adc6402b96751f63707c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 15
        echo "    <div id=\"cabecera\">
      <h1>Here will be the image</h1>
    </div>
";
        
        $__internal_004ef217d66dcc8617799dba4bbe125ac481d57145adc6402b96751f63707c96->leave($__internal_004ef217d66dcc8617799dba4bbe125ac481d57145adc6402b96751f63707c96_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_821fee63da047159455f376ea1e310cd0dd634bfe78d2869535195e14ab7d5fa = $this->env->getExtension("native_profiler");
        $__internal_821fee63da047159455f376ea1e310cd0dd634bfe78d2869535195e14ab7d5fa->enter($__internal_821fee63da047159455f376ea1e310cd0dd634bfe78d2869535195e14ab7d5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "  ";
        // line 22
        echo "  ";
        // line 23
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:Menu:menu"));
        echo "
";
        
        $__internal_821fee63da047159455f376ea1e310cd0dd634bfe78d2869535195e14ab7d5fa->leave($__internal_821fee63da047159455f376ea1e310cd0dd634bfe78d2869535195e14ab7d5fa_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_347e4a97194c81c5999c2b2d6b850e955540a7c1f6cf79e5e35aad2d7553bac7 = $this->env->getExtension("native_profiler");
        $__internal_347e4a97194c81c5999c2b2d6b850e955540a7c1f6cf79e5e35aad2d7553bac7->enter($__internal_347e4a97194c81c5999c2b2d6b850e955540a7c1f6cf79e5e35aad2d7553bac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_347e4a97194c81c5999c2b2d6b850e955540a7c1f6cf79e5e35aad2d7553bac7->leave($__internal_347e4a97194c81c5999c2b2d6b850e955540a7c1f6cf79e5e35aad2d7553bac7_prof);

    }

    // line 30
    public function block_newsfeed($context, array $blocks = array())
    {
        $__internal_0fcfcc6401bf3bd72a041b86c8bdf8420f1673c8c0152f5b4a20b7d9151380e2 = $this->env->getExtension("native_profiler");
        $__internal_0fcfcc6401bf3bd72a041b86c8bdf8420f1673c8c0152f5b4a20b7d9151380e2->enter($__internal_0fcfcc6401bf3bd72a041b86c8bdf8420f1673c8c0152f5b4a20b7d9151380e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newsfeed"));

        // line 31
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("intranetBundle:News:news"));
        echo "
        ";
        
        $__internal_0fcfcc6401bf3bd72a041b86c8bdf8420f1673c8c0152f5b4a20b7d9151380e2->leave($__internal_0fcfcc6401bf3bd72a041b86c8bdf8420f1673c8c0152f5b4a20b7d9151380e2_prof);

    }

    // line 36
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_613cd2665176f7c1a5a615a204a478b09f302ff934e3daf9f5a9f1a10f257589 = $this->env->getExtension("native_profiler");
        $__internal_613cd2665176f7c1a5a615a204a478b09f302ff934e3daf9f5a9f1a10f257589->enter($__internal_613cd2665176f7c1a5a615a204a478b09f302ff934e3daf9f5a9f1a10f257589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 37
        echo "        ";
        
        $__internal_613cd2665176f7c1a5a615a204a478b09f302ff934e3daf9f5a9f1a10f257589->leave($__internal_613cd2665176f7c1a5a615a204a478b09f302ff934e3daf9f5a9f1a10f257589_prof);

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

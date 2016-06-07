<?php

/* intranetBundle::layout.html.twig */
class __TwigTemplate_32d12bf0552e7d71acbb07dd58fca75911ce1e09c02ee88323001f0807e2d29f extends Twig_Template
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
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<!-- ESTA CARPETA NO ESTÁ CREADA AÚN -->
 <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
    }

    // line 12
    public function block_cabecera($context, array $blocks = array())
    {
        // line 13
        echo "    <div id=\"cabecera\">
      <h1>Aquí irá la imagen de la cabecera</h1>
    </div>
";
    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        // line 19
        echo "  ";
        $this->loadTemplate("::menu.html.twig", "intranetBundle::layout.html.twig", 19)->display($context);
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "    <div id=\"contenido\">
        ";
        // line 25
        $this->displayBlock('contenido', $context, $blocks);
        // line 27
        echo "    </div>

    <div id=\"pie\">
        <hr/>
        <div align=\"center\">- pie de página -</div>
    </div>
";
    }

    // line 25
    public function block_contenido($context, array $blocks = array())
    {
        // line 26
        echo "        ";
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
        return array (  87 => 26,  84 => 25,  74 => 27,  72 => 25,  69 => 24,  66 => 23,  61 => 19,  58 => 18,  51 => 13,  48 => 12,  38 => 4,  35 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
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
/*       <h1>Aquí irá la imagen de la cabecera</h1>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*   {% include '::menu.html.twig' %}*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
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

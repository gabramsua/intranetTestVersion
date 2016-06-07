<?php

/* intranetBundle::layout2.html.twig */
class __TwigTemplate_b4ddaca4029cd0b281d5de4ab205a74e56d404cc0996de0fbbec01685c6fde92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "intranetBundle::layout2.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
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
        $__internal_5919dc429dc4f698c6fe444590886537515d5a991a19e42f0ecbda6bc9b597a4 = $this->env->getExtension("native_profiler");
        $__internal_5919dc429dc4f698c6fe444590886537515d5a991a19e42f0ecbda6bc9b597a4->enter($__internal_5919dc429dc4f698c6fe444590886537515d5a991a19e42f0ecbda6bc9b597a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5919dc429dc4f698c6fe444590886537515d5a991a19e42f0ecbda6bc9b597a4->leave($__internal_5919dc429dc4f698c6fe444590886537515d5a991a19e42f0ecbda6bc9b597a4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4de45191e76020fe65f6e6ec6fa8bdcabb266be2ae1632c50abeba9a59abb589 = $this->env->getExtension("native_profiler");
        $__internal_4de45191e76020fe65f6e6ec6fa8bdcabb266be2ae1632c50abeba9a59abb589->enter($__internal_4de45191e76020fe65f6e6ec6fa8bdcabb266be2ae1632c50abeba9a59abb589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/alimentos/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<meta charset=\"UTF-8\">
";
        
        $__internal_4de45191e76020fe65f6e6ec6fa8bdcabb266be2ae1632c50abeba9a59abb589->leave($__internal_4de45191e76020fe65f6e6ec6fa8bdcabb266be2ae1632c50abeba9a59abb589_prof);

    }

    // line 11
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_177006f1ae4d3d6685bea77bbf3141183867d8cf87e4ae612042347621419d6f = $this->env->getExtension("native_profiler");
        $__internal_177006f1ae4d3d6685bea77bbf3141183867d8cf87e4ae612042347621419d6f->enter($__internal_177006f1ae4d3d6685bea77bbf3141183867d8cf87e4ae612042347621419d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 12
        echo "    <div id=\"cabecera\">
    </div>
";
        
        $__internal_177006f1ae4d3d6685bea77bbf3141183867d8cf87e4ae612042347621419d6f->leave($__internal_177006f1ae4d3d6685bea77bbf3141183867d8cf87e4ae612042347621419d6f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_f83e689b35916e518f951d58ecb046a89ee1f7723c8712746d73e23e50f34f34 = $this->env->getExtension("native_profiler");
        $__internal_f83e689b35916e518f951d58ecb046a89ee1f7723c8712746d73e23e50f34f34->enter($__internal_f83e689b35916e518f951d58ecb046a89ee1f7723c8712746d73e23e50f34f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <div id=\"contenido\">
        ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        // line 20
        echo "    </div>

    <div id=\"pie\">
        <div align=\"center\"></div>
    </div>
";
        
        $__internal_f83e689b35916e518f951d58ecb046a89ee1f7723c8712746d73e23e50f34f34->leave($__internal_f83e689b35916e518f951d58ecb046a89ee1f7723c8712746d73e23e50f34f34_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ca9fd1c8c24a9964c33459bd7c0b86883e72ba3c6cd478e68e42280255c136b1 = $this->env->getExtension("native_profiler");
        $__internal_ca9fd1c8c24a9964c33459bd7c0b86883e72ba3c6cd478e68e42280255c136b1->enter($__internal_ca9fd1c8c24a9964c33459bd7c0b86883e72ba3c6cd478e68e42280255c136b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 19
        echo "        ";
        
        $__internal_ca9fd1c8c24a9964c33459bd7c0b86883e72ba3c6cd478e68e42280255c136b1->leave($__internal_ca9fd1c8c24a9964c33459bd7c0b86883e72ba3c6cd478e68e42280255c136b1_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  95 => 18,  83 => 20,  81 => 18,  78 => 17,  72 => 16,  63 => 12,  57 => 11,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block stylesheets %}*/
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
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="contenido">*/
/*         {% block contenido %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div id="pie">*/
/*         <div align="center"></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

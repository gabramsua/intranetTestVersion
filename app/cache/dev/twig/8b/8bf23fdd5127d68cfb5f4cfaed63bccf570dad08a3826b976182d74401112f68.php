<?php

/* ::base.html.twig */
class __TwigTemplate_4eae0976006e278358d00e6c9a89083b3b1164b854e492a621f4e1288cf7bc24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8aa30a9527b0a7fcc186a99758b580b3131adacbb0e736cbd3c4c5ec905a939 = $this->env->getExtension("native_profiler");
        $__internal_b8aa30a9527b0a7fcc186a99758b580b3131adacbb0e736cbd3c4c5ec905a939->enter($__internal_b8aa30a9527b0a7fcc186a99758b580b3131adacbb0e736cbd3c4c5ec905a939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('cabecera', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_b8aa30a9527b0a7fcc186a99758b580b3131adacbb0e736cbd3c4c5ec905a939->leave($__internal_b8aa30a9527b0a7fcc186a99758b580b3131adacbb0e736cbd3c4c5ec905a939_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c32babef225e860e949b0ef9405413b8b8c3f7e91b2a7091f6781b7f9a5ee5f = $this->env->getExtension("native_profiler");
        $__internal_0c32babef225e860e949b0ef9405413b8b8c3f7e91b2a7091f6781b7f9a5ee5f->enter($__internal_0c32babef225e860e949b0ef9405413b8b8c3f7e91b2a7091f6781b7f9a5ee5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet WebCuisine";
        
        $__internal_0c32babef225e860e949b0ef9405413b8b8c3f7e91b2a7091f6781b7f9a5ee5f->leave($__internal_0c32babef225e860e949b0ef9405413b8b8c3f7e91b2a7091f6781b7f9a5ee5f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd180ec4ada34b9dde6c5b9515d270aa3fd36fb297c4f1f1887a989a70d879b8 = $this->env->getExtension("native_profiler");
        $__internal_bd180ec4ada34b9dde6c5b9515d270aa3fd36fb297c4f1f1887a989a70d879b8->enter($__internal_bd180ec4ada34b9dde6c5b9515d270aa3fd36fb297c4f1f1887a989a70d879b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bd180ec4ada34b9dde6c5b9515d270aa3fd36fb297c4f1f1887a989a70d879b8->leave($__internal_bd180ec4ada34b9dde6c5b9515d270aa3fd36fb297c4f1f1887a989a70d879b8_prof);

    }

    // line 10
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_8dc97af38282e345cfd12307170e001d7deaefd4b1558982bac8630de3b428cb = $this->env->getExtension("native_profiler");
        $__internal_8dc97af38282e345cfd12307170e001d7deaefd4b1558982bac8630de3b428cb->enter($__internal_8dc97af38282e345cfd12307170e001d7deaefd4b1558982bac8630de3b428cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        
        $__internal_8dc97af38282e345cfd12307170e001d7deaefd4b1558982bac8630de3b428cb->leave($__internal_8dc97af38282e345cfd12307170e001d7deaefd4b1558982bac8630de3b428cb_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d068df5e658d07ff5a59d13441b74abb17225f9b7a4b59a596ed344e8a0f600a = $this->env->getExtension("native_profiler");
        $__internal_d068df5e658d07ff5a59d13441b74abb17225f9b7a4b59a596ed344e8a0f600a->enter($__internal_d068df5e658d07ff5a59d13441b74abb17225f9b7a4b59a596ed344e8a0f600a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_d068df5e658d07ff5a59d13441b74abb17225f9b7a4b59a596ed344e8a0f600a->leave($__internal_d068df5e658d07ff5a59d13441b74abb17225f9b7a4b59a596ed344e8a0f600a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e913fe125cba822b260076352c69b63d382bda84851e413db50713e934d7bedd = $this->env->getExtension("native_profiler");
        $__internal_e913fe125cba822b260076352c69b63d382bda84851e413db50713e934d7bedd->enter($__internal_e913fe125cba822b260076352c69b63d382bda84851e413db50713e934d7bedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e913fe125cba822b260076352c69b63d382bda84851e413db50713e934d7bedd->leave($__internal_e913fe125cba822b260076352c69b63d382bda84851e413db50713e934d7bedd_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77e6a693c99062262463c4ac932707e170b6739a6bcec41c0dba0273e3372228 = $this->env->getExtension("native_profiler");
        $__internal_77e6a693c99062262463c4ac932707e170b6739a6bcec41c0dba0273e3372228->enter($__internal_77e6a693c99062262463c4ac932707e170b6739a6bcec41c0dba0273e3372228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_77e6a693c99062262463c4ac932707e170b6739a6bcec41c0dba0273e3372228->leave($__internal_77e6a693c99062262463c4ac932707e170b6739a6bcec41c0dba0273e3372228_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 13,  112 => 12,  101 => 11,  90 => 10,  79 => 6,  67 => 5,  58 => 14,  55 => 13,  52 => 12,  49 => 11,  47 => 10,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Intranet WebCuisine{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block cabecera %}{% endblock %}*/
/*         {% block menu %}{% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

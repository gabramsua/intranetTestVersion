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
        $__internal_4f573de9debdde37fd0ca528a6c62d546e189c8a1a1742a947fae3e119096eb6 = $this->env->getExtension("native_profiler");
        $__internal_4f573de9debdde37fd0ca528a6c62d546e189c8a1a1742a947fae3e119096eb6->enter($__internal_4f573de9debdde37fd0ca528a6c62d546e189c8a1a1742a947fae3e119096eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4f573de9debdde37fd0ca528a6c62d546e189c8a1a1742a947fae3e119096eb6->leave($__internal_4f573de9debdde37fd0ca528a6c62d546e189c8a1a1742a947fae3e119096eb6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5cb494463b134c91633ec3c4f67ae058c19f420e00efa543490c0f735c33f97 = $this->env->getExtension("native_profiler");
        $__internal_e5cb494463b134c91633ec3c4f67ae058c19f420e00efa543490c0f735c33f97->enter($__internal_e5cb494463b134c91633ec3c4f67ae058c19f420e00efa543490c0f735c33f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet WebCuisine";
        
        $__internal_e5cb494463b134c91633ec3c4f67ae058c19f420e00efa543490c0f735c33f97->leave($__internal_e5cb494463b134c91633ec3c4f67ae058c19f420e00efa543490c0f735c33f97_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_512651ceedf3dbd8e875c77c63ea292f6d5295ac683e58bcaf23b64a524cad8e = $this->env->getExtension("native_profiler");
        $__internal_512651ceedf3dbd8e875c77c63ea292f6d5295ac683e58bcaf23b64a524cad8e->enter($__internal_512651ceedf3dbd8e875c77c63ea292f6d5295ac683e58bcaf23b64a524cad8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_512651ceedf3dbd8e875c77c63ea292f6d5295ac683e58bcaf23b64a524cad8e->leave($__internal_512651ceedf3dbd8e875c77c63ea292f6d5295ac683e58bcaf23b64a524cad8e_prof);

    }

    // line 10
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_c0630e57ca10d9bbee5780cdae221d9efd624da29906febb504c5276cd4b21a1 = $this->env->getExtension("native_profiler");
        $__internal_c0630e57ca10d9bbee5780cdae221d9efd624da29906febb504c5276cd4b21a1->enter($__internal_c0630e57ca10d9bbee5780cdae221d9efd624da29906febb504c5276cd4b21a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        
        $__internal_c0630e57ca10d9bbee5780cdae221d9efd624da29906febb504c5276cd4b21a1->leave($__internal_c0630e57ca10d9bbee5780cdae221d9efd624da29906febb504c5276cd4b21a1_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7c8eaafe6ea3c8431a67f52c68dd240898401c5643e5834a935ac24f285a0f7 = $this->env->getExtension("native_profiler");
        $__internal_e7c8eaafe6ea3c8431a67f52c68dd240898401c5643e5834a935ac24f285a0f7->enter($__internal_e7c8eaafe6ea3c8431a67f52c68dd240898401c5643e5834a935ac24f285a0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_e7c8eaafe6ea3c8431a67f52c68dd240898401c5643e5834a935ac24f285a0f7->leave($__internal_e7c8eaafe6ea3c8431a67f52c68dd240898401c5643e5834a935ac24f285a0f7_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_92006c63cb3430c61391af49c058c0cd2a44e816844f953b51f41a8db04ce0f0 = $this->env->getExtension("native_profiler");
        $__internal_92006c63cb3430c61391af49c058c0cd2a44e816844f953b51f41a8db04ce0f0->enter($__internal_92006c63cb3430c61391af49c058c0cd2a44e816844f953b51f41a8db04ce0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_92006c63cb3430c61391af49c058c0cd2a44e816844f953b51f41a8db04ce0f0->leave($__internal_92006c63cb3430c61391af49c058c0cd2a44e816844f953b51f41a8db04ce0f0_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6da6543c2de1cfd9982e8b110bbffdbd8af2b7cb30101dfaf9120e503ca14b37 = $this->env->getExtension("native_profiler");
        $__internal_6da6543c2de1cfd9982e8b110bbffdbd8af2b7cb30101dfaf9120e503ca14b37->enter($__internal_6da6543c2de1cfd9982e8b110bbffdbd8af2b7cb30101dfaf9120e503ca14b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6da6543c2de1cfd9982e8b110bbffdbd8af2b7cb30101dfaf9120e503ca14b37->leave($__internal_6da6543c2de1cfd9982e8b110bbffdbd8af2b7cb30101dfaf9120e503ca14b37_prof);

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

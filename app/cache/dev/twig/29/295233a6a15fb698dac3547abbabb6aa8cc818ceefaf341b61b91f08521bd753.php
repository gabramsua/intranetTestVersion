<?php

/* base.html.twig */
class __TwigTemplate_dbf11895a4e2f80e601f71de0c5cd57543d664ca1ab4b20a30238f69ea80ce32 extends Twig_Template
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
        $__internal_fe8d8af8162a14851c4c0460bcb2192a3ab582115ae0fda7633739c901db4234 = $this->env->getExtension("native_profiler");
        $__internal_fe8d8af8162a14851c4c0460bcb2192a3ab582115ae0fda7633739c901db4234->enter($__internal_fe8d8af8162a14851c4c0460bcb2192a3ab582115ae0fda7633739c901db4234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fe8d8af8162a14851c4c0460bcb2192a3ab582115ae0fda7633739c901db4234->leave($__internal_fe8d8af8162a14851c4c0460bcb2192a3ab582115ae0fda7633739c901db4234_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51900b7379b1080d70bda08d976631488944909f06e92a9ea646c78417a3f862 = $this->env->getExtension("native_profiler");
        $__internal_51900b7379b1080d70bda08d976631488944909f06e92a9ea646c78417a3f862->enter($__internal_51900b7379b1080d70bda08d976631488944909f06e92a9ea646c78417a3f862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet WebCuisine";
        
        $__internal_51900b7379b1080d70bda08d976631488944909f06e92a9ea646c78417a3f862->leave($__internal_51900b7379b1080d70bda08d976631488944909f06e92a9ea646c78417a3f862_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94239e6837e3365ef938677fb7a816b0f8ba0cada5a78fe36088824071392239 = $this->env->getExtension("native_profiler");
        $__internal_94239e6837e3365ef938677fb7a816b0f8ba0cada5a78fe36088824071392239->enter($__internal_94239e6837e3365ef938677fb7a816b0f8ba0cada5a78fe36088824071392239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_94239e6837e3365ef938677fb7a816b0f8ba0cada5a78fe36088824071392239->leave($__internal_94239e6837e3365ef938677fb7a816b0f8ba0cada5a78fe36088824071392239_prof);

    }

    // line 10
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_5cef0b3fc2bfc4a2661c399c8e0d37be489f1d9133b70ffc1994e67aab1d7f3d = $this->env->getExtension("native_profiler");
        $__internal_5cef0b3fc2bfc4a2661c399c8e0d37be489f1d9133b70ffc1994e67aab1d7f3d->enter($__internal_5cef0b3fc2bfc4a2661c399c8e0d37be489f1d9133b70ffc1994e67aab1d7f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        
        $__internal_5cef0b3fc2bfc4a2661c399c8e0d37be489f1d9133b70ffc1994e67aab1d7f3d->leave($__internal_5cef0b3fc2bfc4a2661c399c8e0d37be489f1d9133b70ffc1994e67aab1d7f3d_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f80fbf2ab74959837da0ce4551bb3afb0eaaade680105f7f01efa80a37ee34f9 = $this->env->getExtension("native_profiler");
        $__internal_f80fbf2ab74959837da0ce4551bb3afb0eaaade680105f7f01efa80a37ee34f9->enter($__internal_f80fbf2ab74959837da0ce4551bb3afb0eaaade680105f7f01efa80a37ee34f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_f80fbf2ab74959837da0ce4551bb3afb0eaaade680105f7f01efa80a37ee34f9->leave($__internal_f80fbf2ab74959837da0ce4551bb3afb0eaaade680105f7f01efa80a37ee34f9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c7ac3d9ba1c060d06fd367a94d64dc535b3b2a37e09c90617d3c77bc5f10148 = $this->env->getExtension("native_profiler");
        $__internal_7c7ac3d9ba1c060d06fd367a94d64dc535b3b2a37e09c90617d3c77bc5f10148->enter($__internal_7c7ac3d9ba1c060d06fd367a94d64dc535b3b2a37e09c90617d3c77bc5f10148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c7ac3d9ba1c060d06fd367a94d64dc535b3b2a37e09c90617d3c77bc5f10148->leave($__internal_7c7ac3d9ba1c060d06fd367a94d64dc535b3b2a37e09c90617d3c77bc5f10148_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d1f3607cfccf2898570a9ee99dc7bfa04910427fcfb767b89498b9d670f236a = $this->env->getExtension("native_profiler");
        $__internal_7d1f3607cfccf2898570a9ee99dc7bfa04910427fcfb767b89498b9d670f236a->enter($__internal_7d1f3607cfccf2898570a9ee99dc7bfa04910427fcfb767b89498b9d670f236a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d1f3607cfccf2898570a9ee99dc7bfa04910427fcfb767b89498b9d670f236a->leave($__internal_7d1f3607cfccf2898570a9ee99dc7bfa04910427fcfb767b89498b9d670f236a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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

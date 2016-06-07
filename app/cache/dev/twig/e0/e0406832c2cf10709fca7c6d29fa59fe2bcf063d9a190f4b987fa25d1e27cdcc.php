<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2a17455ad62c1b1c87803dbb60d096bbfce266ff934da535e21b187d559bc9a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c377b79829cf8b799686c32ce4cbfa0a55c0eef0010bd233733a4de1c7f5ecc8 = $this->env->getExtension("native_profiler");
        $__internal_c377b79829cf8b799686c32ce4cbfa0a55c0eef0010bd233733a4de1c7f5ecc8->enter($__internal_c377b79829cf8b799686c32ce4cbfa0a55c0eef0010bd233733a4de1c7f5ecc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c377b79829cf8b799686c32ce4cbfa0a55c0eef0010bd233733a4de1c7f5ecc8->leave($__internal_c377b79829cf8b799686c32ce4cbfa0a55c0eef0010bd233733a4de1c7f5ecc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e5217ee794a6dd6f73920d6339dca76e0c61a04e995090e35f7ae0b337c2713 = $this->env->getExtension("native_profiler");
        $__internal_4e5217ee794a6dd6f73920d6339dca76e0c61a04e995090e35f7ae0b337c2713->enter($__internal_4e5217ee794a6dd6f73920d6339dca76e0c61a04e995090e35f7ae0b337c2713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4e5217ee794a6dd6f73920d6339dca76e0c61a04e995090e35f7ae0b337c2713->leave($__internal_4e5217ee794a6dd6f73920d6339dca76e0c61a04e995090e35f7ae0b337c2713_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_343cdf7d592f718c7563605b110a1ccf572b437e7f21066046776681c90a5d31 = $this->env->getExtension("native_profiler");
        $__internal_343cdf7d592f718c7563605b110a1ccf572b437e7f21066046776681c90a5d31->enter($__internal_343cdf7d592f718c7563605b110a1ccf572b437e7f21066046776681c90a5d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_343cdf7d592f718c7563605b110a1ccf572b437e7f21066046776681c90a5d31->leave($__internal_343cdf7d592f718c7563605b110a1ccf572b437e7f21066046776681c90a5d31_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eee7d14825ee5010e841498c5bf5af7b74f34b1bff562f81a4f65f834d8e7851 = $this->env->getExtension("native_profiler");
        $__internal_eee7d14825ee5010e841498c5bf5af7b74f34b1bff562f81a4f65f834d8e7851->enter($__internal_eee7d14825ee5010e841498c5bf5af7b74f34b1bff562f81a4f65f834d8e7851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eee7d14825ee5010e841498c5bf5af7b74f34b1bff562f81a4f65f834d8e7851->leave($__internal_eee7d14825ee5010e841498c5bf5af7b74f34b1bff562f81a4f65f834d8e7851_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

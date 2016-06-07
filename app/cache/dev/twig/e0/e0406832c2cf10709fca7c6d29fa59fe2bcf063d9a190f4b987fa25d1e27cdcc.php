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
        $__internal_d5c86629b03f9351efc1755469206094c1e676c2e18e6d25a9457d13e52e6202 = $this->env->getExtension("native_profiler");
        $__internal_d5c86629b03f9351efc1755469206094c1e676c2e18e6d25a9457d13e52e6202->enter($__internal_d5c86629b03f9351efc1755469206094c1e676c2e18e6d25a9457d13e52e6202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5c86629b03f9351efc1755469206094c1e676c2e18e6d25a9457d13e52e6202->leave($__internal_d5c86629b03f9351efc1755469206094c1e676c2e18e6d25a9457d13e52e6202_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2462eee05704ade8c6b32955e94cc6e2dbc3a29fc94579eb5303a0a78204927c = $this->env->getExtension("native_profiler");
        $__internal_2462eee05704ade8c6b32955e94cc6e2dbc3a29fc94579eb5303a0a78204927c->enter($__internal_2462eee05704ade8c6b32955e94cc6e2dbc3a29fc94579eb5303a0a78204927c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2462eee05704ade8c6b32955e94cc6e2dbc3a29fc94579eb5303a0a78204927c->leave($__internal_2462eee05704ade8c6b32955e94cc6e2dbc3a29fc94579eb5303a0a78204927c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_810899c5b11b1d3d6334e6d3d3a792ad62463df70adfcc8a15fd859d7ad9c0a6 = $this->env->getExtension("native_profiler");
        $__internal_810899c5b11b1d3d6334e6d3d3a792ad62463df70adfcc8a15fd859d7ad9c0a6->enter($__internal_810899c5b11b1d3d6334e6d3d3a792ad62463df70adfcc8a15fd859d7ad9c0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_810899c5b11b1d3d6334e6d3d3a792ad62463df70adfcc8a15fd859d7ad9c0a6->leave($__internal_810899c5b11b1d3d6334e6d3d3a792ad62463df70adfcc8a15fd859d7ad9c0a6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_83ebf84054a8bf51285750a9a1c43e7418b0ca89d0549ff9cfd361297be0b500 = $this->env->getExtension("native_profiler");
        $__internal_83ebf84054a8bf51285750a9a1c43e7418b0ca89d0549ff9cfd361297be0b500->enter($__internal_83ebf84054a8bf51285750a9a1c43e7418b0ca89d0549ff9cfd361297be0b500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_83ebf84054a8bf51285750a9a1c43e7418b0ca89d0549ff9cfd361297be0b500->leave($__internal_83ebf84054a8bf51285750a9a1c43e7418b0ca89d0549ff9cfd361297be0b500_prof);

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

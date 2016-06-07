<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_da1bfb2e04c49dc49801b617e38580d4577ba14ff961e5f014ca9c1379e159ae extends Twig_Template
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
        $__internal_818abab241623a1275282cd44403d6de124ec20a4fc4d6e9a35e9410936dd576 = $this->env->getExtension("native_profiler");
        $__internal_818abab241623a1275282cd44403d6de124ec20a4fc4d6e9a35e9410936dd576->enter($__internal_818abab241623a1275282cd44403d6de124ec20a4fc4d6e9a35e9410936dd576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818abab241623a1275282cd44403d6de124ec20a4fc4d6e9a35e9410936dd576->leave($__internal_818abab241623a1275282cd44403d6de124ec20a4fc4d6e9a35e9410936dd576_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7c81cef1ed0a4beacea01a701411f3fdbf2523a5a87fb91eaa5fba367b6df6e = $this->env->getExtension("native_profiler");
        $__internal_c7c81cef1ed0a4beacea01a701411f3fdbf2523a5a87fb91eaa5fba367b6df6e->enter($__internal_c7c81cef1ed0a4beacea01a701411f3fdbf2523a5a87fb91eaa5fba367b6df6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c7c81cef1ed0a4beacea01a701411f3fdbf2523a5a87fb91eaa5fba367b6df6e->leave($__internal_c7c81cef1ed0a4beacea01a701411f3fdbf2523a5a87fb91eaa5fba367b6df6e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce615de524f7fdee91aebe52b899fbd74162302824ef5ff7a4aa3ad7d62d89f2 = $this->env->getExtension("native_profiler");
        $__internal_ce615de524f7fdee91aebe52b899fbd74162302824ef5ff7a4aa3ad7d62d89f2->enter($__internal_ce615de524f7fdee91aebe52b899fbd74162302824ef5ff7a4aa3ad7d62d89f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ce615de524f7fdee91aebe52b899fbd74162302824ef5ff7a4aa3ad7d62d89f2->leave($__internal_ce615de524f7fdee91aebe52b899fbd74162302824ef5ff7a4aa3ad7d62d89f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca3f28f7bf3e166a03fe8e913cb7cc3e75c65053de1da52ae32d7278a74f6d0a = $this->env->getExtension("native_profiler");
        $__internal_ca3f28f7bf3e166a03fe8e913cb7cc3e75c65053de1da52ae32d7278a74f6d0a->enter($__internal_ca3f28f7bf3e166a03fe8e913cb7cc3e75c65053de1da52ae32d7278a74f6d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ca3f28f7bf3e166a03fe8e913cb7cc3e75c65053de1da52ae32d7278a74f6d0a->leave($__internal_ca3f28f7bf3e166a03fe8e913cb7cc3e75c65053de1da52ae32d7278a74f6d0a_prof);

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

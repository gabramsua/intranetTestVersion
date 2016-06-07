<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_bcc6649194f9628528988159f4b78776b29a5f4aa760e50120c6d8409e3650b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a216bdb52f03ad75e713a5efc34113d9574c3c584eb0e6ec7498f6100eba3f8 = $this->env->getExtension("native_profiler");
        $__internal_9a216bdb52f03ad75e713a5efc34113d9574c3c584eb0e6ec7498f6100eba3f8->enter($__internal_9a216bdb52f03ad75e713a5efc34113d9574c3c584eb0e6ec7498f6100eba3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9a216bdb52f03ad75e713a5efc34113d9574c3c584eb0e6ec7498f6100eba3f8->leave($__internal_9a216bdb52f03ad75e713a5efc34113d9574c3c584eb0e6ec7498f6100eba3f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

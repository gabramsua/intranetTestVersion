<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5efbe95b1e7e3a5a6897e9a2e24b2545343d588fea0168de7fcb9075b2eef052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a30106721b580b2b96d2b7728dc81a2a4f89e45b529d7143fd2773693e6640e9 = $this->env->getExtension("native_profiler");
        $__internal_a30106721b580b2b96d2b7728dc81a2a4f89e45b529d7143fd2773693e6640e9->enter($__internal_a30106721b580b2b96d2b7728dc81a2a4f89e45b529d7143fd2773693e6640e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30106721b580b2b96d2b7728dc81a2a4f89e45b529d7143fd2773693e6640e9->leave($__internal_a30106721b580b2b96d2b7728dc81a2a4f89e45b529d7143fd2773693e6640e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61f66e032428cf7bc0a39c69ce38518156bcc19a3a302d995128d24efd2d7b78 = $this->env->getExtension("native_profiler");
        $__internal_61f66e032428cf7bc0a39c69ce38518156bcc19a3a302d995128d24efd2d7b78->enter($__internal_61f66e032428cf7bc0a39c69ce38518156bcc19a3a302d995128d24efd2d7b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_61f66e032428cf7bc0a39c69ce38518156bcc19a3a302d995128d24efd2d7b78->leave($__internal_61f66e032428cf7bc0a39c69ce38518156bcc19a3a302d995128d24efd2d7b78_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8414a8cd7b63da243ebe7b81ca31a9a672daeff825d1c8749c7cdf24c6446a6f = $this->env->getExtension("native_profiler");
        $__internal_8414a8cd7b63da243ebe7b81ca31a9a672daeff825d1c8749c7cdf24c6446a6f->enter($__internal_8414a8cd7b63da243ebe7b81ca31a9a672daeff825d1c8749c7cdf24c6446a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8414a8cd7b63da243ebe7b81ca31a9a672daeff825d1c8749c7cdf24c6446a6f->leave($__internal_8414a8cd7b63da243ebe7b81ca31a9a672daeff825d1c8749c7cdf24c6446a6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f1d4f821e9a1a5c0aae397d338c60ca4587e544ce11411ae11fd01b9b097217 = $this->env->getExtension("native_profiler");
        $__internal_6f1d4f821e9a1a5c0aae397d338c60ca4587e544ce11411ae11fd01b9b097217->enter($__internal_6f1d4f821e9a1a5c0aae397d338c60ca4587e544ce11411ae11fd01b9b097217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f1d4f821e9a1a5c0aae397d338c60ca4587e544ce11411ae11fd01b9b097217->leave($__internal_6f1d4f821e9a1a5c0aae397d338c60ca4587e544ce11411ae11fd01b9b097217_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

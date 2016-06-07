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
        $__internal_f553f98a47af9d2714f5f947a444470887ca047199b10aa0ced42b36a3211db4 = $this->env->getExtension("native_profiler");
        $__internal_f553f98a47af9d2714f5f947a444470887ca047199b10aa0ced42b36a3211db4->enter($__internal_f553f98a47af9d2714f5f947a444470887ca047199b10aa0ced42b36a3211db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f553f98a47af9d2714f5f947a444470887ca047199b10aa0ced42b36a3211db4->leave($__internal_f553f98a47af9d2714f5f947a444470887ca047199b10aa0ced42b36a3211db4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2df2e8bbda12d192424e9db6364eba229c15539124c5b2e6ae52d936b70170b3 = $this->env->getExtension("native_profiler");
        $__internal_2df2e8bbda12d192424e9db6364eba229c15539124c5b2e6ae52d936b70170b3->enter($__internal_2df2e8bbda12d192424e9db6364eba229c15539124c5b2e6ae52d936b70170b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2df2e8bbda12d192424e9db6364eba229c15539124c5b2e6ae52d936b70170b3->leave($__internal_2df2e8bbda12d192424e9db6364eba229c15539124c5b2e6ae52d936b70170b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e96ffdfcbc8e89f154adf819fffdb71202c0732b91c4aa2e924d434b72e3192 = $this->env->getExtension("native_profiler");
        $__internal_9e96ffdfcbc8e89f154adf819fffdb71202c0732b91c4aa2e924d434b72e3192->enter($__internal_9e96ffdfcbc8e89f154adf819fffdb71202c0732b91c4aa2e924d434b72e3192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9e96ffdfcbc8e89f154adf819fffdb71202c0732b91c4aa2e924d434b72e3192->leave($__internal_9e96ffdfcbc8e89f154adf819fffdb71202c0732b91c4aa2e924d434b72e3192_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec56e44a3070c7042a89c2cc79af8ccdbc9b6ac16fecf70b1ba5161c79784ca7 = $this->env->getExtension("native_profiler");
        $__internal_ec56e44a3070c7042a89c2cc79af8ccdbc9b6ac16fecf70b1ba5161c79784ca7->enter($__internal_ec56e44a3070c7042a89c2cc79af8ccdbc9b6ac16fecf70b1ba5161c79784ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec56e44a3070c7042a89c2cc79af8ccdbc9b6ac16fecf70b1ba5161c79784ca7->leave($__internal_ec56e44a3070c7042a89c2cc79af8ccdbc9b6ac16fecf70b1ba5161c79784ca7_prof);

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

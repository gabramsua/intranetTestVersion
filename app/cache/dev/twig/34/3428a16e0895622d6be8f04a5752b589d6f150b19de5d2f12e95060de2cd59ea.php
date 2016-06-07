<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b485b85846dd72286fa696d6e6ee1109ce55484a5e0f419a05828080e70563e7 extends Twig_Template
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
        $__internal_2a1b98273a684312490a9d3132865a5d47651a5ffd2bace1eaf781b7f6fe3bf1 = $this->env->getExtension("native_profiler");
        $__internal_2a1b98273a684312490a9d3132865a5d47651a5ffd2bace1eaf781b7f6fe3bf1->enter($__internal_2a1b98273a684312490a9d3132865a5d47651a5ffd2bace1eaf781b7f6fe3bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a1b98273a684312490a9d3132865a5d47651a5ffd2bace1eaf781b7f6fe3bf1->leave($__internal_2a1b98273a684312490a9d3132865a5d47651a5ffd2bace1eaf781b7f6fe3bf1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec9019a532654972baaa6178900cb3825477dfd114ad7cad0580241fd3ae8639 = $this->env->getExtension("native_profiler");
        $__internal_ec9019a532654972baaa6178900cb3825477dfd114ad7cad0580241fd3ae8639->enter($__internal_ec9019a532654972baaa6178900cb3825477dfd114ad7cad0580241fd3ae8639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec9019a532654972baaa6178900cb3825477dfd114ad7cad0580241fd3ae8639->leave($__internal_ec9019a532654972baaa6178900cb3825477dfd114ad7cad0580241fd3ae8639_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d4a30887d4f255a59125de0d971adaeeeb68ea646e12afb79090f3bf094f91e = $this->env->getExtension("native_profiler");
        $__internal_4d4a30887d4f255a59125de0d971adaeeeb68ea646e12afb79090f3bf094f91e->enter($__internal_4d4a30887d4f255a59125de0d971adaeeeb68ea646e12afb79090f3bf094f91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d4a30887d4f255a59125de0d971adaeeeb68ea646e12afb79090f3bf094f91e->leave($__internal_4d4a30887d4f255a59125de0d971adaeeeb68ea646e12afb79090f3bf094f91e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d64ad7c8394a8660ca1692c8ff2a3f8c45dd2d802638be9162036e35c28fc5b5 = $this->env->getExtension("native_profiler");
        $__internal_d64ad7c8394a8660ca1692c8ff2a3f8c45dd2d802638be9162036e35c28fc5b5->enter($__internal_d64ad7c8394a8660ca1692c8ff2a3f8c45dd2d802638be9162036e35c28fc5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d64ad7c8394a8660ca1692c8ff2a3f8c45dd2d802638be9162036e35c28fc5b5->leave($__internal_d64ad7c8394a8660ca1692c8ff2a3f8c45dd2d802638be9162036e35c28fc5b5_prof);

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

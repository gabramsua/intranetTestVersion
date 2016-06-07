<?php

/* ::base.html.twig */
class __TwigTemplate_47f78a331093889872da6df5f7e49debfe9a53170053deab9db85199a7f02c9e extends Twig_Template
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
        $__internal_a5429ca62d34c86a71846129d9890c9a492e04ba1af5ff845d123bc001ff5fc7 = $this->env->getExtension("native_profiler");
        $__internal_a5429ca62d34c86a71846129d9890c9a492e04ba1af5ff845d123bc001ff5fc7->enter($__internal_a5429ca62d34c86a71846129d9890c9a492e04ba1af5ff845d123bc001ff5fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a5429ca62d34c86a71846129d9890c9a492e04ba1af5ff845d123bc001ff5fc7->leave($__internal_a5429ca62d34c86a71846129d9890c9a492e04ba1af5ff845d123bc001ff5fc7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c221fd7c737987eebb095f0a44aaa2649ddd1c01a39913d9cf7d70756e5d272d = $this->env->getExtension("native_profiler");
        $__internal_c221fd7c737987eebb095f0a44aaa2649ddd1c01a39913d9cf7d70756e5d272d->enter($__internal_c221fd7c737987eebb095f0a44aaa2649ddd1c01a39913d9cf7d70756e5d272d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet WebCuisine";
        
        $__internal_c221fd7c737987eebb095f0a44aaa2649ddd1c01a39913d9cf7d70756e5d272d->leave($__internal_c221fd7c737987eebb095f0a44aaa2649ddd1c01a39913d9cf7d70756e5d272d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c02d049a3e4cedff32936fb9a27f77b15603c687e3914ae389e56d3b5af0b7a8 = $this->env->getExtension("native_profiler");
        $__internal_c02d049a3e4cedff32936fb9a27f77b15603c687e3914ae389e56d3b5af0b7a8->enter($__internal_c02d049a3e4cedff32936fb9a27f77b15603c687e3914ae389e56d3b5af0b7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c02d049a3e4cedff32936fb9a27f77b15603c687e3914ae389e56d3b5af0b7a8->leave($__internal_c02d049a3e4cedff32936fb9a27f77b15603c687e3914ae389e56d3b5af0b7a8_prof);

    }

    // line 10
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_7defa7e04e70252ec05242b89d9860af78e75176c5c85846cc2a113870dd1f55 = $this->env->getExtension("native_profiler");
        $__internal_7defa7e04e70252ec05242b89d9860af78e75176c5c85846cc2a113870dd1f55->enter($__internal_7defa7e04e70252ec05242b89d9860af78e75176c5c85846cc2a113870dd1f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        
        $__internal_7defa7e04e70252ec05242b89d9860af78e75176c5c85846cc2a113870dd1f55->leave($__internal_7defa7e04e70252ec05242b89d9860af78e75176c5c85846cc2a113870dd1f55_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68bfd6282b8792e31d83008af5e6975b3d4f92d078ef2f51d567afdf72a82d20 = $this->env->getExtension("native_profiler");
        $__internal_68bfd6282b8792e31d83008af5e6975b3d4f92d078ef2f51d567afdf72a82d20->enter($__internal_68bfd6282b8792e31d83008af5e6975b3d4f92d078ef2f51d567afdf72a82d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_68bfd6282b8792e31d83008af5e6975b3d4f92d078ef2f51d567afdf72a82d20->leave($__internal_68bfd6282b8792e31d83008af5e6975b3d4f92d078ef2f51d567afdf72a82d20_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_01daba792257c3dbe5a3f8beb10d94563b923df45887636ccfc296099ab91ebc = $this->env->getExtension("native_profiler");
        $__internal_01daba792257c3dbe5a3f8beb10d94563b923df45887636ccfc296099ab91ebc->enter($__internal_01daba792257c3dbe5a3f8beb10d94563b923df45887636ccfc296099ab91ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01daba792257c3dbe5a3f8beb10d94563b923df45887636ccfc296099ab91ebc->leave($__internal_01daba792257c3dbe5a3f8beb10d94563b923df45887636ccfc296099ab91ebc_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb023f18cb6a4bf572ab02040a2d5fa93f510a1aaa2cdd88214878b8a3d56599 = $this->env->getExtension("native_profiler");
        $__internal_cb023f18cb6a4bf572ab02040a2d5fa93f510a1aaa2cdd88214878b8a3d56599->enter($__internal_cb023f18cb6a4bf572ab02040a2d5fa93f510a1aaa2cdd88214878b8a3d56599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cb023f18cb6a4bf572ab02040a2d5fa93f510a1aaa2cdd88214878b8a3d56599->leave($__internal_cb023f18cb6a4bf572ab02040a2d5fa93f510a1aaa2cdd88214878b8a3d56599_prof);

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

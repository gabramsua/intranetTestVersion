<?php

/* intranetBundle:Default:settingsForAdmin.html.twig */
class __TwigTemplate_30669976643b08f0fd3405647dc95618c8dfa0a7b8798bc336a9e24860470012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:settingsForAdmin.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "intranetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c67297e5552ceed5727bab0a83fff398bba144b8124a87c3af4d610c41444bd6 = $this->env->getExtension("native_profiler");
        $__internal_c67297e5552ceed5727bab0a83fff398bba144b8124a87c3af4d610c41444bd6->enter($__internal_c67297e5552ceed5727bab0a83fff398bba144b8124a87c3af4d610c41444bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:settingsForAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c67297e5552ceed5727bab0a83fff398bba144b8124a87c3af4d610c41444bd6->leave($__internal_c67297e5552ceed5727bab0a83fff398bba144b8124a87c3af4d610c41444bd6_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_4660c6fe2a70e04a800ca5738001e8f3ca9ef259e5a2ef60fd5e946722a007c5 = $this->env->getExtension("native_profiler");
        $__internal_4660c6fe2a70e04a800ca5738001e8f3ca9ef259e5a2ef60fd5e946722a007c5->enter($__internal_4660c6fe2a70e04a800ca5738001e8f3ca9ef259e5a2ef60fd5e946722a007c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css\">
      <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
      <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js\"></script>
      <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js\"></script>
      <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js\"></script>
      <script src=\"http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js\"></script>
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">

<script>
    var app=angular.module('settingsApp', ['ngMaterial']);
    app.controller('settingsController', settingsController);

    function settingsController (\$scope) { 
       \$scope.languages = (\"";
        // line 17
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "lang", array())), "html", null, true);
        echo "\").replace(/&quot;/g, \"\");
       \$scope.notific = (\"";
        // line 18
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "notifications", array())), "html", null, true);
        echo "\");
       \$scope.aux = \$scope.notific;
       \$scope.aux2 = \$scope.languages;
       //alert(\$scope.aux);
    }    
    
    function handleClick(event){
        alert(\"Nombre: \"+this[\"myName\"].value + 
            \"\\nApellidos: \"+this[\"mySurname\"].value +
            \"\\nIdioma: \"+this[\"hiden2\"].value +
            \"\\nNotificaciones: \"+ this[\"hiden1\"].value +
            \"\\nFoto: \"+this[\"myPhoto\"].value +
            \"\\nEmail: \"+this[\"myEmail\"].value
        );
    }

    app.config(function(\$interpolateProvider){
        \$interpolateProvider.startSymbol('{[{').endSymbol('}]}');
    });
            
</script>

<div  ng-app=\"settingsApp\" ng-controller=\"settingsController\" layout=\"row\" layout-align=\"center start\">
    <form name=\"settingsForm\" id=\"settingsForm\" method=\"POST\" action=\"javaScript:handleClick()\" novalidate>
    <!--";
        // line 42
        echo $this->env->getExtension('routing')->getPath("intranet_cruduser");
        echo "-->
    
    <md-content>
        <md-list layout=\"column\" ng-cloak=\"\">
        <div layout=\"row\" layout-sm=\"column\">
            <div flex>
                <md-list-item layout-lg=\"row\" layout-xl=\"row\">
                    <md-input-container class=\"md-block\">
                        <label>";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</label>
                        <input type='text' name=\"myName\" id=\"myName\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "nameU", array()), "html", null, true);
        echo "\" required=\"required\">

                        <div ng-messages=\"expensesForm.seller.\$error\">
                            <div ng-message=\"required\">You have to specify a seller.</div>
                        </div>
                    </md-input-container>
                </md-list-item>
            </div>
            <div flex>            
                <md-list-item layout-lg=\"row\" layout-xl=\"row\">
                    <md-input-container class=\"md-block\">
                        <label>";
        // line 62
        echo $this->env->getExtension('translator')->getTranslator()->trans("Surname", array(), "messages");
        echo "</label>
                        <input type='text' id=\"mySurname\" name=\"mySurname\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "surnameU", array()), "html", null, true);
        echo "\">

                        <div ng-messages=\"expensesForm.seller.\$error\">
                            <div ng-message=\"required\">You have to specify a seller.</div>
                        </div>
                    </md-input-container>
                </md-list-item>
            </div>
        </div>
        <div layout=\"row\" layout-sm=\"column\">
            <div flex>
                <md-list-item layout-lg=\"row\" layout-xl=\"row\">
                    <md-input-container class=\"md-block\">
                        <label>";
        // line 76
        echo $this->env->getExtension('translator')->getTranslator()->trans("Language", array(), "messages");
        echo "</label><br><br>
                        <md-radio-group ng-model=\"languages\" ng-change=\"langue()\">
                            <md-radio-button id=\"myLanguage\" name=\"myLanguage\" value=\"es\" class=\"md-primary\">
                                ES
                            </md-radio-button>
                                
                            <md-radio-button id=\"myLanguage\" name=\"myLanguage\" value=\"en\" class=\"md-primary\">
                                EN
                            </md-radio-button>
                                
                            <md-radio-button id=\"myLanguage\" name=\"myLanguage\" value=\"fr\" class=\"md-primary\">
                                FR
                            </md-radio-button>
                                
                            <md-radio-button id=\"myLanguage\" name=\"myLanguage\" value=\"de\" class=\"md-primary\">
                                DE
                            </md-radio-button>
                        </md-radio-group>
                    </md-input-container>
                </md-list-item>
            </div>
            <div flex>
                <md-list-item layout-lg=\"row\" layout-xl=\"row\">
                    <md-input-container class=\"md-block\">
                        <label>";
        // line 100
        echo $this->env->getExtension('translator')->getTranslator()->trans("Notifications", array(), "messages");
        echo "</label><br><br>
                        <md-radio-group ng-model=\"notific\"  ng-change=\"noti()\">
                            <md-radio-button id=\"myNotifications\" ng-model=\"myNotifications\" name=\"myNotifications\" value=\"true\" class=\"md-primary\">
                                ON
                            </md-radio-button>
                                
                            <md-radio-button id=\"myNotifications\" ng-model=\"myNotifications\" name=\"myNotifications\" value=\"false\" class=\"md-primary\">
                                OFF
                            </md-radio-button>
                             
                        </md-radio-group>
                    </md-input-container>
                </md-list-item>
            </div>
        </div>
             <md-list-item layout-lg=\"row\" layout-xl=\"row\">
                <md-input-container class=\"md-block\">
                    <label>";
        // line 117
        echo $this->env->getExtension('translator')->getTranslator()->trans("Photo", array(), "messages");
        echo "</label><br>
                    <!--<md-button type=\"file\" for=\"myPhoto\" class=\"md-raised md-primary\">AQUI
                    </md-button>-->
                    <input type='file' id=\"myPhoto\" name=\"myPhoto\"  style=\"width: 250px;\"><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "photo", array()), "html", null, true);
        echo "\"><!--class=\"ng-hide\"-->
                </md-input-container>
            </md-list-item>

        <div layout=\"row\" layout-sm=\"column\">
            <div flex>
                <md-list-item layout-lg=\"row\" layout-xl=\"row\">
                    <md-input-container class=\"md-block\">
                        <label>";
        // line 128
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        echo "</label>
                        <input type='text' name=\"myEmail\" id=\"myEmail\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "email", array()), "html", null, true);
        echo "\" required=\"required\" style=\"width: 250px;\">

                        <div ng-messages=\"expensesForm.seller.\$error\">
                            <div ng-message=\"required\">You have to specify an email.</div>
                        </div>
                    </md-input-container>
                </md-list-item>
            </div>
        </div> 

        <md-list-item>
            <md-button class=\"md-raised md-primary\" id=\"subm\" type=\"submit\" name=\"update\" ng-disabled=\"settingsForm.\$invalid\">
                ";
        // line 141
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        // line 142
        echo "            </md-button>
            <md-button class=\"md-raised md-primary\" id=\"subm\" type=\"submit\" name=\"update\" ng-disabled=\"settingsForm.\$invalid\">
                ";
        // line 144
        echo $this->env->getExtension('translator')->getTranslator()->trans("Delete", array(), "messages");
        // line 145
        echo "            </md-button>
        </md-list-item>
            
        <input type=\"hidden\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "id", array()), "html", null, true);
        echo "\" name=\"id\">
        <input type=\"hidden\" id=\"hiden1\" value=\"{[{ notific }]}\">
        <input type=\"hidden\" id=\"hiden2\" value=\"{[{ languages }]}\">
        </md-list>
    </form>
</div>

#####################################################################################################################
CONTENIDO DEL ADMIN line.4
<form action=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("intranet_cruduser");
        echo "\" method=\"post\" style=\"border: 1px solid;width: 500px;\">
      
<!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->
";
        // line 161
        echo "      <label>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Onboard", array(), "messages");
        echo "</label><input type='checkbox' id=\"myOnboard\" name=\"myOnboard\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "onboard", array()), "html", null, true);
        echo "\"";
        if (($this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "onboard", array()) == 1)) {
            echo " checked ";
        }
        echo "><BR>
";
        // line 163
        echo "      

                                   <input type=\"submit\" value=\"";
        // line 165
        echo $this->env->getExtension('translator')->getTranslator()->trans("Modify", array(), "messages");
        echo "\" name=\"update\">
<!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->
";
        // line 168
        echo "                                   <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("DELETE", array(), "messages");
        echo "\" name=\"delete\">
";
        // line 170
        echo "
                                   <input type=\"text\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "login", array()), "html", null, true);
        echo "\" name=\"myLogin\" readonly>
                                   <input type=\"hidden\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "id", array()), "html", null, true);
        echo "\" name=\"id\">
 </form>



";
        
        $__internal_4660c6fe2a70e04a800ca5738001e8f3ca9ef259e5a2ef60fd5e946722a007c5->leave($__internal_4660c6fe2a70e04a800ca5738001e8f3ca9ef259e5a2ef60fd5e946722a007c5_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:settingsForAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 172,  277 => 171,  274 => 170,  269 => 168,  264 => 165,  260 => 163,  249 => 161,  243 => 157,  231 => 148,  226 => 145,  224 => 144,  220 => 142,  218 => 141,  203 => 129,  199 => 128,  188 => 120,  182 => 117,  162 => 100,  135 => 76,  119 => 63,  115 => 62,  101 => 51,  97 => 50,  86 => 42,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">*/
/*       <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>*/
/*       <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>*/
/*       <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>*/
/*       <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>*/
/*       <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>*/
/*       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">*/
/* */
/* <script>*/
/*     var app=angular.module('settingsApp', ['ngMaterial']);*/
/*     app.controller('settingsController', settingsController);*/
/* */
/*     function settingsController ($scope) { */
/*        $scope.languages = ("{{me.lang | json_encode()}}").replace(/&quot;/g, "");*/
/*        $scope.notific = ("{{me.notifications | json_encode()}}");*/
/*        $scope.aux = $scope.notific;*/
/*        $scope.aux2 = $scope.languages;*/
/*        //alert($scope.aux);*/
/*     }    */
/*     */
/*     function handleClick(event){*/
/*         alert("Nombre: "+this["myName"].value + */
/*             "\nApellidos: "+this["mySurname"].value +*/
/*             "\nIdioma: "+this["hiden2"].value +*/
/*             "\nNotificaciones: "+ this["hiden1"].value +*/
/*             "\nFoto: "+this["myPhoto"].value +*/
/*             "\nEmail: "+this["myEmail"].value*/
/*         );*/
/*     }*/
/* */
/*     app.config(function($interpolateProvider){*/
/*         $interpolateProvider.startSymbol('{[{').endSymbol('}]}');*/
/*     });*/
/*             */
/* </script>*/
/* */
/* <div  ng-app="settingsApp" ng-controller="settingsController" layout="row" layout-align="center start">*/
/*     <form name="settingsForm" id="settingsForm" method="POST" action="javaScript:handleClick()" novalidate>*/
/*     <!--{{ path('intranet_cruduser') }}-->*/
/*     */
/*     <md-content>*/
/*         <md-list layout="column" ng-cloak="">*/
/*         <div layout="row" layout-sm="column">*/
/*             <div flex>*/
/*                 <md-list-item layout-lg="row" layout-xl="row">*/
/*                     <md-input-container class="md-block">*/
/*                         <label>{% trans %}Name{% endtrans %}</label>*/
/*                         <input type='text' name="myName" id="myName" value="{{ me.nameU }}" required="required">*/
/* */
/*                         <div ng-messages="expensesForm.seller.$error">*/
/*                             <div ng-message="required">You have to specify a seller.</div>*/
/*                         </div>*/
/*                     </md-input-container>*/
/*                 </md-list-item>*/
/*             </div>*/
/*             <div flex>            */
/*                 <md-list-item layout-lg="row" layout-xl="row">*/
/*                     <md-input-container class="md-block">*/
/*                         <label>{% trans %}Surname{% endtrans %}</label>*/
/*                         <input type='text' id="mySurname" name="mySurname" value="{{ me.surnameU }}">*/
/* */
/*                         <div ng-messages="expensesForm.seller.$error">*/
/*                             <div ng-message="required">You have to specify a seller.</div>*/
/*                         </div>*/
/*                     </md-input-container>*/
/*                 </md-list-item>*/
/*             </div>*/
/*         </div>*/
/*         <div layout="row" layout-sm="column">*/
/*             <div flex>*/
/*                 <md-list-item layout-lg="row" layout-xl="row">*/
/*                     <md-input-container class="md-block">*/
/*                         <label>{% trans %}Language{% endtrans %}</label><br><br>*/
/*                         <md-radio-group ng-model="languages" ng-change="langue()">*/
/*                             <md-radio-button id="myLanguage" name="myLanguage" value="es" class="md-primary">*/
/*                                 ES*/
/*                             </md-radio-button>*/
/*                                 */
/*                             <md-radio-button id="myLanguage" name="myLanguage" value="en" class="md-primary">*/
/*                                 EN*/
/*                             </md-radio-button>*/
/*                                 */
/*                             <md-radio-button id="myLanguage" name="myLanguage" value="fr" class="md-primary">*/
/*                                 FR*/
/*                             </md-radio-button>*/
/*                                 */
/*                             <md-radio-button id="myLanguage" name="myLanguage" value="de" class="md-primary">*/
/*                                 DE*/
/*                             </md-radio-button>*/
/*                         </md-radio-group>*/
/*                     </md-input-container>*/
/*                 </md-list-item>*/
/*             </div>*/
/*             <div flex>*/
/*                 <md-list-item layout-lg="row" layout-xl="row">*/
/*                     <md-input-container class="md-block">*/
/*                         <label>{% trans %}Notifications{% endtrans %}</label><br><br>*/
/*                         <md-radio-group ng-model="notific"  ng-change="noti()">*/
/*                             <md-radio-button id="myNotifications" ng-model="myNotifications" name="myNotifications" value="true" class="md-primary">*/
/*                                 ON*/
/*                             </md-radio-button>*/
/*                                 */
/*                             <md-radio-button id="myNotifications" ng-model="myNotifications" name="myNotifications" value="false" class="md-primary">*/
/*                                 OFF*/
/*                             </md-radio-button>*/
/*                              */
/*                         </md-radio-group>*/
/*                     </md-input-container>*/
/*                 </md-list-item>*/
/*             </div>*/
/*         </div>*/
/*              <md-list-item layout-lg="row" layout-xl="row">*/
/*                 <md-input-container class="md-block">*/
/*                     <label>{% trans %}Photo{% endtrans %}</label><br>*/
/*                     <!--<md-button type="file" for="myPhoto" class="md-raised md-primary">AQUI*/
/*                     </md-button>-->*/
/*                     <input type='file' id="myPhoto" name="myPhoto"  style="width: 250px;"><img src="{{ me.photo }}"><!--class="ng-hide"-->*/
/*                 </md-input-container>*/
/*             </md-list-item>*/
/* */
/*         <div layout="row" layout-sm="column">*/
/*             <div flex>*/
/*                 <md-list-item layout-lg="row" layout-xl="row">*/
/*                     <md-input-container class="md-block">*/
/*                         <label>{% trans %}Email{% endtrans %}</label>*/
/*                         <input type='text' name="myEmail" id="myEmail" value="{{ me.email }}" required="required" style="width: 250px;">*/
/* */
/*                         <div ng-messages="expensesForm.seller.$error">*/
/*                             <div ng-message="required">You have to specify an email.</div>*/
/*                         </div>*/
/*                     </md-input-container>*/
/*                 </md-list-item>*/
/*             </div>*/
/*         </div> */
/* */
/*         <md-list-item>*/
/*             <md-button class="md-raised md-primary" id="subm" type="submit" name="update" ng-disabled="settingsForm.$invalid">*/
/*                 {% trans %}Modify{% endtrans %}*/
/*             </md-button>*/
/*             <md-button class="md-raised md-primary" id="subm" type="submit" name="update" ng-disabled="settingsForm.$invalid">*/
/*                 {% trans %}Delete{% endtrans %}*/
/*             </md-button>*/
/*         </md-list-item>*/
/*             */
/*         <input type="hidden" value="{{ me.id }}" name="id">*/
/*         <input type="hidden" id="hiden1" value="{[{ notific }]}">*/
/*         <input type="hidden" id="hiden2" value="{[{ languages }]}">*/
/*         </md-list>*/
/*     </form>*/
/* </div>*/
/* */
/* #####################################################################################################################*/
/* CONTENIDO DEL ADMIN line.4*/
/* <form action="{{ path('intranet_cruduser') }}" method="post" style="border: 1px solid;width: 500px;">*/
/*       */
/* <!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->*/
/* {# if no soy yo#}*/
/*       <label>{% trans %}Onboard{% endtrans %}</label><input type='checkbox' id="myOnboard" name="myOnboard" value="{{ me.onboard }}"{% if me.onboard==1 %} checked {% endif %}><BR>*/
/* {# endif #}*/
/*       */
/* */
/*                                    <input type="submit" value="{% trans %}Modify{% endtrans %}" name="update">*/
/* <!-- SI NO SOY YO, PUEDO BORRAR EL USUARIO YA QUE SOY ADMIN -->*/
/* {# if no soy yo#}*/
/*                                    <input type="submit" value="{% trans %}DELETE{% endtrans %}" name="delete">*/
/* {# endif #}*/
/* */
/*                                    <input type="text" value="{{ me.login }}" name="myLogin" readonly>*/
/*                                    <input type="hidden" value="{{ me.id }}" name="id">*/
/*  </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */

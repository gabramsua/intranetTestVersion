<?php

/* intranetBundle:TaskTemplates:mainTaskDialog.tmpl.html */
class __TwigTemplate_9c80ae665c2c5f5cd5ed787d76a0d7041f470981c53cf04fec95a8c2d2ff9186 extends Twig_Template
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
        $__internal_ce8754ff7ee1520b300366230a46c5e813f5174f870ed6089c244606b53b8625 = $this->env->getExtension("native_profiler");
        $__internal_ce8754ff7ee1520b300366230a46c5e813f5174f870ed6089c244606b53b8625->enter($__internal_ce8754ff7ee1520b300366230a46c5e813f5174f870ed6089c244606b53b8625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:TaskTemplates:mainTaskDialog.tmpl.html"));

        // line 1
        echo "
<md-dialog ng-cloak flex=\"50\" ng-init=\"getInfo()\">
    <form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("intranet_edittask");
        echo "\" method=\"post\" id=\"taskUpdateForm\">
        <md-toolbar>
          <div class=\"md-toolbar-tools\">
            <h2>Task: {[{allData.taskData[0].title}]}</h2><!--task[]-->
            <span flex></span>
            <md-button class=\"md-icon-button\" ng-click=\"closeDialog()\">
              <md-icon aria-label=\"Close dialog\"></md-icon><!--md-svg-src=\"icons/ic_close_white.svg\" -->
            </md-button>
          </div>
        </md-toolbar>
        <md-dialog-content>
            <div class=\"md-dialog-content\">
                <md-list>
                    <md-list-item>
                        <md-input-container flex-gt-xs>
                            <label>Task Title</label>
                            <input class=\"\" name=\"taskTitle\" ng-model=\"allData.taskData[0].title\" ng-disabled=\"userRol == 'developer'\">
                        </md-input-container>
                    </md-list-item>
                    <md-list-item>
                        <md-input-container flex-gt-xs>
                            <label>Task Description</label>
                            <textarea class=\"dialogTextarea\" rows=\"4\" name=\"taskContent\" ng-model=\"allData.taskData[0].content\" ng-disabled=\"userRol == 'developer'\"></textarea>
                        </md-input-container>
                    </md-list-item>
                    <md-list-item>
                        <div layout-wrap layout=\"row\" ng-if=\"userRol != 'developer'\">
                            <div flex=\"50\" ng-repeat=\"user in allUsers\">
                                <md-checkbox ng-checked=\"alreadyIn(user)\" ng-click=\"toggle(user)\" name=\"{[{user.login}]}\">
                                    {[{user.nameU}]} {[{user.surnameU}]}
                                </md-checkbox>
                            </div>
                        </div>
                        <div layout-wrap layout=\"column\" ng-if=\"userRol == 'developer'\" style=\"margin-bottom: 15px\">
                            <span style=\"font-weight: bold\">Users in this task:</span><br>
                            <div flex=\"50\" ng-repeat=\"user in usersInTaskShownToDeveloper\" style=\"margin-left: 10px\">
                                    {[{user.nameU}]} {[{user.surnameU}]}
                            </div>
                        </div>
                    </md-list-item>
                    <md-list-item>
                        <span flex></span>
<!--                        <md-button ng-click=\"update()\" class=\"md-raised md-primary\" ng-if=\"userRol != 'developer' && task\" ng-disabled=\"!infoLoaded\">Update</md-button>-->
                        <md-button ng-click=\"update(allData.taskData[0].id)\" class=\"md-raised md-primary\" ng-if=\"userRol != 'developer' && task\" ng-disabled=\"!infoLoaded\">Update2</md-button>
                        <md-button ng-click=\"create()\" class=\"md-raised md-primary\" ng-if=\"userRol != 'developer' && !task\">Create</md-button>
                        <md-button ng-click=\"closeDialog()\" class=\"md-raised md-primary\" ng-if=\"userRol == 'developer'\">OK</md-button>
                    </md-list-item>
                </md-list>
            </div>
        </md-dialog-content>
    </form>
</md-dialog>

<!--<input type=\"text\"  style=\"background-color: rgb(63,81,181); color: white; border: none;\">-->";
        
        $__internal_ce8754ff7ee1520b300366230a46c5e813f5174f870ed6089c244606b53b8625->leave($__internal_ce8754ff7ee1520b300366230a46c5e813f5174f870ed6089c244606b53b8625_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:TaskTemplates:mainTaskDialog.tmpl.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* */
/* <md-dialog ng-cloak flex="50" ng-init="getInfo()">*/
/*     <form action="{{ path('intranet_edittask') }}" method="post" id="taskUpdateForm">*/
/*         <md-toolbar>*/
/*           <div class="md-toolbar-tools">*/
/*             <h2>Task: {[{allData.taskData[0].title}]}</h2><!--task[]-->*/
/*             <span flex></span>*/
/*             <md-button class="md-icon-button" ng-click="closeDialog()">*/
/*               <md-icon aria-label="Close dialog"></md-icon><!--md-svg-src="icons/ic_close_white.svg" -->*/
/*             </md-button>*/
/*           </div>*/
/*         </md-toolbar>*/
/*         <md-dialog-content>*/
/*             <div class="md-dialog-content">*/
/*                 <md-list>*/
/*                     <md-list-item>*/
/*                         <md-input-container flex-gt-xs>*/
/*                             <label>Task Title</label>*/
/*                             <input class="" name="taskTitle" ng-model="allData.taskData[0].title" ng-disabled="userRol == 'developer'">*/
/*                         </md-input-container>*/
/*                     </md-list-item>*/
/*                     <md-list-item>*/
/*                         <md-input-container flex-gt-xs>*/
/*                             <label>Task Description</label>*/
/*                             <textarea class="dialogTextarea" rows="4" name="taskContent" ng-model="allData.taskData[0].content" ng-disabled="userRol == 'developer'"></textarea>*/
/*                         </md-input-container>*/
/*                     </md-list-item>*/
/*                     <md-list-item>*/
/*                         <div layout-wrap layout="row" ng-if="userRol != 'developer'">*/
/*                             <div flex="50" ng-repeat="user in allUsers">*/
/*                                 <md-checkbox ng-checked="alreadyIn(user)" ng-click="toggle(user)" name="{[{user.login}]}">*/
/*                                     {[{user.nameU}]} {[{user.surnameU}]}*/
/*                                 </md-checkbox>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div layout-wrap layout="column" ng-if="userRol == 'developer'" style="margin-bottom: 15px">*/
/*                             <span style="font-weight: bold">Users in this task:</span><br>*/
/*                             <div flex="50" ng-repeat="user in usersInTaskShownToDeveloper" style="margin-left: 10px">*/
/*                                     {[{user.nameU}]} {[{user.surnameU}]}*/
/*                             </div>*/
/*                         </div>*/
/*                     </md-list-item>*/
/*                     <md-list-item>*/
/*                         <span flex></span>*/
/* <!--                        <md-button ng-click="update()" class="md-raised md-primary" ng-if="userRol != 'developer' && task" ng-disabled="!infoLoaded">Update</md-button>-->*/
/*                         <md-button ng-click="update(allData.taskData[0].id)" class="md-raised md-primary" ng-if="userRol != 'developer' && task" ng-disabled="!infoLoaded">Update2</md-button>*/
/*                         <md-button ng-click="create()" class="md-raised md-primary" ng-if="userRol != 'developer' && !task">Create</md-button>*/
/*                         <md-button ng-click="closeDialog()" class="md-raised md-primary" ng-if="userRol == 'developer'">OK</md-button>*/
/*                     </md-list-item>*/
/*                 </md-list>*/
/*             </div>*/
/*         </md-dialog-content>*/
/*     </form>*/
/* </md-dialog>*/
/* */
/* <!--<input type="text"  style="background-color: rgb(63,81,181); color: white; border: none;">-->*/

<?php

/* intranetBundle:Default:tasks.html.twig */
class __TwigTemplate_10daa78c25bdfc634bad79eb410a3a687245d40bbeca0f044c3fd03be530ac9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("intranetBundle::layout.html.twig", "intranetBundle:Default:tasks.html.twig", 1);
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
        $__internal_0ef2bb28c6d619a6179c7acaa73c8382aa676501ab49508225d2d91475f99642 = $this->env->getExtension("native_profiler");
        $__internal_0ef2bb28c6d619a6179c7acaa73c8382aa676501ab49508225d2d91475f99642->enter($__internal_0ef2bb28c6d619a6179c7acaa73c8382aa676501ab49508225d2d91475f99642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "intranetBundle:Default:tasks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ef2bb28c6d619a6179c7acaa73c8382aa676501ab49508225d2d91475f99642->leave($__internal_0ef2bb28c6d619a6179c7acaa73c8382aa676501ab49508225d2d91475f99642_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_310fd0e6e2a1945d3f9aad759e6ec7a40261c4b5e489094d1d5cd441360a9496 = $this->env->getExtension("native_profiler");
        $__internal_310fd0e6e2a1945d3f9aad759e6ec7a40261c4b5e489094d1d5cd441360a9496->enter($__internal_310fd0e6e2a1945d3f9aad759e6ec7a40261c4b5e489094d1d5cd441360a9496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css\">
        <link rel=\"stylesheet\" href=\"taskStyles.css\">
        <script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false\"></script>
        <script src=\"moment.min.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js\"></script>
        <script src=\"http:////ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js\"></script>
        <script src=\"http://ngmaterial.assets.s3.amazonaws.com/svg-assets-cache.js\"></script>
        <script src=\"https://code.jquery.com/jquery-1.12.3.min.js\"   integrity=\"sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=\"   crossorigin=\"anonymous\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/angular-material-icons/0.7.0/angular-material-icons.min.js\"></script> 
        <script>
            var app = angular.module('MyApp',['ngRoute', 'ngMaterial', 'ngMessages', 'material.svgAssetsCache', 'ngMdIcons']);
            app.config(function(\$interpolateProvider){
                \$interpolateProvider.startSymbol('{[{').endSymbol('}]}');});
            app.controller('tasksController', tasksController);
            app.controller('updateTaskDialogController', updateTaskDialogController);
            app.controller('createTaskDialogController', createTaskDialogController);
            
            function tasksController(\$scope, \$mdDialog, \$http){
                var dataFromServer = (\"";
        // line 29
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["listTasks"]) ? $context["listTasks"] : $this->getContext($context, "listTasks"))), "html", null, true);
        echo "\").replace(/&quot;/g, \"\");
                
                dataFromServer = dataFromServer.replace(\"[[\", \"\");
                dataFromServer = dataFromServer.replace(\"]]\", \"\");
                dataFromServer = dataFromServer.split(\"],[\");
                
                \$scope.userRol = \"asd\";//(\"";
        // line 35
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol"))), "html", null, true);
        echo "\").replace(/&quot;/g, \"\");
                \$scope.userLogin = (\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin"))), "html", null, true);
        echo "\").replace(/&quot;/g, \"\");
                
                \$scope.tasks = [];
                
                \$scope.isLoading = false;
                
                for (var i = 0; i < dataFromServer.length; i++){
                    \$scope.tasks.push(dataFromServer[i].split(','));
                }
                
                //TaskTemplates/mainDialogTask.tmpl.html
                \$scope.showUpdateTaskDialog = function(ev, task) {
                    
                    \$mdDialog.show({
                        templateUrl: \"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("intranet_main_task_dialog2");
        echo "\",
                        locals: {
                            currentTask: task,
                            rol: \$scope.userRol
                        }, 
                        parent: angular.element(document.body),
                        targetEvent: ev,
                        clickOutsideToClose: true,
                        controller: updateTaskDialogController,
                        onRemoving: \$scope.getAllTasks
                    });
                }
                
                \$scope.showCreateTaskDialog = function(ev) {
                    
                    \$mdDialog.show({
                        templateUrl: \"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("intranet_main_task_dialog2");
        echo "\",
                        parent: angular.element(document.body),
                        targetEvent: ev,
                        clickOutsideToClose: true,
                        controller: createTaskDialogController
                    });
                }
                
                \$scope.getTasksOfUser = function(){
                    
                    \$http({
                        method: 'GET',
                        url: window.location.pathname+'/../../api/users/'+\$scope.userLogin+'/tasks',
                        dataType: 'json',
                        headers: {'Content-Type': 'application/json'}
                    })
                    .then(function success(response){
                        
                        \$scope.tasksList = response.data;
                        console.log(\$scope.tasksList);
                    }, function error(response){
                        console.log(\"Error:\" +response.statusText);
                    });
                }
                
                \$scope.getAllTasks = function(){
                    
                    \$http({
                        method: 'GET',
                        url: window.location.pathname+'/../../api/tasks',
                        dataType: 'json',
                        headers: {'Content-Type': 'application/json'}
                    })
                    .then(function success(response){
                        
                        \$scope.tasksList = response.data;
                    }, function error(response){
                        console.log(\"Error:\" +response.statusText);
                    });
                }
                
                \$scope.deleteTask = function(taskId){
                    
                     \$http({
                        method: 'DELETE',
                        url: window.location.pathname+'/../../api/tasks/'+taskId,
                        dataType: 'json',
                        headers: {'Content-Type': 'application/json'}
                    })
                    .then(function success(response){
                         \$scope.getAllTasks();
                    }, function error(response){
                        console.log(\"Error:\" +response.statusText);
                    });
                }
                
                
            }
            
            function createTaskDialogController(\$scope, \$mdDialog, \$http){
                
                \$scope.getInfo = function(){
                    
                    //AJAX call requesting all users in the database with the field \"onboard\" set to \"true\".
                    \$http({
                        method: 'GET',
                        url: window.location.pathname+'/../../api/users/all/onboard',
                        dataType: 'json',
                        headers: {'Content-Type': 'application/json'}
                    })
                    .then(function success(response){
                        
                        \$scope.allUsers = response.data;
                        
                    }, function error(response){
                        console.log(\"Error:\" +response.statusText);
                    });
                };
                
                \$scope.closeDialog = function() {
                    \$mdDialog.hide();
                };
            }
            
            function updateTaskDialogController(\$scope, \$mdDialog, \$http, currentTask, rol){
                
                \$scope.userRol = \"rol\";
                \$scope.task = currentTask;
                \$scope.infoLoaded = false
                
                \$scope.getInfo = function(){
                    
                    //AJAX call requesting the task info, its list of users and the list of all users in the database.
                    \$http({
                        method: 'GET',
                        url: window.location.pathname+'/../../api/tasks/'+\$scope.task.id+'/users',
                        dataType: 'json',
                        headers: {'Content-Type': 'application/json'}
                    })
                    .then(function success(response){
                        
                        \$scope.allData = {
                            \"taskData\": response.data.taskData,
                            \"taskUsers\": \$.map(response.data.usersInTask, function(elem){return elem.login}),
                            \"allUsers\": response.data.allUsers
                        };
                        console.log(\$scope.allData.taskData);
                        \$scope.allUsers = \$scope.allData.allUsers;
                        \$scope.usersInTaskShownToDeveloper = \$scope.allData.allUsers.filter(function(user){
                            
                            if ((\$scope.allData.taskUsers).indexOf(user.login) > -1)
                                return user;
                        });
                        
                        \$scope.infoLoaded = true;
                        
                    }, function error(response){
                        console.log(\"Error:\" +response.statusText);
                    });
                };
                
                \$scope.closeDialog = function() {
                    \$mdDialog.hide();
                };
                
                \$scope.alreadyIn = function(user){
                    
                    return (\$scope.allData.taskUsers).indexOf(user.login) > -1;
                };
                
                \$scope.toggle = function(user){
                 
                    var index = (\$scope.allData.taskUsers).indexOf(user.login);
                    
                    if (index > -1)
                        (\$scope.allData.taskUsers).splice(index, 1);
                    else
                        (\$scope.allData.taskUsers).push(user.login);
                };
                
                \$scope.update = function(\$id){
                    
                    \$http({
                        method: 'PATCH',
                        url: window.location.pathname+'/../../api/tasks/'+\$id,
                        data: {
                            title: \$scope.allData.taskData[0].title,
                            content: \$scope.allData.taskData[0].content,
                            usersInTask: \$scope.allData.taskUsers
                        },
                        contentType: 'application/json',
                        dataType: 'json',
                        headers: {'Content-Type': 'application/json'}
                    })
                    .then(function success(response){
                        
                        \$scope.closeDialog();
                    }, function error(response){
                        console.log(\"Error:\" +response.statusText);
                    });
                };
                
                //DEPRECATED
                //Used to update the task by submit.
                \$scope.update2 = function(){
                    var input = \$(document.createElement(\"input\"));
                    input.attr('type', 'hidden')
                        .attr('name', \"users\")
                        .attr('value', \$scope.allData.taskUsers);
                    \$(\"#taskUpdateForm\").append(input);//('<input type=\"hidden\" name=\"users\" value=\"'+\$scope.allData.taskUsers+'\">');
                    \$(\"#taskUpdateForm\").submit();
                };
            }
            
            
        </script>
<script>
    
    var prueba;
    //prueba.push(";
        // line 245
        echo "'";
        echo "'";
        echo ");
    //prueba = JSON.parse(";
        // line 246
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["listTasks"]) ? $context["listTasks"] : $this->getContext($context, "listTasks"))), "html", null, true);
        echo ");
    prueba = \"";
        // line 247
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["listTasks"]) ? $context["listTasks"] : $this->getContext($context, "listTasks"))), "html", null, true);
        echo "\";
    //var kis = \$.map(prueba, function(el) { return el });
    prueba = prueba.replace(/&quot;/g, \"\");
    console.log(prueba);
</script>

<div ng-cloak ng-app=\"MyApp\" ng-controller=\"tasksController\" ng-init=\"userRol == 'developer' ? getTasksOfUser() : getAllTasks()\">
    
    <md-list>
        <md-button class=\"md-raised md-primary\" ng-click=\"showCreateTaskDialog(\$event)\" ng-if=\"userRol != developer\">New Task</md-button>
        <md-divider></md-divider>
        <md-divider></md-divider>
        <md-list-item style=\"font-size: large\" ng-model=\"prueba\">
            <span style=\"width: 15%\">Title</span>
            <span style=\"width: 60%\">Description</span>
            <span style=\"width: 15%\">Owner</span>
        </md-list-item>
        <md-divider></md-divider>
        <md-divider></md-divider>
        <div ng-repeat=\"task in tasksList track by \$index\">
            <md-list-item ng-click=\"showUpdateTaskDialog(\$event, task)\">
    <!--
                <span style=\"width: 15%\">{[{task[1]}]}</span>
                <span style=\"width: 70%\">{[{task[2]}]}</span>
                <span style=\"width: 15%\">{[{task[3]}]}</span>
    -->
                <span style=\"width: 15%\">{[{task.title}]}</span>
                <span style=\"width: 60%\">{[{task.content}]}</span>
                <span style=\"width: 15%\">{[{task.who_create}]}</span>
                <div>
                    <md-button style=\"width: 10%\" class=\"md-raised md-secondary\" ng-click=\"deleteTask(task.id)\" ng-if=\"userRol != 'developer'\">X</md-button> <!--sustituir por el icono de abajo-->
                </div>
            
            </md-list-item>
<!--            <md-icon md-svg-src=\"/es/ic_delete_black_24px.svg\" aria-label=\"android \"></md-icon>-->
            <md-divider></md-divider>
        </div>
    </md-list>
</div>








";
        
        $__internal_310fd0e6e2a1945d3f9aad759e6ec7a40261c4b5e489094d1d5cd441360a9496->leave($__internal_310fd0e6e2a1945d3f9aad759e6ec7a40261c4b5e489094d1d5cd441360a9496_prof);

    }

    public function getTemplateName()
    {
        return "intranetBundle:Default:tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 247,  303 => 246,  298 => 245,  116 => 66,  97 => 50,  80 => 36,  76 => 35,  67 => 29,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'intranetBundle::layout.html.twig' %}*/
/* */
/*  {% block contenido %}*/
/* */
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">*/
/*         <link rel="stylesheet" href="taskStyles.css">*/
/*         <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>*/
/*         <script src="moment.min.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>*/
/*         <script src="http:////ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>*/
/*         <script src="http://ngmaterial.assets.s3.amazonaws.com/svg-assets-cache.js"></script>*/
/*         <script src="https://code.jquery.com/jquery-1.12.3.min.js"   integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>*/
/*         <script src="//cdnjs.cloudflare.com/ajax/libs/angular-material-icons/0.7.0/angular-material-icons.min.js"></script> */
/*         <script>*/
/*             var app = angular.module('MyApp',['ngRoute', 'ngMaterial', 'ngMessages', 'material.svgAssetsCache', 'ngMdIcons']);*/
/*             app.config(function($interpolateProvider){*/
/*                 $interpolateProvider.startSymbol('{[{').endSymbol('}]}');});*/
/*             app.controller('tasksController', tasksController);*/
/*             app.controller('updateTaskDialogController', updateTaskDialogController);*/
/*             app.controller('createTaskDialogController', createTaskDialogController);*/
/*             */
/*             function tasksController($scope, $mdDialog, $http){*/
/*                 var dataFromServer = ("{{listTasks | json_encode()}}").replace(/&quot;/g, "");*/
/*                 */
/*                 dataFromServer = dataFromServer.replace("[[", "");*/
/*                 dataFromServer = dataFromServer.replace("]]", "");*/
/*                 dataFromServer = dataFromServer.split("],[");*/
/*                 */
/*                 $scope.userRol = "asd";//("{{rol | json_encode()}}").replace(/&quot;/g, "");*/
/*                 $scope.userLogin = ("{{userLogin | json_encode()}}").replace(/&quot;/g, "");*/
/*                 */
/*                 $scope.tasks = [];*/
/*                 */
/*                 $scope.isLoading = false;*/
/*                 */
/*                 for (var i = 0; i < dataFromServer.length; i++){*/
/*                     $scope.tasks.push(dataFromServer[i].split(','));*/
/*                 }*/
/*                 */
/*                 //TaskTemplates/mainDialogTask.tmpl.html*/
/*                 $scope.showUpdateTaskDialog = function(ev, task) {*/
/*                     */
/*                     $mdDialog.show({*/
/*                         templateUrl: "{{path('intranet_main_task_dialog2')}}",*/
/*                         locals: {*/
/*                             currentTask: task,*/
/*                             rol: $scope.userRol*/
/*                         }, */
/*                         parent: angular.element(document.body),*/
/*                         targetEvent: ev,*/
/*                         clickOutsideToClose: true,*/
/*                         controller: updateTaskDialogController,*/
/*                         onRemoving: $scope.getAllTasks*/
/*                     });*/
/*                 }*/
/*                 */
/*                 $scope.showCreateTaskDialog = function(ev) {*/
/*                     */
/*                     $mdDialog.show({*/
/*                         templateUrl: "{{path('intranet_main_task_dialog2')}}",*/
/*                         parent: angular.element(document.body),*/
/*                         targetEvent: ev,*/
/*                         clickOutsideToClose: true,*/
/*                         controller: createTaskDialogController*/
/*                     });*/
/*                 }*/
/*                 */
/*                 $scope.getTasksOfUser = function(){*/
/*                     */
/*                     $http({*/
/*                         method: 'GET',*/
/*                         url: window.location.pathname+'/../../api/users/'+$scope.userLogin+'/tasks',*/
/*                         dataType: 'json',*/
/*                         headers: {'Content-Type': 'application/json'}*/
/*                     })*/
/*                     .then(function success(response){*/
/*                         */
/*                         $scope.tasksList = response.data;*/
/*                         console.log($scope.tasksList);*/
/*                     }, function error(response){*/
/*                         console.log("Error:" +response.statusText);*/
/*                     });*/
/*                 }*/
/*                 */
/*                 $scope.getAllTasks = function(){*/
/*                     */
/*                     $http({*/
/*                         method: 'GET',*/
/*                         url: window.location.pathname+'/../../api/tasks',*/
/*                         dataType: 'json',*/
/*                         headers: {'Content-Type': 'application/json'}*/
/*                     })*/
/*                     .then(function success(response){*/
/*                         */
/*                         $scope.tasksList = response.data;*/
/*                     }, function error(response){*/
/*                         console.log("Error:" +response.statusText);*/
/*                     });*/
/*                 }*/
/*                 */
/*                 $scope.deleteTask = function(taskId){*/
/*                     */
/*                      $http({*/
/*                         method: 'DELETE',*/
/*                         url: window.location.pathname+'/../../api/tasks/'+taskId,*/
/*                         dataType: 'json',*/
/*                         headers: {'Content-Type': 'application/json'}*/
/*                     })*/
/*                     .then(function success(response){*/
/*                          $scope.getAllTasks();*/
/*                     }, function error(response){*/
/*                         console.log("Error:" +response.statusText);*/
/*                     });*/
/*                 }*/
/*                 */
/*                 */
/*             }*/
/*             */
/*             function createTaskDialogController($scope, $mdDialog, $http){*/
/*                 */
/*                 $scope.getInfo = function(){*/
/*                     */
/*                     //AJAX call requesting all users in the database with the field "onboard" set to "true".*/
/*                     $http({*/
/*                         method: 'GET',*/
/*                         url: window.location.pathname+'/../../api/users/all/onboard',*/
/*                         dataType: 'json',*/
/*                         headers: {'Content-Type': 'application/json'}*/
/*                     })*/
/*                     .then(function success(response){*/
/*                         */
/*                         $scope.allUsers = response.data;*/
/*                         */
/*                     }, function error(response){*/
/*                         console.log("Error:" +response.statusText);*/
/*                     });*/
/*                 };*/
/*                 */
/*                 $scope.closeDialog = function() {*/
/*                     $mdDialog.hide();*/
/*                 };*/
/*             }*/
/*             */
/*             function updateTaskDialogController($scope, $mdDialog, $http, currentTask, rol){*/
/*                 */
/*                 $scope.userRol = "rol";*/
/*                 $scope.task = currentTask;*/
/*                 $scope.infoLoaded = false*/
/*                 */
/*                 $scope.getInfo = function(){*/
/*                     */
/*                     //AJAX call requesting the task info, its list of users and the list of all users in the database.*/
/*                     $http({*/
/*                         method: 'GET',*/
/*                         url: window.location.pathname+'/../../api/tasks/'+$scope.task.id+'/users',*/
/*                         dataType: 'json',*/
/*                         headers: {'Content-Type': 'application/json'}*/
/*                     })*/
/*                     .then(function success(response){*/
/*                         */
/*                         $scope.allData = {*/
/*                             "taskData": response.data.taskData,*/
/*                             "taskUsers": $.map(response.data.usersInTask, function(elem){return elem.login}),*/
/*                             "allUsers": response.data.allUsers*/
/*                         };*/
/*                         console.log($scope.allData.taskData);*/
/*                         $scope.allUsers = $scope.allData.allUsers;*/
/*                         $scope.usersInTaskShownToDeveloper = $scope.allData.allUsers.filter(function(user){*/
/*                             */
/*                             if (($scope.allData.taskUsers).indexOf(user.login) > -1)*/
/*                                 return user;*/
/*                         });*/
/*                         */
/*                         $scope.infoLoaded = true;*/
/*                         */
/*                     }, function error(response){*/
/*                         console.log("Error:" +response.statusText);*/
/*                     });*/
/*                 };*/
/*                 */
/*                 $scope.closeDialog = function() {*/
/*                     $mdDialog.hide();*/
/*                 };*/
/*                 */
/*                 $scope.alreadyIn = function(user){*/
/*                     */
/*                     return ($scope.allData.taskUsers).indexOf(user.login) > -1;*/
/*                 };*/
/*                 */
/*                 $scope.toggle = function(user){*/
/*                  */
/*                     var index = ($scope.allData.taskUsers).indexOf(user.login);*/
/*                     */
/*                     if (index > -1)*/
/*                         ($scope.allData.taskUsers).splice(index, 1);*/
/*                     else*/
/*                         ($scope.allData.taskUsers).push(user.login);*/
/*                 };*/
/*                 */
/*                 $scope.update = function($id){*/
/*                     */
/*                     $http({*/
/*                         method: 'PATCH',*/
/*                         url: window.location.pathname+'/../../api/tasks/'+$id,*/
/*                         data: {*/
/*                             title: $scope.allData.taskData[0].title,*/
/*                             content: $scope.allData.taskData[0].content,*/
/*                             usersInTask: $scope.allData.taskUsers*/
/*                         },*/
/*                         contentType: 'application/json',*/
/*                         dataType: 'json',*/
/*                         headers: {'Content-Type': 'application/json'}*/
/*                     })*/
/*                     .then(function success(response){*/
/*                         */
/*                         $scope.closeDialog();*/
/*                     }, function error(response){*/
/*                         console.log("Error:" +response.statusText);*/
/*                     });*/
/*                 };*/
/*                 */
/*                 //DEPRECATED*/
/*                 //Used to update the task by submit.*/
/*                 $scope.update2 = function(){*/
/*                     var input = $(document.createElement("input"));*/
/*                     input.attr('type', 'hidden')*/
/*                         .attr('name', "users")*/
/*                         .attr('value', $scope.allData.taskUsers);*/
/*                     $("#taskUpdateForm").append(input);//('<input type="hidden" name="users" value="'+$scope.allData.taskUsers+'">');*/
/*                     $("#taskUpdateForm").submit();*/
/*                 };*/
/*             }*/
/*             */
/*             */
/*         </script>*/
/* <script>*/
/*     */
/*     var prueba;*/
/*     //prueba.push({#% for task in listTasks %#}'{#task#}'{#% endfor %#});*/
/*     //prueba = JSON.parse({{listTasks | json_encode()}});*/
/*     prueba = "{{listTasks | json_encode()}}";*/
/*     //var kis = $.map(prueba, function(el) { return el });*/
/*     prueba = prueba.replace(/&quot;/g, "");*/
/*     console.log(prueba);*/
/* </script>*/
/* */
/* <div ng-cloak ng-app="MyApp" ng-controller="tasksController" ng-init="userRol == 'developer' ? getTasksOfUser() : getAllTasks()">*/
/*     */
/*     <md-list>*/
/*         <md-button class="md-raised md-primary" ng-click="showCreateTaskDialog($event)" ng-if="userRol != developer">New Task</md-button>*/
/*         <md-divider></md-divider>*/
/*         <md-divider></md-divider>*/
/*         <md-list-item style="font-size: large" ng-model="prueba">*/
/*             <span style="width: 15%">Title</span>*/
/*             <span style="width: 60%">Description</span>*/
/*             <span style="width: 15%">Owner</span>*/
/*         </md-list-item>*/
/*         <md-divider></md-divider>*/
/*         <md-divider></md-divider>*/
/*         <div ng-repeat="task in tasksList track by $index">*/
/*             <md-list-item ng-click="showUpdateTaskDialog($event, task)">*/
/*     <!--*/
/*                 <span style="width: 15%">{[{task[1]}]}</span>*/
/*                 <span style="width: 70%">{[{task[2]}]}</span>*/
/*                 <span style="width: 15%">{[{task[3]}]}</span>*/
/*     -->*/
/*                 <span style="width: 15%">{[{task.title}]}</span>*/
/*                 <span style="width: 60%">{[{task.content}]}</span>*/
/*                 <span style="width: 15%">{[{task.who_create}]}</span>*/
/*                 <div>*/
/*                     <md-button style="width: 10%" class="md-raised md-secondary" ng-click="deleteTask(task.id)" ng-if="userRol != 'developer'">X</md-button> <!--sustituir por el icono de abajo-->*/
/*                 </div>*/
/*             */
/*             </md-list-item>*/
/* <!--            <md-icon md-svg-src="/es/ic_delete_black_24px.svg" aria-label="android "></md-icon>-->*/
/*             <md-divider></md-divider>*/
/*         </div>*/
/*     </md-list>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
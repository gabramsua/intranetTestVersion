<?php header("Content-type: application/javascript"); ?>

var app = angular.module('MyApp',['ngRoute', 'ngMaterial', 'ngMessages', 'material.svgAssetsCache', 'ngMdIcons']);
app.controller('tabsController', tabsController);
app.controller('formHeaderController', formHeaderController);
app.controller('dateRangeController', dateRangeController);
app.controller('vacationController', vacationController);
app.controller('expensesController', expensesController);
app.controller('overtimeHoursController2', overtimeHoursController2);
app.controller('businessTripController', businessTripController);
app.controller('workAtHomeController', workAtHomeController);
app.controller('historicController', historicController);
app.controller('confirmDeleteDialogController', confirmDeleteDialogController);
app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});

app.config(function($mdThemingProvider) {

    // Configure a dark theme with primary foreground yellow

    $mdThemingProvider.theme('blueTheme')
                      .primaryPalette('blue');

});

app.config(function ($mdDateLocaleProvider) {
    $mdDateLocaleProvider.formatDate = function(date) {
        return date ? moment(date).format('DD/MM/YYYY') : '';
    };

    $mdDateLocaleProvider.parseDate = function(dateString) {
        var m = moment(dateString, 'DD/MM/YYYY', true);
        return m.isValid() ? m.toDate() : new Date(NaN);
    };
});

function tabsController($scope){
    $scope.returnToHistoric = function() {
        $scope.selectedIndex = 0;
    };
}

function formHeaderController($scope, $filter){
    $scope.auxDate = new Date();
    $scope.name = ("{{name | json_encode()}}").replace(/&quot;/g, "")+ " " +
        ("{{surname | json_encode()}}").replace(/&quot;/g, "");;
}

function formatDate(date){

    if (typeof date != "string"){

        var dateFormatted = "";

        if (date.getDate() < 10)
            dateFormatted += '0';

        dateFormatted += date.getDate()+'/';

        if ((date.getMonth()+1) < 10)
            dateFormatted += '0';

        dateFormatted += (date.getMonth()+1)+'/'+date.getFullYear();

        return dateFormatted;
    }else
        return date;
}

function vacationController($scope, $http, $mdToast){
    var last = {
      bottom: false,
      top: true,
      left: false,
      right: true
    };
    $scope.toastPosition = angular.extend({},last);

    $scope.getToastPosition = function() {
        return Object.keys($scope.toastPosition)
          .filter(function(pos) { return $scope.toastPosition[pos]; })
          .join(' ');
      };

      $scope.showSimpleToast = function() {//this.showSimpleToast
        var pinTo = $scope.getToastPosition();
        $mdToast.show(
            $mdToast.simple()
            .textContent('{% trans %}form_send{% endtrans %}')
            .position(pinTo )
            .hideDelay(10000)
        );
      };

    $scope.buttonFlag = false;
    $scope.surrogate = "";

    //DATES FUNCTIONALITY
    $scope.today = moment(new Date()).subtract(1, "days").toDate(); // minDate, don't touch this var.
    $scope.startDate = new Date();
    $scope.finishDate = new Date();
    $scope.minFinishDate = $scope.startDate;
    //$WATCH ---> https://quizzpot.com/courses/introduccion-a-angular-js/articles/escuchando-cambios-en-el-scope-usando-el-watch
    //https://www.google.de/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=como+usar+%24watch
    $scope.$watch("startDate", function(data){

        if($scope.startDate > $scope.finishDate) //al cambiar la fecha de comienzo, si esta es mayor que la de fin, la de fin se actualiza a la de comienzo, si no, la de fin se queda igual
            $scope.finishDate = $scope.startDate;

        $scope.minFinishDate = $scope.startDate;

    });

    $scope.$watch("minFinishDate", function(data){

        console.log(data);
        $scope.minFinishDate = $scope.startDate;
    });
    //DATES FUNCTIONALITY

    $scope.forming = function(){

        $scope.vacationForm.$setSubmitted();

        if ($scope.vacationForm.$valid){

            $scope.buttonFlag = true;
            var userLogin = ("{{userLogin | json_encode()}}").replace(/&quot;/g, "");
            var data = {startdate: formatDate($scope.startDate),
                    finishdate: formatDate($scope.finishDate),
                    surrogate: $scope.surrogate
                    };

            $http({
                method: 'POST',
                url: window.location.pathname+'/../../api/vacationform/'+userLogin,
                data: data,
                dataType: 'json',
                headers: {'Content-Type': 'application/json'}
            }).then(function success(response){
                $scope.showSimpleToast();
                $scope.returnToHistoric();
                $scope.buttonFlag = false;
                reinitializeModel();
            }, function error(response){
                alert("Error:" +response.statusText);
            });
        }
    };

    function reinitializeModel(){

        $scope.surrogate = "";
        $scope.startDate = new Date();
        $scope.finishDate = new Date();
    }
}

function expensesController($scope, $http, $mdToast){

    var last = {
      bottom: false,
      top: true,
      left: false,
      right: true
    };
    $scope.toastPosition = angular.extend({},last);

    $scope.getToastPosition = function() {
        return Object.keys($scope.toastPosition)
          .filter(function(pos) { return $scope.toastPosition[pos]; })
          .join(' ');
      };

      $scope.showSimpleToast = function() {//this.showSimpleToast
        var pinTo = $scope.getToastPosition();
        $mdToast.show(
            $mdToast.simple()
            .textContent('{% trans %}form_send{% endtrans %}')
            .position(pinTo )
            .hideDelay(10000)
        );
      };

    $scope.buttonFlag = false;
    $scope.data = {
        seller: "",
        amount: null,
        concept: "",
        dateSelected: new Date() // this date if for the date-bingind with the datepicker, the other one ($scope.data.today) is used to specify the min date limit.
    }

    $scope.forming = function(){

        $scope.expensesForm.$setSubmitted();

        if ($scope.expensesForm.$valid){

            $scope.buttonFlag = true;
            var userLogin = ("{{userLogin | json_encode()}}").replace(/&quot;/g, "");
            var data = {
                seller: $scope.data.seller,
                amount: $scope.data.amount,
                concept: $scope.data.concept,
                beforeToDate: formatDate($scope.data.dateSelected)
            };

            $http({
                method: 'POST',
                url: window.location.pathname+'/../../api/expensesform/'+userLogin,
                data: data,
                dataType: 'json',
                headers: {'Content-Type': 'application/json'}
            }).then(function success(response){
                $scope.showSimpleToast();
                $scope.returnToHistoric();
                $scope.buttonFlag = false;
                reinitializeModel();
            }, function error(response){
                alert("Error:" +response.statusText);
            });
        }
    };

    $scope.today = moment(new Date()).subtract(1, "days").toDate(); //using moment library to substract 1 day to the date in order to let the current date be selected again. Then parsing the moment object to date object.

    function reinitializeModel(){

        $scope.data = {
            seller: "",
            amount: null,
            concept: "",
            dateSelected: new Date()
        }
    }
}

function businessTripController($scope, $http, $mdToast){

    var last = {
      bottom: false,
      top: true,
      left: false,
      right: true
    };
    $scope.toastPosition = angular.extend({},last);

    $scope.getToastPosition = function() {
        return Object.keys($scope.toastPosition)
          .filter(function(pos) { return $scope.toastPosition[pos]; })
          .join(' ');
      };

      $scope.showSimpleToast = function() {//this.showSimpleToast
        var pinTo = $scope.getToastPosition();
        $mdToast.show(
            $mdToast.simple()
            .textContent('{% trans %}form_send{% endtrans %}')
            .position(pinTo )
            .hideDelay(10000)
        );
      };

    $scope.buttonFlag = false;
    $scope.location = "";
    $scope.congressName = "";
    $scope.reasons = "";

    //DATES FUNCTIONALITY
    $scope.today = moment(new Date()).subtract(1, "days").toDate(); // minDate, don't touch this var
    $scope.startDate = new Date();
    $scope.finishDate = new Date();
    $scope.minFinishDate = $scope.startDate;
    $scope.$watch("startDate", function(data){

        if($scope.startDate > $scope.finishDate) //al cambiar la fecha de comienzo, si esta es mayor que la de fin, la de fin se actualiza a la de comienzo, si no, la de fin se queda igual
            $scope.finishDate = $scope.startDate;

        $scope.minFinishDate = $scope.startDate;

    });

    $scope.$watch("minFinishDate", function(data){

        console.log(data);
        $scope.minFinishDate = $scope.startDate;
    });
    //DATES FUNCTIONALITY

    $scope.forming = function(){

        $scope.businessTripForm.$setSubmitted();

        if ($scope.businessTripForm.$valid){

            $scope.buttonFlag = true;
            var userLogin = ("{{userLogin | json_encode()}}").replace(/&quot;/g, "");
            var data = {location: $scope.location,
                        congressName: $scope.congressName,
                        reasons: $scope.reasons,
                        startDate: formatDate($scope.startDate),
                        finishDate: formatDate($scope.finishDate)
                        };

            $http({
                method: 'POST',
                url: window.location.pathname+'/../../api/businesstripform/'+userLogin,
                data: data,
                dataType: 'json',
                headers: {'Content-Type': 'application/json'}
            }).then(function success(response){
                $scope.showSimpleToast();
                $scope.returnToHistoric();
                $scope.buttonFlag = false;
                reinitializeModel();
            }, function error(response){
                alert("Error:" +response.statusText);
            });
        }
    };

    function reinitializeModel(){

        $scope.location = "";
        $scope.congressName = "";
        $scope.reasons = "";
        $scope.startDate = new Date();
        $scope.finishDate = new Date();
    }

}

function overtimeHoursController2($scope, $http, $filter, $mdToast){

    var last = {
      bottom: false,
      top: true,
      left: false,
      right: true
    };
    $scope.toastPosition = angular.extend({},last);

    $scope.getToastPosition = function() {
        return Object.keys($scope.toastPosition)
          .filter(function(pos) { return $scope.toastPosition[pos]; })
          .join(' ');
      };

      $scope.showSimpleToast = function() {//this.showSimpleToast
        var pinTo = $scope.getToastPosition();
        $mdToast.show(
            $mdToast.simple()
            .textContent('{% trans %}form_send{% endtrans %}')
            .position(pinTo )
            .hideDelay(10000)
        );
      };

    $scope.buttonFlag = false;
    $scope.jiraTicketdID = "";
    $scope.reasons = "";

    function overtime(){
        this.date = new Date();
        this.hours = 0;
        this.minutes = 0;
    }

    $scope.today = moment(new Date()).subtract(1, "days").toDate(); //using moment library to substract 1 day to the date in order to let the current date be selected again. Then parsing the moment object to date object.

    $scope.dateSelected = new Date();// this date if for the date-bingind with the datepicker, the other one ($scope.data.today) is used to specify the min date limit.

    $scope.time = {
        hours : [0, 1, 2, 3, 4, 5, 6, 7, 8],
        minutes : [0, 15, 30, 45],
        selectedHour: 0,
        selectedMinute: 0
    }

    $scope.overtimeList = [];

    $scope.showData = function(){

        $scope.overtimeList.forEach(function(item, index){
            console.log("Fecha: "+item.date+" || Hora: "+item.hours+" || Minutos: "+item.minutes);
        });
    };

    $scope.overtimeList.forEach(function(current, index){

        $scope.$watch('overtimeList', function(newValue){
            $scope.overtimeList.date = $filter('date')(newValue[index].date, 'yyyy/MM/dd');
        });
    });


    $scope.hoursSelected = 0;
    $scope.minutesSelected = 0;

    $scope.addDateField2 = function(){
        var OTaux = new overtime();

        OTaux.date = $scope.dateSelected;
        OTaux.hours = $scope.hoursSelected;
        OTaux.minutes = $scope.minutesSelected;

        $scope.overtimeList.push(OTaux);

        $scope.noDatesFlag = false;
    }

    $scope.noDatesFlag = true;
    $scope.removeElement = function(index){

        $scope.overtimeList.splice(index, 1);

        if ($scope.overtimeList.length == 0)
            $scope.noDatesFlag = true;
    };

    $scope.timeFlag = true;

    $scope.timeValidation = function(hours, minutes){

        if (hours == 0 && minutes == 0)
            $scope.timeFlag = true;
        else
            $scope.timeFlag = false;
    };

    $scope.isEmptyList = function(){
        console.log($.isEmptyObject($scope.overtimeList));
        return $.isEmptyObject($scope.overtimeList);
    };

    $scope.alreadySelectedDatesDates = function(date){

        if ($scope.overtimeList.length > 0)
            for (var i = 0; i < $scope.overtimeList.length; i++)
                if (moment(date).isSame($scope.overtimeList[i].date, 'day'))
                    return false;

        return true;
    };

    $scope.forming = function(){

        $.each($scope.overtimeList, function(index, current){
           current.date = formatDate(current.date);
        });

        $scope.overtimeHoursForm.$setSubmitted();

        if ($scope.overtimeHoursForm.overtimeHoursReasons.$valid && $scope.overtimeHoursForm.jiraTicketdID.$valid &&
            !$scope.timeFlag && !$scope.noDatesFlag){

            $scope.buttonFlag = true;
            var userLogin = ("{{userLogin | json_encode()}}").replace(/&quot;/g, "");
            var data = {jiraTicketID: $scope.jiraTicketdID,
                        reasons: $scope.reasons,
                        datesList: $scope.overtimeList
                        };

            $http({
                method: 'POST',
                url: window.location.pathname+'/../../api/overtimehoursform/'+userLogin,
                data: data,
                dataType: 'json',
                headers: {'Content-Type': 'application/json'}
            }).then(function success(response){

                $scope.showSimpleToast();
                $scope.returnToHistoric();
                $scope.buttonFlag = false;
                $scope.noDatesFlag = true;
                $scope.timeFlag = true;
                reinitializeModel();
            }, function error(response){
                alert("Error:" +response.statusText);
            });
        }
    };

    function reinitializeModel(){

        $scope.jiraTicketdID = "";
        $scope.reasons = "";
        $scope.overtimeList = [];
        $scope.hoursSelected = 0;
        $scope.minutesSelected = 0;
    }
}

function workAtHomeController($scope, $http, $mdToast){

    var last = {
      bottom: false,
      top: true,
      left: false,
      right: true
    };
    $scope.toastPosition = angular.extend({},last);

    $scope.getToastPosition = function() {
        return Object.keys($scope.toastPosition)
          .filter(function(pos) { return $scope.toastPosition[pos]; })
          .join(' ');
      };

      $scope.showSimpleToast = function() {//this.showSimpleToast
        var pinTo = $scope.getToastPosition();
        $mdToast.show(
            $mdToast.simple()
            .textContent('{% trans %}form_send{% endtrans %}')
            .position(pinTo )
            .hideDelay(10000)
        );
      };

    $scope.buttonFlag = false;
    $scope.today = moment(new Date()).subtract(1, "days").toDate(); //using moment library to substract 1 day to the date in order to let the current date be selected again. Then parsing the moment object to date object.

    $scope.dateSelected = new Date();// this date if for the date-bingind with the datepicker, the other one ($scope.data.today) is used to specify the min date limit.

    $scope.reasons = "";
    $scope.wholeOrHalfDay = "wholeDay";

    $scope.forming = function(){

        $scope.workAtHomeForm.$setSubmitted();

        if ($scope.workAtHomeForm.$valid){

            $scope.buttonFlag = true;
            var userLogin = ("{{userLogin | json_encode()}}").replace(/&quot;/g, "");
            var data = {date: $scope.dateSelected,
                        reasons: $scope.reasons,
                        wholeOrHalfDay: $scope.wholeOrHalfDay == "wholeDay" ? 1 : 0
                        };

            $http({
                method: 'POST',
                url: window.location.pathname+'/../../api/workathomeform/'+userLogin,
                data: data,
                dataType: 'json',
                headers: {'Content-Type': 'application/json'}
            }).then(function success(response){
                $scope.showSimpleToast();
                $scope.returnToHistoric();
                $scope.buttonFlag = false;
                reinitializeModel();
            }, function error(response){
                alert("Error:" +response.statusText);
            });
        }
    };

    function reinitializeModel(){

        $scope.dateSelected = new Date();
        $scope.reasons = "";
        $scope.wholeOrHalfDay = "wholeDay";
    }
}

function historicController($scope, $http, $mdDialog){


    $scope.userLogin = <?php echo $_SESSION[userLDAP]?>;
    var deleting = false;
    $scope.loading = true;

    $scope.filters = {
        formType: 'All',
        formStatus: 3
    };

    //form filter status legend
    //0 -> Pending
    //1 -> Accepted
    //2 -> Rejected
    //3 -> All

    $scope.fillList = function(){

        $http({
            method: 'GET',
            url: window.location.pathname+'/../../api/user/'+$scope.userLogin+'/forms',
            dataType: 'json',
            headers: {'Content-Type': 'application/json'}
        }).then(function success(response){

            $scope.formsList = response.data.allForms;
            $scope.filteredFormsList = groupAllFormsInOneArray(response.data.allForms);
            $scope.daysOnOvertimeHoursForms = response.data.daysOnOvertimeHoursForms;
            $scope.loading = false;

            if (deleting){
                filterForms();
                deleting = false;
            }
        }, function error(response){
            //manage error
            console.log("ERROR: "+response.statusText);
        });
    }

    function filterForms(){

        $scope.filteredFormsList = [];
        if($scope.filters.formType === "All" && $scope.filters.formStatus == 3){
            $scope.filteredFormsList = groupAllFormsInOneArray($scope.formsList);
        }else if($scope.filters.formType === "All" && $scope.filters.formStatus != 3){
            $scope.filteredFormsList = groupAllFormsInOneArray($scope.formsList);
            $scope.filteredFormsList = filterFormsByStatus($scope.filteredFormsList, $scope.filters.formStatus);
        }else{

            switch($scope.filters.formType){
                case 'Vacation':
                    $scope.filteredFormsList = filterFormsByStatus($scope.formsList.vacationFormsList, $scope.filters.formStatus);
                    break;
                case 'Expenses':
                    $scope.filteredFormsList = filterFormsByStatus($scope.formsList.expensesFormsList, $scope.filters.formStatus);
                    break;
                case 'BusinessTrip':
                    $scope.filteredFormsList = filterFormsByStatus($scope.formsList.businessTripFormsList, $scope.filters.formStatus);
                    break;
                case 'OvertimeHours':
                    $scope.filteredFormsList = filterFormsByStatus($scope.formsList.overtimeHoursFormsList, $scope.filters.formStatus);
                    break;
                case 'WorkAtHome':
                    $scope.filteredFormsList = filterFormsByStatus($scope.formsList.WorkAtHomeFormsList, $scope.filters.formStatus);
                    break;
                default:
                    $scope.filteredFormsList = filterFormsByStatus($scope.formsList, $scope.filters.formStatus);
                    break;
            }
        }
    }

    $scope.$watchGroup(['filters.formType', 'filters.formStatus'], filterForms);

    function filterFormsByStatus(currentTypeFormList, status){

        var formsListOutput = [];

        if (status == 3)
            formsListOutput = currentTypeFormList;
        else{
            $.each(currentTypeFormList, function(index, currentForm){
                if (currentForm.status == status)
                    formsListOutput.push(currentForm);
            });
        }

        return formsListOutput;
    }

    function groupAllFormsInOneArray(formsList){

        var formsListOutput = [];

        $.each(formsList, function(index, currentList){

            $.each(currentList, function(index, currentForm){
                formsListOutput.push(currentForm);
            });
        });

        return formsListOutput;
    }

    $scope.showFormDetails = function(ev, form) {

        var daysOnOvertimeHoursForm = null

        if (form.type == "OvertimeHours")
            daysOnOvertimeHoursForm = $scope.daysOnOvertimeHoursForms[form.id];

        $mdDialog.show({
            templateUrl: "{{ path('intranet_forms_main_dialog')}}",
            locals: {
                currentForm: form,
                daysOnOvertimeHoursForm: daysOnOvertimeHoursForm
            },
            parent: angular.element(document.body),
            targetEvent: ev,
            clickOutsideToClose: true,
            controller: dialogController
        });
    }

    $scope.showConfirmDelete = function(ev, idForm, typeForm) {
        $mdDialog.show({
            templateUrl: "{{path('intranet_delete_dialog')}}",
            locals: {
                idForm: idForm,
                typeForm: typeForm
            },
            scope: $scope,
            parent: angular.element(document.body),
            targetEvent: ev,
            clickOutsideToClose: true,
            controller: confirmDeleteDialogController
        });
  };

    $scope.deleteForm = function (idForm, typeForm){
        var url = "";

        switch (typeForm){
            case "Expenses":
                url = "expensesform";
                break;
            case "OvertimeHours":
                url = "overtimehoursform";
                break;
            case "Vacation":
                url = "vacationform";
                break;
            case "BusinessTrip":
                url = "bussinestripform";
                break;
            case "WorkAtHome":
                url = "workathomeform";
                break;
        }

        $http({
            method: 'DELETE',
            url: window.location.pathname+'/../../api/user/'+userLogin+'/'+url+'/'+idForm,
            dataType: 'json',
            headers: {'Content-Type': 'application/json'}
        }).then(function success(response){

            deleting = true;
            $scope.fillList();
        }, function error(response){
            //manage error
            console.log("ERROR: "+response.statusText);
        });
    };
}

function dialogController($scope, $mdDialog, currentForm, daysOnOvertimeHoursForm){

    $scope.form = currentForm;

    switch($scope.form.type){
        case "Expenses":
            $scope.currentTemplateForm = "{{ path('intranet_forms_dialog_expenses')}}";
            break;
        case "OvertimeHours":
            $scope.currentTemplateForm = "{{ path('intranet_forms_dialog_overtime_hours')}}";
            $scope.daysList = daysOnOvertimeHoursForm;
            break;
        case "Vacation":
            $scope.currentTemplateForm = "{{ path('intranet_forms_dialog_vacation')}}";
            break;
        case "BusinessTrip":
            $scope.currentTemplateForm = "{{ path('intranet_forms_dialog_business_trip')}}";
            break;
        case "WorkAtHome":
            $scope.currentTemplateForm = "{{ path('intranet_forms_dialog_work_at_home')}}";
            break;
    }

    $scope.closeDialog = function() {
        $mdDialog.hide();
    }
}

function confirmDeleteDialogController($scope, $mdDialog, idForm, typeForm){

    $scope.delete = function(){
        $scope.deleteForm(idForm, typeForm);
        $mdDialog.hide();
    };

    $scope.closeDialog = function() {
        $mdDialog.hide();
    }
}

//TODO:DEPRECATED (ASK IF IT'S POSSIBLE TO CREATE A FACTORY WITH THIS GIVEN THAT IT'S A FUNCTIONALITY THAT EVERY FORMS SHARE)
function dateRangeController ( $scope, $filter ) {

    $scope.today = moment(new Date()).subtract(1, "days").toDate(); // minDate, don't touch this var. TODO: HAY QUE RESTAR UN DÍA a esta fecha para que permita seleccionar el día actual.
    $scope.startDate = new Date();
    $scope.finishDate = new Date();
    $scope.minFinishDate = $scope.startDate;

    //$WATCH ---> https://quizzpot.com/courses/introduccion-a-angular-js/articles/escuchando-cambios-en-el-scope-usando-el-watch
    //https://www.google.de/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=como+usar+%24watch
    $scope.$watch("startDate", function(data){

        if($scope.startDate > $scope.finishDate) //al cambiar la fecha de comienzo, si esta es mayor que la de fin, la de fin se actualiza a la de comienzo, si no, la de fin se queda igual
            $scope.finishDate = $scope.startDate;

        $scope.minFinishDate = $scope.startDate;

    });

    $scope.$watch("minFinishDate", function(data){

        console.log(data);
        $scope.minFinishDate = $scope.startDate;
    });
}
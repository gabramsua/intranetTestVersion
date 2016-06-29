<?php
namespace intranetBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;
use intranetBundle\Entity\Entity\Users;
use intranetBundle\Entity\Entity\Tasks;
use intranetBundle\Entity\Entity\NewFeed;
use intranetBundle\Entity\Entity\Channel;
use intranetBundle\Entity\Entity\userschannel;
use intranetBundle\Entity\Entity\userstasks;
use intranetBundle\Entity\Entity\channelnew_feed;
use intranetBundle\Entity\Entity\F_Expenses;
use intranetBundle\Entity\Entity\F_Hours;
use intranetBundle\Entity\Entity\F_Trip;
use intranetBundle\Entity\Entity\F_Vacation;
use intranetBundle\Entity\Entity\F_Home;
use intranetBundle\Entity\Entity\Users_F_Hours;
use intranetBundle\Entity\Entity\Users_F_Vacation;
use intranetBundle\Entity\Entity\Users_F_Expenses;
use intranetBundle\Entity\Entity\Users_F_Trip;
use intranetBundle\Entity\Entity\Users_F_Home;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query\Expr\Join;
use phpmailer;
use SMTP;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Config\FileLocator;

class DefaultController extends Controller{

  //Verify LDAP credentials
  //link LDAP with the database if not, creates a new user in DB
  public function loginAction(){
    $ldaprdn  = $_POST['login'];     // ldap rdn or dn
    $ldappass =$_POST['pass'];

    $configDirectories = array($this->get('kernel')->getRootDir().'/config');
    $locator = new FileLocator($configDirectories);
    $paramsFile = $locator->locate('paramsLDAP.yml', null, true);

    $paramsLDAP = Yaml::parse(file_get_contents($paramsFile));

    $m = new Model($paramsLDAP['ldapDomainName'], $paramsLDAP['ldapPort']);

    $params = array('user' => $m->login($ldaprdn,$ldappass),);

    //Once found the user in the LDAP Directory, Store his credentials in variables
    $userLDAP=json_decode(json_encode($params), true);

    if (sizeof($userLDAP['user'])>1) {

      $logged=$userLDAP['user'][0]['samaccountname'][0];
      $rol=$userLDAP['user'][0]['memberof'][0];
      $name=$userLDAP['user'][0]['givenname'][0];
      $surname=$userLDAP['user'][0]['sn'][0];
      $email=$userLDAP['user'][0]['mail'][0];

      //Method which split the whole role returned from LDAP used to know if the user is admin or not
      //$m = new Model();
      $r = $m->getSplitRole($rol);

      $_SESSION['name']=$name;         //NAME
      $_SESSION['surname']=$surname;   //SURNAME
      $_SESSION['userLDAP']=$logged;   //LOGIN
      $_SESSION['rol']=$r[1];          //Admin, Buo, User
      $_SESSION['email']=$email;

      $groupsFile = $locator->locate('roleGroups.yml', null, true);

      $roles = Yaml::parse(file_get_contents($groupsFile));

      $roleAssigned = 0;
      foreach ($userLDAP['user'][0]['memberof'] as $index => $object) {
        if($roleAssigned != 0)
            break;
        foreach ($m->getSplitRole($object) as $key => $value) {

            if($roleAssigned != 0)
                break;
            if(strcmp($value, $roles["admin"]) == 0){
              $_SESSION['rol'] = "admin";
              $roleAssigned = 1;
	             break;
            }else if(strcmp($value, $roles["buo"]) == 0){
              $_SESSION['rol'] = "buo";
              $roleAssigned = 1;
	             break;
            }else{
              $_SESSION['rol'] = "developer";
            }
            if($roleAssigned != 0) break;
        }
    }



      //Now I know the rol in the intranet of the user
      //I need to get all the emails of the admins, BUOS IN FACT
      //$m = new Model();
      $admins = $m->getAllAdmins($ldaprdn,$ldappass);

      $dirs = array();

      for ($i=0; $i < sizeof($admins[0]['member'])-1; $i++) {
          //echo "<br><b>".$admins[0]['member'][$i]."</b><br>";
          $aux = $admins[0]['member'][$i];

          $uh = $m->getSplitNamesAdmin($aux);
          //Now I have all the names of the admins, I need to search their email
          $emails = $m->getEmailsAdmins($ldaprdn,$ldappass, $uh);
          //echo "<br>".$emails[0]['mail'][0];
          array_push($dirs, $emails[0]['mail'][0]);
      }

      $m->close_connection();
      $_SESSION['dirs']=$dirs;

      //Search the user in the local database with the credentials introduced before
      $user = $this->getDoctrine()
                   ->getRepository('intranetBundle:Entity\Users')
                   ->findOneByLogin($logged);

      $params=array(
        'login'=>$logged,
        'name'=>$name,
        'surname'=>$surname,
        'rol'=>$rol[1]
      );

      if (!$user) {
        //If the user doesn't exists, redirect to another routing path to create one
        return $this->redirect($this->generateUrl('intranet_nonExistingUserA'));
      }else{
        //The user exists and store it to use on the template
        $params=array('user'=>$user);
        return $this->render('intranetBundle:Default:landinga.html.twig', $params);
      }
    }else{

      return $this->render('intranetBundle:Default:index.html.twig', ['flag'=>false]);//index_error

    }
  }

  //Method which obtains the values from the LDAP Directory and redirects to the form to create the new User
  public function createUserAAction(){
    $params=array(
      'login'=>$_SESSION['userLDAP'],
      'name'=>$_SESSION['name'],
      'surname'=>$_SESSION['surname'],
      'rol'=>$_SESSION['rol'],
      'email'=>$_SESSION['email']
    );
    return $this->render('intranetBundle:Error:error_login.html.twig', $params);
  }

    //Method which persist the object to the database with the form inputs
  public function createUserAction(){
     //Persist via doctrine
     $newuser = new Users();
     $newuser->setLogin($_REQUEST['myLogin']);
     $newuser->setNameU($_REQUEST['myName']);
     $newuser->setSurnameU($_REQUEST['mySurname']);
     $newuser->setEmail($_REQUEST['myEmail']);
     $newuser->setLang($_REQUEST['myLang']);
     $newuser->setPhoto($_REQUEST['myPhoto']);
     $newuser->setOnboard(0);
     $newuser->setNotifications($_REQUEST['myNotifications']);

     $em = $this->getDoctrine()->getManager();
     $em->persist($newuser);
     $em->flush();


     //If an admin is creating the user ->redirect to the userManagement
     if(isset($_REQUEST['webCuisine']) && $_REQUEST['webCuisine']=="test"){
          return $this->redirect($this->generateUrl('intranet_userManagement'));
     }else{//if not, it means the user is connecting to the intranet

         //Once the users exists in the database, redirect him to the intranet
         $user = $this->getDoctrine()
                       ->getRepository('intranetBundle:Entity\Users')
                       ->findOneByLogin($_SESSION['userLDAP']);
         $params=array('user'=>$user);
         return $this->render('intranetBundle:Default:landinga.html.twig', $params);
      }
   }

  public function indexAction(){
     return $this->render('intranetBundle:Default:landing.html.twig');
  }

  public function newsAction(){
    if(!isset($_SESSION))return $this->render('intranetBundle:Default:landing.html.twig');
    if($_SESSION['rol']=='buo'){

      return $this->render('intranetBundle:Default:news.html.twig');
    }else return $this->redirect($this->generateUrl('intranet_homepage'));
  }

  public function tasksAction(){
   $tareas = $this->getDoctrine()
                  ->getRepository('intranetBundle:Entity\Tasks')
                  ->findAll(array());

    $tasks = [];

    foreach ($tareas as $index => $object) {
      array_push($tasks, [$object->getId(),
                $object->getTitle(),
                $object->getContent(),
                $object->getWhoCreate()]);
    }

   $params=array('listTasks'=>$tasks, 'rol'=>$_SESSION['rol'], 'userLogin'=>$_SESSION['userLDAP']);
   return $this->render('intranetBundle:Default:tasks.html.twig',$params);
  }

  public function channelsAction(){
    if(!isset($_SESSION))return $this->render('intranetBundle:Default:landing.html.twig');
    if($_SESSION['rol']=='buo'){
       return $this->render('intranetBundle:Default:channels.html.twig');
    }else return $this->redirect($this->generateUrl('intranet_homepage'));
  }

   public function userManagementAction(){
     if(!isset($_SESSION))return $this->render('intranetBundle:Default:landing.html.twig');
     if($_SESSION['rol']=='admin'){

      return $this->render('intranetBundle:Default:userManagement.html.twig');
     }else return $this->redirect($this->generateUrl('intranet_homepage'));
   }

  public function settingsAction(){

      $usuario = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByLogin($_SESSION['userLDAP']); #findAll
      $params=array('me'=>$usuario);
      return $this->render('intranetBundle:Default:settings.html.twig',$params);

  }

  public function logoutAction(){
    if (isset($_SESSION))
      session_destroy();
  else
      session_start();

    //unset($_SESSION['name']);
    //unset($_SESSION['surname']);
    //unset($_SESSION['userLDAP']);
    //unset($_SESSION['rol']);
    //unset($_SESSION['email']);
    return $this->render(
      'intranetBundle:Default:index.html.twig'
     );
  }


#USERS

   public function updateUserAction(){
      //echo "Llegaste a la linea 265";
       $em = $this->getDoctrine()->getManager();
       $product = $em->getRepository('intranetBundle:Entity\Users')->findOneByLogin($_SESSION['userLDAP']);
       echo $product->getLang();

       return $this->redirect($this->generateUrl('intranet_settings', ['_locale'=>$product->getLang()] ));
   }


#FORMS

    //In this page we can see all the forms send, order by non-read forms, date and type.
    public function incomingFormsAction(){
      if(!isset($_SESSION))return $this->render('intranetBundle:Default:landing.html.twig');
      if($_SESSION['rol']!='buo'){
           return $this->render('intranetBundle:Default:incomingForms.html.twig');
       }else return $this->redirect($this->generateUrl('intranet_homepage'));
    }

    public function myFormsAction(){
      //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
      $userFormH = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Hours')
                        ->findBy(['login' => $_SESSION['userLDAP']]);

      //Now I have all forms of MY user, but I have to get their ID
      $ind=array();
      foreach ($userFormH as $index => $object) {
        array_push($ind,$object->getId());
      }

      //Search in the table all forms the user has send
      $myForms1=array();
      foreach ($ind as $indice) {
        $myformH = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Hours')
                        ->findBy(['id' => $indice]);
        array_push($myForms1,$myformH);
      }

                    /************************************************************************************************************************/
      //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
      $userFormV = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Vacation')
                        ->findBy(['login' => $_SESSION['userLDAP']]);

      //Now I have all forms of MY user, but I have to get their ID
      $ind=array();
      foreach ($userFormV as $index => $object) {
        array_push($ind,$object->getId());
      }

      //Search in the table all forms the user has send
      $myForms2=array();
      foreach ($ind as $indice) {
        $myformV = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Vacation')
                        ->findBy(['id' => $indice+5]);
        array_push($myForms2,$myformV);
      }

                    /************************************************************************************************************************/
      //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
      $userFormE = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Expenses')
                        ->findBy(['login' => $_SESSION['userLDAP']]);

      //Now I have all forms of MY user, but I have to get their ID
      $ind=array();
      foreach ($userFormE as $index => $object) {
        array_push($ind,$object->getId());
      }

      //Search in the table all forms the user has send
      $myForms3=array();
      foreach ($ind as $indice) {
        $myformE = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Expenses')
                        ->findBy(['id' => $indice]);
        array_push($myForms3,$myformE);
      }

                    /************************************************************************************************************************/
      //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
      $userFormT = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Trip')
                        ->findBy(['login' => $_SESSION['userLDAP']]);

      //Now I have all forms of MY user, but I have to get their ID
      $ind=array();
      foreach ($userFormT as $index => $object) {
        array_push($ind,$object->getId());
      }

      //Search in the table all forms the user has send
      $myForms4=array();
      foreach ($ind as $indice) {
        $myformT = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Trip')
                        ->findBy(['id' => $indice]);
        array_push($myForms4,$myformT);
      }

                    /************************************************************************************************************************/
      //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
      $userFormH = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Home')
                        ->findBy(['login' => $_SESSION['userLDAP']]);

      //Now I have all forms of MY user, but I have to get their ID
      $ind=array();
      foreach ($userFormH as $index => $object) {
        array_push($ind,$object->getId());
      }

      //Search in the table all forms the user has send
      $myForms5=array();
      foreach ($ind as $indice) {
        $myformH = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Home')
                        ->findBy(['id' => $indice]);
        array_push($myForms5,$myformH);
      }

      $params=array('myHours'=>$myForms1, 'myVacations'=>$myForms2, 'myExpenses'=>$myForms3, 'myTrips'=>$myForms4, 'myHomes'=>$myForms5);
      return $this->render('intranetBundle:Default:myhistoricalforms.html.twig',$params);

    }


#NEWS

       public function createNewAction(){
         $allChannels = $this->getDoctrine()
                         ->getRepository('intranetBundle:Entity\Channel')
                         ->findAll(); #findAll
         $params = array('channels' =>$allChannels);
         return $this->render('intranetBundle:Default:createNewFeed.html.twig', $params);
       }

       public function insertNewAction(){

         //The first thing is persist the New
         $new = new NewFeed();
         $new->setDate(date("Y-m-d"));
         $new->setTime(date("H:i:s"));
         $new->setTitle($_REQUEST['title']);
         $new->setContent($_REQUEST['content']);

         $em = $this->getDoctrine()->getManager();
         $em->persist($new);
         $em->flush();

          //But it is also needed to insert in the intermediate table
          $new2 = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\NewFeed')
                          ->findOneByContent($_REQUEST['content']);
          $i=$new2->getId();
          $allChannels = $this->getDoctrine()
                            ->getRepository('intranetBundle:Entity\Channel')
                            ->findAll();

         foreach ($allChannels as $index => $object) {
           if(isset($_REQUEST[$object->getName()])){
             $newcha = new channelnew_feed();
             $newcha->setName($_REQUEST[$object->getName()]);
             $newcha->setIdNew($i);
             $em = $this->getDoctrine()->getManager();
             $em->persist($newcha);
             $em->flush();
           }
         }

         //Redirect the user where he can see the new already inserted
         return self::newsAction();//l.137
       }

        public function editeNewAction(){
          //get the values from the form, search the object in the database and send it to the view
          //Obtain the channels of the intermediate table and pour them onto the checkboxes
          $content=$_REQUEST['content'];

          $new = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\NewFeed')
                          ->findOneByContent($content);

          //Si ya tengo el ID, puedo buscar el nombre de su canal en la tabla intermedia
          $i=$new->getId();
          $allChannels = $this->getDoctrine()
                       ->getRepository('intranetBundle:Entity\Channel')
                       ->findAll();

          $chan = $this->getDoctrine()
                       ->getRepository('intranetBundle:Entity\channelnew_feed')
                       ->findBy(['idNew'=>$i]);

          $params=array('new'=>$new, 'newschannels' => $chan, 'allChannels' => $allChannels);
          return $this->render('intranetBundle:Default:editNew.html.twig', $params);
        }

        public function updateNewAction(){
          if (isset($_POST['update'])) {
              return self::updatNewAction();
          } else if (isset($_POST['delete'])) {
              return self::deletNewAction();
          }
        }

        public function updatNewAction(){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\NewFeed')->find($_REQUEST['id']);

            $product->setDate($_REQUEST['date']);
            $product->setTime($_REQUEST['time']);
            $product->setTitle($_REQUEST['title']);
            $product->setContent($_REQUEST['content']);
            $em->flush();

            //Update also the intermediate table

            $allChannels = $this->getDoctrine()
                                ->getRepository('intranetBundle:Entity\Channel')
                                ->findAll();
            foreach ($allChannels as $index => $object) {
              if(isset($_REQUEST[$object->getName()])){
                $em = $this->getDoctrine()->getManager();
                $product = $em->getRepository('intranetBundle:Entity\channelnew_feed')->findBy(['idNew' =>$_REQUEST['id'], 'name' => $object->getName()]);

                if(sizeof($product)==0){
                  $intermediate = new channelnew_feed();
                  $intermediate->setIdNew($_REQUEST['id']);
                  $intermediate->setName($object->getName());
                  $em = $this->getDoctrine()->getManager();
                  $em->persist($intermediate);
                  $em->flush();
                }
              }else {
                $em = $this->getDoctrine()->getManager();
                $product = $em->getRepository('intranetBundle:Entity\channelnew_feed')->findBy(['idNew' =>$_REQUEST['id'], 'name' => $object->getName()]);
                foreach ($product as $index => $ob) {
                  $em->remove($ob);
                  $em->flush();
                }
              }
            }

            return self::newsAction();
        }

        public function deletNewAction(){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\NewFeed')->find($_REQUEST['id']);
            $em->remove($product);
            $em->flush();

            $intermediate = $em->getRepository('intranetBundle:Entity\channelnew_feed')->findOneByIdNew($_REQUEST['id']);
            $em->remove($intermediate);
            $em->flush();

            return self::newsAction();
        }

#TASKS

        public function createTaskAction(){
          $allUsers = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\Users')
                          ->findAll(); #findAll
          $params = array('users' =>$allUsers);
          return $this->render('intranetBundle:Default:createNewTask.html.twig', $params);
        }

        public function insertTaskAction(){
          //The first thing is persist the New
          $task = new Tasks();
          $task->setTitle($_REQUEST['title']);
          $task->setContent($_REQUEST['content']);
          $task->setWhoCreate($_SESSION['userLDAP']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($task);
          $em->flush();

         //But it is also needed to insert in the intermediate table
         $task2 = $this->getDoctrine()
                         ->getRepository('intranetBundle:Entity\Tasks')
                         ->findOneByContent($_REQUEST['content']);
         $i=$task2->getId();

         //For each user, I see if his checkbox is sent. In case of YES, insert the row with all the users marked.
         $allUsers = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\Users')
                          ->findAll(); #$params = array('users' =>$allUsers);

          foreach ($allUsers as $index => $object) {
            if(isset($_REQUEST[$object->getLogin()])){
              $usta = new userstasks();
              $usta->setIdTask($i);
              $usta->setLogin($object->getLogin());
              $em = $this->getDoctrine()->getManager();
              $em->persist($usta);
              $em->flush();
            }
          }
         //Redirect the user where he can see the task already inserted
         return self::tasksAction();//l.295
        }

        public function editeTaskAction(){
          //get the values (id) from the form, search the object in the database and send it to the view
          //Need to get the ID and search in the intermediate table, just to get the Users assigned.
          $id=$_REQUEST['id'];

          $task = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\Tasks')
                          ->findOneById($id);

           //Once had the ID, I can look for the users assigned in the intermediate table
           $usersWithTask = $this->getDoctrine()
                                 ->getRepository('intranetBundle:Entity\userstasks')
                                 ->findBy(['idTask'=>$id]);
           $allUsers = $this->getDoctrine()
                                 ->getRepository('intranetBundle:Entity\Users')
                                 ->findAll();
           $params=array('task'=>$task,'usersWithTask'=>$usersWithTask, 'allUsers'=>$allUsers, 'rol'=>$_SESSION['rol']);
           //return $this->render('intranetBundle:Default:editTask.html.twig', $params);
           return $this->render('intranetBundle:TaskTemplates:mainTaskDialog.tmpl.html', $params);
        }

#CHANNEL

    public function sendEmailAction($login,$formtype,$id,$status){

      $usuario = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByLogin($login);
      if($usuario->getNotifications()==1){
        require("class.phpmailer.php");
        require("class.smtp.php");

        $mail = new PHPMailer();
        $mail->PluginDir = "includes/";

        //Con la propiedad Mailer le indicamos que vamos a usar un servidor smtp
        $mail->Mailer = "smtp";

        //Asignamos a Host el nombre de nuestro servidor smtp
        $mail->Host = "webcity10.code-labs.net";

        //Le indicamos que el servidor smtp requiere autenticación
        $mail->SMTPAuth = true;
        $mail->Username = "relay@appcuisine.de";
        $mail->Password = "U41jLVpuROD0";

        $mail->From = "intranet@appcuisine.de";
        $mail->FromName = "webCuisine";

        $mail->Timeout=40;

        //Indicamos cual es la dirección de destino del correo
        $mail->AddAddress($usuario->getEmail());

        switch ($usuario->getLang()) {
          case 'es':
              if ($status==1){
                  $mail->Subject = "Su formulario ha sido aceptado.";
              }else{
                  $mail->Subject = "Su formulario ha sido rechazado.";
              }
                $mail->Body = "El formulario que mandaste del tipo ". $formtype.", por favor chequea que es correcto <a href='http://intranet.stage.unitedcuisines.net/webCuisine/web/app_dev.php/es/intranet_logout'>aqui</a>.";
              break;
          case 'en':
              if ($status==1){
                $mail->Subject = "Your form has been accepted.";
              }else{
                $mail->Subject = "Your form has been rejected.";
              }
              $mail->Body = "You send a ". $formtype." form, please check it <a href='http://intranet.stage.unitedcuisines.net/webCuisine/web/app_dev.php/es/intranet_logout'>here</a>.";
              break;
          case 'fr':
              if ($status==1){
                  $mail->Subject = "Sa forme a été acceptée.";
              }else{
                  $mail->Subject = "Sa forme a été rejetée.";
              }
                $mail->Body = "La forme que vous avez envoyé le gars ". $formtype.", S'il vous plaît vérifier qu'il est <a href='http://intranet.stage.unitedcuisines.net/webCuisine/web/app_dev.php/es/intranet_logout'>ici</a>.";
              break;

          default:
            # code...
            break;
        }

        //Definimos AltBody por si el destinatario del correo no admite email con formato html
         $mail->AltBody = "Only text format.";

        $exito = $mail->Send();
        //Si el mensaje no ha podido ser enviado se realizaran 4 intentos más como mucho
        //para intentar enviar el mensaje, cada intento se hará 5 segundos después
        //del anterior, para ello se usa la funcion sleep
        $intentos=1;
        while ((!$exito) && ($intentos < 5)) {
        sleep(5);
            $exito = $mail->Send();
            $intentos=$intentos+1;
         }

         if(!$exito){
            echo "<br>A problem was found while sending the email notification.";
            echo "<br/>".$mail->ErrorInfo;
         }else{
            echo "<br><b><u>Mensaje enviado correctamente</u></b>";
         }
      }
     return $this->render('intranetBundle:Default:landing.html.twig');
    }


      public function translationAction(){
        return $this->render( 'intranetBundle:Default:translate.html.twig');
      }

#*****************Template controllers*****************#

  public function mainTaskDialogAction() {

    return $this->render(
       'intranetBundle:TaskTemplates:mainTaskDialog.tmpl.html'
      );
  }

  public function userManagementDialogAction() {

    return $this->render(
       'intranetBundle:UserTemplates:userManagementDialog.tmpl.html'
      );
  }

  public function channelDialogAction() {

    return $this->render(
       'intranetBundle:ChannelTemplates:channelDialog.tmpl.html'
      );
  }

  public function createChannelDialogAction(){
    return $this->render(
       'intranetBundle:ChannelTemplates:createChannelDialog.tmpl.html'
      );
  }

  public function deleteDialogAction(){
    return $this->render(
       'intranetBundle::deleteDialog.tmpl.html'
      );
  }

  public function mainNewsDialogAction(){
    return $this->render(
       'intranetBundle:NewsTemplates:newsDialog.tmpl.html'
      );
  }

  public function createNewDialogAction(){
    return $this->render(
       'intranetBundle:NewsTemplates:createNewDialog.tmpl.html'
      );
  }

    //FORMS
    public function formsAction(){
      if(!isset($_SESSION))return $this->render('intranetBundle:Default:landing.html.twig');
        $params = ['userLogin' => $_SESSION['userLDAP'],
                   'rol' => $_SESSION['rol'],
                   'name' => $_SESSION['name'],
                   'surname' => $_SESSION['surname']];

        return $this->render(
           'intranetBundle:Default:forms.html.twig',
            $params
          );
    }

    public function formsHistoricAction(){

        return $this->render('intranetBundle:Forms:historic.tmpl.html');
    }

    public function vacationAction(){

        return $this->render('intranetBundle:Forms:vacationForm.tmpl.html');
    }

    public function vacationTestAction(){

        return $this->render('intranetBundle:Forms:vacationFormTest.tmpl.html');
    }

    public function expensesAction(){

        return $this->render('intranetBundle:Forms:expensesForm.tmpl.html');
    }

    public function businessTripAction(){

        return $this->render('intranetBundle:Forms:businessTripForm.tmpl.html');
    }

    public function overtimeHours2Action(){

        return $this->render('intranetBundle:Forms:overtimeHoursForm2.tmpl.html');
    }

    public function overtimeHoursAction(){

        return $this->render('intranetBundle:Forms:overtimeHoursForm.tmpl.html');
    }

    public function workAtHomeAction(){

        return $this->render('intranetBundle:Forms:workAtHomeForm.tmpl.html');
    }

    public function formHeaderDataAction(){

        return $this->render('intranetBundle:Forms:formHeaderDataTemplate.tmpl.html');
    }


    //FORMS DIALOGS

    public function mainDialogAction(){

        $params = ['name' => $_SESSION['name'],
                   'surname' => $_SESSION['surname']];

        return $this->render('intranetBundle:DialogTemplates:mainDialog.tmpl.html', $params);
    }

    public function mainDialog2Action(){

        return $this->render('intranetBundle:DialogTemplates:mainDialog2.tmpl.html');
    }

    public function businessTripDialogAction(){

        return $this->render('intranetBundle:DialogTemplates:businessTripDialog.tmpl.html');
    }

    public function expensesDialogAction(){

        return $this->render('intranetBundle:DialogTemplates:expensesDialog.tmpl.html');
    }

    public function overtimeHoursDialogAction(){

        return $this->render('intranetBundle:DialogTemplates:hoursDialog.tmpl.html');
    }

    public function vacationDialogAction(){

        return $this->render('intranetBundle:DialogTemplates:vacationDialog.tmpl.html');
    }

    public function workAtHomeDialogAction(){

        return $this->render('intranetBundle:DialogTemplates:workAtHomeDialog.tmpl.html');
    }

}

<?php

namespace intranetBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\HttpKernel\Exception\HttpException;
use FOS\RestBundle\Controller\Annotations\Get;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\QueryBuilder;
use intranetBundle\Entity\Entity\userstasks;
use intranetBundle\Entity\Entity\userschannel;
use intranetBundle\Entity\Entity\Channel;

class ApiRestController extends Controller
{
    
    /**
    * Returns all the users stored in the database and their data
    *
    * @return string $usersList All users data serialized to JSON format
    **/
    public function getUsersAction(){

        $usersList = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findAll();

        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($usersList, 'json');
        
        return $usersList;
    }
    
    
    /**
    * Receive an user login and returns the user data as JSON
    *
    * @param string $login Login of the user being search
    * @throws \HttpException
    * @return string $user The user data serialized to JSON format
    **/
    public function getUserAction($login){
        
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){

            $user = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByLogin($login);

            if(is_null($user))
                throw new HttpException(404, "The user $login could not be found.");

            if(!is_object($user)){
                throw $this->createNotFoundException();
            }

            $serializer = SerializerBuilder::create()->build();
            $serializer->serialize($user, 'json');

            return $user;
            
        }else if($_SERVER['REQUEST_METHOD'] == 'PATCH'){
            
            $post = file_get_contents("php://input");
            $userIncoming = json_decode($post, true);
            
            $em = $this->getDoctrine()->getEntityManager();;
            $user = $em->getRepository('intranetBundle:Entity\Users')->findOneByLogin($login);

            $user->setNameU($userIncoming['name']);
            $user->setSurnameU($userIncoming['surname']);
            $user->setEmail($userIncoming['email']);
            $user->setLang($userIncoming['lang']);
            $user->setPhoto($userIncoming['photo']);
            $user->setOnboard($userIncoming['onboard']);
            $user->setNotifications($userIncoming['notifications']);
            $em->flush();
           
            return "ok";
            
        }else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\Users')->findOneByLogin($login);
            $em->remove($product);
            $em->flush();

            $intermediate = $em->getRepository('intranetBundle:Entity\userschannel')->findByLogin($login);
            //For each element in the intermediate table, it is necessary to delete all of them
            foreach ($intermediate as $index => $object) {
                $em->remove($object);
                $em->flush();
            }

            $intermediate = $em->getRepository('intranetBundle:Entity\userstasks')->findByLogin($login);
            //For each element in the intermediate table, it is necessary to delete all of them
            foreach ($intermediate as $index => $object) {
              $em->remove($object);
              $em->flush();
            }
            
        }
    }
    
    /**
    * Receive an user login and returns the user data as JSON
    *
    * @param string $login Login of the user being search
    * @throws \HttpException
    * @return string $user The user data serialized to JSON format
    **/
    public function getUsersAllOnboardAction(){

        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder()
                 ->select('u.login', 'u.nameU', 'u.surnameU')
                 ->from('intranetBundle:Entity\Users', 'u')
                 ->where('u.onboard = :bool')
                 ->setParameter('bool', true)
                 ->getQuery();
        
        $usersList = $qb->getArrayResult();

        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($usersList, 'json');
        
        return $usersList;
    }
    
    /**
    * Receive an user login and returns all tasks that the user is assigned as JSON
    *
    * @param string $login Login of the user
    * @throws \HttpException
    * @return string $tasksList the tasks assigned to the user
    **/
    public function getUserTasksAction($login){
        
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder()
                 ->select('ut.idTask')
                 ->from('intranetBundle:Entity\userstasks', 'ut')
                 ->where('ut.login = :login')
                 ->setParameter('login', $login)
                 ->getQuery();
        
        $idTaskList = $qb->getArrayResult();
        
        if(is_null($idTaskList))
            throw new HttpException(404, "The task $id could not be found.");
        
        $qb = $em->createQueryBuilder()
                 ->select('t.id', 't.title', 't.content', 't.whoCreate as who_create')
                 ->from('intranetBundle:Entity\Tasks', 't')
                 ->where('t.id IN (:ids)')
                 ->setParameter('ids', $idTaskList)
                 ->getQuery();
        
        $tasksList = $qb->getArrayResult();
        
        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($tasksList, 'json');
        
        return $tasksList;
    }
    
    
    /**
    * Returns all tasks in the database.
    *
    * @throws \HttpException
    * @return string $tasks all tasks in the database (and their data) serialized to JSON format
    **/
    public function getTasksAction(){

        $tasks = $this->getDoctrine()->getRepository('intranetBundle:Entity\Tasks')->findAll();
        
        if(is_null($tasks)){
            throw new HttpException("Error");
        }
        
        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($tasks, 'json');
        
        return $tasks;
    }
    
    
    /**
    * Receive a task id and returns the task data as JSON
    *
    * @param int $id Id of the task being search
    * @throws \HttpException
    * @return string $task The task data serialized to JSON forma
    **/
    public function getTaskAction($id){
        
        if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
            
            //remove the task
            $em = $this->getDoctrine()->getEntityManager();
            $task = $em->getRepository('intranetBundle:Entity\Tasks')->find($id);

            if (!$task) {
                throw $this->createNotFoundException('No task found for id '.$id);
            }

            $em->remove($task);
            $em->flush();
            
            //removes the appropiate rows in the table "userstasks" (rows with the id of the task being deleted)
            
            $qb = $em->createQueryBuilder()
                    ->delete('intranetBundle:Entity\userstasks', 'ut')
                    ->where('ut.idTask = :id')
                    ->setParameter('id', $id);
            
            $qb->getQuery()->execute();
            
            //return new Response('Deleted', Codes::HTTP_OK );
            return "ok";
            
        }else if ($_SERVER['REQUEST_METHOD'] == 'PATCH'){
            
            $post = file_get_contents("php://input");
            $taskIncoming = json_decode($post, true);
            
            if ($taskIncoming['title'] == "")
                return new Response(json_encode("The field Title cannot be blank."));
                /*return new Response(
                                    'Content',
                                    Response::HTTP_NO_CONTENT,
                                    array('content-type' => 'text/html',
                                         'mensajemio' => 'no hay titulo'));*/
                //header("The field Title cannot be blank.", true, 204);
            
            $em = $this->getDoctrine()->getEntityManager();;
            $task = $em->getRepository('intranetBundle:Entity\Tasks')->find($id);

            $task->setTitle($taskIncoming['title']);
            $task->setContent($taskIncoming['content']);
            $em->flush();
            
            $intermediate = $em->getRepository('intranetBundle:Entity\userstasks')->findBy(['idTask'=>$id]);

            //For each user, I see if his checkbox is sent. In case of YES, insert the row with all the users marked.
            $allUsers = $this->getDoctrine()
                             ->getRepository('intranetBundle:Entity\Users')
                             ->findAll();
            
            $em = $this->getDoctrine();
            
            foreach ($allUsers as $index => $user) {
                
                if(in_array($user->getLogin(), $taskIncoming['usersInTask'])){
                    
                    $userAux = $em->getRepository('intranetBundle:Entity\userstasks')->findBy(['idTask' =>$id, 'login' => $user->getLogin()]);
                    
                    if(sizeof($userAux)==0){
                        $intermediate = new userstasks();
                        $intermediate->setIdTask($id);
                        $intermediate->setLogin($user->getLogin());
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($intermediate);
                        $em->flush();
                    }
               }else {
                   
                    $em = $this->getDoctrine()->getEntityManager();
                    $userAux = $em->getRepository('intranetBundle:Entity\userstasks')->findBy(['idTask' =>$id, 'login' => $user->getLogin()]);
                   
                    foreach ($userAux as $index => $ob) {
                        $em->remove($ob);
                        $em->flush();
                    }
               }
             }
            
            return "ok";
            
        }else if ($_SERVER['REQUEST_METHOD'] == 'GET'){

            //return the task and its info
            $task = $this->getDoctrine()->getRepository('intranetBundle:Entity\Tasks')->findOneById($id);

            if(is_null($task))
                throw new HttpException(404, "The task $id could not be found.");

            $serializer = SerializerBuilder::create()->build();
            $serializer->serialize($task, 'json');

            return $task;
        }
    }
    
    /**
    * Receive a task ID and returns the task data, the users assigned to it, and all users in the database as JSON
    * Note that this query is a very specific case in the intranet. 
    * It's used when some BÜO clicks over a Task to see its details and is able to modify the list of users assigned to the Task.
    *
    * @param int $id Id of the task being seen in detail.
    * @throws \HttpException
    * @return string $data It's a JSON array with the following schema:
    *   {
    *       taskData: the content of the task (id, title, content, creator..),
    *       allUsers: array of the fields "login", "name" and "username" of all users in the database with the field "onboard set to "true",
    *       usersInTask: array of the field "login" of all users assigned to this Task
    *   }
    **/
    public function getTaskUsersAction($id){

        //$task = $this->getDoctrine()->getRepository('intranetBundle:Entity\userstasks')->findByIdTask($id);
        $task = $this->getDoctrine()->getRepository('intranetBundle:Entity\Tasks')->findById($id);

        //$usersList = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findAll([], ["login"]);
        
        
        //$usersInTask = $this->getDoctrine()->getRepository('intranetBundle:Entity\userstasks')->findByIdTask($id);
       
        
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder()
                 ->select('ut.login')
                 ->from('intranetBundle:Entity\userstasks', 'ut')
                 ->where('ut.idTask = :id')
                 ->setParameter('id', $id)
                 ->getQuery();
        
        $usersInTask = $qb->getArrayResult();
        
        $qb = $em->createQueryBuilder()
                 ->select('u.login', 'u.nameU', 'u.surnameU')
                 ->from('intranetBundle:Entity\Users', 'u')
                 ->where('u.onboard = :bool')
                 ->setParameter('bool', true)
                 ->getQuery();
        
        $usersList = $qb->getArrayResult();
        
        $data = [
            "taskData" => $task,
            "allUsers" => $usersList,
            "usersInTask" => $usersInTask
        ];
        
        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($data, 'json');
        
        return $data;
    }
    
    
    /**
    * Returns all forms in the database.
    *
    * @throws \HttpException
    * @return string $allForms Contains all forms in the database (and their data) serialized to JSON format
    **/
    public function getFormsAllAction(){

        $expensesForms = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Expenses')->findAll();
        $overtimeHoursForms = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Hours')->findAll();
        $businessTripForms = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Trip')->findAll();
        $vacationForms = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Vacation')->findAll();
        $workAtHomeForms = [];//$this->getDoctrine()->getRepository('intranetBundle:Entity\F_Home')->findAll();
        
        $allForms = [
            "expensesForms" => $expensesForms,
            "overtimeHoursForms" => $overtimeHoursForms,
            "businessTripForms" => $businessTripForms,
            "vacationForms" => $vacationForms,
            "workAtHomeForms" => $workAtHomeForms
        ];
        
        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($allForms, 'json');
        
        return $allForms;
    }
    
    /**
    * Returns all forms in the database.
    *
    * @throws \HttpException
    * @return string $allForms Contains all forms in the database (and their data) serialized to JSON format
    **/
    public function getFormsAction($login){

        $em = $this->getDoctrine()->getEntityManager();
        
        $qb = $em->createQueryBuilder()
                 ->select('fe')
                 ->from('intranetBundle:Entity\F_Expenses', 'fe')
                 //->innerJoin('fe', 'intranetBundle:Entity\Users_F_Expenses', 'ufe', 'fe.id = ufe.idForm')
                 ->innerJoin('fe', 'intranetBundle:Entity\Users_F_Expenses', 'ufe', 'fe.id = ufe.idForm')
                 ->where('ufe.login = :login')
                 ->setParameter('login', $login)
                 ->getQuery();
        
        
        $formsOfTheUser = $qb->getArrayResult();
        
        /*$allForms = [
            "expensesForms" => $expensesForms,
            "overtimeHoursForms" => $overtimeHoursForms,
            "businessTripForms" => $businessTripForms,
            "vacationForms" => $vacationForms,
            "workAtHomeForms" => $workAtHomeForms
        ];*/
        
        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($formsOfTheUser, 'json');
        
        return $formsOfTheUser;
    }
    
    
    //DEPRECATED?
    /*public function getNewsAction(){

        $newsList = $this->getDoctrine()->getRepository('intranetBundle:Entity\NewFeed')->findAll();

        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($newsList, 'json');

        return $newsList;
    }*/
    
    /**
    * Receives a cunter number which means the point from where it need to take news.
    * It makes the query of news from this number of row and takes and returns exactly another 10 rows.
    * It's used in the news dialog to get more news as the user scrolls down.
    *
    * @param int $offset offset number to make the query
    * @return string $list The list of the news requested in JSON format.
    **/
    public function getNewschannelAction($offset){

        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder()
                 ->select('cnf')
                 ->from('intranetBundle:Entity\channelnew_feed', 'cnf')
                 ->setMaxResults(10)
                 ->setFirstResult($offset)
                 ->getQuery();

        $list = $qb->getArrayResult();
        
        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($list, 'json');

        return $list;
    }
    
    
    /**
    * Receives an user ID and returns a list of all channels that the user is suscribed.
    *
    * @param string $login user login
    * @return string $channelsList The list of channels requested in JSON format.
    **/
    public function getUserChannelsAction($login){

        //$channelsList = $this->getDoctrine()->getRepository('intranetBundle:Entity\userschannel')->findByLogin($login);
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $qb = $em->createQueryBuilder()
                 ->select('uc.name')
                 ->from('intranetBundle:Entity\userschannel', 'uc')
                 ->where('uc.login = :login')
                 ->setParameter('login', $login)
                 ->getQuery();

        $channelsList = $qb->getArrayResult();
        
        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($channelsList, 'json');

        return $channelsList;
    }
    
    
    //hacer que además de un string (nombrecanal) pueda aceptar también un array(varios nombres) por si se hace una pestaña ALL canales
    public function getNewsAction($channelName){
        
        if (strpos($channelName, ',') != false)
            $channels = split(',', $channelName);
        
        $post = file_get_contents("php://input");
        $data = json_decode($post, true);
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $qb = $em->createQueryBuilder();
        $qb->select('cnf.idNew');
        $qb->from('intranetBundle:Entity\channelnew_feed', 'cnf');
        
        if (isset($channels)){
            $qb->where('cnf.name IN (:name)');
            $qb->setParameter('name', $channels);
        }else{
            $qb->where('cnf.name = :name');
            $qb->setParameter('name', $channelName);
        }
        
        $query = $qb->getQuery();
        $idNewsList = $query->execute();
        //$idNewsList = $qb->getArrayResult();
        $qb = $em->createQueryBuilder()
                 ->select('nf')
                 ->from('intranetBundle:Entity\NewFeed', 'nf')
                 ->where('nf.id IN (:ids)')
                 ->setParameter('ids', $idNewsList)
                 ->addOrderBy('nf.date', 'DESC')
                 ->addOrderBy('nf.time', 'DESC')
                 ->getQuery();
        
        if(isset($data['offset']) && isset($data['numResults'])){
            
            $qb->setMaxResults(intval($data['numResults']));
            $qb->setFirstResult(intval($data['offset']));
        }
        
        $newsList = $qb->getArrayResult();
        
        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($newsList, 'json');

        //return $channelName;
        return $newsList;
    }


    
    /**
    * Returns all the channels stored in the database and their data
    *
    * @return string $channelsList All channels data serialized to JSON format
    **/
    public function getChannelsAction(){

        $channelsList = $this->getDoctrine()->getRepository('intranetBundle:Entity\Channel')->findAll();

        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($channelsList, 'json');

        return $channelsList;
    }

    /**
    * Receive a channel name and returns the channel data as JSON
    *
    * @param string $name of the channel being search
    * @throws \HttpException
    * @return string $channel The channel data serialized to JSON format
    **/
    public function getChannelAction($id){
        
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){

            $channel = $this->getDoctrine()->getRepository('intranetBundle:Entity\Channel')->findOneById($id);

            if(is_null($channel))
                throw new HttpException(404, "The channel $id could not be found.");

            if(!is_object($channel)){
                throw $this->createNotFoundException();
            }

            $serializer = SerializerBuilder::create()->build();
            $serializer->serialize($channel, 'json');

            return $channel;
            
        }else if($_SERVER['REQUEST_METHOD'] == 'PATCH'){
        
            $post = file_get_contents("php://input");
            $channelIncoming = json_decode($post, true);
            
            $em = $this->getDoctrine()->getEntityManager();
            $channel = $em->getRepository('intranetBundle:Entity\Channel')->findOneById($id);
            $oldname=$channel->getName();
            $channel->setName($channelIncoming['name']);
            $em->flush();
            
            /*INTERMEDIATE TABLE 1*/
            //For each user, I see if his checkbox is sent. In case of YES, insert the row with all the users marked.
            $allUsers = $this->getDoctrine()
                             ->getRepository('intranetBundle:Entity\Users')
                             ->findAll();
            
            $em = $this->getDoctrine();
            
            foreach ($allUsers as $index => $user) {
                
                if(in_array($user->getLogin(), $channelIncoming['usersInChannel'])){
                    $userAux = $em->getRepository('intranetBundle:Entity\userschannel')->findBy(['name' => $oldname, 'login' => $user->getLogin()]);
                    
                    if(sizeof($userAux)==0){
                        $intermediate = new userschannel();
                        $intermediate->setName($channelIncoming['name']);
                        $intermediate->setLogin($user->getLogin());
                        $em = $this->getDoctrine()->getManager(); 
                        $em->persist($intermediate);
                        $em->flush();
                    }else{
                        foreach ($userAux as $index => $ob) {
                            $ob->setName($channelIncoming['name']);
                            $em->persist($ob);
                            $em->flush();
                        }
                    }
               }else {
                   
                    $em = $this->getDoctrine()->getEntityManager();
                    $userAux = $em->getRepository('intranetBundle:Entity\userschannel')->findBy(['name' => $oldname, 'login' => $user->getLogin()]);
                   
                    foreach ($userAux as $index => $ob) {
                        $em->remove($ob);
                        $em->flush();
                    }
                }
            }
           /*INTERMEDIATE TABLE 2*/
            $channelsWithName = $em->getRepository('intranetBundle:Entity\channelnew_feed')->findBy(['name' => $oldname]);
            //For each element in the intermediate table, it is necessary to update all of them
            foreach ($channelsWithName as $index => $object) {
                $object->setName($channelIncoming['name']);
                $em->persist($object);
                $em->flush();
            }   
               
        }else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
            
            $post = file_get_contents("php://input");
            $channelIncoming = json_decode($post, true);

            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\Channel')->findOneById($id);
            $oldname=$product->getName();
            $em->remove($product);
            $em->flush();

            $intermediate = $em->getRepository('intranetBundle:Entity\userschannel')->findByName($oldname);
            //For each element in the intermediate table, it is necessary to delete all of them
            foreach ($intermediate as $index => $object) {
                $em->remove($object);
                $em->flush();
            }

            $intermediate2 = $em->getRepository('intranetBundle:Entity\channelnew_feed')->findByName($oldname);
            //For each element in the intermediate table, it is necessary to delete all of them
            foreach ($intermediate2 as $index => $object) {
                $em->remove($object);
                $em->flush();
            }

        }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $post = file_get_contents("php://input");
            $channelIncoming = json_decode($post, true);

            $em = $this->getDoctrine()->getManager();
            $channel = new Channel();
            $channel->setName($channelIncoming['name']);
            $em->persist($channel);
            $em->flush();

            //For each user, I see if his checkbox is sent. In case of YES, insert the row with all the users marked.
            $allUsers = $this->getDoctrine()
                             ->getRepository('intranetBundle:Entity\Users')
                             ->findAll();
                foreach ($allUsers as $index => $object) {
                    foreach ($channelIncoming['usersInChannel'] as $key => $value) {
                        if($object->getLogin()==$value){   //isset($_REQUEST[$object->getLogin()])
                           $usta = new userschannel();
                           $usta->setName($channelIncoming['name']);
                           $usta->setLogin($object->getLogin());
                           $em = $this->getDoctrine()->getManager();
                           $em->persist($usta);
                           $em->flush();
                         }
                    }
                }
          
            
        }return $id;
    }



    /**
    * Receive a channel name and returns the channel data, the users assigned to it, and all users in the database as JSON
    * It's used when some BÜO clicks over a Channel to see its details and is able to modify the list of users assigned to the Channel.
    *
    * @param int $id Channel of the task being seen in detail.
    * @throws \HttpException
    * @return string $data It's a JSON array with the following schema:
    *   {
    *       "channelData": response.data.channelData,
    *       "channelUsers": $.map(response.data.usersInChannel, function(elem){return elem.login}),
    *       "allUsers": response.data.allUsers
    *   }
    **/
    public function getChannelUsersAction($name){

        $channel = $this->getDoctrine()->getRepository('intranetBundle:Entity\Channel')->findByName($name);

        
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder()
                 ->select('uc.login')
                 ->from('intranetBundle:Entity\userschannel', 'uc')
                 ->where('uc.name = :name')
                 ->setParameter('name', $name)
                 ->getQuery();
        
        $usersInChannel = $qb->getArrayResult();
        
        $qb = $em->createQueryBuilder()
                 ->select('u.login', 'u.nameU', 'u.surnameU')
                 ->from('intranetBundle:Entity\Users', 'u')
                 ->getQuery();
        
        $usersList = $qb->getArrayResult();
        
        $data = [
            "channelData" => $channel,
            "allUsers" => $usersList,
            "usersInChannel" => $usersInChannel
        ];
        
        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($data, 'json');
        
        return $data;
    }
    
}

?>

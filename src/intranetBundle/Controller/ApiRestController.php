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

        $user = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByLogin($login);

        if(is_null($user))
            throw new HttpException(404, "The user $login could not be found.");

        if(!is_object($user)){
            throw $this->createNotFoundException();
        }

        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($user, 'json');
        
        return $user;
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
    
    
    
    public function getNewsAction(){

        $newsList = $this->getDoctrine()->getRepository('intranetBundle:Entity\NewFeed')->findAll();

        $serializer = SerializerBuilder::create()->build();
        $serializer->serialize($newsList, 'json');

        return $newsList;
    }
    
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
    
    
}

?>

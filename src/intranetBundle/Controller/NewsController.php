<?php
namespace intranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;
use intranetBundle\Entity\Entity\NewFeed;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller{

  public function newsAction(){


      $userLogin = $_SESSION['userLDAP'];

      $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder()
                 ->select('uc.name')
                 ->from('intranetBundle:Entity\userschannel', 'uc')
                 ->where('uc.login = :login')
                 ->setParameter('login', $userLogin)
                 ->getQuery();

        $channelsList = $qb->getArrayResult();

      $news = $this->getDoctrine()
                      ->getRepository('intranetBundle:Entity\NewFeed')
                      ->findAll();



      $news = $this->getDoctrine()
                      ->getRepository('intranetBundle:Entity\NewFeed')
                      ->findAll();

      $newschannel=array();

      foreach ($news as $index => $object) {
          $n = $this->getDoctrine()
                    ->getRepository('intranetBundle:Entity\channelnew_feed')
                    ->findBy(['idNew' => $object->getId()]);

          foreach ($n as $index => $object2) {
              if($object->getId()==$object2->getIdNew()){

                    array_push($newschannel,$object);

              }
          }
      }

      $params=array('new'=>$newschannel, 'channels'=>$channelsList, 'login'=> $userLogin);
      //array_push($params, );
      return $this->render('::news.html.twig', $params);
   }

  }

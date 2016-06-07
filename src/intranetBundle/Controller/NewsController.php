<?php
namespace intranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;
use intranetBundle\Entity\Entity\NewFeed;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller{

  public function newsAction(){

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
                // foreach ($newschannel as $nc){
                  // if(in_array($object->getId(), $nc)){
                  // }else{
                    array_push($newschannel,$object);
                  // }
                // }
              }
          }
      }

      $params=array('new'=>$newschannel);
      return $this->render('::news.html.twig', $params);
   }

  }

<?php
namespace intranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;
use intranetBundle\Entity\Entity\Users;
use Symfony\Component\HttpFoundation\Response;

class MenuController extends Controller{

  public function menuAction(){

      $user = $this->getDoctrine()
                      ->getRepository('intranetBundle:Entity\Users')
                      ->findOneByLogin($_SESSION['userLDAP']); #findAll

      if (!$user) {throw $this->createNotFoundException('No product found for id '.$id);}
      $params=array('user'=>$user, 'role'=>$_SESSION['rol']);
      return $this->render('::menu.html.twig', $params);
   }

  }

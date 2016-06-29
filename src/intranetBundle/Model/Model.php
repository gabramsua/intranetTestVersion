<?php

 namespace intranetBundle\Model;
 use intranetBundle\Entity\Entity\Users;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Bundle\FrameworkBundle\Controller\Controller;

 class Model extends Controller{

   protected $ldapconn;

   function __construct($serverAddress, $serverPort) {
       $this->ldapconn = ldap_connect($serverAddress, $serverPort) or die("Could not connect to LDAP server.");
   }

   // function Model($serverAddress, $serverPort) {
   //     echo "dir:".$serverAddress;
   //     echo "port:".$serverPort;
   //     $this->ldapconn = ldap_connect($serverAddress, $serverPort) or die("Could not connect to LDAP server.");
   // }

   function close_connection (){
       ldap_close($this->ldapconn);
   }

   public function login($ldaprdn,$ldappass){
       //$ldapDomainName = 'cuisine.lan';
       $ldapDomainName = '192.168.30.10';
      // conexión al servidor LDAP
      //$ldapconn = ldap_connect($ldapDomainName, 3268) or die("Could not connect to LDAP server.");
      if ($this->ldapconn) {
          // realizando la autenticación && Suppress the warning with @ as already doing
          $ldapbind = @ldap_bind($this->ldapconn, $ldaprdn, $ldappass);
          // verificación del enlace
          if ($ldapbind) {
              //echo "<b>LDAP bind successful...</b><br><br>";
          } else {
            //echo "LDAP bind failed...<br>";
            return new Response("A problem occurred during the submit of your credentials");
            //return $this->redirect($this->generateUrl('intranet_logout'));
          }
      }else{echo "no connection =(";}

      $baseDN ="dc=cuisine, dc=lan";
      $query = "(cn=".$ldaprdn.")";
      // limit attributes we want to look for
      $attributes_ad = array("givenName","objectClass","cn","givenName","sn","mail","co","memberOf","sAMAccountName");
      $result = ldap_search($this->ldapconn, $baseDN, $query, $attributes_ad) or die ("Error in search query");
      // put search results into the array ($conn variable is defined in the included 'ad_con.php')
      $user = ldap_get_entries($this->ldapconn, $result);
      return $user;
      //ldap_close($this->ldapconn);
   }

   public function getSplitRole($rol){
      //Divide the whole thing in strings, first with comas, then with equals signs
      //CN=ROL, OU=cuisine, DC=cuisine, DC=lan
      //In this way I am always taking the rol after the first CN, So I suppose it is the same for developers, or admins, or buos or whatever
      return explode("=",explode(",",$rol)[0]);
   }

   public function getAllAdmins($ldaprdn, $ldappass){
      $ldapDomainName = 'cuisine.lan';

      //$ldapconn = ldap_connect($ldapDomainName, 3268) or die("Could not connect to LDAP server.");
      if ($this->ldapconn) {

          $ldapbind = @ldap_bind($this->ldapconn, $ldaprdn, $ldappass);

          if ($ldapbind) {

          } else {
            //echo "LDAP bind failed...<br>";
            return new Response("A problem occurred during the submit of your credentials");

          }
      }else{echo "no connection =(";}

      $baseDN ="dc=cuisine, dc=lan";
      $query = "(cn=intranet-admins)";
      // limit attributes we want to look for
      $attributes_ad = array("member");
      $result = ldap_search($this->ldapconn, $baseDN, $query, $attributes_ad) or die ("Error in search query");
      // put search results into the array ($conn variable is defined in the included 'ad_con.php')
      $admins = ldap_get_entries($this->ldapconn, $result);
      return $admins;
      //ldap_close($this->ldapconn);
   }

   public function getSplitNamesAdmin($admin){
      return explode("=",explode(",",$admin)[0])[1];
   }

   public function getEmailsAdmins($ldaprdn,$ldappass, $uh){
      $ldapDomainName = 'cuisine.lan';
      // conexión al servidor LDAP
      //$ldapconn = ldap_connect($ldapDomainName, 3268) or die("Could not connect to LDAP server.");
      if ($this->ldapconn) {
          // realizando la autenticación && Suppress the warning with @ as already doing
          $ldapbind = @ldap_bind($this->ldapconn, $ldaprdn, $ldappass);
          // verificación del enlace
          if ($ldapbind) {
              //echo "<b>LDAP bind successful...</b><br><br>";
          } else {
            //echo "LDAP bind failed...<br>";
            return new Response("A problem occurred during the submit of your credentials");
            //return $this->redirect($this->generateUrl('intranet_logout'));
          }
      }else{echo "no connection =(";}

      $baseDN ="dc=cuisine, dc=lan";
      $query = "(cn=".$uh.")";
      // limit attributes we want to look for
      $attributes_ad = array("mail");
      $result = ldap_search($this->ldapconn, $baseDN, $query, $attributes_ad) or die ("Error in search query");
      // put search results into the array ($conn variable is defined in the included 'ad_con.php')
      $email = ldap_get_entries($this->ldapconn, $result);
      return $email;
      //ldap_close($this->ldapconn);
   }
}

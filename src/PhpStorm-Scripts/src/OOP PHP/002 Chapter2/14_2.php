<?php
class Auth {
  ...

  /**
   * Instance of Session class
   * @var Session
   */
   var $session;

   ...

  function Auth (&$dbConn, $redirect, $md5 = true)
  {
    $this->$dbConn = &$dbConn;
    $this->redirect = $redirect;
    $this->md5 = $md5;
    $this->session = &new Session();
    $this->checkAddress();
    $this->login();
  }
}
?>

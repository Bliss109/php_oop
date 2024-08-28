<?php
 class trial{
  var $fname;
  public $username;
  var $yob;
  protected $email_password;
  private $password;

  public function details($fname){
    return $fname;
  }
  public function user_age($yob){
     $age= date('Y') - $yob;
     return $age;
  }
 }
 $Obj = new trial();

 print $Obj -> user_age(2004);
?>

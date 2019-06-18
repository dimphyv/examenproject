<?php

function relocator($path){
  header('Location: '.$path);
  die;
}

function checkUser($myUsers,$email,$password){
  $correctUser = FALSE;
  if(!empty($email) AND !empty($password) )
  {
    $checkUser = array($email,$password);
    foreach ($myUsers as $key => $user) {
      if($user === $checkUser){
        $correctUser = TRUE;
        break;
      }
    }
  }
  return $correctUser;
}

function cookieStillAlive(){
  if(isset($_COOKIE['usercheckedid']))
    {
      setcookie("usercheckedid",$_COOKIE['usercheckedid'],time()+600);
    }
  else
  {
    relocator("index.php");
  }

}

  function userIsAdmin(){
    $userIsAdmin = FALSE;
    if(isset($_COOKIE['userIsAdmin']))
    {$userIsAdmin = true;};
    return $userIsAdmin;
  }
?>

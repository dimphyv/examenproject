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
?>

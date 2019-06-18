<?php
require_once 'function.php';
require_once 'users.php';
//require_once 'db.php';
cookieStillAlive();

$users = new users();
$user = $users->getDataById('users', $_GET['id']);



?>

<html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <link href="css/main.css">
     <title>Wijzig leden informatie</title>
   </head>

   <body>
       <div class="container">
         <div class="row">
           <div class="col-8 offset-2">
             <h1 class="text-center mt-2 pt-5 pb-2">Wijzigen deelnemer informatie</h1>
             <div class="row">
               <form action="updateUser.php" method="POST" class="mb-3 pl-2 pr-2">
                 <div class="form-group">
                  <label for="naam">Naam</label>
                  <input value="<?php echo $user['naam']; ?>" type="text" class="form-control" id="text" aria-describedby="emailHelp" name="naam" placeholder="naam">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input value="<?php echo $user['email']; ?>" type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-primary" id="login">Wijzigen</button>
                <button type="submit" class="btn btn-primary" id="cancel" name='cancel'>Annuleren</button>
                <input value="<?php echo $user['user_id']; ?>" name="user_id" type="hidden">
               </form>
             </div>
           </div>
         </div>
     </div>
   </body>


</html>

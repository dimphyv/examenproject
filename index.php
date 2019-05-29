<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  $index=0;
  
  session_start();
?>

<html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <link href="css/main.css">
     <title>Login</title>
   </head>

   <body>
       <div class="container">
         <div class="row">
           <div class="col-8 offset-2">
             <h1 class="text-center mt-2 pt-5 pb-2">Aanmeldpagina</h1>
             <div class="row">
               <form action="control.php" method="POST" class="mb-3 pl-2 pr-2">
                 <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">Uw gegevens worden nergens anders voor gebruikt dan registratie.</small>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" id="login">Aanmelden</button>
                <button type="submit" class="btn btn-primary" id="new" name='new'>Nieuw lid</button>
               </form>
             </div>
           </div>

          <?php
          /*if(isset($_SESSION['status'])){
            if($_SESSION['status'][0] === 'failed'){
              echo '<div class="col-8 offset-2 alert alert-danger mt-5">';
              echo "<p>".$_SESSION['status'][1]."</p>";
              echo '</div>';
              
              
            }
          }*/
         ?>
       </div>
     </div>
   </body>


</html>
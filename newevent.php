<?php


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
             <h1 class="text-center mt-2 pt-5 pb-2">Nieuw evenement aanmaken</h1>
             <div class="row">
               <form action="addnewevent.php" method="POST" class="mb-3 pl-2 pr-2">
                 <div class="form-group">
                  <label for="datum">Datum</label>
                  <input type="date" class="form-control" id="date" aria-describedby="emailHelp" name="datum" placeholder="Datum">
                </div>
                <div class="form-group">
                  <label for="omschrijving">Omschrijving evenement</label>
                  <input type="text" class="form-control" id="omschrijving" name="omschrijving" placeholder="Omschrijving">
                </div>
                <button type="submit" class="btn btn-primary" id="login">Toevoegen</button>
                <button type="submit" class="btn btn-primary" id="cancel" name='cancel'>Annuleren</button>
               </form>
             </div>
           </div>
         </div>
     </div>
   </body>


</html>

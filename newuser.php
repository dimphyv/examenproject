<?php
  
?>

<html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <link href="css/main.css">
     <title>Nieuwe deelnemer</title>
   </head>

   <body>
       <div class="container">
         <div class="row">
           <div class="col-8 offset-2">
             <h1 class="text-center mt-2 pt-5 pb-2">Nieuwe lid aanmelden</h1>
             <div class="row">
               <form action="aanmelding.php" method="POST" class="mb-3 pl-2 pr-2">
                 <div class="form-group">
                 <div class="form-group">
                  <label for="naam">Naam</label>
                  <input type="text" class="form-control" id="naam" name="naam" placeholder="Naam">
                </div>
                  <label for="email">Email adres</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Vul email adres in">
                  <small id="emailHelp" class="form-text text-muted">Uw gegevens worden nergens anders voor gebruikt dan registratie.</small>
                </div>
                <div class="form-group">
                  <label for="password">Wachtwoord</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Vul wachtwoord in">
                </div>
                <button type="submit" class="btn btn-primary" id="add" name="add">Toevoegen</button>
                <button type="submit" class="btn btn-primary" id="cancel" name="cancel">Annuleren</button>
               </form>
             </div>
           </div>

          <?php
        
         ?>
       </div>
     </div>
   </body>


</html>

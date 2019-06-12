<?php
session_start();

require_once 'users.php';
require_once 'events.php';
require_once 'function.php';
cookieStillAlive();

// evenememt id ophalen uit GET
$evenement_id = isset($_GET['evenement_id']) ? $_GET['evenement_id'] : 0 ;   
// Leden opzoeken die voor een bepaald evenement zijn ingeschreven, het evenement_id is bepalend hiervoor
$leden = new users();
$ledenlijst = $leden->getEvenementData('users', $evenement_id);

// Ophalen van de omschrijving van het betreffende event
$events = new events();
$event = $events->getDataById('evenementen' , $evenement_id);
$eventnaam = isset($event) ? $event['omschrijving'] : "'onbekend'";
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Club Leden</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
   
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="navbar-nav mr-auto mt-2 mt-lg-0">
        
        </div>
        <form class="form-inline my-2 my-lg-0">
          <a type="button" class="btn btn-update" href="evenementen.php" id="newevent">Evenement</a>
          <a type="button" href="logoff.php" class="btn btn-outline-success my-2 my-sm-0">Afmelden</a>
        </form>
      </div>
    </nav>

    <h1 class="text-center">Leden die meegaan naar <?php echo $eventnaam ?></h1>
    <div class="row">
      <div class="col-8 offset-2">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Naam</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            <?php if(count($ledenlijst)>0): ?>
              <?php $counter=0 ; ?>

              <?php while($counter<count($ledenlijst)) :?>
                <?php $row = $ledenlijst[$counter]; ?>
                <tr>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><?php echo $row['naam']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                </tr>
                <?php $counter++ ; ?>

              <?php endwhile; ?>
            <?php endif; ?>
          </tr>
          </tbody>
        </table>
        
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php


require_once 'users.php';
//require_once 'db.php';

        
        $leden = new users();
        $ledenlijst = $leden->getAllData('users');
        //var_dump($ledenlijst);
        
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
  </head>
  <body>
   
    <h1 class="text-center">Leden</h1>
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
                  <td><a type="button" class="btn btn-danger" href="deleteUser.php?user_id=<?php echo $row['user_id']; ?>">Verwijder deelnemer</a></td>
                 <!-- ipv < ?php kan je ook <= zonder echo gebruiken -->
                </tr>
                <?php $counter++ ; ?>

              <?php endwhile; ?>
            <?php endif; ?>
          </tr>
          </tbody>
        </table>
        <td><a type="button" class="btn btn-update" href="newuser.php" id="newuser"> Nieuwe deelnemer </a></td>
        <!--
        <a type="button" class="btn btn-update" href="add.php" id="users">Leden</a>-->
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
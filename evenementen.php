<?php
//require_once 'db.php';
require_once 'events.php';
        
        $events = new events();
        $evenementen = $events->getAllData('evenementen');

        var_dump($evenementen);
        
        ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Club Evenementen</title>
  </head>
  <body>
  
    <h1 class="text-center">Evenementen</h1>
    <div class="row">
      <div class="col-8 offset-2">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Datum</th>
              <th scope="col">Omschrijving</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php if(count($evenementen)>0): ?>
              <?php $counter=0 ; ?>

              <?php while($counter<count($evenementen)) :?>
                <?php $row = $evenementen[$counter]; ?>
                <tr>
                  <td><?php echo $row['evenement_id']; ?></td>
                  <td><?php echo $row['datum']; ?></td>
                  <td><?php echo $row['omschrijving']; ?></td>
                </tr>
                <?php $counter++ ; ?>

              <?php endwhile; ?>
            <?php endif; ?>
          </tr>
          </tbody>
        </table>
        <a href="add.php">Voeg een nieuwe toe</a>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
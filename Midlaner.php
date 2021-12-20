<!DOCTYPE html>
<html>

<head>
    <title>Création d'équipe</title>
    <meta charset="utf-8">  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
  <?php session_start(); ?>
  <div class="header">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="navbar-brand"> Gestion d'équipe </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Toplaner.php">Toplaner</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="Jungler.php">Jungler</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="Midlaner.php">Midlaner</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="ADC.php">ADC</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="Support.php">Support</a>
            </li>
          </ul>
        </div>
      </nav>
  </div>
  
  <?php include ('joueurs.php'); ?>
  <div class="container">
    <div class="row justify-content-around">
      <div class=".col-4">
        <h1> Équipe actuelle : </h1>
          <table class="table table-bordered">
          <thead>
              <tr>
                  <th>~Nom~</th>
                  <th>~Prénom~</th>
                  <th>~Poste~</th>
              </tr>
          </thead>
          <tbody>
            <?php
                if (isset($_GET['milieu'])) {
                    if($_GET['milieu'] == -1){
                        $_SESSION = array();
                    }
                    else{
                        $_SESSION['Midlaner']=$_GET['milieu'];
                    }
              }?>
            <tr>
              <?php
              if(isset($_SESSION['Top'])){
                  foreach ($players as $player) {
                      if ($player['idJoueur']==$_SESSION['Top']) {?>
                          <td><?php echo $player['nom'];?></td>
                          <td><?php echo $player['prenom'];?></td>
                          <td><?php echo $player["poste"];?></td>
                          <?php
                      }

                  }
              }
              ?>
          </tr>
            <tr>
                <?php
                if(isset($_SESSION['Jun'])){
                    foreach ($players as $player) {
                        if ($player['idJoueur']==$_SESSION['Jun']) {?>
                            <td><?php echo $player['nom'];?></td>
                            <td><?php echo $player['prenom'];?></td>
                            <td><?php echo $player["poste"];?></td>
                            <?php
                        }

                    }
                }
                ?>
            </tr>
            <tr>
              <?php
                if(isset($_SESSION['Midlaner'])){
                    foreach ($players as $player) {
                        if ($player['idJoueur']==$_SESSION['Midlaner']) {?>
                            <td><?php echo $player['nom'];?></td>
                            <td><?php echo $player['prenom'];?></td>
                            <td><?php echo $player["poste"];?></td>
                            <?php
                      }

                  }
                }
              ?>
            </tr>
            <tr>
                <?php
                if(isset($_SESSION['ADC'])){
                    foreach ($players as $player) {
                        if ($player['idJoueur']==$_SESSION['ADC']) {
                            echo "<td>" .$player['nom']. "</td>";
                            echo "<td>" .$player['prenom']. "</td>";
                            echo "<td>" . $player["poste"]. "</td>";
                        }

                    }
                }?>

            </tr>
            <tr>
                <?php
                if(isset($_SESSION['Sup'])){
                    foreach ($players as $player) {
                        if ($player['idJoueur']==$_SESSION['Sup']) {?>
                            <td><?php echo $player['nom'];?></td>
                            <td><?php echo $player['prenom'];?></td>
                            <td><?php echo $player["poste"];?></td>
                            <?php
                        }

                    }
                }
                ?>
            </tr>
          </tbody>
        </table>
      <div class="button"><a href="Midlaner.php?milieu=-1">Reset</a></div>
    </div>


    <div class=".col-10">
      <h1> Ajouter un midlaner : </h1>
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>~Nom~</th>
                <th>~Poste~</th>
                <th>~Ajouter~</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($players as $player){
              if ($player['poste']=='Midlaner'){
                ?>
                <tr>
                    <td><?php echo $player['nom'] ?></td>
                    <td><?php echo $player['poste'] ?></td>
                    <td><div class="button"><a href="Midlaner.php?milieu=<?php echo $player['idJoueur']; ?>">Ajouter</a></div></td>
                </tr>
            <?php 
            }
              }
            ?>
        </tbody>
      </table>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>hotel_douala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link  rel="stylesheet" href="./css/style.css">
</head>
<body>

         <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar-w3-theme-d2  w3-left-align"> 
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                <a href="accueil.html" class="w3-bar-item w3-button "><img src="./css/img/douala.png" width="80"></i></a>
                <a href="accueil.html" class="w3-bar-item w3-button w3-hide-small">Accueil</a>
                <a href="chambre.html" class="w3-bar-item w3-button w3-hide-small">Chambre</a>
                <a href="about.html" class="w3-bar-item w3-button w3-hide-small">About</a>
                <a href="reservation.html" class="w3-bar-item w3-button w3-hide-small">Reservation</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small">Contact</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button" title="Notifications">Autre service <i class="fa fa-caret-down"></i></button>     
                <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                <a href="#" class="w3-bar-item w3-button">Restaurant</a>
                <a href="#" class="w3-bar-item w3-button">Snack Bar</a>
                <a href="#" class="w3-bar-item w3-button">finesse</a>
                </div>
            </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="accueil.html" class="w3-bar-item w3-button">Accueil</a>
            <a href="chambre.html" class="w3-bar-item w3-button">Chambre</a>
            <a href="about.html" class="w3-bar-item w3-button">About</a>
            <a href="reservation.html" class="w3-bar-item w3-button">Reservation</a>
            <a href="abonement.html" class="w3-bar-item w3-button">Abonement</a>
            <a href="#" class="w3-bar-item w3-button">Contact</a>
            </div>
        </div>
        <p><a style="letter-spacing:0.5px;" href="?deconnexion">Déconnexion</a></p>
    
      <div class="container">
            <table id="table_id" class ="display">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Téléphone</th>
                    <th>E-mail</th>
                    <th>Date entre</th>
                    <th>Date sortie</th>
                    <th>Adulte</th>
                    <th>Enfants</th>
                    <th>Type de chambre</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    include('connexion.php');

                    $query = "SELECT * FROM reservation";
                    $result = mysqli_query($connection, $query);

                    while($ligne=mysqli_fetch_array($result)){
                        echo'
                        <tr>
                            <td>'.$ligne['nom'].'</td>
                            <td>'.$ligne['prenom'].'</td>
                            <td>'.$ligne['telephone'].'</td>
                            <td>'.$ligne['email'].'</td>
                            <td>'.$ligne['date_entre'].'</td>
                            <td>'.$ligne['date_sortie'].'</td>
                            <td>'.$ligne['adulte'].'</td>
                            <td>'.$ligne['enfant'].'</td>
                            <td>'.$ligne['type_de_chambre'].'</td>
                            <td>'.$ligne['message'].'</td>
                        </tr>
                        
                        ';
                    }
                ?>

                </tbody>
            </table>
        </div>
        
     
    



      <script>$(document).ready( function () {$('#table_id').DataTable();} );
</script>


</body>
</html>
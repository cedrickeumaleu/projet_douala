<!DOCTYPE html>
<html lang="en">
<head>
  <title>hotel_douala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
      <div>
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
        include('connection.php');

        $query = "SELECT * FROM contact";
        $result = mysqli_query($connection, $query);

        while($ligne=mysqli_fetch_array($result)){
            echo'
                <tr>
                   <td>'.$ligne['nom'].'</td>
                   <td>'.$ligne['prenom'].'</td>
                   <td>'.$ligne['téléphone'].'</td>
                   <td>'.$ligne['email'].'</td>
                   <td>'.$ligne['date_entre'].'</td>
                   <td>'.$ligne['date_sortie'].'</td>
                   <td>'.$ligne['adulte'].'</td>
                   <td>'.$ligne['enfants'].'</td>
                   <td>'.$ligne['type_de_chambre'].'</td>
                   <td>'.$ligne['message'].'</td>
                </tr>
            
            ';
        }
        ?>

                </tbody>
            </table>
        </div>
        
       </div>   
    



      <script>$(document).ready( function () {$('#table_id').DataTable();} );
</script>


</body>
</html>
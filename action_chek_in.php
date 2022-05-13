<?php
include('connexion.php');
/* Traitement de l'envoi de l'email */

// echo'test';
$result2= '';
$errors = '';
$myemail = 'keumaleucedrick@gmail.com';
if(
  
    empty($_POST['entre'])||
    empty($_POST['sortie'])||
    empty($_POST['adulte'])||
    empty($_POST['enfant'])||
    empty($_POST['chambre']))
    
    {
    $errors .="\n error: all fields are required";
}

// on stock ici les chams du formulaire dans des variables (name...)

$entre = $_POST['entre'];
$sortie = $_POST['sortie'];
$adulte = $_POST['adulte'];
$enfant = $_POST['enfant'];
$chambre = $_POST['chambre'];


if($adulte == "0"){
    $adulte = "Aucun";	
}

 if(empty($errors))
 {

//check des chambres
$check = "SELECT * FROM `chek_in` WHERE `chambre`='$chambre';";

$result = mysqli_query($connection, $check);
$res = mysqli_num_rows($result);

if($res == 20){
    echo 'toutes les chambres sont prises';
}
elseif($chambre == 'chambre classic' && $res == 10){

    echo 'toutes les chambres classic sont prises';
}
elseif($chambre == 'Chambre VIP' && $res == 5){

    echo 'toutes les Chambre VIP sont prises';
}
elseif($chambre == 'Suite' && $res == 5){

    echo 'toutes les suites sont prises';
}
// Derniere etape
else{

    $query = "INSERT INTO `chek_in` (entre, sortie, adulte, enfant, chambre) VALUES ('$entre', '$sortie', '$adulte', '$enfant', '$chambre')";
     
    $result = mysqli_query($connection, $query);
   
    header('Location: reservation.html');
} 

}

?>

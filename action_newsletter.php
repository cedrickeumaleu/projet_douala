<?php
include('connexion.php');
/* Traitement de l'envoi de l'email */

if(
   
    empty($_POST['email']))
    {
    $errors .="\n error: all fields are required";
}

// on stock ici le chams du formulaire dans une variables (name...)

$email = $_POST['email'];

if(empty($errors))
 {
    $query = "INSERT INTO `newsletter` ( email) VALUES ( '$email')";
    
    
    $result = mysqli_query($connection, $query);
   
    // var_dump($query);
    // die();
    header('Location: accueil.html');
}
?>
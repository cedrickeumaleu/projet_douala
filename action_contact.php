<?php
include('connexion.php');
/* Traitement de l'envoi de l'email */

// echo'test';

if(
   
    empty($_POST['nom'])||
    empty($_POST['telephone'])||
    empty($_POST['email'])||
    empty($_POST['subject'])||
    empty($_POST['message']))
    {
    $errors .="\n error: all fields are required";
}
// var_dump($errors);
// die();

// on stock ici les chams du formulaire dans des variables (name...)

$nom = $_POST['nom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

 if(empty($errors))
 {
    $query = "INSERT INTO `contact` (nom, telephone, email, subject, message) VALUES ('$nom', '$telephone', '$email', '$subject', '$message')";
   
    $result = mysqli_query($connection, $query);
   
    header('Location: accueil.html');
 

}

?>
<?php
include('connexion.php');
/* Traitement de l'envoi de l'email */

// echo'test';

$errors = '';
$myemail = 'keumaleucedrick@gmail.com';
if(
   
    empty($_POST['nom'])||
    empty($_POST['prenom'])||
    empty($_POST['telephone'])||
    empty($_POST['email'])||
    empty($_POST['entre'])||
    empty($_POST['sortie'])||
    // empty($_POST['adultes'])||
    empty($_POST['enfant'])||
    empty($_POST['chambre'])||
    empty($_POST['message']))
    {
    $errors .="\n error: all fields are required";
}
// var_dump($errors);
// die();

// on stock ici les chams du formulaire dans des variables (name...)


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$date_entre = $_POST['entre'];
$date_sortie = $_POST['sortie'];
$adultes = $_POST['adultes'];
$enfant = $_POST['enfant'];
$type_de_chambre = $_POST['chambre'];
$message = $_POST['message'];


if($adultes == "0"){
    $adultes = "Aucun";	
}
// var_dump($_POST);
// die();


// si la variable $error est vide => aucune erreur detectée => on prépare le mail à envoie


// if (!preg_match(
// "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
// $email_address))
// {
//     $errors .= "\n Error: Invalid email address";
// }

// var_dump( $_POST);

//var_dump( $errors);

 if(empty($errors))
 {
    $query = "INSERT INTO `reservation` (nom, prenom, telephone, email, date_entre, date_sortie, adultes, enfant, type_de_chambre, message) VALUES ('$nom', '$prenom', '$telephone', '$email', '$date_entre', '$date_sortie', '$adultes', '$enfant', '$type_de_chambre', '$message')";
    //$sql = "INSERT INTO `reservation` (Nom, Prenom, Téléphone, email, Date_entre, Date_sortie, Adulte, Enfant, Type_de_chambre, msg ) VALUES ( \'kam\', \'jojo\', \'0755612575\', \'keumaleucedrick@gmail.com\', \'01/05/2020\', \'20/05/2021\', \'2\', \'0\', \'Chambre VIP\', \'test\')";
   
   
    $result = mysqli_query($connection, $query);
   
    
//die();
    header('Location: accueil.html');
 

// 	$to = $myemail; 
// 	$email_subject = "Contact form submission: $nom";
// 	$email_body =  $email_body = '


    

//     ';

//     $headers[] = "From: $myemail";
//     $headers[] = "Reply-To: $email";
//     $headers[] = 'MIME-Version: 1.0';
//     $headers[] = 'Content-type: text/html; charset=UTF-8';



//     //envoi du mail
// 	mail($to,$email_subject,$email_body, implode("\r\n", $headers));

	//redirect to the 'thank you' page
	//header('Location: consulter.html');

}

?>
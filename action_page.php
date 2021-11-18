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
    empty($_POST['adultes'])||
    empty($_POST['enfants'])||
    empty($_POST['chambre'])||
    empty($_POST['message']))
    {
    $errors .="\n error: all fields are required";
}
// var_dump($errors);
// die();

// on stock iciles chams du formulaire dans des variables (name...)


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$date_entre = $_POST['entre'];
$date_sortie = $_POST['sortie'];
$adultes = $_POST['adultes'];
$enfants = $_POST['enfants'];
$type_de_chambre = $_POST['chambre'];
$message = $_POST['message'];


// var_dump($type_de_chambre);
// die();


// si la variable $error est vide => aucune erreur detectée => on prépare le mail à envoie


// if (!preg_match(
// "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
// $email_address))
// {
//     $errors .= "\n Error: Invalid email address";
// }


 if(empty($errors))
 {
    $query = "INSERT INTO `reservation` (nom, prenom, telephone, email, date_entre, date_sortie, adultes, enfants, type_de_chambre, message) VALUES ('$nom', '$prenom', '$telephone', '$email', '$date_entre', '$date_sortie', '$adultes', '$enfants', '$type_de_chambre', '$message')";
    //$sql = "INSERT INTO `reservation` (Nom, Prenom, Téléphone, email, Date_entre, Date_sortie, Adulte, Enfants, Type_de_chambre, msg ) VALUES ( \'kam\', \'jojo\', \'0755612575\', \'keumaleucedrick@gmail.com\', \'01/05/2020\', \'20/05/2021\', \'2\', \'3\', \'Chambre VIP\', \'test\')";
   
   
    $result = mysqli_query($connection, $query);

    
    header('Location: accueil.html');
 
 
  


// 	$to = $myemail; 
// 	$email_subject = "Contact form submission: $nom";
// 	$email_body =  $email_body = '

//     <div style="margin-top: 20px;
//     padding: 0px;
//     border: 0px;
//     color: #1b1e21;
//     background-color: #d6d8d9;
//     margin-bottom: 1rem;
//     border: 1px solid transparent;
//     border-radius: .25rem;
//     ">
//     <h3 class="titre">Message de la part de : '.$nom.'</h3>
// </div>

// <div style="margin-top: 20px;
// padding: 0px;
// border: 0px;
// color: #1b1e21;
// background-color: #d6d8d9;
// margin-bottom: 1rem;
// border: 1px solid transparent;
// border-radius: .25rem;
// ">
// <h3 class="titre"> : '.$prenom.'</h3>
// </div>

// <div style="margin-top: 20px;
// padding: 0px;
// border: 0px;
// color: #1b1e21;
// background-color: #d6d8d9;
// margin-bottom: 1rem;
// border: 1px solid transparent;
// border-radius: .25rem;
// ">
// <h3 class="titre">tél : '.$téléphone.'</h3>
// </div>

// <div style="margin-top: 20px;
// padding: 0px;
// border: 0px;
// color: #1b1e21;
// background-color: #d6d8d9;
// margin-bottom: 1rem;
// border: 1px solid transparent;
// border-radius: .25rem;
// ">
// <h3 class="titre">email : '.$email.'</h3>
// </div>

// <div style="margin-top: 20px;
// padding: 0px;
// border: 0px;
// color: #1b1e21;
// background-color: #d6d8d9;
// margin-bottom: 1rem;
// border: 1px solid transparent;
// border-radius: .25rem;
// ">
// <h3 class="titre">nombre d_adulte : '.$adulte.'</h3>
// </div>

// <div style="margin-top: 20px;
// padding: 0px;
// border: 0px;
// color: #1b1e21;
// background-color: #17a2b8;
// margin-bottom: 1rem;
// border: 1px solid transparent;
// border-radius: .25rem;
// ">
// <h3 class="titre"> nombre d_enfants : '.$enfants .' </h3>
// </div>

// <div style="margin-top: 20px;
// padding: 0px;
// border: 0px;
// color: #1b1e21;
// background-color: #ccc;
// margin-bottom: 1rem;
// border: 1px solid transparent;
// border-radius: .25rem;
// ">
// <h3 class="titre">type de chambre : '.$type_de_chambre .'</h3>
// </div>

// <div style="margin-top: 20px;
// padding: 0px;
// border: 0px;
// color: #1b1e21;
// background-color: #ccc;
// margin-bottom: 1rem;
// border: 1px solid transparent;
// border-radius: .25rem;
// ">
// <h3 class="titre"> '.$message .'</h3>
// </div>


    

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
<?php


if((isset($_POST['nom']) && !empty($_POST['Nom']))
&& (isset($_POST['prenom']) && !empty($_POST['Prenom']))
&& (isset($_POST['téléphone']) && !empty($_POST['Téléphone']))
&& (isset($_POST['email']) && !empty($_POST['Email']))
&& (isset($_POST['date_entré']) && !empty($_POST['Date entré']))
&& (isset($_POST['date_sortie']) && !empty($_POST['Date sortie']))
&& (isset($_POST['adulte']) && !empty($_POST['Adulte']))
&& (isset($_POST['enfant']) && !empty($_POST['Enfant']))
&& (isset($_POST['type_de_chambre']) && !empty($_POST['Type de chambre']))
&& (isset($_POST['message']) && !empty($_POST['text']))){

    //print_r($_POST);
	$nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $Téléphone = $_POST['téléphone'];
	$Email = $_POST['email'];
    $Date_entré = $_POST['date_entré'];
	$Date_sortie = $_POST['date_sortie'];
    $Adulte = $_POST['adulte'];
	$Enfant= $_POST['enfant'];
    $Type_de_chambre = $_POST['type_de_chambre'];
	$message = $_POST['message'];

	
	
	$to = "keumaleucedrick@gmail.com";
	$headers = "From : " . $email;
	
	if( mail($to, $subject, $message, $headers)){
		echo "E-Mail Sent successfully, we will get back to you soon.";
		
		$query = "INSERT INTO `contact` (nom, prenom, téléphone, email, date_entré, date_sortie, adulte, enfant, type_de_chambre, message  ) VALUES ('$Nom', '$Prenom', '$Téléphone', '$Email', '$Date_entré', '$Date_sortie', '$Adulte', '$Enfant', '$Type_de_chambre' '$message')";
		$result = mysqli_query($connection, $query);
	}
}

// newsleter

if((isset($_POST['email']) && !empty($_POST['email']))){

	$Email = $_POST['email'];
     
	if( mail($to)){
	echo "E-Mail Sent successfully, we will get back to you soon.";

	$query = "INSERT INTO `newsletter` ( email,) VALUE ('$email',)";
 	$result = mysqli_query($connection, $query);
	 
	}

}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
	
	<?php 

$contact = $_POST['email'];
$destinataire = "jacobs.julien@hotmail.com";
$sujet = "SITE - Demande de contact" ;
$msg = $_POST['message'];
$nom = $_POST['name'];
$entete = "From: ".$contact ;
 
// Le lien d'activation est composé du login(log) et de la clé(cle)
$message = 'Demande de contact de '.$contact.' 
Nom : '.$nom.'
 
'.$msg.'';
 
 
mail($destinataire, $sujet, $message, $entete) ;

header('Location:index.html'); exit();

 ?>
	
</body>
</html>
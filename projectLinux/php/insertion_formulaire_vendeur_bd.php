<?php
//recuperation des donnees saisie dans le formulaire
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$adresse=$_POST["adresse"];
    mysql_connect('localhost','root','');
    mysql_select_db('trade');
    $sql="INSERT INTO vendeur(nom_vendeur,prenom_vendeur,adresse_vendeur)
     VALUES ('$nom','$prenom','$adresse')";
	if(mysql_query($sql)){
		echo "vendeur enregistrer avec succes"; 
	}
	else{
		echo "echec d'enregistrement du vendeur ";
	}
?>
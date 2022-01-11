<?php
//recuperation des donnees saisie dans le formulaire
	$ref=$_POST["ref"];
	$lib=$_POST["lib"];
	$qte=$_POST["qte"];
	$min=$_POST["min"];
    $max=$_POST["max"];
    mysql_connect('localhost','root','');
    mysql_select_db('trade');
    $sql="INSERT INTO article(ref_article,libelle_article,seul_stock_article,prix_min_article,prix_max_article)
     VALUES ('$ref','$lib',$qte,$min,$max)";
	if(mysql_query($sql)){
		echo "produit enregistrer avec succes"; 
	}
	else{ 
		echo "echec d'enregistrement du produit ";
	}
?>
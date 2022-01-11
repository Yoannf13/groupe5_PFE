<?php
//recuperation des donnees saisie dans le formulaire
    $id=$_POST["id"];
	$refs=$_POST["refs"];
	$lib=$_POST["lib"];
	$qte=$_POST["qte"];
	$min=$_POST["min"];
	$max=$_POST["max"];
    mysql_connect('localhost','root','');
    mysql_select_db('trade');
    $sql="update article  set ref_article ='$refs', 
                           libelle_article ='$lib',
                           seul_stock_article= $qte, 
                           prix_min_article= $min, 
                           prix_max_article= $max 
                           where id_article=$id";
	if(mysql_query($sql)){
		echo "produit enregistrer avec succes";
	}
	else{
		echo "echec d'enregistrement du produit ";
	}
	header("location:modifier_article.php");
?>
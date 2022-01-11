<?php
$ref=$_POST["ref"];
mysql_connect('localhost','root','');
mysql_select_db('trade');
$sql="delete from article where ref_article='$ref'";
if(mysql_query($sql)) 
{
   echo "supresion avec succe";
}
else
{
    echo "le produit entrer n'exite pas";
}

?>
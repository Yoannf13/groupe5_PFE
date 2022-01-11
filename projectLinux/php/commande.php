<?php
echo("<html>");
echo("<head>");
echo("<title><B>LISTE DES INSCRTS</B></title>");
echo("<body>");
echo("<B><H2>LISTE DE NOS PRODUITS</H2></B>");
echo("<Br>");
echo("<table border=1>");
echo("<tr>");
echo("<td> REFERENCE </td><td width='150'> LIBELET</td><td width='150'> Prix U</td><td>Qte</td><td width='150'> Couleur</td><td width='150'>Fournisseur</td><td>Supprimer</td>");
echo("</tr>");
mysql_connect('localhost','root','');
mysql_select_db('trade');
$sql="select* from article";
//excecution de la requette
$resultat=mysql_query($sql);

while($ligne=mysql_fetch_row($resultat)){
    echo("</tr>");
    echo("<td>$ligne[1]</td>");
    echo("<td>$ligne[2]</td>");
    echo("<td>$ligne[3]</td>");
    echo("<td>$ligne[4]</td>");
    echo("<td>$ligne[5]</td>");
    echo("<td><a href='quantite.txt? ref=$ligne[2], qte=$ligne[4] '>selectione</a></td>"); 
    echo ("");
    echo("</tr>");
} 
echo("</table>");
echo("</body>");
echo("</html>"); 
                    
?>

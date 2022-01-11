<?php
echo("<html>");
echo("<head>");
echo("<title><B>LISTE DES VENDEUR</B></title>");
echo("<body>");
echo("<B><H2>LISTE DE NOS VENDEUR</H2></B>");
echo("<Br>");
echo("<table border=1>");
echo("<tr>");
echo("<td> NOM </td><td width='150'> PRENOM</td><td width='150'> ADRESSE</td>");
echo("</tr>");
mysql_connect('localhost','root','');
mysql_select_db('trade');
$sql="select* from vendeur";
//excecution de la requette
$resultat=mysql_query($sql);

while($ligne=mysql_fetch_row($resultat)){
    echo("</tr>");
    echo("<td>$ligne[1]</td>");
    echo("<td>$ligne[2]</td>");
    echo("<td>$ligne[3]</td>");
    echo("</tr>");
}
echo("</table>");
echo("</body>");
echo("</html>");
?>
<?php
echo("<html>");
echo("<head>");
echo("<title><B>commande</B></title>");
echo("<body>");
echo("<B><H2>commande</H2></B>");
echo("<Br>");
echo("<table border=1>");
echo("<tr>");
echo("<td> REFERENCE </td><td width='150'> LIBELET</td><td width='150'> Qte</td><td>Prix_min</td><td width='150'>Prix_max </td>");
echo("</tr>");
echo "choix quantite";
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
    echo("</tr>");
}
echo("</table>");
echo("</body>");
echo("</html>");
?>

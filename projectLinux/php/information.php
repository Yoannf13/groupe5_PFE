<!DOCTYPE html>
<html>
    <head>
        <title>mise a jour du_produit</title>
    </head>
    <body>
        <?php
        $ref=$_GET["ref"];
        mysql_connect('localhost','root','');
        mysql_select_db('trade');
        $sql="select *from article where ref_article='$ref'";
        $reponse=mysql_query($sql);
        $ligne=mysql_fetch_row($reponse);
        ?>
            <form name="F2" method="POST" action="update.php " refd="$ref">
                    id:<input type="text" size="25" name="id" value=<?php echo($ligne[0]); ?>><br><br>
                    REFERENCE:<input type="text" size="25" name="refs" value=<?php echo($ligne[1]); ?>><br><br>
                    LIBELET:<input type="text" size="29" name="lib" value=<?php echo($ligne[2]); ?>> <br><br>
                    qte:<input type="number" size="17" name="qte" value=<?php echo($ligne[3]); ?>><br><br>
                    prix min:<input type="number" size="20" name="min" value=<?php echo($ligne[4]); ?>><br><br>
                    prix min:<input type="number" size="20" name="max" value=<?php echo($ligne[5]); ?>><br><br>
                   
                    <input type="submit" value="modifier" >
                    <input type="reset" value="ANULER">
                  </form> 
                       
    </body>
</html>
        

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Test de page auto</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        
            $connect = mysqli_connect('localhost', 'root', '','yugioh');
            
            $cartepage=10; //Affichage de 5 carte par page
            

            $retour_total=mysqli_query($connect,'SELECT COUNT(*) AS total FROM carte'); 
            $donnees_total=mysqli_fetch_assoc($retour_total); 
            $total=$donnees_total['total']; 
            
            $nombreDePages=ceil($total/$cartepage);
            
            if(isset($_GET['page']))
            {
                $pageActuelle=intval($_GET['page']);
            
                if($pageActuelle>$nombreDePages)
                {
                    $pageActuelle=$nombreDePages;
                }
            }
            else 
            {
                $pageActuelle=1; //Page défaut = page 1
            }
            
            $firstCard=($pageActuelle-1)*$cartepage; 
            
            $BDDcard=mysqli_query($connect,'SELECT * FROM carte ORDER BY id ASC LIMIT '.$firstCard.', '.$cartepage.'');
            
            while($infoCard=mysqli_fetch_assoc($BDDcard)) // On lit les entrées une à une grâce à une boucle
            {
                echo '<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>'.stripslashes($infoCard['Nom']).'</td>
                            </tr>
                            <tr>
                                <td>'.stripslashes($infoCard['LienImage']).'</td>
                            </tr>
                        </table><br /><br />';
            }
            
            echo '<p align="center">Page : '; //Pour l'affichage, on centre la liste des pages
            for($i=1; $i<=$nombreDePages; $i++) //On fait une boucle pour créer autant de page que nécésaire
            {
                if($i==$pageActuelle) 
                {
                    echo ' [ '.$i.' ] '; 
                }    
                else
                {
                    echo ' <a href="test.php?page='.$i.'">'.$i.'</a> ';
                }
            }
            echo '</p>';
        ?>
    </body>
</html>
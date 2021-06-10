<html>
    <head>
         <link href="Site Finale/css/Menu_Principale.css" rel="stylesheet">
         <meta charset=UTF-8>
    </head>
    
    <body>                    
        <div class="header"> <!--Entête du site avec un bouton pour revenir au menue principal et le titre ou logo du site-->
            <div class="header_navbar">
                <h1 class="header_navbar_logo">Yu-Gi-Oh Deck Builder</h1>
                    
                    <!--<div class="header_navbar_menu">
                        
                        <a href="index.php">
                            <img src="Site Finale/Image/Menu-Creation.png" width="120" height="40" alt="image du menue principale" />
                        </a>
                        
                        <a href="Site Finale/Banlist.html">
                            <img src="Site Finale/menu_resize.png" width="200" height="40" alt="image de la banlist" />
                        </a>

                    </div>-->
            </div>
        </div>

        <div class="box inside_demi_col">
            <?php
                    
                $connect = mysqli_connect('localhost', 'root', '','yugioh');
                
                $cartepage=6; //Affichage de 5 carte par page
                

                $retour_total=mysqli_query($connect,'SELECT COUNT(*) AS total FROM listedeck'); 
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
                
                $BDDcard=mysqli_query($connect,'SELECT * FROM listedeck ORDER BY idNombre ASC LIMIT '.$firstCard.', '.$cartepage.'');
                
                while($infoCard=mysqli_fetch_assoc($BDDcard)) // On lit les entrées une à une grâce à une boucle
                {
                    echo    '<div class="thumb_page">
                                    
                                    <a href="Site Finale/Deck-'.$infoCard['NomDeck'].'.php" >

                                        <div class="fond_carte_s" >
                                            <img src="'.$infoCard['Image'].'" class="carte">
                                        </div>

                                        <h5 class="h5"><a href="Site Finale/Deck-'.$infoCard['NomDeck'].'.php" >'.$infoCard['NomDeck'].'</a></h5>
                                        
                                        <small>'.$infoCard['DateCreation'].'</small>
                                </div>';
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
                        echo ' <a href="Test2.php?page='.$i.'">'.$i.'</a> ';
                    }
                }
                echo '</p>';
            ?>
        </div>  
    </body>
</html>
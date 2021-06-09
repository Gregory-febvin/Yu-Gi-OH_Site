<html>
    <head>
         <link href="Site Finale/css/Menu_Principale.css" rel="stylesheet">
         <meta charset=UTF-8>
    </head>
    
<body>                    
    <div class="header"> <!--Entête du site avec un bouton pour revenir au menue principal et le titre ou logo du site-->
        <div class="header_navbar">
              <h1 class="header_navbar_logo">Yu-Gi-Oh Deck</h1>
                
                <div class="header_navbar_menu">

                    <a href="index.php">
                        <img src="Site Finale/Image/Menu-Creation.png" width="120" height="40" alt="image du menue principale" />
                    </a>

                    <!--
                    <a href="Site Finale/Banlist.html">
                        <img src="Site Finale/menu_resize.png" width="200" height="40" alt="image de la banlist" />
                    </a>
                    -->

                </div> 
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
                                
                                <a href="Site Finale/Deck-'.$infoCard['Nom'].'.php" >

                                    <div class="fond_carte_s" >
                                        <img src="'.$infoCard['Image'].'" class="carte">
                                    </div>

                                    <h5 class="h5"><a href="Site Finale/Deck-'.$infoCard['Nom'].'.php" >'.$infoCard['Nom'].'</a></h5>
                                    
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
        
<!--
    <div class="audio">
        <audio src="Site Finale/yomi.mp3" controls>
        </audio>
    </div>
-->

<!--
<div class="box inside_demi_col " >
    <h2>Mes Decks <em>Yu-Gi-Oh!</em> (6)</h2>

    <div class="thumb_page">
        <a href="Site Finale/Deck-Sky-Striker.php" title="Lien vers Sky-Striker">
        <div class="fond_carte_s" >
            <img src="Site Finale/Image/Sky Striker/Raye.png" alt="Assaut de l'air - As - Raye"  class="carte">
        </div></a>
        <h5><a href="Site Finale/Deck-Sky-Striker.php" title="Lien vers Sky Striker">Sky Striker</a></h5>
        <small>par Zerzeusse le [28/02/2020]</small>
    </div>

    <div class="thumb_page">
        <a href="Site Finale/Deck-Dragon-Maid.php" title="Lien vers DragonMaid">
        <div class="fond_carte_s">
            <img src="Site Finale/Image/Dragon Maid/Extra Deck/HouseDragonmaid.png" alt="Maison Dragonirène"  class="carte">
        </div></a>
        <h5><a href="Site Finale/Deck-Dragon-Maid.php" title="Lien vers DragonMaid">DragonMaid</a></h5>
        <small>par Zerzeusse le [06/04/2020]</small>
    </div>

    <div class="thumb_page">
        <a href="Site Finale/Deck-Aromage.php" title="Lien vers Aramages">
        <div class="fond_carte_s">
            <img src="Site Finale/Image/Aromage/Extra-Deck/RosmarinAromatherapie.png" alt="Jasmin Aromatherapie"  class="carte">
        </div></a>
        <h5><a href="Site Finale/Deck-Aromage.php" title="Lien vers Aromages">Aromages</a></h5>
        <small>par Zerzeusse le [27/01/2020]</small>
    </div>

    <div class="thumb_page">
        <a href="Site Finale/Deck-Z-arc.php" title="Lien vers Z-arc">
        <div class="fond_carte_s">
            <img src="Site Finale/Image/Pendule/Extra-Deck/Z-arc.png" alt="Z-arc, roi supreme "  class="carte">
        </div></a>
        <h5><a href="Site Finale/Deck-Z-arc.php" title="Lien vers Z-arc">Z-arc</a></h5>
        <small>par Zerzeusse le [19/06/2019]</small>
    </div>
    <div class="thumb_page">
        <a href="Site Finale/Deck-Shadoll.php" title="Lien vers Shadoll">
        <div class="fond_carte_s" >
            <img src="Site Finale/Image/Shadoll/Extra Deck/Winda.png" alt="Winda Marionnette de l'Ombre El"  class="carte">
        </div></a>
        <h5><a href="Site Finale/Deck-Sky-Striker.php" title="Lien vers Sky Striker">Shadoll</a></h5>
        <small>par Zerzeusse le [01/11/2020]</small>
    </div>
    <div class="thumb_page">
        <a href="Site Finale/Deck-Mayakashi.php" title="Lien vers Mayakashi">
        <div class="fond_carte_s" >
            <img src="Site Finale/Image/Mayakashi/Extra deck/Yukki-Onna Link4.png" alt="Yuki-Onna, Mayakashi du Zéro Absolu"  class="carte">
        </div></a>
        <h5><a href="Site Finale/Deck-Mayakashi.php" title="Lien vers Mayakashi">Mayakashi</a></h5>
        <small>par Zerzeusse le [01/11/2020]</small>
    </div>
                
</div>
-->

<!--
    <div class="Banner" id="banners" align="center" >

    <a href="Site Finale/CV Anglais.html" ><img src="Site Finale/Image-Me contacter.jpg" height="350px" width="500px"></a>
    <a href="Site Finale/Banlist.html" ><img src="Site Finale/Image-Banlist.jpg" height="350px" width="500px"></a>
           
</div>   
-->
  
</body>
</html>






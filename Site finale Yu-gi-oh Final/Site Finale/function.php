<?php

function AffichageMenu(){
    $connect = mysqli_connect('localhost', 'root', '','yugioh');
                
    $cartepage=6; //Affichage de 6 decks par page
    

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
    
    while($infoDeck=mysqli_fetch_assoc($BDDcard)) // On lit les entrées une à une grâce à une boucle
    {
        echo    '<div class="thumb_page" onclick="return($infoDeck["NomDeck"]);">
                    
                    <a href="Site Finale/deck.php?data='.$infoDeck['NomDeck'].'" >

                        <div class="fond_carte_s" >
                            <img src="'.$infoDeck['Image'].'" class="carte">
                        </div>

                    <h5 class="h5"><a href="Site Finale/Deck-'.$infoDeck['NomDeck'].'.php" >'.$infoDeck['NomDeck'].'</h5></a>
                    <small>'.$infoDeck['DateCreation'].'</small>

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
            echo ' <a href="index.php?page='.$i.'">'.$i.'</a> ';
        }
    }
    echo '</p>';
}

function AffichageCarte($Deck){
    try{
        $BDD= new PDO('mysql:host=localhost;dbname=yugioh','root',''); 
    }
    catch(Exeption $e){
        die('Erreur : ' . $e->getMessage());
    }

        $Monstre = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Monstre' AND listedeck.NomDeck = '$Deck'";
        $Monstreresult = $BDD->query($Monstre);

                $NbMonstreBDD = "SELECT SUM(`NbCarte`) FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Monstre' AND listedeck.NomDeck = '$Deck'";
                $NbMonstreResult = $BDD->query($NbMonstreBDD);
                $NbMonstre=$NbMonstreResult->fetch();

        $Magie = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Magie' AND listedeck.NomDeck = '$Deck'";
        $Magieresult = $BDD->query($Magie);

                $NbMagieBDD = "SELECT SUM(`NbCarte`) FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Magie' AND listedeck.NomDeck = '$Deck'";
                $NbMagieResult = $BDD->query($NbMagieBDD);
                $NbMagie=$NbMagieResult->fetch();

        $Piege = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Piege' AND listedeck.NomDeck = '$Deck'";
        $Piegeresult = $BDD->query($Piege);

                $NbPiegeBDD = "SELECT SUM(`NbCarte`) FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Piege' AND listedeck.NomDeck = '$Deck'";
                $NbPiegeResult = $BDD->query($NbPiegeBDD);
                $NbPiege=$NbPiegeResult->fetch();

        $Extra = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Extra' AND listedeck.NomDeck = '$Deck'";
        $Extraresult = $BDD->query($Extra);

                $NbExtraBDD = "SELECT SUM(`NbCarte`) FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Extra' AND listedeck.NomDeck = '$Deck'";
                $NbExtraResult = $BDD->query($NbExtraBDD);
                $NbExtra=$NbExtraResult->fetch();

            echo '<table class="TableDeck">';
                if($NbMonstre['SUM(`NbCarte`)']>0){
                    echo '<thead><th>Monstre ( '.$NbMonstre['SUM(`NbCarte`)'].' )</th><th>Nb jouée</th></thead>';
                        while($CarteMonstre=$Monstreresult->fetch()){
                            echo utf8_encode('<tbody><tr><td id="'.$CarteMonstre['id'].'" onmouseover="showImage('.$CarteMonstre['id'].')" onmouseout="hideImage('.$CarteMonstre['id'].')"><img src="'.$CarteMonstre['LienImage'].'" class="card"/>'.$CarteMonstre['NomCarte'].'</td>'.'<td>'.$CarteMonstre['NbCarte'].'</td></tr></tbody>');
                        }
                }
                if($NbMagie['SUM(`NbCarte`)']>0){
                    echo '<thead><th>Magie ( '.$NbMagie['SUM(`NbCarte`)'].' )</th><th>Nb jouée</th></thead>';
                        while($CarteMagie=$Magieresult->fetch()){
                            echo utf8_encode('<tbody><tr><td id="'.$CarteMagie['id'].'" onmouseover="showImage('.$CarteMagie['id'].')" onmouseout="hideImage('.$CarteMagie['id'].')"><img src="'.$CarteMagie['LienImage'].'" class="card"/>'.$CarteMagie['NomCarte'].'</td>'.'<td>'.$CarteMagie['NbCarte'].'</td></tr></tbody>');
                        }
                }
                if($NbPiege['SUM(`NbCarte`)']>0){
                    echo '<thead><th>Piège ( '.$NbPiege['SUM(`NbCarte`)'].' )</th><th>Nb jouée</th></thead>';
                        while($CartePiege=$Piegeresult->fetch()){
                            echo utf8_encode('<tbody><tr><td id="'.$CartePiege['id'].'" onmouseover="showImage('.$CartePiege['id'].')" onmouseout="hideImage('.$CartePiege['id'].')"><img src="'.$CartePiege['LienImage'].'" class="card"/>'.$CartePiege['NomCarte'].'</td>'.'<td>'.$CartePiege['NbCarte'].'</td></tr></tbody>');
                        }
                }
                if($NbExtra['SUM(`NbCarte`)']>0){
                    echo '<thead><th>Extra ( '.$NbExtra['SUM(`NbCarte`)'].' )</th><th>Nb jouée</th></thead>';
                        while($CarteExtra=$Extraresult->fetch()){
                            echo utf8_encode('<tbody><tr><td id="'.$CarteExtra['id'].'" onmouseover="showImage('.$CarteExtra['id'].')" onmouseout="hideImage('.$CarteExtra['id'].')"><img src="'.$CarteExtra['LienImage'].'" class="card"/>'.$CarteExtra['NomCarte'].'</td>'.'<td>'.$CarteExtra['NbCarte'].'</td></tr></tbody>');
                        }
                }
            echo '</table>';
}

function InfoDeck($Deck){

    try{
        $BDD= new PDO('mysql:host=localhost;dbname=yugioh','root',''); 
    }
    catch(Exeption $e){
        die('Erreur : ' . $e->getMessage());
    }

    $infoDeckBDD = "SELECT * FROM `listedeck`,`user` WHERE listedeck.NomDeck='$Deck' AND user.idUser = '1' ";
    $infoDeckResult = $BDD->query($infoDeckBDD);
    $infoDeck = $infoDeckResult->fetch();


    echo '<div class="BoxDeckInfo">             
            <h1>
                <p>Deck '.$infoDeck['NomDeck'].'</p>
            </h1>
        <div class="fond_carte_s" style="margin:0 10px 0 0;float:left;">
            <img src="'.$infoDeck['Image'].'" height="120px" width="90px">
        </div> 
            <p>Créé par Zerzeusse le '.$infoDeck['DateCreation'].'</p>
            <p><strong>Categorie</strong> : Deck Yu-Gi-Oh</p> 
            <p><strong>Format de Tournoi</strong> : Aucun</p>
    </div>';
}
?>
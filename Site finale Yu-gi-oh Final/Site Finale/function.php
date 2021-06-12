<?php

function AffichageMenu(){
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
            echo ' <a href="index.php?page='.$i.'">'.$i.'</a> ';
        }
    }
    echo '</p>';
}

function AffichageCarte(){
    try{
        $BDD= new PDO('mysql:host=localhost;dbname=yugioh','root',''); 
    }
    catch(Exeption $e){
        die('Erreur : ' . $e->getMessage());
    }

        $Monstre = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Monstre'";
        $Monstreresult = $BDD->query($Monstre);

                $NbMonstreBDD = "SELECT SUM(`NbCarte`) FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Monstre'";
                $NbMonstreResult = $BDD->query($NbMonstreBDD);
                $NbMonstre=$NbMonstreResult->fetch();

        $Magie = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Magie'";
        $Magieresult = $BDD->query($Magie);

                $NbMagieBDD = "SELECT SUM(`NbCarte`) FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Magie'";
                $NbMagieResult = $BDD->query($NbMagieBDD);
                $NbMagie=$NbMagieResult->fetch();

        $Piège = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Piège'";
        $Piègeresult = $BDD->query($Piège);

                $NbPiègeBDD = "SELECT SUM(`NbCarte`) FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Piège'";
                $NbPiègeResult = $BDD->query($NbPiègeBDD);
                $NbPiège=$NbPiègeResult->fetch();

        $Extra = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Extra'";
        $Extraresult = $BDD->query($Extra);

                $NbExtraBDD = "SELECT SUM(`NbCarte`) FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Extra'";
                $NbExtraResult = $BDD->query($NbExtraBDD);
                $NbExtra=$NbExtraResult->fetch();

            echo '<table class="TableDeck">';
                if($NbMonstre['SUM(`NbCarte`)']>0){
                    echo '<thead><th>Monstre ( '.$NbMonstre['SUM(`NbCarte`)'].' )</th><th>Nb jouée</th></thead>';
                        while($CarteMonstre=$Monstreresult->fetch()){
                            echo '<tbody><tr><td>'.$CarteMonstre['NomCarte'].'</td>'.'<td>'.$CarteMonstre['NbCarte'].'</td></tr></tbody>';
                        }
                }
                if($NbMagie['SUM(`NbCarte`)']>0){
                    echo '<thead><th>Magie ( '.$NbMagie['SUM(`NbCarte`)'].' )</th><th>Nb jouée</th></thead>';
                        while($CarteMagie=$Magieresult->fetch()){
                            echo '<tbody><tr><td>'.$CarteMagie['NomCarte'].'</td>'.'<td>'.$CarteMagie['NbCarte'].'</td></tr></tbody>';
                        }
                    }
                if($NbPiège['SUM(`NbCarte`)']>0){
                    echo '<thead><th>Piège ( '.$NbPiège['SUM(`NbCarte`)'].' )</th><th>Nb jouée</th></thead>';
                        while($CartePiège=$Piègeresult->fetch()){
                            echo '<tbody><tr><td>'.$CartePiège['NomCarte'].'</td>'.'<td>'.$CartePiège['NbCarte'].'</td></tr></tbody>';
                        }
                }
                if($NbExtra['SUM(`NbCarte`)']>0){
                    echo '<thead><th>Extra ( '.$NbExtra['SUM(`NbCarte`)'].' )</th><th>Nb jouée</th></thead>';
                        while($CarteExtra=$Extraresult->fetch()){
                            echo '<tbody><tr><td>'.$CarteExtra['NomCarte'].'</td>'.'<td>'.$CarteExtra['NbCarte'].'</td></tr></tbody>';
                        }
                }
            echo '</table>';
}

function test(){
    try{
        $BDD= new PDO('mysql:host=localhost;dbname=yugioh','root',''); 
    }
    catch(Exeption $e){
        die('Erreur : ' . $e->getMessage());
    }
        $Deck = 'Sky-Striker';
        $NomDeckBDD = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Monstre' AND listedeck.NomDeck = '$Deck'";
        $NomDeckResult = $BDD->query($NomDeckBDD);
                
        while($NomDeck=$NomDeckResult->fetch()){
            echo $NomDeck['NomCarte'];
        }
                    
}
?>
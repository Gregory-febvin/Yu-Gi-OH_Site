<?php

function AffichageCarte(){
    try{
        $BDD= new PDO('mysql:host=localhost;dbname=yugioh','root',''); 
    }
    catch(Exeption $e){
        die('Erreur : ' . $e->getMessage());
    }

        $NbMonstreBDD = "SELECT SUM(`NbCarte`) FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Monstre'";
        $NbMonstreResult = $BDD->query($NbMonstreBDD);
        $NbMonstre=$NbMonstreResult->fetch();

        $Monstre = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Monstre'";
        $Monstreresult = $BDD->query($Monstre);
        $CarteMonstre=$Monstreresult->fetch();

        $Magie = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Magie'";
        $Magieresult = $BDD->query($Magie);
        $CarteMagie=$Magieresult->fetch();

        $Piège = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Piège'";
        $Piègeresult = $BDD->query($Piège);
        $CartePiège=$Piègeresult->fetch();

        $Extra = "SELECT * FROM `carte`,`listedeck`,`decklist` WHERE decklist.idDeck = listedeck.idNombre AND carte.id = decklist.Carte AND carte.TypeCarte='Extra'";
        $Extraresult = $BDD->query($Extra);
        $CarteExtra=$Extraresult->fetch();

            echo '<table><th>'.$NbMonstre.'</th>';
                while($CarteMonstre=$Monstreresult->fetch()){
                    echo '<tr><td>'.$CarteMonstre['NomCarte'].'</td>'.'<td>'.$CarteMonstre['NbCarte'].'</td></tr>';
                }
                while($CarteMagie=$Magieresult->fetch()){
                    echo '<tr><td>'.$CarteMagie['NomCarte'].'</td>'.'<td>'.$CarteMagie['NbCarte'].'</td></tr>';
                }
                while($CartePiège=$Piègeresult->fetch()){
                    echo '<tr><td>'.$CartePiège['NomCarte'].'</td>'.'<td>'.$CartePiège['NbCarte'].'</td></tr>';
                }
                while($CarteExtra=$Extraresult->fetch()){
                    echo '<tr><td>'.$CarteExtra['NomCarte'].'</td>'.'<td>'.$CarteExtra['NbCarte'].'</td></tr>';
                }
            echo '</table>';
}
?>


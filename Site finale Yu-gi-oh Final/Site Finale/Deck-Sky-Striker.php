<html>
    <head>
         <link href="css/Deck.css " rel="stylesheet">
         <meta charset=UTF-8>
    </head>
    
<body style="background-color: #E8F2D8;">                    
    <div class="header">                                             <!--Entête du site avec un bouton pour revenir au menue principal et le titre ou logo du site-->
        <div class="header_navbar">
            <div class="header_navbar_logo">
                <h1 clas="header_navbar_logo">Site Web</h1>
                    <div class="header_navbar_menu">
                        <a href="../index.php">
                            <img src="Image/Menu-Creation.png" width="120" height="40" alt="image du menue principale" />
                        </a>
                    </div>
            </div> 
        </div>
    </div>

    <div class="BoxDeckInfo" id="deck-header" style="background-color: whitesmoke;">             <!--Création d'un encadré avec des information sur le créateur du deck, son format, sa légalité et le nom du deck-->
        <h1>
            <em>Deck</em> Sky Striker 
        </h1>
            <div class="fond_carte_s" style="margin:0 10px 0 0;float:left;">
                <img src="Image/Sky Striker/Raye.png" alt="Assaut de l'Air - As - Raye" height="120px" width="90px">
            </div>

        <em>Créé par <a>Zerzeusse</a> le 28 février 2020</em>
        <br><strong> Categorie :</strong> Deck Yu-Gi-Oh 
        <br><strong> Format de Tournoi</strong> : Aucun

        <p><img src="Image/BoutonLegal.png" alt="" title="Deck Légal"> Ce deck est légal</p>
    </div>
        

    <div class="Box_Decklist">

    <table border="" width="35%" id="decklistSS">

      <thead>
        <tr>
            <th colspan="2">Main Deck (42)</th>
        </tr>
      </thead>


      <thead> 
        <tr>
            <th >Monstres (15)</th>
            <th class="Nbcollection">Nb jouée</th>
            
        </tr>
      </thead>

      <tbody style="background-color: whitesmoke;" class="cardList">   <!--Définition d'une couleur pour une certaine partie du tableaux afin de le rendre facilement lisible-->
          <tr>
                <td id="1" onmouseover="showImage(1)" onmouseout="hideImage(1)">
                    <img src="Image/Sky Striker/Raye.png" class="card"/>
                    <span class="card_title" onmouseover()>3 Assaut de l'Air - As - Raye</span></td>
                <td class="Nbcollection">3</td>
          </tr>
          <tr>
                <td id="2" onmouseover="showImage(2)" onmouseout="hideImage(2)">
                    <img src="Image/Sky Striker/SkyStrikeRoze.png" class="card"/>    
                    <span class="card_title">3 Assaut de l'Air - As - Roze</span></td>
                <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="3" onmouseover="showImage(3)" onmouseout="hideImage(3)">
                <img src="Image/Sky Striker/AshBlossom.png" class="card"/>
                <span class="card_title">3 Floraison de Cendres et Joyeux Printemps</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="4" onmouseover="showImage(4)" onmouseout="hideImage(4)">
                <img src="Image/Sky Striker/GhostOgre.png" class="card"/>
                <span class="card_title">3 Ogre Fantômes et Lapins des Neiges</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="5" onmouseover="showImage(5)" onmouseout="hideImage(5)">
                <img src="Image/Sky Striker/EffectVeileur.png" class="card"/>
                <span class="card_title">3 Illusioniste d'Effet</span></td>
            <td class="Nbcollection">3</td>
        </tr>
      </tbody>

      <thead>
        <tr>
            <th>Magie (27)</th>
            <th class="Nbcollection">Nb jouée</th>
        </tr>
      </thead> 

      <tbody style="background-color: whitesmoke;">
        <tr>
            <td id="6" onmouseover="showImage(6)" onmouseout="hideImage(6)">
                <img src="Image/Sky Striker/ZoneZero.png" class="card"/>
                <span class="card_title">2 Assaut de l'air - Espace Aérien - Zone Zéro</span>
            </td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td id="7" onmouseover="showImage(7)" onmouseout="hideImage(7)">
            <img src="Image/Sky Striker/JamingWave.png" class="card"/>
                <span class="card_title">1 Assaut de l'air - Manoeuvre - Ondes de Brouillage</span></td>
                <td class="Nbcollection">1</td>
        </tr>
        <tr>
            <td id="8" onmouseover="showImage(8)" onmouseout="hideImage(8)">
                <img src="Image/Sky Striker/AfterBurn.png" class="card"/>
                <span class="card_title">1 Assaut de l'air - Manoeuvre - Postcombustion !</span></td>
            <td class="Nbcollection">1</td>
        </tr>
        <tr>
            <td id="9" onmouseover="showImage(9)" onmouseout="hideImage(9)">
                <img src="Image/Sky Striker/WidowAnchor.png" class="card"/>
                <span class="card_title">3 Assaut de l'air - Mécha - Ancre Veuve</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="10" onmouseover="showImage(10)" onmouseout="hideImage(10)">
                <img src="Image/Sky Striker/EagleBooster.png" class="card"/>
                <span class="card_title">1 Assaut de l'air - Mécha - Boost Aigle</span></td>
            <td class="Nbcollection">1</td>
        </tr>
        <tr>
            <td id="11" onmouseover="showImage(11)" onmouseout="hideImage(11)">
                <img src="Image/Sky Striker/SharkCanon.png" class="card"/>
                <span class="card_title">1 Assaut de l'air - Mécha - Canon Requin</span></td>
            <td class="Nbcollection">1</td>
        </tr>
        <tr>
            <td id="12" onmouseover="showImage(12)" onmouseout="hideImage(12)">
                <img src="Image/Sky Striker/HornetDrone.png" class="card"/>
                <span class="card_title">2 Assaut de l'air - Mécha - Drones Frelon</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td id="13" onmouseover="showImage(13)" onmouseout="hideImage(13)">
                <img src="Image/Sky Striker/Multirole.png" class="card"/>
                <span class="card_title">2 Assaut de l'air - Méchamodules - Multirôle</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td id="14" onmouseover="showImage(14)" onmouseout="hideImage(14)">
                <img src="Image/Sky Striker/HerculeBase.png" class="card"/>
                <span class="card_title">3 Assaut de l'air - Mécharmure - Base Hercule</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="15" onmouseover="showImage(15)" onmouseout="hideImage(15)">
                <img src="Image/Sky Striker/Engage.png" class="card"/>
                <span class="card_title">3 Assaut de l'air - Mobilisation - A l'attaque !</span></td>
            <td class="Nbcollection">3</td>
        </tr>
      </tbody>

      <thead>
        <tr>
            <th>Extra Deck (15)</th>
            <th class="Nbcollection">Nb jouée</th>
        </tr>
      </thead>

      <tbody style="background-color: whitesmoke;">
        <tr>
            <td id="16" onmouseover="showImage(16)" onmouseout="hideImage(16)">
                <img src="Image/Sky Striker/Extra Deck/Kaina.png" class="card"/>
                <span class="card_title">2 Assaut de l'air - As - Kaina</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td id="17" onmouseover="showImage(17)" onmouseout="hideImage(17)">
                <img src="Image/Sky Striker/Extra Deck/TopologicBomberDragon.png" class="card"/>
                <span class="card_title">1 Dragon Bombe Topologique</span></td>
            <td class="Nbcollection">1</td>
        </tr>
        <tr>
            <td id="18" onmouseover="showImage(18)" onmouseout="hideImage(18)">
            <img src="Image/Sky Striker/Extra Deck/SwordborelDragon.png" class="card"/>
                <span class="card_title">1 Dragon Epéborelle</span></td>
            <td class="Nbcollection">1</td>
        </tr>
        <tr>
            <td id="19" onmouseover="showImage(19)" onmouseout="hideImage(19)">
                <img src="Image/Sky Striker/Extra Deck/Kagari.png" class="card"/>
                <span class="card_title">3 Assaut de l'air - As - Kagari</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="20" onmouseover="showImage(20)" onmouseout="hideImage(20)">
                <img src="Image/Sky Striker/Extra Deck/Shizuku.png" class="card"/>
                <span class="card_title">3 Assaut de l'air - As - Shizuku</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="21" onmouseover="showImage(21)" onmouseout="hideImage(21)">
                <img src="Image/Sky Striker/Extra Deck/Hayaté.png" class="card"/>
                <span class="card_title">3 Assaut de l'air - As - Hayaté</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="22" onmouseover="showImage(22)" onmouseout="hideImage(22)">
                <img src="Image/Sky Striker/Extra Deck/Zeke.png" class="card"/>
                <span class="card_title">3 Assaut de l'air - As - Zeke</span></td>
            <td class="Nbcollection">3</td>
        </tr>
      </tbody>

    </table>
    </div>

<!--
<table  class='image table' align='center'>                   
    <tr>
        <td> <img src="Image/Sky Striker/Raye.png" class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Raye.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Raye.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/SkyStrikeRoze.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/SkyStrikeRoze.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/SkyStrikeRoze.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/AshBlossom.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/AshBlossom.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/AshBlossom.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/GhostOgre.png"  class="IMG"/>  </td>
    </tr>
    <tr>
        <td> <img src="Image/Sky Striker/GhostOgre.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/GhostOgre.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/EffectVeileur.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/EffectVeileur.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/EffectVeileur.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/ZoneZero.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/ZoneZero.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/JamingWave.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/AfterBurn.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/WidowAnchor.png"  class="IMG"/>  </td>
    </tr>
    <tr>
        <td> <img src="Image/Sky Striker/WidowAnchor.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/WidowAnchor.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/EagleBooster.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/SharkCanon.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/HornetDrone.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/HornetDrone.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Multirole.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Multirole.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/HerculeBase.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/HerculeBase.png"  class="IMG"/>  </td>
    </tr>
    <tr>
        <td> <img src="Image/Sky Striker/HerculeBase.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Engage.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Engage.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Engage.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/PotOfGreed.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/PotOfGreed.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/PotOfGreed.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/ReinforcemenOfTheArmy.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/ReinforcemenOfTheArmy.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/TerraFormation.png"  class="IMG"/>  </td>
    </tr>
    <tr>
        <td> <img src="Image/Sky Striker/TwinTwister.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/TwinTwister.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Kaina.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Kaina.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/TopologicBomberDragon.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/SwordborelDragon.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Kagari.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Kagari.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Kagari.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Shizuku.png"  class="IMG"/>  </td>
        
    </tr>
        <td> <img src="Image/Sky Striker/Extra Deck/Shizuku.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Shizuku.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Hayaté.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Hayaté.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Hayaté.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Zeke.png"  class="IMG"/>  </td>
        <td> <img src="Image/Sky Striker/Extra Deck/Zeke.png"  class="IMG"/>  </td>



</table>
-->
</body>
<script>

    function showImage(id) {
        const target = document.getElementById(id).getElementsByTagName('img')[0];
        target.style.display = "inherit";
    }

    function hideImage(id) {
        const target = document.getElementById(id).getElementsByTagName('img')[0];
        target.style.display = "none";
    }

</script>
</html>
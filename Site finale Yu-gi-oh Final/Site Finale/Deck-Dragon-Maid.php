<html>
    <head>
         <link href="css/Deck.css " rel="stylesheet">
         <meta charset=UTF-8>
    </head>
    
<body style="background-color: #E8F2D8;">                    <!--Entête du site avec un bouton pour revenir au menue principal et le titre ou logo du site-->
    <div class="header">
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
         <em>Deck</em> Dragon-Maid 
         </h1>
         <div class="fond_carte_s" style="margin:0 10px 0 0;float:left;">
         <img src="Image/Dragon Maid/Extra Deck/HouseDragonmaid.png" alt="House Dragon maid" height="120px" width="90px">
         </a></div> 
         <em>Créé par <a>Zerzeusse</a> le 6 avril 2020</em>
         <br><strong> Categorie :</strong> Deck Yu-Gi-Oh 
         <br><strong> Format de Tournoi</strong> : Aucun 
         <p><img src="Image/BoutonLegal.png" alt="" title="Deck Légal"> Ce deck est légal</p>
      </div>

        

    <div class="Box_Decklist">

    <table border="" width="35%" id="decklistSS">

        <thead>
            <tr>
                <th colspan="2">Main Deck (41)</th>
            </tr>
        </thead>

      <thead>        
        <tr>
            <th >Monstres (19)</th>
            <th class="Nbcollection">Nb jouée</th>
        </tr>
      </thead>

      <tbody style="background-color: whitesmoke;">   <!--Définition d'une couleur pour une certaine partie du tableaux afin de le rendre facilement lisible-->
          <tr>
              <td id="1" onmouseover="showImage(1)" onmouseout="hideImage(1)">
                <img src="Image/Dragon Maid/Lorpar.png" class="card"/>
                <span class="card_title">2 Dragonirène Lorpar</span></td>
              <td class="Nbcollection">2</td>
          </tr>
          <tr>
            <td id="2" onmouseover="showImage(2)" onmouseout="hideImage(2)">
                <img src="Image/Dragon Maid/Tinkhec.png" class="card"/>
                <span class="card_title">2 Dragonirène Tinkhec</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td id="3" onmouseover="showImage(3)" onmouseout="hideImage(3)">
                <img src="Image/Dragon Maid/Ernus.png" class="card"/>
                <span class="card_title">3 Dragonirène Ernus</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="4" onmouseover="showImage(4)" onmouseout="hideImage(4)">
                <img src="Image/Dragon Maid/ChambreDragonmaid.png" class="card"/>
                <span class="card_title">3 Chambre Dragonirène</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="5" onmouseover="showImage(5)" onmouseout="hideImage(5)">
                <img src="Image/Dragon Maid/KitchenDragonmaid.png" class="card"/>
                <span class="card_title">3 Cuisine Dragonirène</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="6" onmouseover="showImage(6)" onmouseout="hideImage(6)">
                <img src="Image/Dragon Maid/ParlorDragonmaid.png" class="card"/>
                <span class="card_title">3 Petit Salon Dragonirène</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td id="7" onmouseover="showImage(7)" onmouseout="hideImage(7)">
                <img src="Image/Dragon Maid/NurseDragonmaid.png" class="card"/>
                <span class="card_title">2 Infirmière Dragonirène</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td id="8" onmouseover="showImage(8)" onmouseout="hideImage(8)">
                <img src="Image/Dragon Maid/LaundryDragonmaid.png" class="card"/>
                <span class="card_title">1 Linge Dragonirène</span></td>
            <td class="Nbcollection">1</td>
        </tr>

      </tbody>
      <thead>
        
        <tr>
            <th>Magie (18)</th>
            <th class="Nbcollection">Nb jouée</th>
        </tr>

      </thead> 
      <tbody style="background-color: whitesmoke;">
        <tr>
            <td><span class="card_title">2 Appelé par la Tombe</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td><span class="card_title">2 Dragonirène Adieux</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td><span class="card_title">2 Dragonirène Bienvenue</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td><span class="card_title">3 Dragonirène Hospitalité</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td><span class="card_title">3 Dragonirène Passage</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td><span class="card_title">2 Pot de Cupidité</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td><span class="card_title">2 Sacrifice Inutile</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td><span class="card_title">2 Super Polymérisation</span></td>
            <td class="Nbcollection">2</td>
        </tr>
       
      </tbody>

    <tr>

    <thead>
         <th>Piège (4)</th>
         <th class="Nbcollection">Nb jouée</th>
    </thead>

        <tbody style="background-color: whitesmoke;">
            <tr>
                <td>
                    <span class="card_title">2 Dragonirène Pause</span>
                </td>
                <td class="Nbcollection">2</td>
            </tr>
            <tr>
                <td>
                    <span class="card_title">2 Inifini Éphémère</span>
                </td>
                <td class="Nbcollection">2</td>
            </tr>
    </tr>
</thead> 
  
 
   
  </tbody>
      <thead>
        <tr>
            <th>Extra Deck (15)</th>
            <th class="Nbcollection">Nb jouée</th>
            
        </tr>
      </thead>
      <tbody style="background-color: whitesmoke;">
        <tr>
            <td><span class="card_title">2 Dragonirène Sheou</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td><span class="card_title">1 Dragon Chargeborrelle</span></td>
            <td class="Nbcollection">1</td>
        </tr>
        <tr>
            <td><span class="card_title">1 Dragon Epéborelle</span></td>
            <td class="Nbcollection">1</td>
        </tr>
        <tr>
            <td><span class="card_title">3 Maison Dragonirène</span></td>
            <td class="Nbcollection">3</td>
        </tr>
        <tr>
            <td><span class="card_title">2 Triphyovérutum Prédaplante</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td><span class="card_title">2 Dragon Fusion Venin Affamé</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td><span class="card_title">2 Dragostapelia Prédaplante</span></td>
            <td class="Nbcollection">2</td>
        </tr>
        <tr>
            <td><span class="card_title">2 Sceau Hiératique des Sphères Divines</span></td>
            <td class="Nbcollection">2</td>
        </tr>
      </tbody>
    </table>
    </div>


<div class="deck_title">

</div>


<table  class='image table' align='center'>                   <!--Création du tableaux avec ajout des photos-->
    <tr>
        <td> <img src="Image/Dragon Maid/Lorpar.png" class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Lorpar.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Tinkhec.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Tinkhec.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Ernus.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Ernus.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Ernus.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/ChambreDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/ChambreDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/ChambreDragonmaid.png"  class="IMG"/>  </td>
    </tr>
    <tr>
        <td> <img src="Image/Dragon Maid/KitchenDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/KitchenDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/KitchenDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/ParlorDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/ParlorDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/ParlorDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/NurseDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/NurseDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/LaundryDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/CalledByTheGrave.png"  class="IMG"/>  </td>
    </tr>
    <tr>
        <td> <img src="Image/Dragon Maid/CalledByTheGrave.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/SendOffDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/SendOffDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/DragonmaidWelcome.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/DragonmaidWelcome.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/DragonmaidHospitality.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/DragonmaidHospitality.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/DragonmaidHospitality.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/DragonmaidChangeOver.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/DragonmaidChangeOver.png"  class="IMG"/>  </td>
    </tr>
    <tr>
        <td> <img src="Image/Dragon Maid/DragonmaidChangeOver.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/PotOfGreed.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/PotOfGreed.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/FoolishBurial.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/FoolishBurial.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/SuperPolymerisation.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/SuperPolymerisation.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/DragonmaidDowntime.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/DragonmaidDowntime.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/DragonmaidSheou.png"  class="IMG"/>  </td>
    </tr>
    <tr>
         <td> <img src="Image/Dragon Maid/Extra Deck/DragonmaidSheou.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/HouseDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/HouseDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/HouseDragonmaid.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/PredaplantTriphyoverutum.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/PredaplantTriphyoverutum.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/StarvingVenomFusionDragon.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/StarvingVenomFusionDragon.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/PredaplantDragostapelia.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/PredaplantDragostapelia.png"  class="IMG"/>  </td>
    </tr>

        <td> <img src="Image/Dragon Maid/Extra Deck/BorreloadDragon.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/SwordborrelDragon.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/HieraticSealOfTheHeavenlySpheres.png"  class="IMG"/>  </td>
        <td> <img src="Image/Dragon Maid/Extra Deck/HieraticSealOfTheHeavenlySpheres.png"  class="IMG"/>  </td>
</table>
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
</body>
</html>
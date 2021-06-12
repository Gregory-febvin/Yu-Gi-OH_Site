<html>
    <head>
        <link href="css/Deck.css " rel="stylesheet">
        <meta charset=UTF-8>
        <?php include("function.php")?>
    </head>
<body style="background-color: #E8F2D8;">
                    
        <div class="header"> <!--Entête du site avec un bouton pour revenir au menue principal et le titre ou logo du site-->
            <div class="header_navbar">

                <a href="../index.php" class="link">
                <h1 class="header_navbar_logo">Yu-Gi-Oh Deck Builder</h1>
                </a>

            </div>
        </div>

    <div class="BoxDeckInfo" id="deck-header" style="background-color: whitesmoke;">             <!--Création d'un encadré avec des information sur le créateur du deck, son format, sa légalité et le nom du deck-->
    <h1>
        <em>Deck</em> Z-arc 
        </h1>
        <div class="fond_carte_s" style="margin:0 10px 0 0;float:left;">
        <img src="Image/Pendule/Extra-Deck/Z-arc.png" alt="Z-arc, Roi Suprême" height="120px" width="90px">
        </div> 
        <em>Créé par Zerzeusse le 19 juin 2019</em>
        <br><strong> Categorie :</strong> Deck Yu-Gi-Oh 
        <br><strong> Format de Tournoi</strong> : Aucun 
        <p><img src="Image/BoutonLegal.png" alt="" title="Deck Légal"> Ce deck est légal</p>
    </div>
    
    <?php AffichageCarte();?>

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

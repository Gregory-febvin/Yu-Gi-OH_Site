<html>
    <head>
        <link href="css/Deck.css " rel="stylesheet">
        <meta charset=UTF-8>
        <?php include("function.php")?>
    </head>
    
<body style="background-color: #E8F2D8;">                    <!--Entête du site avec un bouton pour revenir au menue principal et le titre ou logo du site-->
        <div class="header"> <!--Entête du site avec un bouton pour revenir au menue principal et le titre ou logo du site-->
            <div class="header_navbar">

                <a href="../index.php" class="link">
                <h1 class="header_navbar_logo">Yu-Gi-Oh Deck Builder</h1>
                </a>

            </div>
        </div>

    

    <?php
        $Deck = $_GET['data'];
        InfoDeck($Deck);
        AffichageCarte($Deck);
        
    ?>
      
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
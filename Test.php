<html>
<head>
<title>Exemple de pagination automatique sur un livre d or</title>
</head>
<body>
<?php
//Connexion à la base de données
mysql_connect('serveur', 'utilisateur', 'motdepasse');
mysql_select_db('basededonnees');
 $MaBase = new PDO('mysql:host=localhost; dbname=test; charset=utf8','root', '');
 
$messagesParPage=5; //Nous allons afficher 5 messages par page.
 
//Une connexion SQL doit être ouverte avant cette ligne...
$retour_total=$MaBase->query('SELECT COUNT(*) AS total FROM livredor'); //Nous récupérons le contenu de la requête dans $retour_total
$donnees_total=$retour_total->fetch(); //On range retour sous la forme d'un tableau.
$total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.
 
//Nous allons maintenant compter le nombre de pages.
$nombreDePages=ceil($total/$messagesParPage);
 
if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
{
     $pageActuelle=intval($_GET['page']);
 
     if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
     {
          $pageActuelle=$nombreDePages;
     }
}
else // Sinon
{
     $pageActuelle=1; // La page actuelle est la n°1    
}
 
$premiereEntree=($pageActuelle-1)*$messagesParPage; // On calcule la première entrée à lire
 
// La requête sql pour récupérer les messages de la page actuelle.
$retour_messages=mysql_query('SELECT * FROM livredor ORDER BY id DESC LIMIT '.$premiereEntree.', '.$messagesParPage.'');
 
while($donnees_messages=mysql_fetch_assoc($retour_messages)) // On lit les entrées une à une grâce à une boucle
{
     //Je vais afficher les messages dans des petits tableaux. C'est à vous d'adapter pour votre design...
     //De plus j'ajoute aussi un nl2br pour prendre en compte les sauts à la ligne dans le message.
     echo '<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                     <td><strong>Ecrit par : '.stripslashes($donnees_messages['pseudo']).'</strong></td>
                </tr>
                <tr>
                     <td>'.nl2br(stripslashes($donnees_messages['message'])).'</td>
                </tr>
            </table><br /><br />';
    //J'ai rajouté des sauts à la ligne pour espacer les messages.   
}
 
echo '<p align="center">Page : '; //Pour l'affichage, on centre la liste des pages
for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
{
     //On va faire notre condition
     if($i==$pageActuelle) //S'il s'agit de la page actuelle...
     {
         echo ' [ '.$i.' ] '; 
     }    
     else //Sinon...
     {
          echo ' <a href="livredor.php?page='.$i.'">'.$i.'</a> ';
     }
}
echo '</p>';
?>
</body>
</html>


/*
CREATE TABLE `livredor` (
  `id` bigint(20) NOT NULL auto_increment,
  `pseudo` text,
  `message` text,
  KEY `id` (`id`)
) TYPE=MyISAM;
 
INSERT INTO `livredor` VALUES ('1','Tonio','Salut !
C\'est vraiment un super site ! ! !');
INSERT INTO `livredor` VALUES ('2','Jacot','Bravo !
Je te félicite pour ton site...');
INSERT INTO `livredor` VALUES ('3','Paul','Merci pour ce site très instructif !
Bonne continuation. :o)');
INSERT INTO `livredor` VALUES ('4','AZERTY','Cool.
Super design !');
INSERT INTO `livredor` VALUES ('5','MagaMan','Bravo !
Super le livre d\'or...');
INSERT INTO `livredor` VALUES ('6','Giro','10/10 !
Encore merci !');
INSERT INTO `livredor` VALUES ('7','Sms','tro bi1 ton site!');
INSERT INTO `livredor` VALUES ('8','All','C\'est rigolo comme site. ^^');
INSERT INTO `livredor` VALUES ('9','Moi','Bien joué.
C\'est un site très réussit !');
INSERT INTO `livredor` VALUES ('10','Weby','J\'adore !
Allez voir mon site :
www.monsite.com');
INSERT INTO `livredor` VALUES ('11','Cool','Très bon design, très bon site. ');
INSERT INTO `livredor` VALUES ('12','LEGEANTDU75','C\'est un peu vide, mais sympa quand même.
Bon courage.');
INSERT INTO `livredor` VALUES ('13','Prune','Oh lalalala !
Le boooo site ! ;o)');
*/

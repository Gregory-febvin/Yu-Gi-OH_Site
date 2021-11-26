<?php 

                
$cartepage=6; //Affichage de 6 decks par page




$nombreDePages=ceil(20/$cartepage);

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





?>
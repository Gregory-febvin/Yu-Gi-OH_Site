<?php
try{
    $BDD=new PDO('mysql:host=localhost;dbname=yugioh','root','');
}
catch(Exeption $e){
    die('Erreur : ' . $e->getMessage());
}


$requete = "SELECT * FROM carte ORDER BY id ";
$result = $BDD->query($requete);

while($carte=$result->fetch()){
    echo $carte['id'];
    echo '<td>'.$carte['Nom'].'</td>';
    echo '<td><img src="'.$carte['LienImage'].'"></td>';
}
?>
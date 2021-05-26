try{
    $user = "greg";
    $pass = "greg";
    $mabase = new PDO('mysql:localhost;dbname=YU_GI_OH', $user, $pass);
}catch(Exception $e){
    $errorMessage .= $e->getMessage();
}

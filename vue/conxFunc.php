<?php
function retourneConx()
{
    include_once("parametre.inc.php");
    $conx=new mysqli(HOST,USER,PASS,"mlr18",PORT);
    if($conx)
    {
        echo "<script type='text/javascript'>";
        echo "alert('Connexion etablie')</script>";
    }

}
?>


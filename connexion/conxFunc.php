<?php
include_once ("../controleur/mesExceptions.php");

function objetConnexion($fichierParametres)
{
    include_once($fichierParametres.".inc.php");

    //la connexion renvoie True ou False dans le cas d'un échec
    try
    {
        $conx=new mysqli(HOST,USER,PASS,BASE,PORT);
        if(!$conx)
        {
            throw new MonException("La connexion à la base n'a pas été 
                              effectuée...",1);
        }
        else
        {
            return $conx;
        }
    }
    catch (MonException $ex)
    {
        $ex->alerte();
    }
}


?>


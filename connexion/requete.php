<?php
include_once ("../controleur/mesExceptions.php");
include_once ("conxFunc.php");

function selectAll($fichierDeConnexion,$nomTable)
{
    $conx=objetConnexion($fichierDeConnexion);
    $rq="SELECT * FROM $nomTable;";
    //retourne un tableau itérable correspondant à la classe entière
    try
    {
        if(!$result=$conx->query($rq))
        {
            throw new MonException("Aucun résultat n'a été renvoyé par la requette \" selectAll(...)\"");
        }
        else
        {
            $conx->close();
            return $result;
        }
    }
    catch (MonException $ex)
    {
        $ex->alerte();
    }
}
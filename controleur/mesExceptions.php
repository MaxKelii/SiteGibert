<?php

class MonException extends Exception
{
    //retourne une pop up contenant le message d'erreur
    public function alerte()
    {
        $this->message="<script type='text/javascript'> alert('Erreur N° : ". $this->getCode().",
         Message :".$this->getMessage()."</script>";
        return $this->getMessage();
    }
}

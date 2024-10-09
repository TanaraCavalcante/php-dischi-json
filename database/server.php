<?php
//! Prendo l'api 
$apiDischi = file_get_contents("../api/dischi.json");

//! Risposta in Json
header("Content-Type: application/json");

//! Converto in json, se non è in json, per essere legibile in PHP
 //json_encode($apiDischi); in questo caso lo arquivo è già in formato Json!

 //! Mostro il risultato in pagina
 echo $apiDischi;
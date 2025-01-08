<?php
//! Prendo l'api 
$apiDischi = file_get_contents("../../api/dischi.json");

if ($apiDischi === false) {
    die('Erro ao ler o arquivo JSON');
}

//! Risposta in Json
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

 //! Mostro il risultato in pagina
 echo $apiDischi;
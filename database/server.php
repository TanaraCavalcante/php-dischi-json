<?php
//! Permite requisições de qualquer origem (se você quiser restringir a uma origem específica, altere o "*")
header("Access-Control-Allow-Origin: *");

//! Permite métodos específicos (GET, POST, etc.)
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

//! Permite cabeçalhos específicos (se necessário)
header("Access-Control-Allow-Headers: Content-Type, Authorization");

//! Previne o bloqueio de requisições OPTIONS (normalmente usadas para checar permissões antes da requisição real)
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0); // Termina a requisição OPTIONS
}

//! Prendo l'api 
$apiDischi = file_get_contents("../api/dischi.json");

if ($apiDischi === false) {
    die('Erro ao ler o arquivo JSON');
}

//! Risposta in Json
header("Content-Type: application/json");

 //! Mostro il risultato in pagina
 echo $apiDischi;
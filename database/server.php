<?php
//! Prendo l'api 
$apiDischi = file_get_contents("/api/dischi.json");
echo $apiDischi;

//! Risposta in Json
// header('Content-Type: application/jason');

//! Converto in json, se non è in json, per essere legibile in PHP
// jason_encode()
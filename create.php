<?php
require_once "connection.php";

function createEtudiant($etudiant) {
    $conn = new mysqli($GLOBALS['db_server'], $GLOBALS['db_user'], $GLOBALS['db_password'], $GLOBALS['db_name']);
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }  
}

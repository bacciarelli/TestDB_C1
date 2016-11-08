<?php

function getDbConnection() {
    $configDB = array(
        'servername' => "localhost",
        'username' => "root",
        'password' => "coderslab",
        'baseName' => "FormDB"
    );

// Tworzymy nowe połączenie
    $conn = new mysqli($configDB['servername'], $configDB['username'], $configDB['password'], $configDB['baseName']);
// Sprawdzamy czy połączcenie się udało
    if ($conn->connect_error) {
        die("Polaczenie nieudane. Blad: " . $conn->connect_error . "<br>");
    }
    return $conn;
}

?>
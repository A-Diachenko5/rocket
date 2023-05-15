<?php
require_once 'pdconfig.php';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$sth = $conn->prepare("SELECT * FROM `check-ups` ");
$sth->execute();
$checkUps = $sth->fetchAll(PDO::FETCH_ASSOC);

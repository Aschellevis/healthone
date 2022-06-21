<?php

$user = 'root';
$pass = '';
try {
    $db = new PDO('mysql:host=localhost;dbname=healthone', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
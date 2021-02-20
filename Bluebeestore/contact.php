<?php

require('config.php');

extract($_POST);

$sql = "INSERT into emails (name,email,message) VALUES('" . $name . "','" . $email . "','" . $message . "')";

$success = $mysqli->query($sql);

if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}

echo "Thank You For Contacting Us ";




?>
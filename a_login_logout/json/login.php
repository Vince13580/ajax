<?php
session_start();

$obj = new stdClass();
$obj->message = "Mauvais nom d'utilisateur ou mot de passe";
$obj->success = false;

/* vérifier si $_POST['username'] $_POST['password'] */
$found = true;
if ($found) {
    $obj->success = true;
    $_SESSION['user'] = 123;
}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($obj);
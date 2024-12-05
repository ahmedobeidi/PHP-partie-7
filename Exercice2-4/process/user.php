<?php 

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../index.php?error=getMethod');
    die();
}

if (!isset($_POST['firstName'], $_POST['lastName'])) {
    header('location: ../index.php?error=paramError');
    die();
}

if (
    empty($_POST['firstName']) ||
    empty($_POST['lastName'])
) {
    header('location: ../index.php?error=empty');
    die();
}

$firstName = htmlspecialchars(trim($_POST['firstName']));
$lastName = htmlspecialchars(trim($_POST['lastName']));

if (
    strlen($firstName) > 50 ||
    strlen($lastName) > 50
) {
    header('location: ../index.php?error=2');
    die();
}

var_dump($_POST);


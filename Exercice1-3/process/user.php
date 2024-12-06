<?php 

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('location: ../index.php?error=postMethod');
    return;
}

if (!isset($_GET['firstName'], $_GET['lastName'])) {
    header('location: ../index.php?error=paramError');
    return;
}

if (
    empty($_GET['firstName']) ||
    empty($_GET['lastName'])
) {
    header('location: ../index.php?error=empty');
    return;
}

$firstName = htmlspecialchars(trim($_GET['firstName']));
$lastName = htmlspecialchars(trim($_GET['lastName']));

if (
    strlen($firstName) > 50 ||
    strlen($lastName) > 50
) {
    header('location: ../index.php?error=2');
    return;
}

var_dump($_GET);


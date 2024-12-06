<?php 

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('location: ../index.php?error=1');
    return;
}

if (!isset($_GET['firstName'], $_GET['lastName'])) {
    header('location: ../index.php?error=2');
    return;
}

if (
    empty($_GET['firstName']) ||
    empty($_GET['lastName'])
) {
    header('location: ../index.php?error=3');
    return;
}

$firstName = htmlspecialchars(trim($_GET['firstName']));
$lastName = htmlspecialchars(trim($_GET['lastName']));

if (
    strlen($firstName) > 50 ||
    strlen($lastName) > 50
) {
    header('location: ../index.php?error=4');
    return;
}

var_dump($_GET);


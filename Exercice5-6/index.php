<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>

    <?php 
    
    if (isset($_POST['gender'], $_POST['firstName'], $_POST['lastName'], $_POST['myFile']) && (!empty($_POST['gender']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['myFile'])) ) {
        var_dump($_POST);
    }else {
        ?>
        <form action="./index.php" method="post">
        <select name="gender" id="gender">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>

        <label for="firstName">Prénom :</label>
        <input type="text" name="firstName" id="firstName">

        <label for="lastName">Nom :</label>
        <input type="text" name="lastName" id="lastName">

        <input type="file" name="myFile"/>

        <input type="submit" value="submit">
    </form>
    <?php
    }
    ?>

    
</body>
</html>
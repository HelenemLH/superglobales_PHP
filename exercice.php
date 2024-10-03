<?php

session_start();

//via session
if (isset($_SESSION['first_name'])) {
    $firstName = htmlspecialchars($_SESSION['first_name']);
}
// via GET
elseif (isset($_GET['first_name']) && !empty($_GET['first_name'])) {
    $firstName = htmlspecialchars($_GET['first_name']);
}
// via POST
elseif (isset($_POST['first_name']) && !empty($_POST['first_name'])) {
    $firstName = htmlspecialchars($_POST['first_name']);
    $_SESSION['first_name'] = $firstName;
}
// sinon - afficher "anonyme"
else {
    $firstName = 'anonyme';
}

echo "Bonjour " . $firstName;
?>

<!--  HTML -->
<form action="exercice.php" method="post">
    <p>Votre nom : <input type="text" name="first_name" /></p>
    <p><input type="submit" value="OK"></p>
</form>

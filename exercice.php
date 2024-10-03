<?php
// démarre session 
session_start();

// vérif via GET 
if (isset($_GET['first_name']) && !empty($_GET['first_name'])) {
    $firstName = htmlspecialchars($_GET['first_name']);
    $_SESSION['first_name'] = $firstName;  // mettre à jour session avec ce prénom
}
// sinon verif via POST
elseif (isset($_POST['first_name']) && !empty($_POST['first_name'])) {
    $firstName = htmlspecialchars($_POST['first_name']);
    $_SESSION['first_name'] = $firstName;  // save session
}
// sinon utiliser session
elseif (isset($_SESSION['first_name'])) {
    $firstName = $_SESSION['first_name'];
}
// sinon afficher anonyme
else {
    $firstName = 'anonyme';
}

echo "Bonjour " . $firstName;
?>

<!-- formulaire HTML -->
<form action="exercice.php" method="post">
    <p>Votre nom : <input type="text" name="first_name" /></p>
    <p><input type="submit" value="OK"></p>
</form>

<!-- reset button -->
<p><a href="exercice.php?reset_session=true">Reset</a></p>


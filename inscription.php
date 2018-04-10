 <?php

    include ('connexion.php');
    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = $_POST['hash'];
    $salt = $_POST['salt'];
    $role = 1;

        // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO users (FirstName, Name, Email, Roles, Hash, Salt) VALUES( :firstname, :name, :email, :role,
    :hash, :salt)");

    $requete->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $requete->bindValue(':motDePasse', $name, PDO::PARAM_STR);
    $requete->bindValue(':email', $email, PDO::PARAM_STR);
    $requete->bindValue(':role', $role, PDO::PARAM_STR);
    $requete->bindValue(':hash', $hash, PDO::PARAM_STR);
    $requete->bindValue(':salt', $salt, PDO::PARAM_STR);

    echo 'Argon2 hash: ' . password_hash('rasmuslerdorf', PASSWORD_ARGON2I);
    $requete->execute();
?>

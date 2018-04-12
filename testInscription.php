<?php

    $firstname = $_POST['firstname'];
    $name = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 0;

    $hash = password_hash( $password, PASSWORD_DEFAULT);
include ('connexiondb.php');

// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("INSERT INTO users (FirstName, Name, Email, Hash, ID_roles) VALUES( :firstname, :name, :email, :hash, ID_roles)");

    $requete->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $requete->bindValue(':name', $name, PDO::PARAM_STR);
    $requete->bindValue(':email', $email, PDO::PARAM_STR);
    $requete->bindValue(':hash', $hash, PDO::PARAM_STR);
    $requete->bindValue(':role', $role, PDO::PARAM_STR);

$lecture = $bdd->prepare("SELECT Email FROM users");
$lecture->execute();

print("\n");
while ($result = $lecture->fetch(PDO::FETCH_COLUMN))
{
?>
    <p>
    <?php
 print_r($result); ?><br />
        if ($pseudo != $result)
        {
        $requete->execute();
        }else
            {
        <?php echo "Error système : l'email est déja utilisé" ?>
        }

   </p>
<?php
}



?>

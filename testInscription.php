<?php

    $firstname = $_POST['firstName'];
    $name = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 0;

    echo $firstname;
    echo $name;
    echo $email;
    echo $password;
    $hash = password_hash( $password, PASSWORD_DEFAULT);
    echo $hash;
include ('connexiondb.php');

// Requête préparée pour empêcher les injections SQL
$requete = $bdd->prepare("INSERT INTO users (FirstName, Name, Email, Hash) VALUES( :firstname, :name, :email, :hash)");

    $requete->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $requete->bindValue(':name', $name, PDO::PARAM_STR);
    $requete->bindValue(':email', $email, PDO::PARAM_STR);
    $requete->bindValue(':hash', $hash, PDO::PARAM_STR);
    //$requete->bindValue(':ID_roles', $role, PDO::PARAM_STR);

$lecture = $bdd->prepare("SELECT Email FROM users");
$lecture->execute();

print("\n");
while ($result = $lecture->fetch(PDO::FETCH_COLUMN))
{
?>
    <p>
    <?php
 print_r($result); ?><br />
        if ($email != $result)
        {
        $lecture->execute();
        }else
            {
        <?php echo "Error système : l'email est déja utilisé" ?>
        }

   </p>
<?php
}



?>

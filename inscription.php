 <?php


   $firstname = $_POST['firstname'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $role = 0;

   $hash = password_hash( $password, PASSWORD_DEFAULT);



    include ('connexiondb.php');

        // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO users (FirstName, Name, Email, Hash, ID_roles)
    VALUES( :firstname, :name, :email, :hash, :role)");

    $requete->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $requete->bindValue(':name', $name, PDO::PARAM_STR);
    $requete->bindValue(':email', $email, PDO::PARAM_STR);
    $requete->bindValue(':hash', $hash, PDO::PARAM_STR);
    $requete->bindValue(':role', $role, PDO::PARAM_STR);

    $requete->execute();
?>

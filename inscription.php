 <php
      $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $email = $_POST['name'];
    $motDePasse = $_POST['motDePasse'];

    // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO utilisateurs (pseudo, motDePasse) VALUES( :pseudo,:motDePasse)");

    $requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $requete->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);

    $requete->execute();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <script type="text/javascript">

        var re = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/;
        var re2 = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[\da-zA-Z]{8,16}$/;

        function testEmail(email){
            var OK = re.exec(email.value);
            if (!OK)
                window.alert(email.input + " n'est pas une email correct!");
            else
                window.alert("Email correct " + OK[0]);
        }
        function testPass(password){
            var OK = re2.exec(password.value);
            if (!OK)
                window.alert(password.input + " n'est pas assez sécurisé!");
            else
                window.alert("Mot de passe convenable " + OK[0]);
        }
    </script>
    <link rel="stylesheet" href="style.css">

    <title>Inscription</title>


 <body>
    <p>test pour email.
        <br>Le format attendu est xxxxxx@xxx.xx .</p>
    <form action="#">
        <input id="email"><button onclick="testEmail(document.getElementById('email'));">Vérifier</button>
          <p>test pour password.
        <br>Le format attendu est 1 majuscule 1 minuscules et 1 chiffres au mini .</p>
        <input id="password"><button onclick="testPass(document.getElementById('password'));">Vérifier</button>
    </form>
  </body>
</html>

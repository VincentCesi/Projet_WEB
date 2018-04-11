<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <script type="text/javascript">

        var re = /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/;

        function testInfo(email){
            var OK = re.exec(email.value);
            if (!OK)
                window.alert(email.input + " n'est pas une email correct!");
            else
                window.alert("Email correct " + OK[0]);
        }
    </script>
    <link rel="stylesheet" href="style.css">

    <title>Inscription</title>


 <body>
    <p>test pour email.
        <br>Le format attendu est xxxxxx@xxx.xx .</p>
    <form action="#">
      <input id="email"><button onclick="testInfo(document.getElementById('email'));">Vérifier</button>
    </form>
  </body>
</html>

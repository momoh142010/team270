<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="logstyle.css">
  <title>Refuge.ME</title>
</head>

<body>
  <?php include("header.php") ?>

  <?php include("nav.php") ?>

  <div id="main">
    <h3>Authentification</h3>
    <form action="auth.php" method="post">
      <table>
        <tr>
          <th>Nom d'utilisateur : </th>
          <th><input type="text" name="username"></th>
        </tr>
        <tr>
          <th>Mot de passe : </th>
          <th><input type="password" name="pass"></th>
        </tr>
      </table>
      <input type="checkbox" name="know"> Se souvenir de moi <br> <br>
      <input type="button" name="log" value="Se connecter">
    </form>
  </div>

  <?php include("footer.php") ?>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Refuge.ME</title>
</head>

<body>
  <?php include("header.php") ?>

  <?php include("nav.php") ?>

  <div id="main">
    <h3>Refuge.me, le site des réfugiés</h3>
    <p>Bienvenue sur Refuge.me, le site d'information pour les réfugiés.<br>
      Ici, vous pourrez trouver toutes les informations pour soit, vous aider en tant que réfugiés, soit<br>
      pour aider en tant que bénévole.</p>
  </div>

  <div id="tweet">
    <!-- Widget de Twitter -->
      <a class="twitter-timeline"  href="https://twitter.com/hashtag/refugeme" data-widget-id="804447663819079680">Tweets sur #refugeme</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>

  <?php include("footer.php") ?>
</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>PHP-3 les formulaires</title>
  </head>
  <body>
    <a href="../index.php"><img src="/img/LogoSN.png" width="200" height="100" align="right"/></a>
    <h1 align="middle">TP5 : PHP-3 les formulaires</h1>
    <h2>PECH Thibault</h2>
    <p><?php
          $d = date("d/m/y ");
          $h = date("H:i");
          print("Le $d à $h");
        ?></p>

    <form action="traitement.php" method="post">Nom
      <input type="text" name="nom">
      <button type="submit">Valider</button>
    </form>
    <hr/>
    <form action="traitement.php" method="post">
      <p>Adresse IP
      <input type="number" name="ip1" maxlength="3" min="1" max="255">
      <input type="number" name="ip2" maxlength="3" min="0" max="255">
      <input type="number" name="ip3" maxlength="3" min="0" max="255">
      <input type="number" name="ip4" maxlength="3" min="0" max="254">
      </p>
      <p>Masque de sous réseau
      <input type="number" name="ma1" maxlength="3" min="0" max="255">
      <input type="number" name="ma2" maxlength="3" min="0" max="255">
      <input type="number" name="ma3" maxlength="3" min="0" max="255">
      <input type="number" name="ma4" maxlength="3" min="0" max="255">
      </p>
      <p>Afficher les nombres binaires<input type="checkbox" name="debug"></p>
      <button type="submit">Valider</button>
    </form>

    <a href="../index.php"><img src="/img/back.png" width="50" height="50" align="right"/></a>
  </body>
</html>

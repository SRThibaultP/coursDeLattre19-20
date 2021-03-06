<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Liste des TP">
  <title>Index</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Historique des TP</h1>
  </header>

  <nav>
    <h3 class="navTitle">Liste des TP</h3>
    <a href="#TP1"><p>TP1 - Apache</p></a>
    <a href="#TP2"><p>TP2 - HTML</p></a>
    <a href="#TP3"><p>TP3 - CSS</p></a>
    <a href="#TP4"><p>TP4 - PHP</p></a>
    <a href="#TP5"><p>TP5 - PHP2</p></a>
    <a href="#TP6"><p>TP6 - PHP3</p></a>
    <a href="#TP7" class="newTP"><p>TP7 - Raspberry Pi </p></a>
  </nav>

  <section>
    <h2><a href="http://localhost" id="TP1" class="nomTP" title="Le 10 octobre 2019">TP1</a></h2>
    <h3>Création du serveur Apache</h3>

    <h2><a href="TP2" id="TP2" class="nomTP" title="Le 7 novembre 2019">TP2</a></h2>
    <h3>Initiation au HTML</h3>
    <ul>
      <li><a href="TP2/exe1.html">Emploi du temps</a></li>
      <li><a href="TP2/exe2.html">Curriculum vitæ</a></li>
    </ul>

    <h2><a href="TP3" id="TP3" class="nomTP" title="Le 14 novembre 2019">TP3</a></h2>
    <h3>Initiation au CSS</h3>
    <ul>
      <li><a href="TP3/index.html">Page d'accueil</a></li>
      <li><a href="TP3/cvcss.html">Ajout du CSS dans le CV</a></li>
    </ul>

    <h2><a href="TP4" id="TP4" class="nomTP" title="Le 19 décembre 2019">TP4</a></h2>
    <h3>Initiation au PHP</h3>
    <ul>
      <li><a href="TP4/rappel.html">Rappels HTML</a></li>
      <li><a href="TP4/index.php">Page PHP</a></li>
      <li><a href="TP4/presentation.php">Présentation</a></li>
      <li><a href="TP4/calcul.php">Calcul</a></li>
      <li><a href="TP4/bissextile.php">Bissextile</a></li>
    </ul>

    <h2><a href="TP5" id="TP5" class="nomTP" title="Le 16 janvier 2020">TP5</a></h2>
    <h3>Passage de variables en PHP</h3>
    <ul>
      <li><a href="TP5/affiche.php?an=2020">Affiche</a></li>
      <li><a href="TP5/calcul.php?valeur1=10&valeur2=3.65&operation=division">Calcul</a></li>
      <li><a href="TP5/bissextile.php?annee=2020">Bissextile</a></li>
    </ul>

    <h2><a href="TP6" id="TP6" class="nomTP" title="Le 23 janvier 2020">TP6</a></h2>
    <h3>Formulaires en PHP</h3>
    <ul>
      <li><a href="TP6/index.php">Page d'accueil</a></li>
    </ul>

    <h2><a href="TP7" id="TP7" class="nomTP" title="Le 6 février 2020">TP7</a></h2>
    <h3>Installation d'un Raspberry Pi 4</h3>

  </section>
  <footer>
    <p>PECH Thibault BTSSN1 - <?php
          $d = date("l d F Y");
          $h = date("H:i:s");
          print("$d $h");
        ?></p>
  </footer>
</body>

</html>

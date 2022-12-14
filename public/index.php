<?php declare(strict_types=1);

include_once(dirname(__DIR__) . '/vendor/autoload.php');

use \Oeuvres\Kit\{Http, Route};

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://oeuvres.github.io/teinte_theme/teinte.css" />
  <link rel="stylesheet" href="https://oeuvres.github.io/teinte_theme/teinte.tree.css" />
  <script src="https://oeuvres.github.io/teinte_theme/teinte.tree.js"></script>
  <link rel="stylesheet" href="<?= Route::home_href() ?>obtic_teinte.css" />
  <title>ObTiC, Teinte, conversion de livres</title>
</head>

<body>
  <div id="win">
    <header id="header">
      <form method="POST" action="<?= Route::home_href() ?>">
        <a class="logo" href="." rel="home">
          <img src="<?= Route::home_href() ?>img/obtic_logo.svg" alt="ObTIC" />
        </a>
      </form>
      <div class="moto"><a href="http://github.com/oeuvres/teinte">Teinte</a>, la conversion des livres (TEI, DOCX, HTML, EPUB, TXT)</div>
    </header>
    <div id="row">
      <div id="upload">
        <header>
          <div id="icons">
            <div class="format tei" title="TEI : texte XML (Text Encoding Initiative)"></div>

            <div class="format docx" title="DOCX : texte bureautique (LibreOffice, Microsoft.Word…)"></div>

            <div class="format epub" title="EPUB : livre électronique ouvert"></div>

            <div class="todo format html" title="HTML : page internet"></div>

            <div class="format markdown" title="MarkDown : texte brut légèrement formaté"></div>

          </div>
        </header>
        <div id="dropzone" class="card">
          <h3>Votre fichier</h3>
          <output></output>
          <div class="bottom">
            <button>ou chercher sur votre disque…</button>
            <input type="file" hidden />
          </div>
        </div>
      </div>
      <div id="preview">
        <h1>Teinte (développent en cours)</h1>
        <p>Convertissez vos livres électroniques, <b>de</b>, et <b>vers</b>, plusieurs formats : TEI, DOCX, HTML, EPUB, MARKDOWN.</p>

        <p>À gauche, déposez un de vos fichiers ; au centre, prévisualisez le contentu ; à droite, téléchargez un export dans le format de votre choix.</p>

        <p>Cette installation est en développement, certains chemins de conversion ne sont pas encore fonctionnels.</p>

        <p>Le développement de cette interface a été financé par l’<a href="https://obtic.sorbonne-universite.fr/">ObTIC</a>.</p>

        <p>Ce logiciel libre a été développé par <a onmouseover="this.href='mailto'+'\x3A'+'frederic.glorieux'+'\x40'+'fictif.org'" href="#">Frédéric Glorieux</a>, les sources sont visibles sur <a href="https://github.com/OBVIL/obtic_teinte">Github</a>.

      </div>
      <div id="download">
        <header>
          <div id="icons">
            <div class="format tei" title="TEI : texte XML (Text Encoding Initiative)"></div>

            <div class="format docx" title="DOCX : texte bureautique (LibreOffice, Microsoft.Word…)"></div>

            <div class="todo format epub" title="EPUB : livre électronique ouvert"></div>

            <div class="format html" title="HTML : page internet"></div>

            <div class="format markdown" title="MarkDown : texte brut légèrement formaté"></div>

          </div>
        </header>
        <div class="card inactive" id="downzone">
          <h3>Téléchargements</h3>
          <output id="exports"></output>
        </div>
      </div>
    </div>
    <footer id="footer">
      <div class="rule">
        <div class="monogram"></div>
      </div>
    </footer>
  </div>
  <script type="module" type="text/javascript" src="<?= Route::home_href() ?>obtic_teinte.js"> </script>
</body>

</html>
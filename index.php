<?php
require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - OGGETTI [Comics Shop]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <main>
      <h1>
        <?php echo $comicsShop->name ?>
      </h1>

      <div class="catalogue">
        <!-- Sezione fumetti -->
        <section class="catalogue-element">
          <h2>FUMETTI</h2>
          <ul>
            <?php
            foreach ($comicsShop->comics as $comic) {
              ?>
              <li>
                <b>Titolo</b> : <?php echo $comic->title ?><br />
                <b>Serie</b> : <?php echo $comic->series ?><br />
                <b>Editore</b> : <?php echo $comic->editor ?><br />
                <b>Data pubblicazione</b> : <?php echo $comic->date ?><br />
                <b>Paese</b> : <?php echo $comic->country ?><br />
                <b>Testi</b> : <?php echo $comic->writers ?><br />
                <b>Disegni</b> <?php echo $comic->artists ?><br />
                <b>Lingua</b> : <?php echo $comic->language ?><br />
                <b>Pagine</b> : <?php echo $comic->pages ?><br />
                <b>Formato</b> : <?php echo $comic->format ?><br />
                <b>Colori</b> : <?php echo $comic->colors ?><br />

              </li>
              <?php
            }
            ?>
          </ul>
        </section>
        <!-- / Sezione fumetti -->

      <!-- Sezione Blurays -->
      <section class="catalogue-element">
        <h2>BLU-RAYS</h2>
        <ul>
          <?php
          foreach ($comicsShop->blurays as $bluray) {
            ?>
            <li>
              <b>Titolo</b> : <?php echo $bluray->title ?><br />
              <b>Tipo</b> : <?php echo $bluray->type ?><br />
              <b>Anno</b> : <?php echo $bluray->year ?><br />
              <b>Paese</b> : <?php echo $bluray->country ?><br />
              <b>Genere</b> : <?php echo $bluray->genre ?><br />
              <b>Studio</b> : <?php echo $bluray->studio ?><br />
              <b>Regista</b> : <?php echo $bluray->director ?><br />
              <b>Cast</b> <?php echo $bluray->cast ?><br />
            </li>
            <?php
          }
          ?>
        </ul>
      </section>
      <!-- / Sezione Blurays -->

      <!-- Sezione Action Figures -->
      <section class="catalogue-element">
        <h2>ACTION FIGURES & GAMES</h2>
        <ul>
          <?php
          foreach ($comicsShop->aFigures as $afigure) {
            ?>
            <li>
              <b>Nome</b> : <?php echo $afigure->modelname ?><br />
              <b>Produttore</b> : <?php echo $afigure->productor ?><br />
              <b>Tipo</b> : <?php echo $afigure->type ?><br />
              <b>Materiale</b> : <?php echo $afigure->material ?><br />
              <b>Anno</b> : <?php echo $afigure->year ?><br />
            </li>
            <?php
          }
          ?>
        </ul>
      </section>
      <!-- / Sezione Action Figures -->
    </main>


  </body>
</html>

<?php
$reviews = [];

$reviewsJson = file_get_contents('reviews.json');
if ($reviewsJson !== false) {
  $data = json_decode($reviewsJson, true);
  if (is_array($data)) {
    $reviews = $data;
  }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Het Gouden Gebaar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
  <img src="images/logo.png" alt="Het Gouden Gebaar logo" class="logo">
</header>

<section class="intro">
  <h1>Iedereen kan gebarentaal leren!</h1>
  <p>
    Cursussen Nederlandse Gebarentaal, workshops en trainingen op maat.<br>
    Voor particulieren, scholen en bedrijven.
  </p>
</section>

<section class="cursussen">
  <h2>Aanbod in cursussen</h2>

  <div class="cursussen-grid">
    <div class="cursus-card">
      <h3>Workshop Gebarentaal</h3>
      <p>Voor bedrijven en teams.</p>
    </div>

    <div class="cursus-card">
      <h3>Cursus Basis</h3>
      <p>Leer de basis van gebaren.</p>
    </div>

    <div class="cursus-card">
      <h3>Training op maat</h3>
      <p>Afgestemd op de doelgroep.</p>
    </div>
  </div>
</section>

<section class="reviews-section">
  <h2>Klantreviews</h2>

  <?php if (count($reviews) === 0) { ?>
    <p>Geen reviews gevonden.</p>
  <?php } else { ?>
    <div class="reviews">
      <?php foreach ($reviews as $r) { ?>
        <div class="review">
          <strong><?php echo $r['naam']; ?></strong>

          <div class="sterren">
            <?php
              $i = 0;
              while ($i < $r['sterren']) {
                echo "★";
                $i++;
              }
            ?>
          </div>

          <p><?php echo $r['tekst']; ?></p>
        </div>
      <?php } ?>
    </div>
  <?php } ?>
</section>

<footer class="footer">
  <div class="footer-container">

    <div class="footer-col footer-left">
      <img src="images/logo.png" alt="Het Gouden Gebaar logo" class="footer-logo">

      <p class="footer-text">
        Het Gouden Gebaar biedt cursussen en workshops gebarentaal voor particulieren,
        scholen en bedrijven. We maken communicatie toegankelijk en praktisch.
      </p>
    </div>

    <div class="footer-col footer-middle">
      <h4>Contact</h4>

      <ul class="footer-list">
        <li>Het Gouden Gebaar</li>
        <li>Aranka van Woersem</li>
        <li>Pretludweg 2</li>
        <li>1312 SX Almere</li>
        <li>0613322498</li>
        <li>info@hetgoudengebaar.nl</li>
        <li class="footer-spacer"></li>
        <li>KVK: 58385495</li>
      </ul>
    </div>

    <div class="footer-col footer-right">
      <h4>Pagina's</h4>

      <ul class="footer-list">
        <li>Home</li>
        <li>Aanbod cursussen</li>
        <li>Over ons</li>
        <li>Reviews</li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    © Het Gouden Gebaar <?php echo date("Y"); ?>
  </div>
</footer>
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
  <div class="header-inner">
    <img src="images/logo.svg" alt="Het Gouden Gebaar logo" class="logo">

    <div class="menu-tekst">
      <span>Aanbod cursussen</span>
      <span>Over ons</span>
      <span>Reviews</span>
      <span>Veelgestelde vragen</span>
      <span>Contact</span>
    </div>
  </div>
</header>

<section class="intro">
  <h1>Iedereen kan gebarentaal leren!</h1>
  <p>
    Cursussen Nederlandse Gebarentaal, workshops en trainingen op maat.
    Voor particulieren, scholen en bedrijven.
  </p>
</section>

<section class="cursussen">
  <h2>Aanbod in cursussen</h2>

  <div class="cursussen-grid">

    <div class="cursus-card">
      <div class="cursus-image" style="background-image:url('images/cursussen.png');"></div>
      <div class="cursus-content">
        <h3>Nederlandse Gebarentaal</h3>
      </div>
    </div>

    <div class="cursus-card">
      <div class="cursus-image" style="background-image:url('images/cursussen.png');"></div>
      <div class="cursus-content">
        <h3>Nederlands ondersteund met gebaren</h3>
      </div>
    </div>

    <div class="cursus-card">
      <div class="cursus-image" style="background-image:url('images/cursussen.png');"></div>
      <div class="cursus-content">
        <h3>Workshops</h3>
      </div>
    </div>

        <div class="cursus-card">
      <div class="cursus-image" style="background-image:url('images/cursussen.png');"></div>
      <div class="cursus-content">
        <h3>Trainingen aan ouders en kinderen</h3>
      </div>
    </div>

  </div>
</section>

<section class="klantenreviews">
  <div class="reviews-header">
    <h2>Wat onze klanten zeggen</h2>
  </div>

  <?php if (count($reviews) === 0) { ?>
    <p>Geen reviews beschikbaar.</p>
  <?php } else { ?>
    <div class="reviews-grid">
      <?php foreach ($reviews as $r) { ?>
        <div class="review-kaart">
          <strong class="review-naam"><?php echo $r['naam']; ?></strong>

          <div class="sterren">
            <?php
              $i = 0;
              while ($i < $r['sterren']) {
                echo "★";
                $i++;
              }
            ?>
          </div>

          <p class="review-tekst">
            <?php echo $r['tekst']; ?>
          </p>
        </div>
      <?php } ?>
    </div>
  <?php } ?>
</section>

<footer class="footer">
  <div class="footer-container">

    <div class="footer-col footer-left">
      <img src="images/logo.svg" alt="Het Gouden Gebaar logo" class="footer-logo">

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
        <li>Contact</li>

      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    © Het Gouden Gebaar <?php echo date("Y"); ?>
  </div>
</footer>
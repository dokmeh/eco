<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $title  ?></title>
        <base href="<?= $base  ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="css/reset.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/ion.sound.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body data-page="<?= $page  ?>">
          <nav class="header__navigation">
        <ul class="menu menu--primary">
                      <li><a href="home" data-page="home" data-title="Dokframe-home">Home</a></li>
<li ><a href="about" data-page="about" data-title="Dokframe-about">About</a></li>
<li id='dropdown'>Service
<ul class="menu--secondary">
  <li><a href="tours" data-page="tours" data-title='dokframe-tours'>Tours</a></li>
  <li><a href="magazine" data-page='magazine' data-title='dokframe-magazine'>Magazine</a></li>
  <li><a href="shop" data-page='shop' data-title='dokframe-shop'>Shop</a></li>
</ul>
</li>
<li><a href="rules" data-page="rules" data-title="Dokframe-rules">Rules and Regulations</a></li>
<li ><a href="contact" data-page="contact" data-title="Dokframe-contact">contact</a></li>
<li><a href="career" data-page="career" data-title="Dokframe-career">Career( Hire )</a></li>
                  </ul>
      </nav>
        <section class="inner-ajax">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/accordion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="container main-header">
        <div>
          <a href="index.html">
            <img src="img/logo.png" height="40">
          </a>
        </div>
      <nav class="main-nav">
        <?php
          $page = array('Domov'=>'index.php',
          'Portfolio'=>'portfolio.php',
          'Q&A'=>'dna.php',
          'Kontakt'=>'kontakt.php'
          );
          foreach($pages as $page_name => $page_url){
            echo('<li><a href = "'.$page_url.'">'.$page_name_'.</a></li>');
          }

        ?>
        <ul class="main-menu" id="main-menu">
            <li><a href="index.html">Domov</a></li>
            <li><a href="portfolio.html">Portfólio</a></li>
            <li><a href="qna.html">Q&A</a></li>
            <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
      </nav>
    </header>
    

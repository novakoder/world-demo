<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

<div class="container">
    <section class="header">
      <h2 class="title">World Database</h2>
    </section>

    <div class="navbar-spacer"></div>
    <nav class="navbar">
      <div class="container">
        <ul class="navbar-list">
          <li class="navbar-item"><a class="navbar-link" href="index.php">Home</a></li>
          <li class="navbar-item"><a class="navbar-link" href="cerca.php">Cerca</a></li>
          <li class="navbar-item"><a class="navbar-link" href="aggiungi.php">Aggiungi</a></li>
        </ul>
      </div>
    </nav>

<?php

  if ($_SERVER['REQUEST_URI'] == "/index.php")
    echo '<section class="header">
            <h2 class="subtitle">Cerca o aggiungi informazioni sulle città nel database.</h2>
          </section>';
  
?>
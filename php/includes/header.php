<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matei Manuela Natalis FSL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/MateiManuelaNatalis_FSL/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/MateiManuelaNatalis_FSL/index.php">Matei Manuela Natalis FSL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link <?= $current_page === 'azienda.php' ? 'active' : '' ?>" href="/MateiManuelaNatalis_FSL/php/azienda.php">Azienda</a></li>
        <li class="nav-item"><a class="nav-link <?= $current_page === 'stage.php' ? 'active' : '' ?>" href="/MateiManuelaNatalis_FSL/php/stage.php">Stage</a></li>
        <li class="nav-item"><a class="nav-link <?= $current_page === 'orientamento.php' ? 'active' : '' ?>" href="/MateiManuelaNatalis_FSL/php/orientamento.php">Orientamento</a></li>
        <li class="nav-item"><a class="nav-link <?= $current_page === 'gestione.php' ? 'active' : '' ?>" href="/MateiManuelaNatalis_FSL/php/gestione.php">Gestione DB</a></li>
      </ul>
    </div>
  </div>
</nav>
<main class="container my-4">

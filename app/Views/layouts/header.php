<?php
$config = require __DIR__ . '/../../../config/config.php';
$title = $title ?? $config['app_name'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="Página web MVC para el restaurante chino Xinyang, desarrollada con PHP, Bootstrap 5 y MySQL.">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body class="index-page xinyang-theme">
<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="assets/img/xinyang/logo-xinyang.jpg" alt="Logo Xinyang" class="rounded-circle">
      <h1 class="sitename">Xinyang</h1>
    </a>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Inicio</a></li>
        <li><a href="#about">Nosotros</a></li>
        <li><a href="#menu">Menú</a></li>
        <li><a href="#services">Servicios</a></li>
        <li><a href="#gallery">Galería</a></li>
        <li><a href="#contact">Contacto</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
    <a class="btn-getstarted d-none d-sm-block" href="#book-a-table">Pedir / Reservar</a>
  </div>
</header>
<main class="main">
<?php if (!empty($flash)): ?>
  <div class="container mt-4">
    <div class="alert alert-<?= htmlspecialchars($flash['type']) ?> alert-dismissible fade show" role="alert">
      <?= htmlspecialchars($flash['message']) ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
    </div>
  </div>
<?php endif; ?>

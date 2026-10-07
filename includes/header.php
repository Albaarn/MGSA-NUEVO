<?php
if (!isset($pageTitle)) {
    $pageTitle = "Management Group S.A. - Consultoría Integral en Negocios";
}
if (!isset($activePage)) {
    $activePage = "";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Fonts: Montserrat & Arboria (fallback fonts configured in CSS) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Header Navigation -->
    <header class="site-header">
        <div class="container header-container">
            <!-- Brand Logo acting as Home Link (No 'Home' text in menu) -->
            <a href="index.php" class="brand-logo" title="Management Group S.A. - Inicio">
                <img src="assets/images/logo.svg" alt="Management Group S.A. Logo">
            </a>

            <!-- Mobile Navigation Toggle -->
            <button class="nav-toggle" aria-label="Abrir menú" onclick="document.querySelector('.nav-menu').classList.toggle('active')">
                <span class="hamburger"></span>
            </button>

            <!-- Navigation Panel -->
            <nav class="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="nosotros.php" class="nav-link <?php echo ($activePage === 'nosotros') ? 'active' : ''; ?>">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="servicios.php" class="nav-link <?php echo ($activePage === 'servicios') ? 'active' : ''; ?>">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a href="clientes.php" class="nav-link <?php echo ($activePage === 'clientes') ? 'active' : ''; ?>">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a href="contacto.php" class="nav-link <?php echo ($activePage === 'contacto') ? 'active' : ''; ?>">Contacto</a>
                    </li>
                </ul>
                <div class="nav-actions">
                    <a href="contacto.php" class="btn btn-outline">Agendar Cita</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="main-content">

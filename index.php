<?php
$pageTitle = "Management Group S.A. - Empresa líder en consultoría integral en negocios";
$activePage = "home";
include_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container hero-grid">
        <!-- Hero Text Content -->
        <div class="hero-text-content">
            <span class="hero-subtitle">MANAGEMENT GROUP S.A.</span>
            <h1 class="hero-title">Empresa líder en consultoría integral en negocios</h1>
            <p class="hero-description">
                Soluciones integrales en gestión, asesoría financiera, procesos y estrategia para empresas que buscan la excelencia y un crecimiento sostenido.
            </p>
            <div class="hero-actions">
                <a href="contacto.php" class="btn btn-outline">Agendar Cita</a>
                <a href="servicios.php" class="btn btn-primary">Conocer Servicios</a>
            </div>
        </div>

        <!-- Hero Media Content with Image Placeholder & Schedule Overlay -->
        <div class="hero-media-wrapper">
            <div class="hero-image-card">
                <img src="assets/images/hero-placeholder.svg" alt="Management Group Consultoría Integral">

                <!-- Overlapping Schedule Badge -->
                <div class="schedule-badge">
                    <div class="schedule-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div class="schedule-info">
                        <h4>HORARIOS DE ATENCIÓN</h4>
                        <p>LUN. A VIE. 8:30 AM A 6:30 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Performance Indicators / Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-card">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">+29</div>
                    <div class="stat-label">AÑOS DE EXPERIENCIA</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">1</div>
                    <div class="stat-label">SEDE PRINCIPAL</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">+10</div>
                    <div class="stat-label">AÑOS PROMEDIO FIDELIDAD</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">+100</div>
                    <div class="stat-label">CLIENTES SATISFECHOS</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'includes/footer.php';
?>

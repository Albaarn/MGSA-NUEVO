    </main> <!-- /.main-content -->

    <!-- Editable Footer Component -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container footer-grid">
                <!-- Section 1: Company Info (Editable) -->
                <div class="footer-col footer-brand-info">
                    <a href="index.php" class="footer-logo">
                        <img src="assets/images/logo.svg" alt="Management Group S.A.">
                    </a>
                    <p class="footer-description">
                        Empresa líder en consultoría integral en negocios. Brindamos soluciones estratégicas para potenciar el crecimiento y desarrollo sostenible de su organización.
                    </p>
                </div>

                <!-- Section 2: Quick Links (Editable) -->
                <div class="footer-col">
                    <h3 class="footer-title">Navegación</h3>
                    <ul class="footer-links">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="clientes.php">Clientes</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </div>

                <!-- Section 3: Services (Editable) -->
                <div class="footer-col">
                    <h3 class="footer-title">Servicios</h3>
                    <ul class="footer-links">
                        <li><a href="servicios.php#consultoria">Consultoría Estratégica</a></li>
                        <li><a href="servicios.php#finanzas">Gestión Financiera</a></li>
                        <li><a href="servicios.php#procesos">Optimización de Procesos</a></li>
                        <li><a href="servicios.php#auditoria">Auditoría &amp; Cumplimiento</a></li>
                    </ul>
                </div>

                <!-- Section 4: Contact Info (Editable) -->
                <div class="footer-col">
                    <h3 class="footer-title">Contacto</h3>
                    <ul class="footer-contact">
                        <li><strong>Dirección:</strong> Av. Principal 123, Piso 5, Lima, Perú</li>
                        <li><strong>Teléfono:</strong> +51 (1) 987-6543</li>
                        <li><strong>Email:</strong> contacto@mgsagroup.com</li>
                        <li><strong>Horario:</strong> Lunes a Viernes 08:30 am - 06:30 pm</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div class="container footer-bottom-content">
                <p>&copy; <?php echo date("Y"); ?> Management Group S.A. Todos los derechos reservados.</p>
                <div class="footer-legal">
                    <a href="#">Política de Privacidad</a>
                    <span class="divider">|</span>
                    <a href="#">Términos de Servicio</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Responsive Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function() {
            var navToggle = document.querySelector('.nav-toggle');
            var navMenu = document.querySelector('.nav-menu');
            if (navToggle && navMenu) {
                navToggle.addEventListener('click', function() {
                    navMenu.classList.toggle('active');
                });
            }
        });
    </script>
</body>
</html>

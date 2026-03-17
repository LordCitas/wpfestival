    <footer id="footer" class="footer pt-5 pb-3">
        <div class="container text-center pt-5">
            <h2 class="fw-bold mb-4" style="font-family: var(--font-heading); font-size: 1.5rem; letter-spacing: 2px;">
                <span class="text-white">WP FESTIVAL MUSIC -</span> <span class="text-white">BOGOTAA</span>
            </h2>
            <p class="text-cyan mx-auto fw-medium" style="max-width: 900px; font-size: 0.75rem; line-height: 1.8;">
                La empresa no se hace cargo si durante el evento usted presenta alguna molestia. Contamos con todo el equipo paramedico de control y vigilancia en caso de emergencia, nuestro objetivo es su seguridad. Evite traer objetos de valor para que no pase un mal rato. Esta totalmente prohibido el ingreso de armas blancas o de fuego al recinto. El que sea sorprendido con armas sera entregado a la autoridad del distrito. Para su comodidad hemos traido a los de "Mister T", los cuales cuidan el recinto hasta por todo el nivel. Se reserva el derecho de admision. Por favor el uso de la basura esta bien demarcado.
            </p>
            <div class="d-flex justify-content-center gap-4 mt-5 mb-5 pb-4">
                <a href="#" class="social-icon rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none transition-colors" style="width: 45px; height: 45px; background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                    <i class="fa-brands fa-instagram fs-4"></i>
                </a>
                <a href="#" class="social-icon rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none transition-colors" style="width: 45px; height: 45px; background-color: #1DA1F2; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                    <i class="fa-brands fa-twitter fs-4"></i>
                </a>
                <a href="#" class="social-icon rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none transition-colors" style="width: 45px; height: 45px; background-color: #4267B2; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                    <i class="fa-brands fa-facebook-f fs-4"></i>
                </a>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sponsors logic
            const sponsorsGallery = document.querySelector('.sponsors-gallery');
            const sponsorPrev = document.getElementById('sponsor-prev');
            const sponsorNext = document.getElementById('sponsor-next');

            if (sponsorsGallery && sponsorPrev && sponsorNext) {
                const scrollAmount = 200; // Adjust as needed
                
                sponsorPrev.addEventListener('click', () => {
                    sponsorsGallery.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                });

                sponsorNext.addEventListener('click', () => {
                    sponsorsGallery.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                });
            }

            // Djs logic
            const djsGallery = document.querySelector('.djs-gallery');
            const djPrev = document.getElementById('dj-prev');
            const djNext = document.getElementById('dj-next');

            if (djsGallery && djPrev && djNext) {
                const djScrollAmount = 300; // Adjust as needed
                
                djPrev.addEventListener('click', () => {
                    djsGallery.scrollBy({ left: -djScrollAmount, behavior: 'smooth' });
                });

                djNext.addEventListener('click', () => {
                    djsGallery.scrollBy({ left: djScrollAmount, behavior: 'smooth' });
                });
            }
        });
    </script>
  </body>
</html>

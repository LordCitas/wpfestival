<?php
/**
 * Template Name: Pagina Presentaciones
 */
get_header(); ?>

    <main>
      <section class="hero-small position-relative d-flex align-items-center justify-content-center" style="min-height: 40vh; background: url('<?php echo get_template_directory_uri(); ?>/images/dj_performance_2_1773052163709.png') no-repeat center center/cover;">
        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75 z-1"></div>
        <div class="container position-relative z-2 text-center pt-5">
            <h1 class="fw-bold text-white text-uppercase" style="font-size: 3.5rem; letter-spacing: 2px; font-family: var(--font-heading);">
                <span class="text-cyan">WP</span> FESTIVAL - <span class="text-white">PRESENTACIONES</span><br>
                <span class="text-cyan">BOGOTAA</span> 2018
            </h1>
        </div>
      </section>

      <section class="presentaciones-intro py-5 bg-white text-dark">
          <div class="container py-5">
              <div class="section-header mb-5">
                  <h2 class="section-title text-dark">Presentaciones</h2>
                  <div class="title-underline bg-pink"></div>
              </div>
              <div class="row">
                  <div class="col-12 col-lg-8">
                      <p class="text-muted fw-medium mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec efficitur turpis. Sed aliquet accumsan mauris, sit amet eleifend magna hendrerit a. Proin ut semper justo. Nunc sit amet enim eu augue mollis venenatis eget a leo. Integer condimentum velit non arcu posuere tempus ullamcorper id risus.</p>
                      <p class="text-muted fw-medium mb-0">Nulla facilisi. Aenean feugiat eu odio et pulvinar. Curabitur facilisis ante nec viverra finibus. Pellentesque non justo a tellus tempus tristique eu nec nibh. Vestibulum sed mi lectus.</p>
                  </div>
              </div>
          </div>
      </section>

      <section id="presentaciones" class="schedule position-relative py-5">
          <div class="schedule-bg z-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/dj_performance_2_1773052163709.png'); opacity: 0.15;"></div>
          <div class="container position-relative z-2 py-5">
              
              <div class="schedule-table rounded overflow-hidden">
                  <div class="row gx-0 py-3 px-4 border-bottom border-light border-opacity-10 text-white fw-bold" style="font-family: var(--font-heading); font-size: 1.2rem;">
                      <div class="col-2 col-md-1">Hora</div>
                      <div class="col-6 col-md-5">DJ</div>
                      <div class="col-4 col-md-4">Escenario</div>
                      <div class="col-12 col-md-2 mt-2 mt-md-0 d-none d-md-block">Ticket</div>
                  </div>
                  
                  <div class="row gx-0 py-4 px-4 align-items-center border-bottom border-light border-opacity-10 schedule-row transition-colors">
                      <div class="col-3 col-md-1 time">23:00</div>
                      <div class="col-9 col-md-5 dj-info">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/dj_avatar_1773052136651.png" alt="DJ Monza">
                          <span>DJ Monza</span>
                      </div>
                      <div class="col-12 col-md-3 stage mt-3 mt-md-0">Principal</div>
                      <div class="col-12 col-md-3 actions justify-content-start justify-content-md-end mt-3 mt-md-0">
                          <button class="btn btn-outline btn-custom-sm">Detalles</button>
                          <button class="btn btn-primary btn-custom-sm ms-2">Tickets</button>
                      </div>
                  </div>
                  
                  <div class="row gx-0 py-4 px-4 align-items-center border-bottom border-light border-opacity-10 schedule-row active transition-colors bg-pink">
                      <div class="col-3 col-md-1 time text-white">23:00</div>
                      <div class="col-9 col-md-5 dj-info text-white">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/dj_performance_1_1773052150108.png" alt="DJ Monza">
                          <span>DJ Monza</span>
                      </div>
                      <div class="col-12 col-md-3 stage text-white mt-3 mt-md-0">Principal</div>
                      <div class="col-12 col-md-3 actions justify-content-start justify-content-md-end mt-3 mt-md-0">
                          <button class="btn btn-outline-light rounded-pill fw-bold text-white btn-custom-sm">Detalles</button>
                          <button class="btn btn-light rounded-pill fw-bold text-pink btn-custom-sm ms-2" style="color: var(--primary-pink)">Tickets</button>
                      </div>
                  </div>
                  
                  <div class="row gx-0 py-4 px-4 align-items-center border-bottom border-light border-opacity-10 schedule-row transition-colors">
                      <div class="col-3 col-md-1 time">23:00</div>
                      <div class="col-9 col-md-5 dj-info">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/dj_performance_2_1773052163709.png" alt="DJ Monza">
                          <span>DJ Monza</span>
                      </div>
                      <div class="col-12 col-md-3 stage mt-3 mt-md-0">Principal</div>
                      <div class="col-12 col-md-3 actions justify-content-start justify-content-md-end mt-3 mt-md-0">
                          <button class="btn btn-outline btn-custom-sm">Detalles</button>
                          <button class="btn btn-primary btn-custom-sm ms-2">Tickets</button>
                      </div>
                  </div>
                  
                  <div class="row gx-0 py-4 px-4 align-items-center border-bottom border-light border-opacity-10 schedule-row transition-colors">
                      <div class="col-3 col-md-1 time">23:00</div>
                      <div class="col-9 col-md-5 dj-info">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/dj_avatar_1773052136651.png" alt="DJ Monza">
                          <span>DJ Monza</span>
                      </div>
                      <div class="col-12 col-md-3 stage mt-3 mt-md-0">Principal</div>
                      <div class="col-12 col-md-3 actions justify-content-start justify-content-md-end mt-3 mt-md-0">
                          <button class="btn btn-outline btn-custom-sm">Detalles</button>
                          <button class="btn btn-primary btn-custom-sm ms-2">Tickets</button>
                      </div>
                  </div>
              </div>
              
              <div class="text-center mt-5">
                  <button class="btn btn-primary btn-custom btn-lg rounded-pill fw-bold px-5">Ver todas</button>
              </div>
          </div>
      </section>

      <section class="cta-banner py-5" style="background-color: var(--bg-dark-alt);">
          <div class="container py-5 text-center">
              <h2 class="text-white fw-bold mb-4" style="font-family: var(--font-heading); font-size: 2.5rem;">Compra tus entradas</h2>
              <p class="text-cyan mb-5 mx-auto" style="max-width: 600px;">Aprovecha los precios de pre-venta antes de que se agoten. Los cupos son limitados.</p>
              <button class="btn btn-primary btn-custom rounded-pill text-uppercase px-5 py-3">Comprar Entradas</button>
          </div>
      </section>

      <section id="contacto" class="contact py-0 d-flex bg-dark-main">
          <div class="container-fluid p-0">
              <div class="row g-0">
                  <div class="col-12 col-lg-6 d-flex flex-column justify-content-center px-5 py-5" style="background-color: var(--bg-dark-main);">
                      <div class="px-md-5 mx-md-5">
                          <h3 class="text-white fw-bold mb-4" style="font-family: var(--font-heading); font-size: 1.5rem;">WP FESTIVAL MUSIC - Bogota</h3>
                          <p class="text-cyan mb-4" style="font-size: 0.9rem; line-height: 1.8;">
                              Si tienes alguna duda o inquietud por favor comunicate con nosotros. El staff de WP esta presto a solucionar tus dudas.
                          </p>
                          <div class="d-flex gap-3 mt-4">
                              <a href="#" class="social-icon rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none" style="width: 40px; height: 40px; border: 1px solid var(--primary-pink);">
                                  <i class="fa-brands fa-twitter text-pink"></i>
                              </a>
                              <a href="#" class="social-icon rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none" style="width: 40px; height: 40px; border: 1px solid var(--primary-pink);">
                                  <i class="fa-brands fa-facebook-f text-pink"></i>
                              </a>
                              <a href="#" class="social-icon rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none" style="width: 40px; height: 40px; border: 1px solid var(--primary-pink);">
                                  <i class="fa-brands fa-instagram text-pink"></i>
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-lg-6">
                      <iframe src="https://www.google.com/maps?q=Balinot,+Granada&output=embed" width="100%" height="450" style="border:0; min-height: 100%; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
              </div>
          </div>
      </section>
    </main>

<?php get_footer(); ?>

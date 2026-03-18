<?php
/**
 * Template Name: Pagina Inicio
 */
get_header(); ?>

    <main>
      <section id="home" class="hero position-relative min-vh-100 d-flex align-items-center pt-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_festival_bg_1773052123159.png');">
        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100 z-1"></div>
        <div class="container position-relative z-2">
          <div class="hero-content" style="max-width: 800px;">
              <div class="hero-stats d-flex gap-4 mb-3">
                <span class="stat-item d-flex align-items-center gap-2 fw-bold text-uppercase" style="font-family: var(--font-heading);"><i class="fa-regular fa-clock fs-5"></i> 21 Nov 2018</span>
                <span class="stat-item d-flex align-items-center gap-2 fw-bold text-uppercase" style="font-family: var(--font-heading);"><i class="fa-solid fa-headphones fs-5"></i> 24 DJS</span>
                <span class="stat-item d-flex align-items-center gap-2 fw-bold text-uppercase" style="font-family: var(--font-heading);"><i class="fa-solid fa-ticket fs-5"></i> +10000 entradas</span>
              </div>
              
              <h1 class="hero-title fw-bold" style="line-height: 1.1; letter-spacing: 2px; margin-bottom: 1.5rem;">
                <span class="text-cyan">WP</span> FESTIVAL MUSIC<br>
                <span class="text-cyan">BOGOTAA</span> 2018
              </h1>
              
              <p class="hero-subtitle mb-5" style="font-size: 1.1rem; font-weight: 500; line-height: 1.8; max-width: 600px;">
                Bogota WP Festival Music es un Evento de musica<br>electronica con DJS que estan dentro del Top 20 en el<br>mundo, Luces, buena musica y mejores Djs
              </p>
            
              <a href="<?php echo esc_url(home_url('#tickets')); ?>" class="btn btn-primary btn-custom rounded-pill fw-bold text-capitalize">Comprar Tickets</a>
          </div>
        </div>
      </section>

      <section id="presentaciones" class="schedule position-relative py-5">
          <div class="schedule-bg z-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/dj_performance_2_1773052163709.png');"></div>
          <div class="container position-relative z-2 py-5">
              <div class="section-header mb-5">
                  <h2 class="section-title text-white">Presentación</h2>
                  <div class="title-underline"></div>
              </div>
              
              <div class="schedule-table rounded overflow-hidden">
                  <div class="row gx-0 py-3 px-4 border-bottom border-light border-opacity-10 text-white fw-bold" style="font-family: var(--font-heading); font-size: 1.2rem;">
                      <div class="col-2 col-md-1">Hora</div>
                      <div class="col-6 col-md-5">DJ</div>
                      <div class="col-4 col-md-4">Escenario</div>
                      <div class="col-12 col-md-2 mt-2 mt-md-0 d-none d-md-block">Ticket</div>
                  </div>
                  
                  <div class="row gx-0 py-4 px-4 align-items-center border-bottom border-light border-opacity-10 schedule-row transition-colors">
                      <div class="col-3 col-md-1 time">21:00</div>
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
                  
                  <div class="row gx-0 py-4 px-4 align-items-center border-bottom border-light border-opacity-10 schedule-row transition-colors">
                      <div class="col-3 col-md-1 time text-white">23:00</div>
                      <div class="col-9 col-md-5 dj-info text-white">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/dj_avatar_1773052136651.png" alt="DJ Monza">
                          <span>DJ Monza</span>
                      </div>
                      <div class="col-12 col-md-3 stage text-white mt-3 mt-md-0">Principal</div>
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

      <section id="stats" class="stats py-5">
          <div class="container position-relative z-10 py-5">
              <div class="row text-center g-4">
                  <div class="col-6 col-md-3">
                      <div class="d-flex flex-column align-items-center gap-3">
                          <i class="fa-solid fa-lightbulb stat-icon"></i>
                          <h3 class="stat-number">2000</h3>
                          <p class="stat-text">Luces increíble</p>
                      </div>
                  </div>
                  <div class="col-6 col-md-3">
                      <div class="d-flex flex-column align-items-center gap-3">
                          <i class="fa-solid fa-record-vinyl stat-icon"></i>
                          <h3 class="stat-number">12</h3>
                          <p class="stat-text">Djs Top Mundial</p>
                      </div>
                  </div>
                  <div class="col-6 col-md-3">
                      <div class="d-flex flex-column align-items-center gap-3">
                          <i class="fa-solid fa-compact-disc stat-icon"></i>
                          <h3 class="stat-number">1000</h3>
                          <p class="stat-text">Horas de Musica</p>
                      </div>
                  </div>
                  <div class="col-6 col-md-3">
                      <div class="d-flex flex-column align-items-center gap-3">
                          <i class="fa-solid fa-people-group stat-icon"></i>
                          <h3 class="stat-number">10000</h3>
                          <p class="stat-text">Asistentes</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section id="djs" class="djs py-5">
          <div class="container py-5">
              <div class="row align-items-center g-5">
                  <div class="col-12 col-lg-7">
                      <div class="djs-gallery d-flex gap-3 overflow-x-auto flex-nowrap mx-auto mx-lg-0 pb-3 custom-scrollbar">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/dj_performance_1_1773052150108.png" alt="DJ 1" class="dj-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/dj_performance_2_1773052163709.png" alt="DJ 2" class="dj-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/dj_avatar_1773052136651.png" alt="DJ 3" class="dj-img">
                      </div>
                  </div>
                  <div class="col-12 col-lg-5 d-flex flex-column justify-content-center text-center text-lg-start">
                      <h2 class="section-title text-dark">DJS</h2>
                      <div class="title-underline mx-auto mx-lg-0"></div>
                      <p class="djs-desc">Ellos son el verdadero foco de<br>atención de nuestro evento</p>
                      
                      <div class="djs-nav d-none d-lg-flex justify-content-center justify-content-lg-start mb-4">
                          <button class="nav-arrow" id="dj-prev"><i class="fa-solid fa-play fa-flip-horizontal"></i></button>
                          <button class="nav-arrow" id="dj-next"><i class="fa-solid fa-play"></i></button>
                      </div>
                      
                      <div>
                          <button class="btn btn-primary btn-custom rounded-pill fw-bold px-4">Ver Todos</button>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section id="tickets" class="tickets py-5">
          <div class="container py-5">
              <div class="section-header mb-5 text-center text-md-start">
                  <h2 class="section-title text-white">TICKETS</h2>
                  <div class="title-underline mx-auto mx-md-0"></div>
                  <p class="text-cyan mb-5 fs-5">Tenemos varias opciones para todos<br>los gustos, consigue una que se<br>adapte a ti.</p>
              </div>
              
              <div class="row g-4 justify-content-center">
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="ticket-card rounded h-100 d-flex flex-column">
                          <h3 class="ticket-type">BPM</h3>
                          <p class="ticket-location text-white opacity-75">Ubicación en gradería</p>
                          <div class="ticket-price">$40</div>
                          <ul class="ticket-features flex-grow-1 text-white list-unstyled px-3">
                              <li class="mb-2"><i class="fa-solid fa-square text-cyan me-2"></i> Escenario principal</li>
                              <li class="mb-2"><i class="fa-solid fa-square text-cyan me-2"></i> Camiseta - 1 bebida</li>
                              <li class="mb-2"><i class="fa-solid fa-square text-cyan me-2"></i> Acceso zona comunes</li>
                          </ul>
                          <button class="btn btn-primary btn-custom w-100 rounded-pill mt-auto fw-bold">Comprar Tickets</button>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="ticket-card rounded h-100 d-flex flex-column" style="background: linear-gradient(to bottom, #e91e63, #880e4f);">
                          <h3 class="ticket-type text-white">VIP</h3>
                          <p class="ticket-location text-white opacity-75">Ubicación preferencial</p>
                          <div class="ticket-price text-white">$120</div>
                          <ul class="ticket-features flex-grow-1 text-white list-unstyled px-3">
                              <li class="mb-2"><i class="fa-solid fa-square text-white opacity-50 me-2"></i> Escenario principal</li>
                              <li class="mb-2"><i class="fa-solid fa-square text-white opacity-50 me-2"></i> Camiseta - 3 bebidas</li>
                              <li class="mb-2"><i class="fa-solid fa-square text-white opacity-50 me-2"></i> Acceso zona VIP</li>
                          </ul>
                          <button class="btn btn-primary btn-custom w-100 rounded-pill mt-auto fw-bold">Comprar Tickets</button>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="ticket-card rounded h-100 d-flex flex-column">
                          <h3 class="ticket-type">BACK</h3>
                          <p class="ticket-location text-white opacity-75">Acceso total</p>
                          <div class="ticket-price">$300</div>
                          <ul class="ticket-features flex-grow-1 text-white list-unstyled px-3">
                              <li class="mb-2"><i class="fa-solid fa-square text-cyan me-2"></i> Acceso Backstage</li>
                              <li class="mb-2"><i class="fa-solid fa-square text-cyan me-2"></i> Barra libre premium</li>
                              <li class="mb-2"><i class="fa-solid fa-square text-cyan me-2"></i> Conoce a los DJS</li>
                          </ul>
                          <button class="btn btn-primary btn-custom w-100 rounded-pill mt-auto fw-bold">Comprar Tickets</button>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="sponsors py-5 position-relative z-1">
          <div class="sponsors-bg z-n1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero_festival_bg_1773052123159.png');"></div>
          <div class="container position-relative z-2 py-5">
              <div class="row align-items-center g-4">
                  <div class="col-12 col-xl-9 order-last order-xl-1">
                      <div class="sponsors-gallery d-flex gap-3 overflow-x-auto flex-nowrap pb-3">
                          <div class="sponsor-logo flex-shrink-0 active">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/sponsor_logo_01.png" alt="Sponsor 1" class="img-fluid">
                          </div>
                          <div class="sponsor-logo flex-shrink-0">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/sponsor_logo_02.png" alt="Sponsor 2" class="img-fluid">
                          </div>
                          <div class="sponsor-logo flex-shrink-0">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/sponsor_logo_04.png" alt="Sponsor 3" class="img-fluid">
                          </div>
                          <div class="sponsor-logo flex-shrink-0">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/sponsor_logo_05.png" alt="Sponsor 4" class="img-fluid">
                          </div>
                          <div class="sponsor-logo flex-shrink-0">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/sponsor_logo_06.png" alt="Sponsor 5" class="img-fluid">
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-xl-3 text-start ps-xl-4 position-relative order-first order-xl-2 mb-4 mb-xl-0">
                      <h2 class="text-white fw-bold mb-3" style="font-family: var(--font-heading); font-size: 2.2rem; line-height: 1;">patrocinadores</h2>
                      <div class="bg-pink mb-4" style="height: 3px; width: 60px;"></div>
                  </div>
              </div>
          </div>
      </section>

      <section id="galeria" class="gallery py-5 bg-white">
          <div class="container py-5">
              <div class="section-header mb-5 text-center text-lg-start">
                  <h2 class="section-title text-dark">Galería de Imagenes</h2>
                  <div class="title-underline mx-auto mx-lg-0 bg-pink"></div>
              </div>
              <div class="row g-0">
                  <div class="col-12 col-md-4">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_1_1773052410884.png" alt="Gallery 1" class="img-fluid w-100 object-fit-cover hover-zoom" style="height: 350px;">
                  </div>
                  <div class="col-12 col-md-4">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_4_1773052452420.png" alt="Gallery 2" class="img-fluid w-100 object-fit-cover hover-zoom" style="height: 350px;">
                  </div>
                  <div class="col-12 col-md-4">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/dj_avatar_1773052136651.png" alt="Gallery 3" class="img-fluid w-100 object-fit-cover hover-zoom" style="height: 350px;">
                  </div>
                  <div class="col-12 col-md-4">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_2_1773052424411.png" alt="Gallery 4" class="img-fluid w-100 object-fit-cover hover-zoom" style="height: 350px;">
                  </div>
                  <div class="col-12 col-md-4">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_3_1773052439941.png" alt="Gallery 5" class="img-fluid w-100 object-fit-cover hover-zoom" style="height: 350px;">
                  </div>
                  <div class="col-12 col-md-4">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/hero_festival_bg_1773052123159.png" alt="Gallery 6" class="img-fluid w-100 object-fit-cover hover-zoom" style="height: 350px;">
                  </div>
              </div>
          </div>
      </section>

      <section id="noticias" class="news py-5" style="background-color: var(--bg-dark-main);">
          <div class="container py-5">
              <div class="text-end mb-5">
                  <h2 class="section-title text-white">NOTICIAS</h2>
                  <div class="title-underline ms-auto me-0 bg-pink"></div>
              </div>
              <div class="row align-items-center g-5">
                  <div class="col-12 col-lg-6">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/hero_festival_bg_1773052123159.png" alt="Festival Hero" class="img-fluid w-100 rounded shadow" style="object-fit: cover; max-height: 400px;">
                  </div>
                  <div class="col-12 col-lg-6">
                      <h3 class="text-pink fw-bold mb-1" style="font-size: 1.2rem; letter-spacing: 1px;">Noticias - 12 OCT 2018</h3>
                      <h4 class="text-white fw-bold mb-4" style="font-size: 1.5rem;">BIENVENIDO A BOGOTAA ESTE 2018</h4>
                      <p class="text-cyan mb-4 fw-medium" style="font-size: 0.95rem; line-height: 1.8;">
                          Bogota se engalana para recibir a los djs mas duros del mundo de la electronica...
                      </p>
                  </div>
              </div>
          </div>
      </section>

    </main>

<?php get_footer(); ?>

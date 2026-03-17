<?php
/**
 * Template Name: Pagina Blog
 */
get_header(); ?>

    <main>
      <section class="hero-small position-relative d-flex align-items-center justify-content-center" style="min-height: 40vh; background: url('<?php echo get_template_directory_uri(); ?>/images/hero_festival_bg_1773052123159.png') no-repeat center center/cover;">
        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75 z-1"></div>
        <div class="container position-relative z-2 text-center pt-5">
            <h1 class="fw-bold text-white text-uppercase" style="font-size: 3.5rem; letter-spacing: 2px; font-family: var(--font-heading);">
                DETALLE BLOG<br>
                <span class="text-cyan fs-5" style="letter-spacing: 1px;">WP FESTIVAL > BLOG</span>
            </h1>
        </div>
      </section>

      <section class="blog-detail py-5 bg-white text-dark">
          <div class="container py-5">
              <div class="row gx-5">
                  <div class="col-12 col-lg-1 mb-4 mb-lg-0 d-flex flex-row flex-lg-column align-items-center justify-content-start gap-4 gap-lg-0">
                      
                      <div class="date-box border text-center p-2 mb-lg-4" style="border-color: var(--primary-pink) !important; min-width: 60px;">
                          <span class="d-block fw-bold fs-4" style="color: var(--primary-pink); line-height: 1;">29</span>
                          <span class="text-dark fw-bold small">Mar</span>
                      </div>
                      
                      <div class="text-center mb-lg-4">
                          <i class="fa-regular fa-comments fs-4 mb-1" style="color: var(--secondary-cyan);"></i>
                          <span class="d-block fw-bold" style="color: var(--primary-pink);">9</span>
                      </div>
                      <div class="text-center mb-lg-4">
                          <i class="fa-regular fa-thumbs-up fs-4 mb-1" style="color: var(--secondary-cyan);"></i>
                          <span class="d-block fw-bold" style="color: var(--primary-pink);">9</span>
                      </div>
                      <div class="text-center mb-lg-4">
                          <i class="fa-solid fa-share-nodes fs-4 mb-1" style="color: var(--secondary-cyan);"></i>
                          <span class="d-block fw-bold" style="color: var(--primary-pink);">9</span>
                      </div>
                  </div>

                  <div class="col-12 col-lg-11">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/hero_festival_bg_1773052123159.png" alt="Blog Image" class="img-fluid w-100 mb-4" style="max-height: 450px; object-fit: cover;">
                      
                      <h2 class="fw-bold mb-3" style="color: var(--primary-pink); font-family: var(--font-heading); font-size: 2.2rem; text-transform: none;">Preventa inicial de entradas Wp Festival</h2>
                      <p class="text-dark fw-bold small mb-4" style="font-family: var(--font-heading);"><i class="fa-solid fa-tag me-2" style="color: var(--primary-pink);"></i> Información General</p>
                      
                      <div class="blog-content" style="color: #333; font-size: 0.95rem; line-height: 1.8;">
                          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan est et ligula bibendum, ut tincidunt quam faucibus. Quisque sed ipsum porta, interdum purus vel, aliquam ante. Etiam dictum. Mauris ullamcorper ex sit amet metus eleifend feugiat vel ut odio. Vivamus in sem sed urna pharetra vehicula fringilla a quam.</p>
                          <p class="mb-4">Sed nec tellus sed mauris sollicitudin fermentum vitae eu elit. Mauris ullamcorper ex sit amet metus eleifend feugiat vel ut odio. Vivamus in sem sed urna pharetra vehicula fringilla a quam. Nunc sed diam eu nisl consequat aliquet ac quis erat. Nam id justo quis liberosuscipit ullamcorper. Fusce sed ipsum tristique, vehicula tellus vel, ultrices lorem.</p>
                          <p class="mb-5">In ut metus vitae elit vehicula dignissim. Cras malesuada magna non turpis convallis tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan est et ligula bibendum, ut tincidunt quam faucibus. Quisque sed ipsum porta, interdum purus vel, aliquam ante. Etiam dictum. Mauris ullamcorper ex sit amet metus eleifend feugiat vel ut odio. Vivamus in sem sed urna pharetra vehicula fringilla a quam.</p>
                          <p class="mb-5">Sed nec tellus sed mauris sollicitudin fermentum vitae eu elit. Mauris ullamcorper ex sit amet metus eleifend feugiat vel ut odio. Vivamus in sem sed urna pharetra vehicula fringilla a quam. Nunc sed diam eu nisl consequat aliquet ac quis erat. Nam id justo quis liberosuscipit ullamcorper. Fusce sed ipsum tristique, vehicula tellus vel, ultrices lorem.</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="cta-banner py-5" style="background-color: var(--bg-dark-alt);">
          <div class="container py-5 text-center">
              <h2 class="text-white fw-bold mb-4" style="font-family: var(--font-heading); font-size: 2.5rem; text-transform: uppercase;">Compra tus entradas</h2>
              <p class="text-cyan mb-5 mx-auto" style="max-width: 600px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
              <button class="btn btn-primary btn-custom rounded-pill text-uppercase px-5 py-3">Comprar Tickets</button>
          </div>
      </section>

      <section id="contacto" class="contact py-0 d-flex bg-dark-main">
          <div class="container-fluid p-0">
              <div class="row g-0">
                  <div class="col-12 col-lg-6 d-flex flex-column justify-content-center px-4 px-md-5 py-5" style="background-color: var(--bg-dark-main);">
                      <div class="px-lg-5 mx-lg-5 w-100" style="max-width: 450px;">
                          <h3 class="text-white fw-bold mb-4" style="font-family: var(--font-heading); font-size: 1.2rem; text-transform: uppercase;">WP FESTIVAL MUSIC - Bogotá</h3>
                          <p class="text-cyan mb-4" style="font-size: 0.85rem; line-height: 1.8;">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed diam nonummy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                          </p>
                          <div class="d-flex gap-3 mt-4 mb-5">
                              <a href="#" class="social-icon rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none" style="width: 35px; height: 35px; border: 1px solid var(--primary-pink);">
                                  <i class="fa-brands fa-twitter text-pink fs-6"></i>
                              </a>
                              <a href="#" class="social-icon rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none" style="width: 35px; height: 35px; border: 1px solid var(--primary-pink);">
                                  <i class="fa-brands fa-facebook-f text-pink fs-6"></i>
                              </a>
                              <a href="#" class="social-icon rounded-circle d-flex align-items-center justify-content-center text-white text-decoration-none" style="width: 35px; height: 35px; border: 1px solid var(--primary-pink);">
                                  <i class="fa-brands fa-instagram text-pink fs-6"></i>
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

<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("header");?>
    <section
      id="banner"
      class="static-banner d-flex align-items-center position-relative bg-black text-white overflow-hidden"
    >
      <div class="overlay-gradient"></div>
        <div class="hero-img">
          <div id="mobile" class="d-block d-md-none">
            <img src="images/nf-img-15.jpg" alt="" class="w-100"/>
          </div>
          <div id="desktop" class="d-none d-md-block">
            <img src="images/nf-img-14.jpg" alt="" />
          </div>
        </div>
      <div class="container position-relative z-3">
        <div class="row">
          <div class="col-sm-6 d-flex flex-column gap-5">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>Service Locator</span>
            </div>
            <div>
              <h1 class="text-uppercase">Find the Right Service Provider, Fast</h1>
            </div>
            <div>
              <a href="contact.html" class="btn btn-primary text-white fw-bold">
                <div class="d-flex align-items-center gap-2">
                  <div class="text-uppercase">Enquire Now</div>
                  <div class="flex-grow-1">
                    <svg
                      width="15"
                      height="15"
                      viewBox="0 0 15 15"
                      fill="currentColor"
                    >
                      <path
                        d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"
                      />
                      <path
                        d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z"
                      />
                    </svg>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="breadcrumb" class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Service Locator</li>
          </ol>
        </nav>
      </div>
    </section>
    <section
      id="content"
      class="container d-flex flex-column gap-7 pt-5 pb-5 content"
    >
      <div class="row">
        <div class="col-lg-6">
          <div class="pt-5 pb-5 pe-7 d-flex flex-column">            
            <p>Keeping your fleet running smoothly requires reliable service providers. Our Service Locator helps you quickly find approved maintenance, repair, fuel, and tire providers across Australia.</p>
            <ul class="custom-bullets">
              <li>Search by location, service type, or provider name.</li>
              <li>Ensure your vehicles stay roadworthy with certified technicians.</li>
              <li>Find fuel card-accepting stations near you.</li>
            </ul>
            <div>
                <a href="contact.html" class="btn btn-primary text-white fw-bold">
                    <div class="d-flex align-items-center gap-2">
                        <div class="text-uppercase">
                            Contact Us
                        </div>
                        <div class="flex-grow-1">
                            <svg
                            width="15"
                            height="15"
                            viewBox="0 0 15 15"
                            fill="currentColor"
                            >
                            <path
                                d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"
                            />
                            <path
                                d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z"
                            />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <img src="images/nf-img-16.jpg" alt="Thumbnail" class="w-100 rounded-img-custom h-100 object-fit-cover">
        </div>
        </div>
      </div>

      <?php loadComponent("cta-services", [
                      'text' => "Keep your operations running smoothly with NextFleet",
                      'buttonText' => 'Enquire Now'
                  ]); ?>

      
    </section>

    <?php loadComponent("work-with-us");?>
    <?php loadComponent("footer"); ?>

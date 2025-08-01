<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php
$checkboxOptions = [
    ['id' => 'check1', 'label' => 'Discounts on vehicles', 'value' => ''],
    ['id' => 'check2', 'label' => 'Fleet efficiency', 'value' => ''],
    ['id' => 'check3', 'label' => 'Reduced operational risk', 'value' => ''],
    ['id' => 'check4', 'label' => 'Reduced operating expenses', 'value' => ''],
    ['id' => 'check5', 'label' => 'Capital optimisation', 'value' => ''],
    ['id' => 'check6', 'label' => 'Lower asset whole of life cost', 'value' => ''],
    ['id' => 'check7', 'label' => 'Support across the entire fleet lifecycle', 'value' => ''],
    ['id' => 'check8', 'label' => 'Tax benefits', 'value' => ''],
    ['id' => 'check9', 'label' => 'No residual value risk', 'value' => ''],
    ['id' => 'check10', 'label' => 'Flexibility', 'value' => ''],
    ['id' => 'check11', 'label' => 'Cashflow and budgeting predictability', 'value' => ''],
    ['id' => 'check12', 'label' => 'Lease term flexibility', 'value' => ''],
];
?>

<?php loadComponent("header");?>
    <section id="breadcrumb" class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Changing FMO Checklist</li>
          </ol>
        </nav>
      </div>
    </section>
    <section id="overview" class="pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 m-auto">
            <h1>Switching FMOs is Easier Than You Think</h1>
            <p>
            Many businesses hesitate to change Fleet Management Organisations due to perceived complexities. However, with the right plan, transitioning to a new provider can be seamless and beneficial.
            </p>
            <strong>This checklist will help you:</strong>
            <ul>
                <li>Identify key transition steps</li>
                <li>Avoid common pitfalls</li>
                <li>Minimise downtime and disruptions</li>
                <li>Ensure a smooth migration process</li>
            </ul>
<div class="bg-primary rounded-4 text-center py-5 pb-5 overflow-hidden position-relative mt-4">
    <img
        src="images/cta-arrow.png"
        alt="icon"
        class="position-absolute top-0 start-0 col-2 d-none d-sm-block h-100"
    />
    <div class="col-10 col-sm-8 m-auto">
        <p class="fs-4 fw-bold mb-3 text-white">
        Thinking about switching? Get our handy checklist
        </p>
        <div class="d-sm-flex gap-4 justify-content-center">
          <a href="https://www.nextfleet.net.au/Changing-FMO-Checklist.pdf" target="_blank" class="btn btn-primary text-white fw-bold bg-white">
              <div class="d-flex align-items-center gap-2">
                  <div class="text-uppercase text-black">
                      Download
                  </div>
                  <div class="flex-grow-1">
                      <svg
                          width="15"
                          height="15"
                          viewBox="0 0 15 15"
                          fill="text-black"
                      >
                          <path d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z" />
                          <path d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z" />
                      </svg>
                  </div>
              </div>
          </a>
          <a href="/contact.html" Z class="mt-3 mt-sm-0 btn btn-primary text-white fw-bold bg-white">
              <div class="d-flex align-items-center gap-2">
                  <div class="text-uppercase text-black">
                  SPEAK TO AN EXPERT
                  </div>
                  <div class="flex-grow-1">
                      <svg
                          width="15"
                          height="15"
                          viewBox="0 0 15 15"
                          fill="text-black"
                      >
                          <path d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z" />
                          <path d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z" />
                      </svg>
                  </div>
              </div>
          </a>
        </div>
    </div>
</div>

          </div>
        </div>
      </div>
    </section>

    

    <?php loadComponent("work-with-us");?>
    
    <?php loadComponent("footer"); ?>

    <!-- Google Maps API (replace YOUR_API_KEY with your actual API key) -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAtJVQvdOqARp6mGa58asHEDvydUEfUcU&callback=initMap">
    </script>
       <script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 10,
        center: { lat: -33.8688, lng: 151.2093 }, // Example: Sydney
        });

        // You can add markers and logic here later
    }
    </script>

    

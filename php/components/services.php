<?php
$services = [
    [
        "img" => "images/placeholder-1.png",
        "title" => "Fleet Management Solutions",
        "description" => "Reduce costs, boost efficiency, ensure compliance, and streamline operations with our fleet management services.",
        "accentColor" => "accent-color-1",
        "buttonLabel" => "Explore Fleet Solutions",
        "buttonLink" => "/fleet-management-solutions.html"
    ],
    [
        "img" => "images/placeholder-2.png",
        "title" => "Vehicle Fleet <span class=\"d-block\">Leasing</span>",
        "description" => "Enjoy flexibility, cost savings, and control without the burden of ownership with NextFleet's  tailored vehicle fleet leasing service.",
        "accentColor" => "accent-color-2",
        "buttonLabel" => "Explore Leasing Options",
        "buttonLink" => "/leasing-solutions.html"
    ],
    [
        "img" => "images/placeholder-3.png",
        "title" => "Fleet Management <span class=\"d-block\">Consulting Services</span>",
        "description" => "Gain valuable insights and expert guidance with our fleet management consulting services, designed to optimise your fleet's performance, reduce costs, and align operations with your business goals.",
        "accentColor" => "accent-color-3",
        "buttonLabel" => "Explore Consulting Solutions",
        "buttonLink" => "/consulting-services.html"
    ],
    [
        "img" => "images/placeholder-4.png",
        "title" => "Transition to low <span class=\"d-block\">or Zero-Emission Fleets</span>",
        "description" => "Transition to a zero-emission fleet with hybrid, electric, and hydrogen-powered vehicles, supported by carbon offset initiatives like our 'greenDrive' program.",
        "accentColor" => "accent-color-4",
        "buttonLabel" => "Explore zero-emission fleets",
        "buttonLink" => "/sustainable-fleets.html"
    ],
    [
        "img" => "images/placeholder-5.png",
        "title" => "Truck Leasing & <span class=\"d-block\">Fleet Expertise</span>",
        "description" => "Reduce downtime, save costs, and keep your business moving with our expert truck fleet management solutions, made to simplify your operations.",
        "accentColor" => "accent-color-5",
        "buttonLabel" => "Explore Truck Leasing Solutions",
        "buttonLink" => "/truck-leasing.html"
    ],
    [
      "img" => "images/kia.png",
      "title" => "Sales & <span class=\"d-block\">Leaseback</span>",
      "description" => "Financing your fleet? That's a lot of valuable capital tied up in depreciating assets. We can free up capital by giving you an instant cash injection by purchasing your existing vehicles.",
      "accentColor" => "accent-color-6",
      "buttonLabel" => "Explore Sales & Leasebacks",
      "buttonLink" => "/sales-leaseback.html"
  ]
];
?>

<div class="services bg-black">
  <div class="services-container text-white position-relative z-2">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="text-uppercase">Our Services</h2>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($services as $service): ?>
          <div class="d-flex">
            <div class="cards position-relative pb-6">
              <div class="services-accent-color" style="background-color: var(--<?= $service['accentColor']; ?>);"></div>
              <img src="<?= $service['img']; ?>" alt="Service Image" class="img-placeholder">
              <div class="row g-2 pt-0 p-4 relative">
                <h3 class="text-uppercase"><?= $service['title']; ?></h3>
                <div class="line-clamp-4 subtext"><?= $service['description']; ?></div>
              </div>
                <div class="custom-position">
                  <a href="<?= $service['buttonLink']; ?>" class="text-uppercase custom-btn text-pre" style="color: var(--<?= $service['accentColor']; ?>)">
                    <div class="d-flex align-items-center gap-2">
                      <div><?= $service['buttonLabel']; ?></div>
                      <div class="flex-grow-1">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"/>
                          <path d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z" />
                        </svg>
                      </div>
                    </div>
                  </a>
                </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

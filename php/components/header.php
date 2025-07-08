
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fleet Management Services Simplified</title>
    <meta name="description" content="At NextFleet we seamlessly manage, support, and optimise your corporate fleet management">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/fontawesome.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="images/favico.ico" />
  </head>
  <body>

<?php
$navItems = [
    ["name" => "Home", "href" => "/"],
    ["name" => "About Us", "href" => "/about-us.html"],
    ["name" => "Services", "href" => "/services.html"],
    ["name" => "Resources", "href" => "/resources.html"],
    ["name" => "Tools", "href" => "/tools.html"],
    ["name" => "App", "href" => "/app.html"],
    ["name" => "Contact Us", "href" => "/contact.html"],
    ["name" => "Mydrive", "href" => "#"],
    ["name" => "Login", "href" => "/login.html"]
];
?>

<div class="bg-black pt-5">
  <div class="container">
    <div class="row">
      <div class="col-10 col-sm-12 text-white d-flex justify-content-center mb-5">
        <a href="/"><img src="images/nextfleet-logo.png" width="253"></a>
      </div>
      <div class="col-2 d-sm-none">
          <button class="w-100 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" class="w-100 h-100">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-12">
        <nav class="navbar navbar-expand-lg">
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <?php foreach ($navItems as $item): ?>
                <?php if ($item['name'] === "Resources"): ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase text-white" href="<?= $item['href']; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?= $item['name']; ?>
                    </a>
                    <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="/resources.html">Resources</a></li>
                        <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/resources-drivers.html">Resources For Drivers</a></li>
                      <li><a class="dropdown-item" href="/resources-fleet-managers.html">Resources For Fleet Managers</a></li>
                      <li><a class="dropdown-item" href="/nextlevel-insights.html">Nextlevel Insights</a></li>
                      <li><a class="dropdown-item" href="/services-locator.html">Services Locator</a></li>
                    </ul>
                  </li>

                <?php elseif ($item['name'] === "Services"): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase text-white" href="<?= $item['href']; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?= $item['name']; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="fleet-management-solutions.html">Fleet Management Solutions</a></li>
                        <li><a class="dropdown-item" href="#">Explore Fleet Management</a></li>
                        <li><a class="dropdown-item" href="comprehensive-fleet-management-services.html">Comprehensive Fleet Management Services</a></li>
                        <li><a class="dropdown-item" href="outsourced-fleet-model.html">Is an Outsourced Fleet Model Right for You?</a></li>
                        <li><a class="dropdown-item" href="flexible-financing.html">Flexible Financing for Your Fleet</a></li>
                        <li><a class="dropdown-item" href="leasing-solutions.html">Leasing Solutions</a></li>
                        <li><a class="dropdown-item" href="driving-greener-fleet.html">Driving Towards a Greener Fleet</a></li>
                        <li><a class="dropdown-item" href="zero-emission-fleet.html">Zero-Emission Fleet Solutions</a></li>
                        <li><a class="dropdown-item" href="specialised-truck-leasing.html">Specialised Truck Leasing &amp; Management</a></li>
                    </ul>
                  </li>
                <?php else: ?>
                  <li class="nav-item">
                    <a class="nav-link text-uppercase text-white" href="<?= $item['href']; ?>"><?= $item['name']; ?></a>
                  </li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
            <a href="tel:1800 297 900" class="ms-auto custom-btn"><img src="images/icon-phone.png" alt="icons" width="20"> 1800 297 900</a>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>

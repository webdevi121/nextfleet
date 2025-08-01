
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
    ["name" => "Mydrive", "href" => "https://www.nextfleet.net.au/myDriverapp/myDrive-App", "target" => "_blank"],
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
                    </ul>
                  </li>

                <?php elseif ($item['name'] === "Services"): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase text-white" href="<?= $item['href']; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?= $item['name']; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/services.html">Services</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="toyota-hybrid.html">Web Specials</a></li>
                        <li><a class="dropdown-item" href="fleet-management-solutions.html">Fleet Management Solutions</a></li>
                        <li><a class="dropdown-item" href="leasing-solutions.html">Leasing Solutions</a></li>
                        <li><a class="dropdown-item" href="consulting-services.html">Consulting Services</a></li>
                        <li><a class="dropdown-item" href="sustainable-fleets.html">Sustainable Fleets</a></li>
                        <li><a class="dropdown-item" href="truck-leasing.html">Truck Leasing</a></li>
                        <li><a class="dropdown-item" href="not-for-profit-fleets.html">Not-For-Profit Fleets</a></li>
                        <li><a class="dropdown-item" href="sales-leaseback.html">Sales & Leaseback</a></li>
                    </ul>
                  </li>
                  <?php elseif ($item['name'] === "Tools"): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase text-white" href="<?= $item['href']; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?= $item['name']; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/tools.html">Tools</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="lease-vs-buy-calculator.html">Lease vs Buy Calculator</a></li>
                        <li><a class="dropdown-item" href="service-locator.html">Service Locator</a></li>
                        <li><a class="dropdown-item" href="business-case-builder.html">Business Case Builder</a></li>
                        <li><a class="dropdown-item" href="changing-fmo-checklist.html">Changing FMO Checklist</a></li>
                        <li><a class="dropdown-item" href="assessing-your-fmos-capability.html">Assessing Your FMO’s Capability</a></li>
                    </ul>
                  </li>
                <?php else: ?>
                  <li class="nav-item">
                  <a class="nav-link text-uppercase text-white" href="<?= $item['href']; ?>"<?= !empty($item['target']) ? ' target="' . $item['target'] . '"' : '' ?>><?= $item['name']; ?></a>
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

<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php
$helpCards = [
    [
        'title' => '24/7 Roadside Assistance & Accident Support',
        'image' => 'images/nf-img-29.jpg',
        'body' => '
            <div class="pb-5">
                <p>We respond to incidents quickly and ensure your drivers are safe and supported at all times. Our team is available 24/7, 365 days a year, providing immediate assistance in the event of breakdowns or accidents. With end-to-end management, we reduce disruption and keep your drivers moving with confidence.</p>
            </div>
        '
    ],
    [
        'title' => 'Vehicle Registration, Insurance & Infringement Management',
        'image' => 'images/nf-img-39.jpg',
        'body' => '
            <div class="pb-5">
                <p>Avoid administrative burdens and compliance risks with our full-service management of registration renewals, Compulsory Third Party (CTP) insurance, and traffic infringement tracking. We ensure all your vehicles are road-legal and compliant, with automated processes that remove human error and save your team time. We also monitor and resolve traffic infringements, providing visibility into high-risk behaviours and supporting safer driving practices.</p>
            </div>
        '
    ],
    [
        'title' => 'Fuel & Toll Cards',
        'image' => 'images/nf-img-40.jpg',
        'body' => '
            <div class="pb-5">
                <p>Consolidate your running costs and streamline administration with access to our fuel and toll card programs. Partnered with BP, Shell and Ampol, we offer nationwide coverage and reporting tools that track usage, detect anomalies, and help reduce fraud and fuel wastage. Toll expenses are bundled into a single invoice for simple oversight.</p>
            </div>
        '
    ],
    [
        'title' => 'Maintenance & Tyres',
        'image' => 'images/nf-img-41.jpg',
        'body' => '
            <p>Keep your fleet road-ready and compliant with proactive servicing, scheduled maintenance, and tyre replacement programs. We leverage our nationwide repairer network to secure competitive rates and reduce downtime, while monitoring for warranty claims and safety recalls to keep every vehicle in optimal condition.</p>
        '
    ],
    [
        'title' => 'Online Reporting & Fleet Insights',
        'image' => 'images/nf-img-74.jpg',
        'body' => "
            <p>Gain full visibility into your fleet's performance with our client portal. Access 24/7 dashboards showing vehicle status, running costs, lease charges, and driver performance metrics. Our expert team also delivers tailored quarterly reviews to ensure you're getting the most from your fleet investment.</p>
        "
    ],
    [
        'title' => 'Door-to-Door Valet Services',
        'image' => 'images/nf-img-75.jpg',
        'body' => '
            <p>Minimise downtime and driver inconvenience with our end-to-end accident and repair support. We coordinate the collection of damaged vehicles, arrange replacement cars, and manage logistics to ensure a seamless repair experience. This door-to-door service allows your drivers to stay focused on their core roles while we handle the disruption behind the scenes.</p>
        '
    ],
    [
        'title' => 'Vehicle Acquisition & Disposal',
        'image' => 'images/nf-img-76.jpg',
        'body' => "
            <p>Access competitive pricing on new vehicles and maximise returns on those you're ready to retire. We manage the full vehicle lifecycle, from procurement and customisation to resale, ensuring every asset delivers maximum value. With national supplier networks and strategic resale planning, we make every transition seamless.</p>
        "
    ],
    [
        'title' => 'Fringe Benefits Tax (FBT) Reporting',
        'image' => 'images/nf-img-77.jpg',
        'body' => '
            <p>Relieve pressure on your finance team with our compliant, low-admin FBT reporting service. Using the statutory method, we prepare and submit accurate reports on your behalf, ensuring you meet ATO requirements without tying up internal resources..</p>
        '
    ],
    [
        'title' => 'Telematics & Tracking',
        'image' => 'images/nf-img-78.jpg',
        'body' => '
            <p>Drive smarter decisions with GPS, driver behaviour monitoring, and usage analytics. Our telematics platform offers real-time visibility across your entire fleet, helping you reduce fuel costs, respond to incidents faster, and improve safety and compliance. With simple installation and intuitive dashboards, it’s fleet intelligence that works for your business.</p>
        '
    ],
];
?>

<?php loadComponent("header");?>

<section
  id="banner"
  class="static-banner d-flex align-items-center position-relative bg-black text-white overflow-hidden"
>
  <div class="overlay-gradient"></div>
  <div class="hero-video">
    <video autoplay muted loop playsinline class="w-100 h-100 object-fit-cover">
      <source src="images/nf-video-1.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
  </div>
  <div class="container position-relative z-3">
    <div class="row">
      <div class="col-sm-6 d-flex flex-column gap-5">
        <div
          class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
        >
          <img src="images/iconNf.png" alt="icon" width="14" />
          <span>Services</span>
        </div>
        <h1 class="text-uppercase">
        Protect your drivers, protect your business.
        </h1>
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
        <li class="breadcrumb-item">Services</li>
      </ol>
    </nav>
  </div>
</section>
<section id="overview" class="bg-light pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 m-auto text-center">
        <p>Keeping drivers safe is core to your business, and ours. We deliver safety programs, driver behaviour monitoring, and training tools to help reduce accidents, lower costs, and improve on-road performance.</p>
        <p>With 24/7 driver assistance, proactive alerts, and tailored coaching based on real data, we turn reactive issues into proactive improvements. It's safety that scales with your fleet, giving you confidence and peace of mind.</p>
        <div>
          <a href="contact.html" class="btn btn-primary text-white fw-bold">
            <div class="d-flex align-items-center gap-2">
              <div class="text-uppercase">Talk to a Fleet Specialist</div>
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

<!-- Tab layout for Desktop view only -->
<section id="services-container">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 pt-5 pb-3">
        <div class="tab-content" id="service-tabContent">
          <h2 class="mb-2">Comprehensive Fleet Management Services</h2>
          <p>
          Everything your fleet needs, managed in one place.
          </p>
          <p>NextFleet’s end-to-end fleet management services are designed to reduce your workload while keeping your vehicles running efficiently, safely, and compliantly. Whether you lease or own your fleet, we tailor our support to suit your operational model.</p>
          <strong>Our services include:</strong>
        </div>
      </div>
    </div>
    <div class="row g-5">
        <?php foreach ($helpCards as $card): ?>
            <div class="col-sm-4 d-flex">
            <div class="card h-100 w-100">
                <img class="card-img-top" src="<?= $card['image']; ?>" alt="Card image">
                <div class="card-body position-relative">
                    <h5 class="card-title mb-3"><?= $card['title']; ?></h5>
                    <?= $card['body']; ?>
                </div>
            </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row">
        <div class="col-sm-12 pb-5 pt-5">
            <h2>Is an Outsourced Fleet Model Right for You?</h2>
            <p>Managing a fleet internally can be complex and costly. Our Fleet Management Organisation (FMO) model simplifies fleet operations by providing expert support, reducing administration, and delivering cost efficiencies.</p>
            <?php loadComponent("cta-services", [
                      'text' => "Let's discuss if outsourcing your fleet is the right move.",
                      'buttonText' => 'Contact Us'
                  ]); ?>
        </div>
    </div>
  </div>
</section>

<section class="border-top"><?php loadComponent("testimonials"); ?></section>


<?php loadComponent("work-with-us");?> <?php loadComponent("footer"); ?>


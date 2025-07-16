<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("header");?>


<?php
$helpCards = [
    [
        'title' => 'NFP-Focused Leasing Solutions',
        'body' => '
            <div>
                <p class="mb-0">Our operating leases are built for not-for-profits, helping you reduce business risk and ease the administrative burden. We support all vehicle types, including custom-built or accessibility-fitted assets, and provide expert consultancy at no extra cost.</p>
            </div>
        '
    ],
    [
        'title' => 'Guided Lease Selection',
        'body' => '
            <div>
                <p class="mb-0">We work with you to select the right lease structure based on your asset risk profile, cashflow, and operational needs. From vehicle evaluation to lease term comparison, we help you make confident, informed decisions.</p>
            </div>
        '
    ],
    [
        'title' => 'Combined Purchasing Benefits',
        'body' => '
            <div>
                <p class="mb-0">Access government and NFP pricing, plus discounts negotiated by NextFleet. Our combined buying power ensures you get better value at every step of the procurement process.</p>
            </div>
        '
    ],
    [
        'title' => 'Tax-Deductible Options',
        'body' => '
            <p class="mb-0">Lease payments are generally 100% tax-deductible when vehicles are used for business purposes, supporting stronger financial outcomes for your organisation.</p>
        '
    ],
    [
        'title' => 'Risk Mitigation & Flexibility',
        'body' => '
            <p class="mb-0">Eliminate maintenance and residual value risk with fully maintained operating leases. At end of term, choose to extend, purchase, or return the vehicle — whatever works best for you.</p>
        '
    ],
    [
        'title' => 'Cashflow & Budget Control',
        'body' => '
            <p class="mb-0">Avoid large capital outlay and free up working capital with manageable monthly repayments. Choose a fixed cost structure or opt for service management on a recharge basis, tailored to your budgeting approach.</p>
        '
    ],
];
?>

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
          <span>Not-For-Profit Fleets</span>
        </div>
        <h1 class="text-uppercase">
        Fleet expertise tailored to not-for-profit needs
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
        <li class="breadcrumb-item">Not-For-Profit Fleets</li>
      </ol>
    </nav>
  </div>
</section>

<section id="overview" class="bg-light pt-5 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 m-auto text-center">
      <p><strong>Fleet leasing and support designed for impact.</strong></p>
        <p>We understand the demands placed on not-for-profits — and that your resources need to go further. NextFleet provides cost-effective fleet solutions tailored for the NFP sector, including mobility aid fit-outs, grey fleet risk management, and strategic advice at no extra cost. We’ll help you simplify your fleet operations and stay compliant, so you can focus on serving your community.</p>
        <p>Whether you lease or own your vehicles, we offer practical support, preferential pricing, and expert guidance to make managing your fleet easier and more efficient.</p>
        <div class="pb-3">
          <a href="contact.html" class="btn btn-primary text-white fw-bold">
            <div class="d-flex align-items-center gap-2">
              <div class="text-uppercase">Speak to an Expert</div>
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
      <div class="col-sm-12 pt-5 pb-4">
        <h2>Key Features & Services</h2>
      </div>
    </div>
    <div class="row g-5 mb-5">
        <?php foreach ($helpCards as $card): ?>
            <div class="col-sm-4 d-flex">
            <div class="card h-100 w-100">
                <div class="card-body position-relative">
                    <h5 class="card-title mb-3"><?= $card['title']; ?></h5>
                    <?= $card['body']; ?>
                </div>
            </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row">
      <div class="col-sm-12 pb-4">
        <h2>Legal Obligations</h2>
        <strong>Understand your responsibilities. Protect your organisation.</strong>
        <p>If your employees, volunteers, or contractors use vehicles for work, including their own, you may have a legal duty of care. A motor vehicle is considered a workplace, and organisations have an obligation to ensure the safety and wellbeing of all who use them.</p>
        <p>NextFleet helps not-for-profits manage this responsibility with clear policies, training, and compliance support. From grey fleet assessments to driver induction programs and risk audits, we’ll help you stay protected and compliant — with minimal admin.</p>
        <div class="pb-3">
          <a href="contact.html" class="btn btn-primary text-white fw-bold">
            <div class="d-flex align-items-center gap-2">
              <div class="text-uppercase">Book a Free Consultation</div>
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

<section class="border-top"><?php loadComponent("testimonials"); ?></section>


<?php loadComponent("work-with-us");?> <?php loadComponent("footer"); ?>


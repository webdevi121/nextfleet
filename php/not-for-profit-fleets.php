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
                    <div class="mb-6">
                      <?= $card['body']; ?>
                    </div>
                    <div class="mt-3 position-absolute s-0 bottom-0 mb-3">
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
        <?php endforeach; ?>
    </div>
    <div class="row">
      <div class="col-sm-12 pb-4 gap-5 d-grid">
        <div>
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
  </div>
</section>
<section class="bg-light pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-12">
          <h2 class="mb-4">Features and Benefits</h2>
          <h3>Know Your Risks!</h3>
          <p>Grey Fleet – the term grey fleet refers to privately owned vehicles used for business travel. We can help mitigate your risk by implementing a simple and effective plan and, most importantly, provide ongoing compliance management.</p>
          <ul class="custom-bullets">
            <li>A simple yet effective driver induction programme</li>
            <li>Policy review and implementation</li>
            <li>Grey fleet driver acknowledgement covering key risk areas</li>
          </ul>

          <h3>General Fleet Policy Review</h3>
          <p>We will review and support the development of your Fleet Policy to ensure your employees are provided with the right direction and guidance to ensure compliance with appropriate vehicle usage.</p>

          <h3>Training and awareness</h3>
          <p>Let NextFleet help you to take care of your fleet awareness and training programme.</p>
          <ul class="custom-bullets">
            <li>Grey fleet induction programme</li>
            <li>Driver acknowledgement</li>
            <li>Pre-start checklist </li>
          </ul>

          <h3>Compliance</h3>
          <p>Let us help you with any vehicle specialised fit-out and build management requirements you may have.</p>
          <ul class="custom-bullets">
            <li> Specific maintenance management programme</li>
            <li> Compliance inspections</li>
          </ul>

          <h3>Specialised Fleet Assets</h3>
          <p>If you have fleet assets that require a specialised build such as wheelchair or entry access; we can support you with our in-house team of experts. We offer a comprehensive service from build specification right through to ongoing compliance.</p>
          <ul class="custom-bullets">
            <li>Specific maintenance management programme</li>
            <li>Periodical compliance inspections and service</li>
          </ul>
          <p>Non-compliance poses a significant risk to your organisation. It is not only a must-have requirement; it is a moral obligation on your behalf. If you are stretched for resources, your local team at NextFleet are here to help regardless of your fleet size. Call us today for an obligation-free assessment.</p>

          <h3>Risk mitigation</h3>
          <p>Compliance with the legal duty of care obligations</p>

          <h3>Policy administration and management</h3>
          <ul class="custom-bullets">
            <li> Review and implement a grey fleet policy</li>
            <li>Update your general fleet policy</li>
          </ul>

          <h3>Consulting services</h3>
          <ul class="custom-bullets">
            <li>Our in-house team of fleet experts is always willing and available to help</li>
          </ul>
        </div>
    </div>
    </div>
</section>

<section class="border-top"><?php loadComponent("testimonials"); ?></section>


<?php loadComponent("work-with-us");?> <?php loadComponent("footer"); ?>


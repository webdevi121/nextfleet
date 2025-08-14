<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("header");?>
<?php
$accordion_items = [
    [
        'title' => 'Operating Lease',
        'subtitle' => 'Simple leasing, predictable costs.',
        'content' => [
            '<p>With an operating lease, you rent your vehicles from us over a fixed term, with flexible kilometre allowances and maintenance options. Choose from fully-maintained leases, where we manage all servicing and support, or non-maintained options if you prefer to handle the running costs.</p>',
            '<p>At the end of the lease, simply return the vehicle. Operating leases make budgeting easy and reduce capital outlay while keeping your fleet fresh and up to date.</p>',
            '
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
            '
        ]
    ],
    [
        'title' => 'Finance Lease',
        'subtitle' => 'Flexible leasing with future options.',
        'content' => [
            '<p>A finance lease allows you to lease vehicles, plant or equipment with no large upfront cost. You can tailor lease terms to your cash flow, and at the end of the lease, choose to pay the residual and own the asset, refinance the residual, or upgrade.</p>',
            '<p>This option offers flexibility for businesses that want long-term control over their assets. It’s a great fit for companies that prefer ownership at the end of their leasing journey.</p>',
            '
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
            '
        ]
    ],
    [
        'title' => 'Sale & Leaseback',
        'subtitle' => 'Unlock capital, retain control.',
        'content' => [
            '<p>Turn your existing fleet into working capital with a sale and leaseback agreement. We purchase your vehicles at market value and lease them back to you, freeing up funds without disrupting operations or driver access.</p>',
            "<p>This solution improves your balance sheet and liquidity while enabling you to continue using the same assets. It's ideal for businesses looking to restructure assets, reduce capital tied up in depreciating vehicles, or respond to evolving financial pressures.</p>",
            '
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
            '
        ]
    ],
    [
        'title' => 'Commercial Hire Purchase (CHP)',
        'subtitle' => 'Own your fleet, your way.',
        'content' => [
            '<p>With CHP, you hire the vehicle for a fixed term with monthly payments suited to your budget. Ownership transfers to your business once the final payment is made.</p>',
            '<p>This is ideal for businesses that want eventual ownership without an initial capital hit. CHP also allows for interest and depreciation claims, offering potential tax benefits.</p>',
            '
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
            '
        ]
    ],
    [
        'title' => 'End-of-Lease Management',
        'subtitle' => 'Smooth transitions, minimal downtime.',
        'content' => [
            "<p>When lease terms end, we handle the logistics. From vehicle inspection and condition reports to replacement procurement and returns, our end-of-lease management ensures a smooth, hassle-free transition.</p>",
            '<p>We also help plan ahead, tracking lease terms, coordinating returns, and flagging replacements early so you’re never left short. With our support, you can avoid penalty charges, unexpected downtime, and last-minute decisions.</p>',
            '
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
            '
        ]
    ],
    [
        'title' => 'Tax & Accounting Benefits',
        'subtitle' => 'Make leasing work for your bottom line.',
        'content' => [
            "<p>Leasing can provide significant tax advantages and accounting simplicity. With lease payments generally deductible as business expenses, you may reduce taxable income and streamline reporting.</p>",
            "<p>We help you understand the financial treatment of each lease type under current regulations and provide documentation and reporting that supports your finance team. It’s a smarter way to manage assets with predictable costs and strategic value.</p>",
            '
              <div class="col-sm-8 mx-auto">
                <iframe
                  width="100%"
                  height="482"
                  src="https://www.youtube.com/embed/7yyuQLCKsrI?rel=0&modestbranding=1"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                >
                </iframe>
              </div>
            ',
            '
                <div class="spacer"></div>
                <h2>Flexible Leasing, Smarter Fleets</h2>
                <p>Leasing with NextFleet gives your business access to modern vehicles, flexible funding models, and expert support—without the cost and complexity of ownership. Whether you need a single asset or a full fleet solution, we help you stay on the road, in control, and ready to grow.</p>
            ',
            [
                'type' => 'component',
                'name' => 'cta-services',
                'params' => [
                    'text' => "Ready to explore your leasing options?",
                    'buttonText' => 'Talk to a Specialist'
                ]
                ],

        ]
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
          <span>Services</span>
        </div>
        <h1 class="text-uppercase">
          Tailored Leasing Solutions for Every Business
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
        <li class="breadcrumb-item">Leasing Solutions</li>
      </ol>
    </nav>
  </div>
</section>
<section id="overview" class="bg-light pt-5 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 m-auto text-center">
        <p>
        Fleet leasing provides flexibility, cost savings, and risk management benefits, making it an ideal solution whether you need a single vehicle or a full fleet. At NextFleet, our leasing options are designed to support businesses in maintaining modern, efficient fleets without the burden of ownership. We offer both short and long-term commercial lease structures tailored to your operational needs, as well as fully maintained packages that cover servicing, repairs, and roadside assistance. For businesses with specific industry requirements, we also provide custom fleet solutions—ensuring every vehicle is fit for purpose, compliant, and cost-effective.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Tab layout for Desktop view only -->
<section id="services-container">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 pt-10 pb-10">
        <div class="tab-content" id="service-tabContent">
          <h2 class="mb-2">Leasing Options Explained</h2>
          <p>
            From operating leases to finance leases and commercial hire purchase, we break down the options to help you make the right decision for your fleet. Each model offers different advantages, whether you're focused on balance sheet impact, ownership flexibility, or end-of-term outcomes.
          </p>
          <p>We guide you through the pros and cons of each structure, helping you align your leasing strategy with your financial and operational priorities. Our transparent approach ensures you get the right solution from day one, with no surprises later on.</p>

          <div class="accordion" id="fleetAccordion">
                <?php 
                
                    foreach ($accordion_items as $index => $item): 
                    $headingId = 'heading' . $index;
                    $collapseId = 'collapse' . $index;
                    $isFirst = $index === 0;
                ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="<?= $headingId ?>">
                        <button class="accordion-button collapsed <?//= $isFirst ? '' : 'collapsed' ?> fw-bold fs-5" type="button"
                            data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>"
                            aria-expanded="<?= $isFirst ? 'true' : 'false' ?>" aria-controls="<?= $collapseId ?>">
                            <?= $item['title'] ?>
                        </button>
                    </h2>
                    <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?//= $isFirst ? 'show' : '' ?>" 
                        aria-labelledby="<?= $headingId ?>" data-bs-parent="#fleetAccordion">
                        <div class="accordion-body">
                            <strong><?= $item['subtitle'] ?></strong>
                            <?php foreach ($item['content'] as $block): ?>
                                <?php
                                if (is_array($block) && $block['type'] === 'component') {
                                    loadComponent($block['name'], $block['params']);
                                } else {
                                    echo $block;
                                }
                                ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <section>
      <div class="container pb-6">
        <div class="row">
          <div class="col-sm-8 mx-auto">
              <iframe width="100%" height="482"
                src="https://www.youtube.com/embed/7yyuQLCKsrI?rel=0&modestbranding=1"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
              </iframe>
            </div>
        </div>
      </div>
    </section>

<section class="border-top"><?php loadComponent("testimonials"); ?></section>


<?php loadComponent("work-with-us");?> <?php loadComponent("footer"); ?>


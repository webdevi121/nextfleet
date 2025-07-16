<?php
    require_once __DIR__ . '/functions.php';
    ob_start();
?>

<?php loadComponent("header");?>

<?php
$accordion_items = [
    [
        'title' => 'Fleet Optimisation & Cost Control',
        'subtitle' => 'Smarter decisions, stronger savings.',
        'content' => [
            '<p>We help reduce unnecessary expenses by aligning your fleet with the most cost-effective vehicles, fuel strategies, and lifecycle planning. From acquisition through to disposal, every decision is backed by data to maximise value and minimise waste.</p>',
            '<p>Our experts work closely with your team to identify inefficiencies, avoid unnecessary downtime, and develop practical strategies that suit your operational needs. With access to benchmarking data, supplier networks, and strategic insights, we help your fleet perform better, without adding complexity.</p>'
        ]
    ],
    [
        'title' => 'Real-Time Fleet Tracking & Reporting',
        'subtitle' => 'Visibility that drives better decisions.',
        'content' => [
            '<p>Gain complete visibility over your fleet with real-time tracking, advanced telematics, and usage analytics. You’ll know exactly where your vehicles are, how they’re being used, and what it’s costing you - minute to minute, vehicle to vehicle.</p>',
            '<p>Our tailored dashboards and alerts empower you to act fast on performance issues, respond to incidents, and plan more effectively. With on-demand access to your fleet data, you can make smarter decisions that boost productivity, reduce risk, and support long-term savings.</p>'
        ]
    ],
    [
        'title' => 'Compliance & Risk Management',
        'subtitle' => 'Stay compliant, stay protected.',
        'content' => [
            '<p>We help you stay ahead of ever-evolving regulations with proactive compliance support and risk management tools. From registration renewals and CTP insurance to driver behaviour monitoring and safety protocols, we ensure your fleet meets the highest standards.</p>',
            '<p>Our expert team tracks critical compliance items and provides reporting that reduces your administrative load while enhancing oversight. With real-time alerts and incident tracking, we protect your fleet, your drivers, and your business.</p>'
        ]
    ],
    [
        'title' => 'Vehicle Acquisition & Disposal',
        'subtitle' => 'The right vehicles, at the right time.',
        'content' => [
            '<p>Get the most from your fleet by making informed decisions about when to acquire, replace, or retire vehicles. We manage the process from end to end, helping you choose vehicles that align with your operational and financial goals.</p>',
            '<p>When it’s time to dispose of assets, we handle resale and remarketing to ensure maximum value and a smooth transition. Our fleet lifecycle approach ensures your assets deliver value from day one, right through to the last kilometre.</p>'
        ]
    ],
    [
        'title' => 'Sustainability & Emission Reduction',
        'subtitle' => 'Lead the way to a cleaner fleet.',
        'content' => [
            "<p>We help your business reduce its carbon footprint with smart, scalable solutions, whether you're adopting hybrids, EVs, or full fleet decarbonisation. Our sustainability strategies support both compliance and competitive advantage.</p>",
            '<p>From carbon offsetting through our greenDrive program to emissions tracking and EV advisory, we make the shift to lower-impact transport easier. Together, we’ll future-proof your fleet while staying focused on business outcomes.</p>'
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
                <source src="images/nf-video-1.mp4" type="video/mp4">
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
            <h1 class="text-uppercase">Fleet Management Solutions Tailored for Your Business</h1>
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
            <li class="breadcrumb-item">Fleet Management Solutions</li>
          </ol>
        </nav>
      </div>
    </section>
    <section id="overview" class="bg-light pt-5 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 m-auto text-center">
            <p>
              At <strong class="text-primary">NextFleet</strong>, we provide comprehensive fleet management solutions and vehcile leasing solutions designed to optimise operations, reduce costs, and support a sustainable future. As a wholly-owned subsidiary of Mitsubishi Corporation, we combine global strength with local expertise to deliver cutting-edge solutions for businesses of all sizes. 
            </p>
            <p>Whether you're looking for tailored fleet management services, emission reduction strategies, or expert guidance on transitioning to zero-emission vehicles, we have the expertise to support your business at every stage.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- 2 layout for Desktop view only -->
    <section id="services-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 pt-10 pb-10">
                    <div class="tab-content" id="service-tabContent">
                        <h2 class="mb-2">Fleet Management Solutions</h2>
                        <p>Managing a fleet is more than just keeping vehicles on the road - it’s about efficiency, cost control, and ensuring the safety of your drivers. At NextFleet, we offer tailored fleet solutions designed to meet the unique needs of businesses of all sizes, from small enterprises to large corporate fleets.</p>

                        <p>Our data-driven approach provides real-time insights, helping you optimise fleet performance, enhance productivity, and minimise operational costs. With cutting-edge fleet tracking, compliance support, and proactive maintenance, we ensure your vehicles are always road-ready and aligned with industry best practices. Whether you operate a compact fleet or a nationwide network of vehicles, our customised solutions ensure your business stays mobile, efficient, and future-ready.</p>

                        <div class="accordion" id="fleetAccordion">
                            <?php 
                            
                                foreach ($accordion_items as $index => $item): 
                                $headingId = 'heading' . $index;
                                $collapseId = 'collapse' . $index;
                                $isFirst = $index === 0;
                            ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="<?= $headingId ?>">
                                    <button class="accordion-button <?= $isFirst ? '' : 'collapsed' ?> fw-bold fs-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>"
                                        aria-expanded="<?= $isFirst ? 'true' : 'false' ?>" aria-controls="<?= $collapseId ?>">
                                        <?= $item['title'] ?>
                                    </button>
                                </h2>
                                <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= $isFirst ? 'show' : '' ?>" 
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

    <section class="border-top">
      <?php loadComponent("testimonials"); ?>
    </section>


    <!-- Tab layout for Desktop view only -->
    <section class="d-md-none" id="mobile-accordion">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 py-5">
                  <h2 class="mb-3">Our Services</h2>
                  <div class="accordion" id="mobileServicesAccordion"></div>
                </div>
            </div>
        </div>
    </section>




<?php loadComponent("work-with-us");?>
<?php loadComponent("footer"); ?>

<?php
ob_end_flush();
?>
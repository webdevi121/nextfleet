<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("header");?>


<?php
$helpCards = [
    [
        'title' => 'Sale & Leaseback Made Simple',
        'body' => '
            <div>
                <p class="mb-3">We purchase your existing fleet at market value and lease it back to you, freeing up capital while keeping your operations running smoothly.</p>
                <div>
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
        '
    ],
    [
        'title' => 'Unlock Immediate Capital',
        'body' => '
            <div>
                <p class="mb-0">Release cash tied up in owned fleet assets and reinvest it in other areas of your business. No downtime, no disruption,  just smarter capital use.</p>
            </div>
        '
    ],
    [
        'title' => 'Fixed Monthly Costs',
        'body' => '
            <div>
                <p class="mb-0">Consolidate your fleet expenses into one easy-to-manage operating lease. Optional add-ons like maintenance and registration help simplify your budget.</p>
            </div>
        '
    ],
    [
        'title' => 'Risk-Free Residuals',
        'body' => '
            <p class="mb-0">We take on the vehicle resale risk, so you don’t have to. Avoid end-of-lease surprises and enjoy greater financial certainty.</p>
        '
    ],
    [
        'title' => 'Independent Valuation',
        'body' => '
            <p class="mb-0">All vehicles are assessed and valued independently to ensure you receive a fair market rate for your fleet.</p>
        '
    ],
    [
        'title' => 'Full Lifecycle Support',
        'body' => '
            <p class="mb-0">From transition planning to ongoing fleet management, our experts handle the heavy lifting – so you can focus on your core business.</p>
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
      <div class="col-sm-6 d-flex flex-column gap-3">
        <div
          class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
        >
          <img src="images/iconNf.png" alt="icon" width="14" />
          <span>Sales & Leaseback</span>
        </div>
        <h1 class="text-uppercase">
        Smarter Fleet Financing for Business Agility
        </h1>
        <p>Whether you're freeing up capital, optimising lease terms, or managing end-of-life costs, our financing solutions are designed to give your business greater flexibility and control. From Sale & Leaseback arrangements to tailored funding strategies, we help you align your fleet with your financial goals.</p>
        <div>
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



<!-- Tab layout for Desktop view only -->
<section id="services-container">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 pt-5 pb-4">
        <h2>Capital Management Strategies</h2>
        <strong>Strengthen cash flow. Optimise asset performance.</strong>
        <p>Managing fleet assets effectively is a powerful way to improve your organisation’s financial agility. Whether you're seeking to release capital tied up in owned vehicles, reduce unpredictable maintenance costs, or align your lease terms with budget cycles, NextFleet offers tailored capital management solutions that work for your business.</p>
        <p>We help you:</p>
        <ul>
            <li>Unlock working capital through Sale & Leaseback</li>
            <li>Transfer residual risk and reduce end-of-lease surprises</li>
            <li>Convert fleet costs into predictable monthly payments</li>
            <li>Improve budgeting accuracy with fixed operating lease structures</li>
            <li>Access better pricing through consolidated procurement</li>
            <li>Partner with us to build a smarter fleet finance strategy.</li>
        </ul>
        <div class="pb-5">
          <a href="contact.html" class="btn btn-primary text-white fw-bold">
            <div class="d-flex align-items-center gap-2">
              <div class="text-uppercase">Contact Us</div>
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
        <hr>
        <div class="spacer"></div>
        <h2>Fleet Freedom with Sale & Leaseback</h2>
        <strong>Unlock working capital without disrupting your operations.</strong>
        <p>If your business owns its fleet, a Sale & Leaseback arrangement with NextFleet can provide an immediate cash injection while allowing you to continue using your vehicles. We purchase your existing fleet at market value, then lease it back to you under a tailored operating lease, giving you predictable costs, expert fleet support, and zero ownership burden.</p>
        <p>We take on the residual risk and provide flexible lease terms of 12–60 months for passenger vehicles and up to 84 months for commercial and plant assets. Our end-to-end service includes vehicle valuation, ownership transfer, and fleet optimisation – all managed to ensure a seamless transition.</p>
        <div class="pb-5">
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
        <hr>
        <div class="spacer"></div>
        <h2>Key Features & Benefits</h2>
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
  </div>
</section>

<section class="border-top"><?php loadComponent("testimonials"); ?></section>


<?php loadComponent("work-with-us");?> <?php loadComponent("footer"); ?>


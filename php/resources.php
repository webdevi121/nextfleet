<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("header");?>

    <section
      id="banner"
      class="static-banner d-flex align-items-center position-relative bg-black text-white overflow-hidden"
    >
      <div class="overlay-gradient"></div>
        <div class="hero-video">
            <video autoplay muted loop playsinline class="w-100 h-100 object-fit-cover">
                <source src="https://www.nextfleet.net.au/homepage-video.mp4" type="video/mp4">
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
              <span>Resources</span>
            </div>
            <div>
              <h1 class="text-uppercase">Fleet Tools & Insights</h1>
              <p>Access essential fleet tools, driver resources and insights to cut costs and run your fleet more efficiently.</p>
            </div>
            <div>
              <a href="/contact.html" class="btn btn-primary text-white fw-bold">
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
            <li class="breadcrumb-item">Resources</li>
          </ol>
        </nav>
      </div>
    </section>
    <section
      id="content"
      class="container d-flex flex-column gap-7 pt-5 pb-5 content mb-custom"
    >
      <div class="row">
        <div class="col-sm-8">
          <div class="pt-5 pb-5 pe-7 d-flex flex-column gap-3">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>Resources</span>
            </div>
            <h2>Your Hub for Fleet and Driver Support</h2>
            <p>
                Whether you're managing a fleet or driving a company vehicle, we provide expert insights, practical tools, and essential services to keep your vehicles moving efficiently.
            </p>
            <p>Access a range of resources, from operational support and compliance tools to industry insights and news. Whether you need to assess the cost benefits of leasing versus buying, find a service provider, or stay informed about the latest fleet management trends, our comprehensive resource center is here to support you.</p>
            <div>
              <div class="mb-3"><strong>Explore Resources</strong></div>
              <ul class="custom-bullets">
                <li>Resources for Drivers – Tools and support for drivers, including maintenance, roadside assistance, and fuel management.
                </li>
                <li>
                Fleet Managers – Strategic tools and insights to optimize fleet efficiency and reduce costs.
                </li>
                <li>
                NextLevel Insights – Stay updated with the latest industry insights, trends, and best practices.
                </li>
              </ul>
            </div>
            <div>
                <div class="mb-2">Need help managing your vehicle?</div>
                <a href="/contact.html" class="btn btn-primary text-white fw-bold">
                    <div class="d-flex align-items-center gap-2">
                        <div class="text-uppercase">
                            Contact Us  
                        </div>
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
        <div class="col-sm-4">
          <img
            src="images/nf-img-7.jpg"
            alt="Thumbnail"
            class="w-100 rounded-img-custom h-100 object-fit-cover"
          />
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <img
            src="images/nf-img-3.jpg"
            alt="Thumbnail"
            class="w-100 rounded-img-custom h-100 object-fit-cover"
          />
        </div>
        <div class="col-sm-8">
          <div class="pt-5 pb-5 ps-7 d-flex flex-column gap-3">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>Resources for Drivers</span>
            </div>
            <h2>Everything You Need to Stay on the Road</h2>
            <p>
            Welcome to our dedicated portal for drivers, providing essential tools and support to keep you on the road safely and efficiently. Managing a vehicle involves more than just driving - it includes maintenance, compliance, fuel management, and roadside emergencies, and here you can do it all in one place.
            </p>
            <strong>Key Resources for Drivers:</strong>
            <ul class="custom-bullets">
              <li>Accident Management – Step-by-step guidance on reporting incidents, repairs, and insurance claims.
              </li>
              <li>
              Roadside Assistance – 24/7 emergency support for breakdowns, flat tires, battery issues, and more.
              </li>
              <li>
              Maintenance & Repairs – Find authorized service providers and schedule vehicle maintenance.
              </li>
              <li>
              Traffic Infringements & Registration – Stay on top of fines, registration renewals, and compliance requirements.
              </li>
              <li>
              Fuel Cards & E-Tags – Manage fuel expenses and toll payments seamlessly (accepted at BP, Caltex/Ampol, and Shell).
              </li>
              <li>
                Client Portal Access – View odometer readings, vehicle orders, maintenance schedules, and cost analysis.
              </li>
            </ul>
            <div>
                <div class="mb-2">Need help managing your vehicle?</div>
                <a href="/contact.html" class="btn btn-primary text-white fw-bold">
                    <div class="d-flex align-items-center gap-2">
                        <div class="text-uppercase">
                            Contact Us  
                        </div>
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

      <div class="row">
        <div class="col-sm-8">
          <div class="pt-5 pb-5 pe-7 d-flex flex-column gap-3">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>Resources for Fleet Managers</span>
            </div>
            <h2>Tools & Insights to Optimise Your Fleet</h2>
            <p>
              Managing a fleet requires strategic decision-making, cost control, and operational efficiency. Our Fleet Manager resource hub provides valuable insights, tools, and calculators to help you streamline operations and maximise savings.
            </p>
            <strong>Fleet Management Tools & Resources:</strong>
            <ul class="custom-bullets">
                <li>Lease vs. Buy Assessment – Compare the financial benefits of leasing vs. buying your fleet.</li>
                <li>Business Case Builder – A structured guide to developing a case for outsourcing fleet management.</li>
                <li>FMO Capability Assessment – Evaluate if your current Fleet Management Organisation (FMO) is delivering value.</li>
                <li>FMO Transition Checklist – A step-by-step guide to switching FMOs without disrupting operations.</li>
                <li>Service Locator – Find authorized service providers for vehicle servicing, tires, fuel, and repairs.</li>
                <li>Client Portal & Telematics – Real-time tracking, performance monitoring, and fleet analytics.</li>
            </ul>
            <div>
                <div class="mb-2">Looking for something else?</div>
                <a href="/contact.html" class="btn btn-primary text-white fw-bold">
                    <div class="d-flex align-items-center gap-2">
                        <div class="text-uppercase">
                            Contact Us  
                        </div>
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
        <div class="col-sm-4">
          <img
            src="images/nf-img-10.jpg"
            alt="Thumbnail"
            class="w-100 rounded-img-custom h-100 object-fit-cover"
          />
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <img
            src="images/nf-img-9.JPG"
            alt="Thumbnail"
            class="w-100 rounded-img-custom h-100 object-fit-cover"
          />
        </div>
        <div class="col-sm-8">
          <div class="pt-5 pb-5 ps-7 d-flex flex-column gap-3">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>NextLevel Insights</span>
            </div>
            <h2>Industry Trends & Expert Insights</h2>
            <p>
            Stay ahead of the curve with NextLevel Insights, your go-to source for industry updates, expert opinions, and best practices in fleet and novated leasing.
            </p>
            <strong>Latest Articles & Updates:</strong>
            <ul class="custom-bullets">
              <li>Fleet & Novated Leasing Trends – Discover the latest developments and best practices in fleet management.</li>
              <li>Sustainability & Innovation – Learn how companies are integrating eco-friendly solutions, including NextFleet’s greenDrive Carbon Offset Program.</li>
              <li>Case Studies & Success Stories – See how businesses are optimizing their fleets for cost savings and efficiency.</li>
              <li>Regulatory Updates & Compliance – Stay informed on vehicle regulations, government policies, and compliance requirements.</li>
              <li>Technology & Telematics – Explore advancements in fleet tracking, vehicle health monitoring, and driver performance analytics.</li>
            </ul>
            <div>
                <div class="mb-2">Want to stay informed?</div>
                <a href="/nextlevel-insights.html" class="btn btn-primary text-white fw-bold">
                    <div class="d-flex align-items-center gap-2">
                        <div class="text-uppercase">
                            View More
                        </div>
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

    <?php loadComponent("footer"); ?>


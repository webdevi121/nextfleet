<?php
  function loadComponent($component) {
      include __DIR__ . "/components/$component.php";
  }

  // Start output buffering
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
              <span>Tools</span>
            </div>
            <h1 class="text-uppercase">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h1>
            <div>
              <a href="/" class="btn btn-primary text-white fw-bold">
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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Tools</li>
          </ol>
        </nav>
      </div>
    </section>
    <section
      id="content"
      class="container d-flex flex-column gap-7 pt-5 pb-5 content"
    >
      <div class="row">
        <div class="col-sm-8">
          <div class="pt-5 pb-5 pe-7 d-flex flex-column">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2 mb-3"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>Tools & Calculators</span>
            </div>
            <h2>Tools to Help You Make Smarter Fleet Decisions</h2>
            <p>
                Managing a fleet is complex, but our interactive tools make it easier. Whether you’re assessing the value of your current Fleet Management Organisation (FMO), considering a switch, or evaluating leasing vs. buying, we’ve got the tools to help.
            </p>
            
            <p><strong>Explore Our Tools:</strong></p>
            <ul class="custom-bullets">
              <li>Lease vs Buy Calculator – Compare the costs and benefits of leasing versus buying.</li>
              <li>
              Service Locator – Find approved service providers near you.
              </li>
              <li>
              Business Case Builder – Build a strong case for outsourcing fleet management.
              </li>
              <li>Changing FMO Checklist – A step-by-step guide to switching FMOs.</li>
              <li>Assessing Your FMO’s Capability – Determine if your FMO is delivering real value.</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <img
            src="images/dealership-manager-checking-cars-9N5GGV9.jpg"
            alt="Thumbnail"
            class="w-100 rounded-img-custom h-100 object-fit-cover"
          />
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <img
            src="images/car-mechanic-using-digital-tablet-in-repair-garage-5T7VGDC.jpg"
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
              <span>Lease vs Buy Calculator</span>
            </div>
            <h2>Should You Lease or Buy Your Fleet?</h2>
            <strong>One of the most common fleet management questions is whether to lease or buy. While both options have their benefits, leasing offers eight key advantages, including:</strong>
            <ul class="custom-bullets">
              <li>No capital outlay – Free up cash flow for other business needs.
              </li>
              <li>
              Predictable costs – Improve budget forecasting.
              </li>
              <li>
              Flexible terms – Choose lease lengths that suit your needs.
              </li>
              <li>
              No resale risk – Avoid depreciation and resale hassles.
              </li>
              <li>
              Lower purchase costs – Leverage bulk buying power.
              </li>
              <li>
                No maintenance risk – Repairs and servicing are covered.
              </li>
              <li>Hassle-free – We manage all running costs for you.</li>
              <li>Expert support – Access our in-house fleet specialists.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="partners" class="pt-5 pb-5 bg-black text-white position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 z-1 opacity-25 h-100">
        <img src="images/hands-group.jpg" alt="Thumbnail" class="w-100 h-100 object-fit-cover">
        </div>
        <div class="container position-relative z-2">
        <div class="row">
            <div class="col-sm-8">
                <div class="pt-5 pb-5 pe-7 d-flex flex-column gap-3">
                    <div class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2">
                    <img src="images/iconNf.png" alt="icon" width="14">
                    <span>Service Locator</span>
                    </div>
                    <h2>Find the Right Service Provider, Fast</h2>
                    
                    <p>
                    Keeping your fleet running smoothly requires reliable service providers. Our Service Locator helps you quickly find approved maintenance, repair, fuel, and tire providers across Australia.
                    </p>
                    <ul class="custom-bullets">
                        <li>Search by location, service type, or provider name.</li>
                        <li>Ensure your vehicles stay roadworthy with certified technicians.</li>
                        <li>Find fuel card-accepting stations near you.</li>
                    </ul>
                    <div>
                        <a href="/" class="btn btn-primary text-white fw-bold">
                            <div class="d-flex align-items-center gap-2">
                                <div class="text-uppercase">
                                    Find a Provider
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
                <img src="images/partnership-thumbnail.jpg" alt="Thumbnail" class="w-100 rounded-img-custom h-100 object-fit-cover">
            </div>
        </div>
        </div>
        
        </div>
    </section>

    <section
      id="content"
      class="container d-flex flex-column gap-7 pt-5 pb-5 content mb-custom"
    >
      <div class="row">
        <div class="col-sm-4">
          <img
            src="images/controlling-car-with-a-digital-tablet-YWZG4KW.jpg"
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
              <span>Business Case Builder</span>
            </div>
            <h2>Make the Case for Outsourcing Fleet Management</h2>
            <p>
            Still unsure if outsourcing your fleet is the right move? Our Business Case Builder helps you structure a compelling case for transitioning to an FMO, ensuring your stakeholders understand the benefits.
            </p>
            <strong>Key Areas Covered:</strong>
            <ul class="custom-bullets">
              <li>Cost savings potential</li>
              <li>Risk reduction benefits</li>
              <li>Operational efficiencies</li>
              <li>Compliance and reporting improvements</li>
            </ul>
            <div>
                <a href="/" class="btn btn-primary text-white fw-bold">
                    <div class="d-flex align-items-center gap-2">
                        <div class="text-uppercase">
                            Build a Case
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
              <span>Changing FMO Checklist</span>
            </div>
            <h2>Switching FMOs is Easier Than You Think</h2>
            <p>
              Many businesses hesitate to change Fleet Management Organisations due to perceived complexities. However, with the right plan, transitioning to a new provider can be seamless and beneficial.
            </p>
            <strong>This checklist will help you:</strong>
            <ul class="custom-bullets">
                <li>Identify key transition steps</li>
                <li>Avoid common pitfalls</li>
                <li>Minimise downtime and disruptions</li>
                <li>Ensure a smooth migration process</li>
            </ul>
            <div>
                <div class="mb-2">Thinking about switching? Get our handy checklist</div>
                <a href="/" class="btn btn-primary text-white fw-bold">
                    <div class="d-flex align-items-center gap-2">
                        <div class="text-uppercase">
                            Download
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
            src="images/controlling-car-with-a-digital-tablet-YWZG4KW.jpg"
            alt="Thumbnail"
            class="w-100 rounded-img-custom h-100 object-fit-cover"
          />
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <img
            src="images/process-of-buying-new-car-woman-is-signing-documen-CMD5SXH.jpg"
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
              <span>Assessing Your FMO’s Capability</span>
            </div>
            <h2>Are You Getting the Most from Your Fleet Manager?</h2>
            <p>
            Does your current FMO truly add value? If you’re unsure, our FMO Capability Assessment provides a structured approach to evaluating their expertise, commitment, and effectiveness.
            </p>
            <strong>Key questions to ask:</strong>
            <ul class="custom-bullets">
              <li>Are they proactive in cost-saving strategies?</li>
              <li>Do they provide transparent reporting and insights?</li>
              <li>How responsive are they to your business needs?</li>
              <li>Are they leveraging technology for better efficiency?</li>
            </ul>
            <div>
                <div class="mb-2">Time to reassess your FMO? Try our capability assessment</div>
                <a href="/" class="btn btn-primary text-white fw-bold">
                    <div class="d-flex align-items-center gap-2">
                        <div class="text-uppercase">
                            Start Now
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

<?php
  // Get the buffered content
  $output = ob_get_contents();
  ob_end_clean();

  // Save the output to the root directory as index.html
  file_put_contents(__DIR__ . '/../tools.html', $output);

  // Function to copy directories (CSS, fonts, images, etc.)
  function copyFolder($source, $destination) {
      if (!is_dir($source)) return; // Exit if the source folder doesn't exist
      if (!is_dir($destination)) mkdir($destination, 0777, true);

      $files = scandir($source);
      foreach ($files as $file) {
          if ($file === '.' || $file === '..') continue;
          $srcFile = $source . DIRECTORY_SEPARATOR . $file;
          $destFile = $destination . DIRECTORY_SEPARATOR . $file;

          if (is_dir($srcFile)) {
              copyFolder($srcFile, $destFile);
          } else {
              copy($srcFile, $destFile);
          }
      }
  }

  // Copy 'css', 'fonts', and 'images' folders directly into the root directory
  copyFolder(__DIR__ . '/css', __DIR__ . '/../css');
  copyFolder(__DIR__ . '/fonts', __DIR__ . '/../fonts');
  copyFolder(__DIR__ . '/images', __DIR__ . '/../images'); // Copy images folder

  // Output the generated page
  echo "Export completed! Check the root directory.";
  echo $output;
?>
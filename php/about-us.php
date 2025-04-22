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
      <div class="hero-img">
        <img src="images/team-img.jpg" alt="" />
      </div>
      <div class="container position-relative z-3">
        <div class="row">
          <div class="col-sm-6 d-flex flex-column gap-5">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>About Us</span>
            </div>
            <h1 class="text-uppercase">Your Trusted Fleet Management Partner</h1>
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
            <li class="breadcrumb-item">About Us</li>
          </ol>
        </nav>
      </div>
    </section>
    <section id="overview" class="bg-light pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 m-auto text-center">
            <p>
              <strong class="text-primary">NextFleet</strong> is a trusted fleet management organisation backed by Mitsubishi Corporation, Japan’s largest trading and investment company. With offices in Brisbane, Sydney, Perth and Melbourne, we provide end-to-end fleet solutions that reduce costs, improve efficiency, and simplify operations for businesses across Australia.
            </p>
            <ul class="d-flex list-unstyled gap-3 justify-content-center">
              <li><strong>Our Office:</strong></li>
              <li>
                <img src="images/iconLocation.png" alt="icon" width="12" />
                Brisbane
              </li>
              <li>
                <img src="images/iconLocation.png" alt="icon" width="12" />
                Sydney
              </li>
              <li>
                <img src="images/iconLocation.png" alt="icon" width="12" />
                Perth
              </li>
              <li>
                <img src="images/iconLocation.png" alt="icon" width="12" />
                Melbourne
              </li>

            </ul>
          </div>
        </div>
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
              <span>Our Experties</span>
            </div>
            <h2>From Strategic Consulting and Flexible Leasing to Tailored Fleet Management Solutions</h2>
            <p>
            From strategic consulting and flexible leasing to tailored fleet management solutions, we support the entire fleet lifecycle. Our services ensure seamless operations. With 24/7 driver assistance, a nationwide dealership network, and advanced telematics, we help enhance safety, efficiency, and cost control for fleets of any size and industry.
            </p>
          </div>
        </div>
        <div class="col-sm-4">
          <img
            src="images/tranquil-multiracial-colleagues-with-papers-intera-CL786KA.jpg"
            alt="Thumbnail"
            class="w-100 rounded-img-custom h-100 object-fit-cover"
          />
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <img
            src="images/two-consultants-or-managers-in-elegant-suit-with-l-WTDARW2.jpg"
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
              <span>WHY CHOOSE NextFleet?</span>
            </div>
            <h2>Strategic Partner Committed to Optimising Efficiency</h2>
            <p>
            Vehicle fleet leasing is complex - but with NextFleet, you gain a strategic partner committed to optimising efficiency and reducing costs. Our expertise ensures you stay in control while we handle the complexities.

            </p>
            <ul class="custom-bullets">
              <li>Leasing solutions tailored for fleets of all sizes
              </li>
              <li>
              Flexible fleet management options designed for businesses of all sizes across industries, including Government, SMEs and corporate fleets
              </li>
              <li>
              Cutting-edge telematics for improved utilisation and safety
              </li>
              <li>
              Commercial fleet leasing specialists, including trucks, heavy vehicles, and plant & equipment
              </li>
              <li>
              A client-focused approach to risk management and optimisation
              </li>
            </ul>
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
              <span>FUTURE OF FLEETS</span>
            </div>
            <h2>Driving The Future of Fleets</h2>
            <p>
              NextFleet is at the forefront of fleet innovation, embracing CASE
              (Connected, Autonomous, Shared, Electric) technology for a
              low-emission future. With deep industry expertise and a commitment
              to digital transformation, we empower businesses to optimise their
              fleet strategies, delivering better performance, lower risk, and
              long-term savings.
            </p>
          </div>
        </div>
        <div class="col-sm-4">
          <img
            src="images/red-delivery-van-in-a-row-of-white-vans-best-expre-CCAKUW9.jpg"
            alt="Thumbnail"
            class="w-100 rounded-img-custom h-100 object-fit-cover"
          />
        </div>
      </div>
    </section>

    <section id="goals" class="bg-black goals-sections position-relative">
      <div
        class="w-100 h-100 position-absolute top-0 start-0 m-auto d-flex justify-content-center"
      >
        <img
          src="images/building-bg.jpg"
          alt="Background"
          class="w-100 object-fit-cover mw-1600"
        />
      </div>
      <div class="container position-relative">
        <div class="row mb-5">
          <div class="col-12 -mt-custom">
            <div class="rounded-4 bg-white shadow-lg pt-5 pb-5">
              <div class="row">
                <div class="col-10 col-sm-7 m-auto text-center">
                  <h2>
                  Our Connection to Mitsubishi <span class="text-primary">Corporation</span>
                  </h2>
                  <p>
                    As a wholly owned subsidiary of Mitsubishi Corporation,
                    NextFleet benefits from the global expertise and resources
                    of a company operating across virtually every industry.
                  </p>
                  <p>
                    Mitsubishi Corporation’s Automotive & Mobility Group is
                    driving advancements in mobility services, leveraging
                    digital transformation and sustainable practices to support
                    fleet management solutions worldwide.
                  </p>
                  <p>
                    This strategic backing strengthens NextFleet’s ability to
                    provide industry-leading innovation and long-term value for
                    our clients.
                  </p>
                  <a href="/" class="btn btn-primary text-white fw-bold">
                    <div class="d-flex align-items-center gap-2">
                      <div class="text-uppercase">
                        VISIT MITSUBISHI CORPORATION
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
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div
              class="cards text-white p-4 pb-5 border-top border-white border-2 position-relative"
            >
              <div>
                <img
                  src="images/placeholder-1.png"
                  alt=""
                  class="d-block m-auto"
                />
              </div>
              <div class="row gap-2">
                <div class="fs-4 fw-bold text-uppercase">
                  <span class="d-flex gap-2">
                    OUR VISION
                    <div class="flex-grow-1">
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 15 15"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"
                        />
                        <path
                          d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z"
                        />
                      </svg>
                    </div>
                  </span>
                </div>
                <div class="small">
                  Transforming the fleet management services landscape through
                  next-generation technology coupled with unparalleled service
                  and sustainable practices.
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div
              class="cards text-white p-4 pb-5 border-top border-white border-2 position-relative"
            >
              <div>
                <img
                  src="images/placeholder-1.png"
                  alt=""
                  class="d-block m-auto"
                />
              </div>
              <div class="row gap-2">
                <div class="fs-4 fw-bold text-uppercase">
                  <span class="d-flex gap-2">
                    OUR APPROACH
                    <div class="flex-grow-1">
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 15 15"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"
                        />
                        <path
                          d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z"
                        />
                      </svg>
                    </div>
                  </span>
                </div>
                <div class="small">
                With 40+ years of experience across the Group, our in-house experts optimise every stage of the fleet lifecycle—procurement, funding, maintenance, and supplier management while minimising life cycle costs for your fleet.
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div
              class="cards text-white p-4 pb-5 border-top border-white border-2 position-relative"
            >
              <div>
                <img
                  src="images/placeholder-1.png"
                  alt=""
                  class="d-block m-auto"
                />
              </div>
              <div class="row gap-2">
                <div class="fs-4 fw-bold text-uppercase">
                  <span class="d-flex gap-2">
                    OUR PROMISE
                    <div class="flex-grow-1">
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 15 15"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"
                        />
                        <path
                          d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z"
                        />
                      </svg>
                    </div>
                  </span>
                </div>
                <div class="small">
                  We work with our clients to ensure their assets are utilised
                  as effectively and efficiently as possible. We ensure all
                  risks associated with safety and compliance are managed and
                  mitigated, and our team of experts are always on hand ready to
                  help our clients.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 pb-5">
          <div class="col-12">
            <div class="text-center">
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

    <?php loadComponent("team");?>

    <section
      id="partners"
      class="pt-5 pb-5 bg-black text-white position-relative overflow-hidden"
    >
      <div class="position-absolute top-0 start-0 w-100 z-1 opacity-25">
        <img src="images/hands-group.jpg" alt="Thumbnail" class="w-100 h-100" />
      </div>
      <div class="container position-relative z-2">
        <div class="row">
          <div class="col-sm-4">
            <img
              src="images/partnership-thumbnail.jpg"
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
                <span>OUR PARTNERS</span>
              </div>
              <h2>Strong Partnerships Are The Foundation of Our Success</h2>
              <p>
                At NextFleet, strong partnerships are the foundation of our
                success. By collaborating with trusted industry leaders, we
                deliver seamless, end-to-end fleet management solutions at the
                highest standards.
              </p>
              <p>
                Our network spans key sectors, including procurement, industry
                associations, maintenance and repair, bodybuilding, insurance,
                telematics, and finance. These partnerships enable us to
                optimise efficiency, enhance safety, and provide innovative
                mobility solutions for our clients.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 mt-5">
            <?php loadComponent("cta"); ?>
        </div>
      </div>
    </section>

    <?php loadComponent("testimonials");?>
    <?php loadComponent("career");?>
    <?php loadComponent("work-with-us");?>
    <?php loadComponent("footer"); ?>



<?php
  // Get the buffered content
  $output = ob_get_contents();
  ob_end_clean();

  // Save the output to the root directory as index.html
  file_put_contents(__DIR__ . '/../about-us.html', $output);

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
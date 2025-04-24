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
                <source src="images/video_preview_h264.mp4" type="video/mp4">
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
              <span>MyDirve App</span>
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
            <li class="breadcrumb-item">App</li>
          </ol>
        </nav>
      </div>
    </section>
    <section
      id="content"
      class="container d-flex flex-column gap-7 pt-5 content"
    >
      <div class="row">
        <div class="col-sm-7">
          <div class="pt-5 pb-5 pe-7 d-flex flex-column">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2 mb-3"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>App</span>
            </div>
            <h2>myDriver App – Your Fleet at Your Fingertips</h2>
            <p>
                The myDriver App is designed to give your drivers easy access to essential fleet management tools on their mobile devices. Whether you need to track vehicle usage, log service history, or access important fleet updates, the myDriver App makes it simple and convenient.
            </p>
            
            <p><strong>Key Features:</strong></p>
            <ul class="custom-bullets">
              <li>Quick Access – Manage your fleet anytime, anywhere.</li>
              <li>
              Vehicle Insights – Stay informed about your vehicle’s status.
              </li>
              <li>
              Notifications – Receive important alerts and updates.
              </li>
              <li>Service & Maintenance – Log service records effortlessly.</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-5">
          <img
            src="images/iphone-hand.png"
            alt="Thumbnail"
            class="w-100 h-100 object-fit-cover"
          />
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
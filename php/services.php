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
        <img src="images/services-img.jpg" alt="" />
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
            <li class="breadcrumb-item">Services</li>
          </ol>
        </nav>
      </div>
    </section>
    <section id="overview" class="bg-light pt-5 pb-5">
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


    <section id="work-with-us" class="bg-black">
      <div class="container">
        <div class="row">
          <div class="col-6 position-relative">
            <div class="dark-img-thumbnail">
              <img
                src="images/woman-driving-img.jpg"
                alt="thumbnail"
                class="h-100"
              />
            </div>
          </div>
          <div class="col-6 ms-auto pt-6 pb-6 text-white">
            <h2>Why Work With Us?</h2>
            <p>
              At NextFleet, we believe in building strong partnerships,
              delivering exceptional service, and fostering a dynamic,
              future-focused workplace.
            </p>
            <p>
              For our clients, we provide seamless, end-to-end fleet management
              solutions, combining expertise, technology, and innovation to
              drive efficiency and performance.
            </p>
            <p>
              For our partners, we cultivate meaningful, mutually beneficial
              collaborations to enhance industry standards and deliver
              best-in-class solutions.
            </p>
            <p>
              And for our employees, we offer an exciting opportunity to shape
              the future of mobility, working within a diverse, forward-thinking
              team backed by the global strength of Mitsubishi Corporation.
            </p>
            <p>Together, we’re redefining fleet and mobility.</p>
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
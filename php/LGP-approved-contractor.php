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
        <div id="mobile" class="d-block d-md-none">
          <img src="images/nf-img-51.jpg" alt="" class="w-100"/>
        </div>
        <div id="desktop" class="d-none d-md-block">
          <img src="images/nf-img-50.jpg" alt="" />
        </div>
      </div>
      <div class="container position-relative z-3">
        <div class="row">
          <div class="col-sm-6 d-flex flex-column gap-5">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>Insights</span>
            </div>
            <div>
              <h1 class="text-uppercase">NextFleet appointed as LGP approved contractor</h1>
            </div>
            <div class="small text-primary">Posted July 22, 2022</div>
          </div>
        </div>
      </div>
    </section>


    <div class="container pt-5 pb-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="mb-5"><img src="images/nf-img-49.jpg" class="w-100"></div>
                <h2>NextFleet has been appointed as an LGP (Local Government Procurement) approved contractor.</h2>
                <p><b>We are pleased to announce that NextFleet has been appointed as an LGP (Local Government Procurement) approved contractor. </b></p>
                <p><a href="https://lgp.org.au/contracts-and-tenders/fleet-management-services/">Fleet Management Services LGP</a></p>
                <p>The categories are:</p>
                <ul>
                <li>Fleet Consultancy Service</li>
                <li>Fleet Management Services</li>
                <li>Vehicles Leasing Services</li>
                </ul>
                <p>As a quality approved contractor on the LGP panel, quotations are streamlined and transparent, saving you time and money by eliminating the need for organisations and councils to run an RFT process.&nbsp;</p>
                <div><br></div>
                <div>NextFleet, having been selected as one of the Fleet Management and Leasing suppliers for the Local Government and Councils, ensures quality service and better value for the utilisation of your fleet.&nbsp;</div>
                <div><br></div>
                <div>Request for Quotation(RFQ) can be requested directly from LPG’s e-quotation system <a href="https://login.vendorpanel.com.au/Account/Login">VendorPanel</a>.</div>
                <div><br></div>
                <div>If you have any questions on tenders or procurement for your fleet, please <a href="/contact-us">contact us</a>, and our Sales Manager – Business Development (NSW) will support your needs.</div>
            </div>
        </div>
    </div>


<?php loadComponent("footer"); ?>

<?php
  // Get the buffered content
  $output = ob_get_contents();
  ob_end_clean();

  // Save the output to the root directory as index.html
  file_put_contents(__DIR__ . '/../LGP-approved-contractor.html', $output);

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
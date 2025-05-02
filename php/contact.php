<?php
  function loadComponent($component) {
      include __DIR__ . "/components/$component.php";
  }

  // Start output buffering
  ob_start();
?>

<?php loadComponent("header");?>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                <h1 class="text-uppercase">Contact Us</h1>
                <p>We're here to help. For general enquiries, roadside assistance, accidents, or maintenance authorisation, please use the form below or call us at <a href="tel:1800 297 900">1800 297 900</a>.</p>
                
                <div class="ratio ratio-16x9">
                    <iframe 
                    src="https://www.google.com/maps?q=NextFleet,+Level+1+Building+5,+747+Lytton+Rd,+Murarrie+QLD+4172&output=embed"
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                </div>
                <div class="col-6">
                    <form class="p-4 border rounded bg-light">
                    <div class="mb-3">
                        <label for="enquiryType" class="form-label">Enquiry Type <span class="text-danger">*</span></label>
                        <select class="form-select" id="enquiryType" required>
                        <option value="">Please Select One</option>
                        <option>General Enquiry</option>
                        <option>Client Enquiry</option>
                        <option>Finance Enquiry</option>
                        <option>Fleet Management Services</option>
                        <option>Telematics Enquiry</option>
                        <option>Supplier / Dealer Enquiry</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="companyName" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>

                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state">
                        <option value="">Please Select</option>
                        <option>NSW</option>
                        <option>VIC</option>
                        <option>QLD</option>
                        <option>NT</option>
                        <option>SA</option>
                        <option>WA</option>
                        <option>ACT</option>
                        <option>TAS</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="callbackDate" class="form-label">Date for Callback</label>
                        <input type="date" class="form-control" id="callbackDate">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

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
  file_put_contents(__DIR__ . '/../contact.html', $output);

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
<?php
  function loadComponent($component) {
      include __DIR__ . "/components/$component.php";
  }

  // Start output buffering
  ob_start();
?>




    <?php loadComponent("header");?>
    <section id="overview" class="bg-light pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 m-auto text-center">
            <h1>Service Locator</h1>
            <p>
              If you’re looking to find the most convenient place to get your NextFleet vehicle serviced or maintained, or tyres replaced, please use our supplier finder below.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-white border-top pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Designated service suppliers</h2>
                    <ul>
                        <li>
                            For <b aria-label="Text Tyres Press enter to edit" style="position: relative;">Tyres</b> related enquiries, contact any of the below suppliers -
                            <ul>
                            <li aria-label="Text Bridgestone Tyres - 1300 749 378 Press enter to edit" style="position: relative;">Bridgestone Tyres - <a href="tel:1300749378" aria-label="Link 1300 749 378 Press enter to edit">1300 749 378</a></li>
                            <li aria-label="Text Bob Jane T-Marts - 1800 000 364 Press enter to edit" style="position: relative;">Bob Jane T-Marts - <a href="tel:1800000364" aria-label="Link 1800 000 364 Press enter to edit">1800 000 364</a></li>
                            <li aria-label="Text Dunlop Super Dealer - 131 631 Press enter to edit" style="position: relative;">Dunlop Super Dealer - <a href="tel:131631" aria-label="Link 131 631 Press enter to edit">131 631</a></li>
                            <li aria-label="Text Good Year Autocare - 132 343 Press enter to edit" style="position: relative;">Good Year Autocare - <a href="tel:132343" aria-label="Link LINK 132 343 Press enter to edit">132 343</a></li>
                            </ul>
                        </li>
                        <li>
                            For <b>Glass</b> related enquiries, contact any of the below suppliers -
                            <ul>
                            <li>Novus Glass - Repair &amp; Replacement - <a href="tel:132234">132 234</a></li>
                            <li>O’Brien Glass - <a href="tel:1800053598">1800 053 598</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white border-top pt-5 pb-5">
        <div class="container">
            <div class="col-sm-12">
                <h2>Service and General Maintenance</h2>
                <p>For service and general maintenance related enquiries,contact any of the authorised manufacturer service centre using the service Locator below</p>
                <div>
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <!-- Left Column: Filters + Results -->
                            <div class="col-md-4">
                                <h5>Filter by Category</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="filter" id="maintenance" value="maintenance" checked>
                                    <label class="form-check-label" for="maintenance">Maintenance</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="filter" id="tyres" value="tyres">
                                    <label class="form-check-label" for="tyres">Tyres</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="filter" id="glass" value="glass">
                                    <label class="form-check-label" for="glass">Glass</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="filter" id="fuel" value="fuel">
                                    <label class="form-check-label" for="fuel">Fuel Finder</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="filter" id="ev" value="ev">
                                    <label class="form-check-label" for="ev">EV Charging</label>
                                </div>

                                <hr>

                                <h5>Results</h5>
                                <ul class="list-group" id="result-list">
                                    <li class="list-group-item list-group-item-action">
                                        <div class="fw-bold">mycar Tyre & Auto Fountain Gate</div>
                                        <div>Princes Highway, Enter/off Overland Dr, Narre Warren - 2.1 km (5 mins)</div>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        <div class="fw-bold">mycar Tyre & Auto Hallam</div>
                                        <div>208-210 Princes Hwy, Hallam - 5.0 km (8 mins)</div>
                                    </li>
                                </ul>

                            </div>

                            <!-- Right Column: Google Map -->
                            <div class="col-md-8">
                                <div id="map" class="w-100 h-100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php loadComponent("work-with-us");?>
    <?php loadComponent("footer"); ?>




<?php
  // Get the buffered content
  $output = ob_get_contents();
  ob_end_clean();

  // Save the output to the root directory as index.html
  file_put_contents(__DIR__ . '/../services-locator.html', $output);

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


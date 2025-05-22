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
            <div>
              If you’re looking to find the most convenient place to get your NextFleet vehicle serviced or maintained, or tyres replaced, please use our supplier finder below.
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
        <div class="container pt-5 pb-5">
            <div class="row g-5">
                <div class="col-sm-4">
                    <img src="images/nf-img-4.jpg" alt="Thumbnail" class="w-100 rounded-img-custom h-100 object-fit-cover">
                </div>
                <div class="col-sm-8">
                    <div class="pt-5 pb-5 ps-7 d-flex flex-column gap-3">
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
        </div>
    </section>
    <section class="bg-light border-top pt-5 pb-5">
        <div class="overflow-hidden ms-sm-5 me-sm-5">
            <div class="col-sm-12">
                <div class="text-center">
                    <h2>Service and General Maintenance</h2>
                    <p>For service and general maintenance related enquiries, contact any of the authorised manufacturer service centre using the service Locator below</p>
                </div>
                <div>
                    <div class="container-fluid mt-3">
                        <div class="row g-5">
                            <!-- Left Column: Filters + Results -->
                            <div class="col-md-6 border pt-3 pb-3 bg-white d-grid gap-4">

                                <div>
                                    <div class="mb-1 fw-bold ">Select Service</div>
                                    <div class="btn-group d-flex flex-column flex-sm-row w-100" role="group" aria-label="Select Service">
                                        <input type="radio" class="btn-check" name="filter" id="maintenance" value="maintenance" checked>
                                        <label class="btn btn-outline-primary d-flex align-items-center gap-2 justify-content-center" for="maintenance">
                                            <i class="icon-nf-icon-7 fs-4"></i>
                                            <span>Maintenance</span>
                                        </label>

                                        <input type="radio" class="btn-check" name="filter" id="tyres" value="tyres">
                                        <label class="btn btn-outline-primary d-flex align-items-center gap-2 justify-content-center rounded-0" for="tyres">
                                            <i class="icon-nf-icon-8 fs-4"></i>
                                            <span>Tyres</span>
                                        </label>

                                        <input type="radio" class="btn-check" name="filter" id="glass" value="glass">
                                        <label class="btn btn-outline-primary d-flex align-items-center gap-2 justify-content-center rounded-0" for="glass">
                                            <i class="icon-nf-icon-9 fs-4"></i>
                                            <span>Glass</span>
                                        </label>

                                        <input type="radio" class="btn-check" name="filter" id="fuel" value="fuel">
                                        <label class="btn btn-outline-primary d-flex align-items-center gap-2 justify-content-center rounded-0" for="fuel">
                                            <i class="icon-nf-icon-10 fs-4"></i>
                                            <span>Fuel Finder</span>
                                        </label>

                                        <input type="radio" class="btn-check" name="filter" id="ev" value="ev">
                                        <label class="btn btn-outline-primary d-flex align-items-center gap-2 justify-content-center" for="ev">
                                            <i class="icon-nf-icon-11 fs-4"></i>
                                            <span>EV Charging</span>
                                        </label>
                                    </div>

                                </div>

                                <div>
                                    <label for="options" class="form-label fw-bold mb-1">Select Tyres Supplier</label>
                                    <select class="form-select form-select-sm" id="options">
                                        <option value="myCar">myCar</option>
                                        <option value="Bridgestone Tyres">Bridgestone Tyres</option>
                                        <option value="Bob Jane T-Marts">Bob Jane T-Marts</option>
                                        <option value="Dunlop Super Dealer">Dunlop Super Dealer</option>
                                        <option value="Good Year Autocare">Good Year Autocare</option>
                                    </select>
                                </div>

                                <div>
                                    <div class="d-flex align-items-center">
                                        <label for="options" class="form-label fw-bold mb-1">Select Postcode</label>
                                        <div class="ms-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="check2" checked="">
                                                <label class="form-check-label" for="check2">Use Current location</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <input id="postcode" type="text" class="form-control" placeholder="Enter a location" autocomplete="off">
                                    </div>
                                </div>
                                <div>
                                    <button id="searchlocation" type="button" class="btn btn-primary">Search</button>
                                </div>

                                <hr>

                                <div>
                                    <div class="mb-1 fw-bold">Results</div>
                                    <ul class="list-group" id="result-list">
                                        <li class="list-group-item list-group-item-action">
                                            <div class="fw-bold">mycar Tyre & Auto Fountain Gate</div>
                                            <div class="small">Princes Highway, Enter/off Overland Dr, Narre Warren - 2.1 km (5 mins)</div>
                                        </li>
                                        <li class="list-group-item list-group-item-action">
                                            <div class="fw-bold">mycar Tyre & Auto Hallam</div>
                                            <div class="small">208-210 Princes Hwy, Hallam - 5.0 km (8 mins)</div>
                                        </li>
                                        <li class="list-group-item list-group-item-action">
                                            <div class="fw-bold">JAX Tyres & Auto Narre Warren</div>
                                            <div class="small">shop 3/43-45 Vesper Dr, Narre Warren - 2.3 km (5 mins)</div>
                                        </li>
                                        <li class="list-group-item list-group-item-action">
                                            <div class="fw-bold">Bridgestone Select Tyre & Auto Hampton Park</div>
                                            <div class="small">1b/70 Hallam Rd, Hampton Park - 4.3 km (7 mins)</div>
                                        </li>
                                        <li class="list-group-item list-group-item-action">
                                            <div class="fw-bold">Ultra Tune Hampton Park</div>
                                            <div class="small">535 S Gippsland Hwy, Hampton Park - 7.7 km (11 mins)</div>
                                        </li>
                                        <li class="list-group-item list-group-item-action">
                                            <div class="fw-bold">Auto Tyre & Wheels Centre</div>
                                            <div class="small">Unit 1/48 Greens Rd, Dandenong South - 8.0 km (11 mins)</div>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>

                            <!-- Right Column: Google Map -->
                            <div class="col-md-6">
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

    <!-- Google Maps API (replace YOUR_API_KEY with your actual API key) -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5lT2mej3E85ojBD69qVA06lRyICReLaU&callback=initMap">
    </script>
    

    <script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 10,
        center: { lat: -33.8688, lng: 151.2093 }, // Example: Sydney
        });

        // You can add markers and logic here later
    }
    </script>



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


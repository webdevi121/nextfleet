<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("header");?>
    <section id="breadcrumb" class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Service Locator</li>
          </ol>
        </nav>
      </div>
    </section>
    <section
      id="content"
      class="container d-flex flex-column gap-7 pt-5 pb-5 content"
    >
      <div class="row">
        <div class="col-lg-6">
          <div class="pb-5 pe-7 d-flex flex-column">            
            <h1 class="mb-4">Find the Right Service Provider, Fast</h1>
            <p>Keeping your fleet running smoothly requires reliable service providers. Our Service Locator helps you quickly find approved maintenance, repair, fuel, and tire providers across Australia.</p>
            <ul class="custom-bullets">
              <li>Search by location, service type, or provider name.</li>
              <li>Ensure your vehicles stay roadworthy with certified technicians.</li>
              <li>Find fuel card-accepting stations near you.</li>
            </ul>
            <div>
                <a href="contact.html" class="btn btn-primary text-white fw-bold">
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
          <div class="pb-5 d-flex flex-column gap-3">
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
        <div class="col-sm-4">
          <img src="images/nf-img-16.jpg" alt="Thumbnail" class="w-100 rounded-img-custom h-100 object-fit-cover">
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAtJVQvdOqARp6mGa58asHEDvydUEfUcU&callback=initMap">
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

    

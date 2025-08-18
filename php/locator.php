<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php loadComponent("mydrive-header");?>



    <div class="body-content">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 text-center pt-4">
                    <h1 class="mb-0">Service Locator </h1>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container-fluid mt-3">
                <div class="">
                    <!-- Left Column: Filters + Results -->
                    <div class="col-md-12 pb-3 bg-white d-grid gap-4">

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
                    <div class="col-md-12">
                        <div id="map" class="w-100 h-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
loadComponent("mobile-menu", ["active" => "locator"]);
?>

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

<?php loadComponent("mydrive-footer");?>

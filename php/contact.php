<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>


<style>
      #map {
        height: 500px;
        width: 100%;
      }
    </style>

<?php loadComponent("header");?>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="text-uppercase">Contact Us</h1>
                    <p>We're here to help. For general enquiries please use the enquiry form or call us. For urgent support for roadside assistance, accidents, or maintenance authorisation, please call us at <a href="tel:1800 297 900">1800 297 900</a>.</p>
                    <div class="mb-4">
                        <ul class="list-unstyled text-start">
                                        <li class="mb-2 d-flex gap-3">
                                <span><img src="images/icon-location.png" alt="" width="15"></span>
                                <span>Level 1, Building 5/747 Lytton Rd, Murarrie QLD 4172</span>
                            </li>
                                        <li class="mb-2 d-flex gap-3">
                                <span><img src="images/icon-phone.png" alt="" width="15"></span>
                                <span><a href="tel:1800 297 900" class="hover-text-primary">1800 297 900</a></span>
                            </li>
                                        <li class="mb-2 d-flex gap-3">
                                <span><img src="images/icon-mail.png" alt="" width="15"></span>
                                <span><a href="mailto:info@nextfleet.net.au" class="hover-text-primary">info@nextfleet.net.au</a></span>
                            </li>
                        </ul>
                    </div>

                    <ul class="d-sm-flex list-unstyled gap-3">
                    <li><strong>Our Offices:</strong></li>
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
                    <div class="ratio contact-map" onload="initMap()">
                        <div id="map"></div>
                    </div>
                </div>
                <div class="col-sm-6 mt-4 mt-sm-0">
                    <form id="leaseBuyForm" class="p-4 border rounded bg-light">
                    <div class="mb-3">
                        <label for="enquiryType" class="form-label">Enquiry Type <span class="text-danger">*</span></label>
                        <select class="form-select" id="enquiryType" required>
                        <option value="">Please Select One</option>
                        <option>General Enquiry</option>
                        <option>Client Enquiry</option>
                        <option>Leasing / Fleet Management Services Enquiry</option>
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

                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                    </form>
                    <div id="formAlertContainer"></div>

                </div>
            </div>
        </div>
    </section>


    

    <?php loadComponent("footer"); ?>


<!-- Contact Us Page -->
 
    <!-- Google Maps API (replace YOUR_API_KEY with your actual API key) -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAtJVQvdOqARp6mGa58asHEDvydUEfUcU&callback=initMap">
    </script>

<script>

function initMap() {
  const locations = [
    {
      name: "Murarrie Office",
      position: { lat: -27.4606, lng: 153.1006 },
    },
    {
      name: "Brisbane",
      position: { lat: -27.470125, lng: 153.021072 },
    },
    {
      name: "Sydney",
      position: { lat: -33.865143, lng: 151.209900 },
    },
    {
      name: "Perth",
      position: { lat: -31.952240, lng: 115.861400 },
    },
    {
      name: "Melbourne",
      position: { lat: -37.840935, lng: 144.946457 },
    },
  ];

  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: { lat: -27.4606, lng: 133.7751 }, // Rough center of Australia
  });

  const bounds = new google.maps.LatLngBounds();

  locations.forEach((location) => {
    const marker = new google.maps.Marker({
      position: location.position,
      map: map,
      title: location.name,
    });
    bounds.extend(location.position);
  });

  // Automatically adjust the map to show all markers
  map.fitBounds(bounds);

    // Slightly pan up (by moving center north)
    google.maps.event.addListenerOnce(map, 'bounds_changed', function () {
    const center = map.getCenter();
    map.setCenter({
        lat: center.lat() + 8, // Increase latitude to shift map view downward
        lng: center.lng()
    });
    });
}

</script>


<script>
  document.getElementById("leaseBuyForm").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent actual submission
    const container = document.getElementById("formAlertContainer");
    container.innerHTML = `
      <div class="alert alert-success mt-4" role="alert">
        ✅ Thank you! Your response has been received. We'll be in touch shortly.
      </div>
    `;
    // Optionally clear the form:
    this.reset();
    // Scroll to the alert
    container.scrollIntoView({ behavior: "smooth" });
  });
</script>
<?php
require_once __DIR__ . '/functions.php';
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
            <img src="images/nf-img-15.jpg" alt="" class="w-100"/>
          </div>
          <div id="desktop" class="d-none d-md-block">
            <img src="images/nf-img-14.jpg" alt="" />
          </div>
        </div>
      <div class="container position-relative z-3">
        <div class="row">
          <div class="col-sm-6 d-flex flex-column gap-5">
            <div
              class="text-uppercase fw-bold text-primary d-flex align-items-center gap-2"
            >
              <img src="images/iconNf.png" alt="icon" width="14" />
              <span>Lease vs Buy Calculator</span>
            </div>
            <div>
              <h1 class="text-uppercase">Should You Lease or Buy Your Fleet?</h1>
            </div>
            <div>
              <a href="contact.html" class="btn btn-primary text-white fw-bold">
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
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Lease vs Buy Calculator</li>
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
          <div class="pt-5 pb-5 pe-7 d-flex flex-column">            
            <p><strong>One of the most common fleet management questions is whether to lease or buy. While both options have their benefits, leasing offers eight key advantages, including:</strong></p>
            <ul class="custom-bullets">
              <li>No capital outlay – Free up cash flow for other business needs.</li>
              <li>
              Predictable costs – Improve budget forecasting.
              </li>
              <li>
              Flexible terms – Choose lease lengths that suit your needs.
              </li>
              <li>No resale risk – Avoid depreciation and resale hassles.</li>
              <li>Lower purchase costs – Leverage bulk buying power.</li>
              <li>No maintenance risk – Repairs and servicing are covered.</li>
              <li>Hassle-free – We manage all running costs for you.</li>
              <li>Expert support – Access our in-house fleet specialists.</li>
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
        </div>
        <div class="col-lg-6">
        <iframe
                  width="100%"
                  height="482"
                  src="https://www.youtube.com/embed/m1YCS-oT66M?si=ejKIYgcvxv8G25vD"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                >
                </iframe>
        </div>
        </div>
      </div>



      <div class="row">
        <div class="col-sm-7 m-auto mt-4 mt-sm-0">
            <h2>Lease vs Buy Calculator</h2>
            <form class="p-4 border rounded bg-light">
            <div class="mb-4">
                <label for="name" class="form-label fw-bold">How Many Vehicles in your fleet <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="name" required>
            </div>
            <div class="mb-4">
                <label class="form-label fw-bold">
                    What types of vehicles do you use the most for daily operations <span class="text-danger">*</span>
                </label>
                <div class="mb-3">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="vehicleType" id="vehicle1" checked>
                    <label class="form-check-label" for="vehicle1">Passenger</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="vehicleType" id="vehicle2">
                    <label class="form-check-label" for="vehicle2">SUV/GUV</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="vehicleType" id="vehicle3">
                    <label class="form-check-label" for="vehicle3">Light Commercial</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="vehicleType" id="vehicle4">
                    <label class="form-check-label" for="vehicle4">Light & Heavy Trucks</label>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">
                    How many kilometres does a typical vehicle in your fleet average per year? <span class="text-danger">*</span>
                </label>
                <div class="mb-3">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="averageKm" id="km1" checked>
                    <label class="form-check-label" for="km1">15,000 KM and below</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="averageKm" id="km2">
                    <label class="form-check-label" for="km2">25,000 KM</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="averageKm" id="km3">
                    <label class="form-check-label" for="km3">35,000 KM</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="averageKm" id="km4">
                    <label class="form-check-label" for="km4">45,000 KM</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="averageKm" id="km5">
                    <label class="form-check-label" for="km5">55,000 KM and above</label>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label for="enquiryType" class="form-label fw-bold">How often do you replace your vehicles? <span class="text-danger">*</span></label>
                <select id="nfa_replacement" name="nfa_replacement" class="form-select" required title="Please select an item in this list">
                    <option value="" selected disabled>Select</option>
                    <option value="2">2 years</option>
                    <option value="3">3 years</option>
                    <option value="4">4 years</option>
                    <option value="5">5 years</option>
                    <option value="6">6 years</option>
                    <option value="7">7 years</option>
                    <option value="8">8 years</option>
                    <option value="9">9 years</option>
                    <option value="10">10 years+</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="enquiryType" class="form-label fw-bold">What do you typically pay for a new vehicle? <span class="text-danger">*</span></label>
                <select id="nfa_purchase" name="nfa_purchase" class="form-select" required title="Please select an item in this list">
                <option value="" selected disabled>Select</option>
                <option value="15000">$15,000 and under</option>
                <option value="25000">$25,000</option>
                <option value="35000">$35,000</option>
                <option value="45000">$45,000</option>
                <option value="55000">$55,000</option>
                <option value="65000">$65,000</option>
                <option value="75000">$75,000</option>
                <option value="85000">$85,000</option>
                <option value="95000">$95,000</option>
                <option value="105000">$105,000</option>
                <option value="115000">$115,000</option>
                <option value="125000">$125,000</option>
                <option value="135000">$135,000</option>
                <option value="145000">$145,000</option>
                <option value="155000">$155,000</option>
                <option value="165000">$165,000</option>
                <option value="175000">$175,000</option>
                <option value="185000">$185,000</option>
                <option value="195000">$195,000</option>
                <option value="205000">$205,000</option>
                <option value="215000">$215,000</option>
                <option value="225000">$225,000</option>
                <option value="235000">$235,000 &amp; Over</option>
                </select>
            </div>

            <div class="mb-4">
            <label class="form-label fw-bold d-block mb-2">
                Does your company distribute fuel cards for fleet vehicles?
            </label>
            <div class="d-flex gap-3">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="vehicleType" id="yes" checked>
                <label class="form-check-label" for="yes">Yes</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="vehicleType" id="no">
                <label class="form-check-label" for="no">No</label>
                </div>
            </div>
            </div>


            <div class="mb-3">
                <label for="contact-name" class="form-label">Contact Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="contact-name" required>
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Contact Phone <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" placeholder="Provide a telepone number" required>
            </div>
            <button type="submit" class="btn btn-primary text-white">Submit</button>
            </form>

        </div>
      </div>
    </section>

    <?php loadComponent("work-with-us");?>
    <?php loadComponent("footer"); ?>

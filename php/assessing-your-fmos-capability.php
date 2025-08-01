<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

<?php
$checkboxOptions = [
    ['id' => 'check1', 'label' => 'Discounts on vehicles', 'value' => ''],
    ['id' => 'check2', 'label' => 'Fleet efficiency', 'value' => ''],
    ['id' => 'check3', 'label' => 'Reduced operational risk', 'value' => ''],
    ['id' => 'check4', 'label' => 'Reduced operating expenses', 'value' => ''],
    ['id' => 'check5', 'label' => 'Capital optimisation', 'value' => ''],
    ['id' => 'check6', 'label' => 'Lower asset whole of life cost', 'value' => ''],
    ['id' => 'check7', 'label' => 'Support across the entire fleet lifecycle', 'value' => ''],
    ['id' => 'check8', 'label' => 'Tax benefits', 'value' => ''],
    ['id' => 'check9', 'label' => 'No residual value risk', 'value' => ''],
    ['id' => 'check10', 'label' => 'Flexibility', 'value' => ''],
    ['id' => 'check11', 'label' => 'Cashflow and budgeting predictability', 'value' => ''],
    ['id' => 'check12', 'label' => 'Lease term flexibility', 'value' => ''],
];
?>

<?php loadComponent("header");?>
    <section id="breadcrumb" class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Business Case Builder</li>
          </ol>
        </nav>
      </div>
    </section>
    <section id="overview" class="pt-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 m-auto">
            <h1>Are You Getting the Most from Your Fleet Manager?</h1>
            <p>
            Does your current FMO truly add value? If you’re unsure, our FMO Capability Assessment provides a structured approach to evaluating their expertise, commitment, and effectiveness.
            </p>
            <p><strong>Key questions to ask:</strong></p>
            <ul class="custom-bullets">
                <li>Are they proactive in cost-saving strategies?</li>
                <li>Do they provide transparent reporting and insights?</li>
                <li>How responsive are they to your business needs?</li>
                <li>Are they leveraging technology for better efficiency?</li>
            </ul>
            <?php loadComponent("cta-services", [
                'text' => "Time to reassess your FMO?",
                'buttonText' => 'Try our capability assessment',
                'href' => '#content',
            ]); ?>
          </div>
        </div>
      </div>
    </section>

    <section
      id="content"
      class="container d-flex flex-column gap-7 pb-5 content pt-5"
    >
      <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="bg-light rounded border p-4 p-sm-5">
                <form id="leaseBuyForm">            
                    <h2 class="mb-4 h4">How frequently does your FMO contact you without being asked?</h2>
                    <div>
                        <div class="mb-4">
                          <label class="form-label d-block fw-bold">How frequently does your FMO contact you without being asked?</label>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fmoContactFrequency" id="freq1" value="very_frequently">
                            <label class="form-check-label" for="freq1">Very frequently – at least once a week</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fmoContactFrequency" id="freq2" value="frequently">
                            <label class="form-check-label" for="freq2">Frequently – at least once a month</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fmoContactFrequency" id="freq3" value="sometimes">
                            <label class="form-check-label" for="freq3">Sometimes – every other month</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fmoContactFrequency" id="freq4" value="not_often">
                            <label class="form-check-label" for="freq4">Not often – every six months</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fmoContactFrequency" id="freq5" value="hardly_at_all">
                            <label class="form-check-label" for="freq5">Hardly at all – once a year</label>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label d-block fw-bold">Are you satisfied with how frequently your FMO contacts you?</label>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="agreeOption" id="yesOption" value="yes">
                            <label class="form-check-label" for="yesOption">Yes</label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="agreeOption" id="noOption" value="no">
                            <label class="form-check-label" for="noOption">No</label>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label d-block fw-bold">When did your FMO last perform a fleet review?</label>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fleetReview" id="review1" value="frequently">
                            <label class="form-check-label" for="review1">Frequently – quarterly</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fleetReview" id="review2" value="sometimes">
                            <label class="form-check-label" for="review2">Sometimes – bi-annual</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fleetReview" id="review3" value="not_often">
                            <label class="form-check-label" for="review3">Not often – once every 12 months</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fleetReview" id="review4" value="dont_know">
                            <label class="form-check-label" for="review4">What’s a fleet review?</label>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label d-block fw-bold">
                            Did the fleet review minimise your end of lease costs? <br>
                            <small class="text-muted fw-normal">For example, excess km charges, unfair wear and tear.</small>
                          </label>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="minimiseLeaseCosts" id="leaseYes" value="yes">
                            <label class="form-check-label" for="leaseYes">Yes</label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="minimiseLeaseCosts" id="leaseNo" value="no">
                            <label class="form-check-label" for="leaseNo">No</label>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label d-block fw-bold">
                            Have you ever found yourself in a situation where you needed to get a hold of your FMO urgently?<br>
                            <small class="text-muted fw-normal">Were they there when you needed them?</small>
                          </label>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fmoUrgency" id="fmoYes" value="yes">
                            <label class="form-check-label" for="fmoYes">Yes</label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fmoUrgency" id="fmoNo" value="no">
                            <label class="form-check-label" for="fmoNo">No</label>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label d-block fw-bold">Are you being charged consistently against your monthly invoices?</label>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="invoiceConsistency" id="invoiceYes" value="yes">
                            <label class="form-check-label" for="invoiceYes">
                              Yes – my monthly invoices are consistent
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="invoiceConsistency" id="invoiceNo" value="no">
                            <label class="form-check-label" for="invoiceNo">
                              No – they fluctuate across my assets
                            </label>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label d-block fw-bold">
                            Have you ever reached the end of a vehicle lease only to find out that you have been charged for unfair wear and tear or excess km?
                          </label>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="endLeaseCharges" id="leaseChargeYes" value="yes">
                            <label class="form-check-label" for="leaseChargeYes">Yes</label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="endLeaseCharges" id="leaseChargeNo" value="no">
                            <label class="form-check-label" for="leaseChargeNo">No</label>
                          </div>
                        </div>

                        <div class="mb-4">
                          <label class="form-label d-block fw-bold">Would you recommend your FMO to others?</label>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="recommendFMO" id="recommendYes" value="yes">
                            <label class="form-check-label" for="recommendYes">Yes</label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="recommendFMO" id="recommendNo" value="no">
                            <label class="form-check-label" for="recommendNo">No</label>
                          </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h2 class="mb-4 h4">Contact Details</h2>
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="contactName" class="form-label">Contact Name</label>
                            <input type="text" class="form-control" id="contactName" name="contactName">
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="contactEmail" class="form-label">Contact Email</label>
                            <input type="email" class="form-control" id="contactEmail" name="contactEmail">
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="org" class="form-label">Organisation</label>
                            <input type="text" class="form-control" id="org" name="organisation">
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="fmo" class="form-label">Current Fleet Management Organisation (FMO)</label>
                            <input type="text" class="form-control" id="fmo" name="fmo">
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label d-block fw-bold">Receive special offers and communications</label>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="receiveOffers" id="receiveYes" value="yes">
                            <label class="form-check-label" for="receiveYes">Yes</label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="receiveOffers" id="receiveNo" value="no">
                            <label class="form-check-label" for="receiveNo">No</label>
                          </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h2 class="mb-4 h4">Health Check</h2>
                        <p>For a limited time we are offering a free assessment of your fleet. If you would like to know more, or have one of our friendly consultants call you back, please let us know what date and time range suits?</p>
                        <div>
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="callbackDateFrom" class="form-label">Call Back Date From</label>
                            <input type="date" class="form-control" id="callbackDateFrom" name="callbackDateFrom">
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="callbackDateTo" class="form-label">Call Back Date To</label>
                            <input type="date" class="form-control" id="callbackDateTo" name="callbackDateTo">
                          </div>
                        </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div id="formAlertContainer"></div>
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



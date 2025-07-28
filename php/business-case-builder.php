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
            <h1>Make the Case for Outsourcing Fleet Management</h1>
            <p>
                Still unsure if outsourcing your fleet is the right move? Our Business Case Builder helps you structure a compelling case for transitioning to an FMO, ensuring your    stakeholders understand the benefits.
            </p>
            <strong>Key Areas Covered:</strong>
            <ul>
                <li>Cost savings potential</li>
                <li>Risk reduction benefits</li>
                <li>Operational efficiencies</li>
                <li>Compliance and reporting improvements</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section
      id="content"
      class="container d-flex flex-column gap-7 pt-5 pb-5 content"
    >
      <div class="row">
        <div class="col-lg-8">
            <div class="bg-black border p-4 p-sm-5 text-white">
                <form>            
                    <h2 class="mb-4 h4">Which of the following features of outsourcing your fleet would benefit your organisation?</h2>
                    <div>
                        <?php foreach ($checkboxOptions as $option): ?>
                            
                            <div>
                                <label class="form-check-label fw-bold py-2 cursor-pointer" for="<?= htmlspecialchars($option['id']) ?>">
                                    <input class="form-check-input" type="checkbox" 
                                    value="<?= htmlspecialchars($option['value']) ?>" 
                                    id="<?= htmlspecialchars($option['id']) ?>">
                                    <span class="ps-2"><?= htmlspecialchars($option['label']) ?></span>
                                </label>
                            </div>
                            
                        <?php endforeach; ?>
                        <div class="mt-5">
                            <h2 class="h4 mb-3">Please send me my tailored business case</h2>
                            <div class="mb-3">
                                <label for="textInput" class="form-label fw-bold">Contact Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="textInput" placeholder="Enter text">
                            </div>
                            <div class="mb-3">
                                <label for="textInput" class="form-label fw-bold">Contact Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="textInput" placeholder="Enter text">
                            </div>
                            <div class="mb-3">
                                <label for="textInput" class="form-label fw-bold">Organisation <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="textInput" placeholder="Enter text">
                            </div>
                            <div class="mb-3">
                                <label for="selectInput" class="form-label fw-bold">Would you also like to calculate the potential savings across your fleet with our lease versus buy calculator?</label>
                                <select class="form-select" id="selectInput">
                                    <option selected>Select an option</option>
                                    <option value="1">Yes - I'd also like to see my potential savings</option>
                                    <option value="2">No thanks</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Build a Case</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4 d-none d-sm-block">
          <img src="images/nf-img-16.jpg" alt="Thumbnail" class="w-100 rounded-img-custom h-100 object-fit-cover">
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

    
